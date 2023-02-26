<?php include('db.php'); ?>
<?php
$sql = "delete from classroom where classroom_id='" . $_GET['id'] . "' ";
if ($conn->query($sql) === TRUE) {
    echo "Successfully Deleted";
    header("refresh:3;url=addclassroom.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("refresh:3;url=addclassroom.php");
}
?>