<?php include('db.php'); ?>
<?php
$sql = "update classroom set status='" . $_POST['year'] . "' where name='" . $_POST['name'] . "' ";
if ($conn->query($sql) === TRUE) {
    echo "Successfully Alloted";
    header("refresh:3;url=allotment.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("refresh:3;url=allotment.php");
}
?>
