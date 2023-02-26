<?php include('db.php'); ?>
<?php
$sql = "update faculty set faculty_number='" . $_POST['faculty_number'] . "', name='" . $_POST['name'] . "', dummy='" . $_POST['dummy'] . "', designation='" . $_POST['designation'] . "', contact='" . $_POST['contact'] . "', email='" . $_POST['email'] . "' where faculty_id='" . $_POST['faculty_id'] . "' ";
if ($conn->query($sql) === TRUE) {
    echo "Successfully Update";
    header("refresh:3;url=addfaculty.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("refresh:3;url=addfaculty.php");
}
?>