<?php include('header.php'); ?>
<?php include('db.php'); ?>
<?php
$sql = "select * from classroom where classroom_id='" . $_GET['id'] . "' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $fetch = $result->fetch_assoc();
} else {
    header('Location: addclassroom.php');
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Class room Details</h1>
    </div>
    <div class="table-responsive">
        <form action="editclassroom_action.php" method="POST">
            <div class="mb-2">
                <input type="text" class="form-control" id="name" name="name" value="<?= $fetch['name'] ?>" placeholder="Classroom Name">
            </div>
            <div class="mb-2">
                <input type="hidden" value="<?= $fetch['classroom_id'] ?>" name="classroom_id" id="classroom_id">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</main>
<?php include('footer.php'); ?>