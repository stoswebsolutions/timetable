<?php include('db.php'); ?>
<?php
$sql = "insert into classroom (name,status) values ('" . $_POST['name'] . "',0)";
if ($conn->query($sql) === TRUE) {
    echo "Successfully Added";
    header("refresh:3;url=addclassroom.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("refresh:3;url=addclassroom.php");
}
?>
