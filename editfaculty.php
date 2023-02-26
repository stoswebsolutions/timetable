<?php include('header.php'); ?>
<?php include('db.php'); ?>
<?php
$sql = "select * from faculty where faculty_id='" . $_GET['id'] . "' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $fetch = $result->fetch_assoc();
} else {
    header('Location: addfaculty.php');
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Faculty Details</h1>
    </div>
    <div class="table-responsive">
        <form action="editfaculty_action.php" method="POST">
            <div class="mb-2">
                <input type="text" class="form-control" id="name" name="name" value="<?= $fetch['name'] ?>" placeholder="Faculty's Name">
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" id="faculty_number" name="faculty_number" value="<?= $fetch['faculty_number'] ?>" placeholder="Faculty ID">
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" id="dummy" name="dummy" value="<?= $fetch['dummy'] ?>" placeholder="Dummy Name">
            </div>
            <div class="mb-2">
                <select class="form-control" id="designation" name="designation">
                    <option selected disabled>Select</option>
                    <option value="Professor" <?= $fetch['designation'] == "Professor" ? 'selected' : '' ?>>Professor</option>
                    <option value="Assistant Professor" <?= $fetch['designation'] == "Assistant Professor" ? 'selected' : '' ?>>Assistant Professor</option>
                    <option value="Associate Professor" <?= $fetch['designation'] == "Associate Professor" ? 'selected' : '' ?>>Associate Professor</option>
                    <option value="Lab Faculty" <?= $fetch['designation'] == "Lab Faculty" ? 'selected' : '' ?>>Lab Faculty</option>
                    <option value="Guest Faculty" <?= $fetch['designation'] == "Guest Faculty" ? 'selected' : '' ?>>Guest Faculty</option>
                </select>
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" id="contact" name="contact" value="<?= $fetch['contact'] ?>" placeholder="9999999999">
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" id="email" name="email" value="<?= $fetch['email'] ?>" placeholder="abc@xyz.com">
            </div>
            <div class="mb-2">
                <input type="hidden" value="<?= $fetch['faculty_id'] ?>" name="faculty_id" id="faculty_id">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</main>
<?php include('footer.php'); ?>