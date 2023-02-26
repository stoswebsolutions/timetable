<?php include('db.php'); ?>
<?php
$days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
$sql = "insert into faculty (faculty_number, name, dummy, designation, contact, email) values ('" . $_POST['faculty_number'] . "', '" . $_POST['name'] . "', '" . $_POST['dummy'] . "', '" . $_POST['designation'] . "', '" . $_POST['contact'] . "', '" . $_POST['email'] . "')";
if ($conn->query($sql) === TRUE) {
    $sql = "create table " . strtolower($_POST['faculty_number']) . " (
        day VARCHAR(10) PRIMARY KEY, 
        period1 VARCHAR(30),
        period2 VARCHAR(30),
        period3 VARCHAR(30),
        period4 VARCHAR(30),
        period5 VARCHAR(30),
        period6 VARCHAR(30)
        )";
    $conn->query($sql);
    for ($i = 0; $i < 6; $i++) {
        $day = $days[$i];
        $sql1 = "insert into " . strtolower($_POST['faculty_number']) . " VALUES('$day','','','','','','')";
        $conn->query($sql1);
    }
    echo "Successfully Added";
    header("refresh:3;url=addfaculty.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("refresh:3;url=addfaculty.php");
}
?>
