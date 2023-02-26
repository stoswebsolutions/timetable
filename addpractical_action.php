<?php include('db.php'); ?>
<?php
$sql = "update subject set isAlloted=1,allotTheory='" . $_POST['faculty_number1'] . "',allotPractical='" . $_POST['faculty_number2'] . "' ,allotClassrooms='" . $_POST['faculty_number3'] . "' where code='" . $_POST['code'] . "' ";
if ($conn->query($sql) === TRUE) {
    echo "Successfully Alloted";
    header("refresh:3;url=allotment.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("refresh:3;url=allotment.php");
}
?>
