<?php include('db.php'); ?>
<?php
$sql = "update classroom set name='" . $_POST['name'] . "' where classroom_id='" . $_POST['classroom_id'] . "' ";
if ($conn->query($sql) === TRUE) {
    echo "Successfully Update";
    header("refresh:3;url=addclassroom.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("refresh:3;url=addclassroom.php");
}
?>