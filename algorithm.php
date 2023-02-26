<?php
include('db.php');
/**Class to store subject details**/
class Subject
{
    public $code; //Subject code
    public $classes = 0; //No. of classes
    public $semester; //semester of subject
    public $dummy1; //dummy name for subject faculty
    public $dummy2; //dummy name for subject faculty (only for practical subjects)
    public $dummy3; //dummy name for subject faculty (only for practical subjects)
    public $subjectfaculty1; //faculty number 
    public $subjectfaculty2; //faculty number 
    public $subjectfaculty3; //faculty number 
}

/**Class to store faculty details**/
class Teacher
{
    public $id; //faculty number
    public $days = array(); //schedule
    public $classroom_names = array(); //classroom names
}

$subjectslots = array(); //subjects slots for all semesters
$aliasslots = array(); //alias slots corresponding to each subject

$subjects[] = new Subject(); //to store theory subjects
$practicals[] = new Subject(); //to store practical subjects

$count = 0;

/** fetching theory subjects and saving in subjects array*/
$query = "select * from subject order by rand()";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
    if ($row['course'] == 'LAB')
        continue;
    $temp = new Subject();
    $temp->code = $row['code'];
    $temp->semester = $row['semister'];
    $temp->subjectfaculty1 = $row['allotTheory'];
    if (isset($temp->subjectfaculty1)) {
        $teacheralias_query = "select* from faculty where faculty_number='" . $temp->subjectfaculty1 . "' ";
        $res = $conn->query($teacheralias_query);
        $row = $res->fetch_assoc();
        $temp->dummy1 = $row['dummy'];
    }
    $subjects[$count++] = $temp;
}
$subjects_count = $count;
/**Fetching teachers and saving into teachers array*/
$query = "select * from faculty order by rand()";
$result = $conn->query($query);

$teachers[] = new Teacher();
$count = 0;
while ($row = $result->fetch_assoc()) {
    $temp = new Teacher();
    $temp->id = $row['faculty_number'];
    $teachers[$count++] = $temp;
}
$teachers_count = $count;
$r = -1;

/** Genrating timetable for theory courses, with maximum class for each subject equal to 4 */
for ($I = 0; $I < $subjects_count * 4; $I++) {
    $i = $I % $subjects_count;
    $sem = $subjects[$i]->semester;
    $year = ($sem + 1) / 2;
    $classroom_query = "select * from classroom where status='" . $year . "' ";
    $result = $conn->query($classroom_query);
    $row = $result->fetch_assoc();
    $classroom = $row['name'];
    for ($j = 0; $j < 30; $j++) {
        $subject_teacher;
        for ($z = 0; $z < $count; $z++) {
            if ($teachers[$z]->id == $subjects[$i]->subjectfaculty1) {
                $tindex = $z;
                break;
            }
        }
        if ($j % 6 == 0)
            $r++;
        if (isset($subjectslots[$sem][$r % 6][$j % 5])) {
            //check if subjectslot is empty
            continue;
        } else if (isset($teachers[$tindex]->days[$sem % 2][$r % 6][$j % 5])) {
            //check if subject teacher is free
            continue;
        } else {
            //check if existing in same day
            $already = false;
            for ($z = 0; $z < 5; $z++) {
                if (isset($subjectslots[$sem][$r % 6][$z])) {
                    if ($z == ($j % 5)) {
                        continue;
                    }
                    if ($subjectslots[$sem][$r % 6][$z] == $subjects[$i]->code) {
                        $already = true;
                    }
                }
            }
            if ($already) {
                continue;
            }
            // set subject
            $subjects[$i]->classes++;
            $subjectslots[$sem][$r % 6][$j % 5] = $subjects[$i]->code;
            $aliasslots[$sem][$r % 6][$j % 5][0] = $subjects[$i]->dummy1;
            $teachers[$tindex]->days[$sem % 2][$r % 6][$j % 5] = $subjects[$i]->code;
            $teachers[$tindex]->classroom_names[$sem % 2][$r % 6][$j % 5] = $classroom;
            break;
        }
    }
}
/**********************check for empty slots in semester's timetable*******************************/
for ($i = 3; $i < 9; $i += 2) {
    for ($k = 0; $k < 6; $k++) {
        for ($j = 0; $j < 5; $j++) {

            if (isset($subjectslots[$i][$k][$j % 5])) {
            } else {
                $subjectslots[$i][$k][$j % 5] = "-";
                $aliasslots[$i][$k][$j % 5][0] = "-";
            }
        }
    }
}
/**********************check for empty slots in teacher's timetable*******************************/
for ($i = 0; $i < $count; $i++) {
    for ($k = 0; $k < 6; $k++) {
        for ($j = 0; $j < 5; $j++) {

            if (isset($teachers[$i]->days[1][$k][$j])) {
            } else {
                $teachers[$i]->days[1][$k][$j] = "-";
                $teachers[$i]->classroom_names[1][$k][$j] = "-";
            }
        }
    }
}
/**Fetching info of practical courses **/

$query = "select * from subject";
$result = $conn->query($query);
$count = 0;
while ($row = $result->fetch_assoc()) {
    if (!($row['course'] == 'LAB'))
        continue;
    $temp = new Subject();
    $temp->code = $row['code'];
    $temp->semester = $row['semister'];
    $temp->subjectfaculty1 = $row['allotTheory'];
    $temp->subjectfaculty2 = $row['allotPractical'];
    $temp->subjectfaculty3 = $row['allotClassrooms'];
    $teacheralias_query = "select * from faculty where faculty_number='" . $temp->subjectfaculty1 . "' ";
    $result = $conn->query($teacheralias_query);
    $row = $result->fetch_assoc();
    $temp->dummy1 = $row['dummy'];

    $teacheralias_query = "select * from faculty where faculty_number='" . $temp->subjectfaculty2 . "' ";
    $result = $conn->query($teacheralias_query);
    $row = $result->fetch_assoc();
    $temp->dummy2 = $row['dummy'];

    $teacheralias_query = "select * from faculty where faculty_number='" . $temp->subjectfaculty3 . "' ";
    $result = $conn->query($teacheralias_query);
    $row = $result->fetch_assoc();
    $temp->dummy3 = $row['dummy'];

    $practicals[$count++] = $temp;
}
for ($I = 0; $I < 2 * $count; $I++) {
    $i = $I % $count;
    $sem = $practicals[$i]->semester;
    $tindex = -1;
    $tindex2 = -1;
    $tindex3 = -1;
    for ($z = 0; $z < $teachers_count; $z++) {
        if (isset($practicals[$i]->subjectfaculty1)) {
            if ($teachers[$z]->id == $practicals[$i]->subjectfaculty1) {
                $tindex = $z;
            }
        }
        if (isset($practicals[$i]->subjectfaculty2)) {
            if ($teachers[$z]->id == $practicals[$i]->subjectfaculty2) {
                $tindex2 = $z;
            }
        }
        if (isset($practicals[$i]->subjectfaculty3)) {
            if ($teachers[$z]->id == $practicals[$i]->subjectfaculty3) {
                $tindex3 = $z;
            }
        }
    }

    //checking if all three teachers are free
    for ($j = 0; $j < 6; $j++) {
        if (isset($subjectslots[$sem][$j][5])) {
            continue;
        } else if (
            isset($teachers[$tindex]->days[$sem % 2][$j][5]) || isset($teachers[$tindex2]->days[$sem % 2][$j][5]) ||
            isset($teachers[$tindex3]->days[$sem % 2][$j][5])
        ) {
            continue;
        } else {
            //if free then assign practical
            $practicals[$i]->classes++;
            $subjectslots[$sem][$j][5] = $practicals[$i]->code;
            $aliasslots[$sem][$j][5][0] = $practicals[$i]->dummy1;
            $aliasslots[$sem][$j][5][1] = $practicals[$i]->dummy2;
            $aliasslots[$sem][$j][5][2] = $practicals[$i]->dummy3;
            $teachers[$tindex]->days[$sem % 2][$j][5] = $practicals[$i]->code;
            $teachers[$tindex2]->days[$sem % 2][$j][5] = $practicals[$i]->code;
            $teachers[$tindex3]->days[$sem % 2][$j][5] = $practicals[$i]->code;
            break;
        }
    }
}

/**checks for empty slot**/
for ($i = 3; $i < 9; $i += 2) {
    for ($j = 0; $j < 6; $j++) {
        if (isset($subjectslots[$i][$j][5])) {
        } else {
            $subjectslots[$i][$j][5] = '-';
            $aliasslots[$i][$j][5][0] = '-';
            $aliasslots[$i][$j][5][1] = '-';
            $aliasslots[$i][$j][5][2] = '-';
        }
    }
}

for ($i = 0; $i < $teachers_count; $i++) {
    for ($k = 0; $k < 6; $k++) {

        if (isset($teachers[$i]->days[1][$k][5])) {
        } else {
            $teachers[$i]->days[1][$k][5] = "-";
        }
    }
}


/******Saving semesters timetable into database*****/
$days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
for ($i = 3; $i < 9; $i += 2) {
    $database_name = " semester" . $i . " ";
    for ($j = 0; $j < 6; $j++) {
        $query1 = "UPDATE" . $database_name . " SET  period1= '" . $subjectslots[$i][$j][0] . "<br>" . $aliasslots[$i][$j][0][0] . "',
period2='" . $subjectslots[$i][$j][1] . "<br>" . $aliasslots[$i][$j][1][0] . "', 
period3='" . $subjectslots[$i][$j][2] . "<br>" . $aliasslots[$i][$j][2][0] . "',
period4='" . $subjectslots[$i][$j][3] . "<br>" . $aliasslots[$i][$j][3][0] . "', 
period5='" . $subjectslots[$i][$j][4] . "<br>" . $aliasslots[$i][$j][4][0] . "',
period6='" . $subjectslots[$i][$j][5] . "<br>" . $aliasslots[$i][$j][5][0] . ", " . $aliasslots[$i][$j][5][1] . ", " . $aliasslots[$i][$j][5][2] . "'
 WHERE day='" . $days[$j] . "' ";
        $q1 = $conn->query($query1);
    }
}
/******Saving teachers timetable into database*****/
for ($i = 0; $i < $teachers_count; $i++) {
    $database_name = " " . strtolower($teachers[$i]->id) . " ";
    for ($j = 0; $j < 6; $j++) {
        $query2 = "UPDATE" . $database_name . " SET  period1= '" . $teachers[$i]->days[1][$j][0] . "<br>" . $teachers[$i]->classroom_names[1][$j][0] . "',
period2='" . $teachers[$i]->days[1][$j][1] . "<br>" . $teachers[$i]->classroom_names[1][$j][1] . "', 
period3='" . $teachers[$i]->days[1][$j][2] . "<br>" . $teachers[$i]->classroom_names[1][$j][2] . "',
period4='" . $teachers[$i]->days[1][$j][3] . "<br>" . $teachers[$i]->classroom_names[1][$j][3] . "', 
period5='" . $teachers[$i]->days[1][$j][4] . "<br>" . $teachers[$i]->classroom_names[1][$j][4] . "',
period6='" . $teachers[$i]->days[1][$j][5] . "'
 WHERE day='" . $days[$j] . "' ";
        $q2 = $conn->query($query2);
    }
}

/******redirect back to generate timetable **/
header("Location:generate.php?success=true");
