<?php include('db.php'); ?>
<?php
ob_start();
session_start();
$sql = "select * from login where email='" . $_POST['email'] . "' and password='" . $_POST['password'] . "' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $fetch = $result->fetch_assoc();
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['login_id'] = $fetch['login_id'];
    header('Location: home.php');
} else {
    header('Location: index.php?status=true');
}
