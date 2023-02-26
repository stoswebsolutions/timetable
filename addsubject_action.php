<?php include('db.php'); ?>
<?php
$sql = "insert into subject (code, name, course, semister, department) values ('" . $_POST['code'] . "', '" . $_POST['name'] . "', '" . $_POST['course'] . "', '" . $_POST['semister'] . "', '" . $_POST['department'] . "')";
if ($conn->query($sql) === TRUE) {
    echo $sql;
    header("refresh:3;url=addsubject.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("refresh:3;url=addsubject.php");
}
?>
