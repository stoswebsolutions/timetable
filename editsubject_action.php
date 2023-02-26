<?php include('db.php'); ?>
<?php
$sql = "update subject set code='" . $_POST['code'] . "', name='" . $_POST['name'] . "', course='" . $_POST['course'] . "', semister='" . $_POST['semister'] . "', department='" . $_POST['department'] . "' where subject_id='" . $_POST['subject_id'] . "' ";
if ($conn->query($sql) === TRUE) {
    echo "Successfully Update";
    header("refresh:3;url=addsubject.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("refresh:3;url=addsubject.php");
}
?>