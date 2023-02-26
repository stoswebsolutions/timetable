<?php include('header.php'); ?>
<?php include('db.php'); ?>
<?php
$sql = "select * from subject where subject_id='" . $_GET['id'] . "' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $fetch = $result->fetch_assoc();
} else {
    header('Location: addsubject.php');
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Subjects Details</h1>
    </div>
    <div class="table-responsive">
        <form action="editsubject_action.php" method="POST">
            <div class="mb-2">
                <input type="text" class="form-control" id="name" name="name" value="<?= $fetch['name'] ?>" placeholder="Subject Name">
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" id="code" name="code" value="<?= $fetch['code'] ?>" placeholder="Subject Code">
            </div>
            <div class="mb-2">
                <select class="form-control" id="course" name="course">
                    <option selected disabled>Select Class</option>
                    <option value="THEORY" <?= $fetch['course'] == "THEORY" ? 'selected' : '' ?>>THEORY</option>
                    <option value="LAB" <?= $fetch['course'] == "LAB" ? 'selected' : '' ?>>LAB</option>
                </select>
            </div>
            <div class="mb-2">
                <select class="form-control" id="semister" name="semister">
                    <option selected disabled>Select Semester</option>
                    <option value="3" <?= $fetch['semister'] == "3" ? 'selected' : '' ?>>3</option>
                    <option value="4" <?= $fetch['semister'] == "4" ? 'selected' : '' ?>>4</option>
                    <option value="5" <?= $fetch['semister'] == "5" ? 'selected' : '' ?>>5</option>
                    <option value="6" <?= $fetch['semister'] == "6" ? 'selected' : '' ?>>6</option>
                    <option value="7" <?= $fetch['semister'] == "7" ? 'selected' : '' ?>>7</option>
                    <option value="8" <?= $fetch['semister'] == "8" ? 'selected' : '' ?>>8</option>
                </select>
            </div>
            <div class="mb-2">
                <select class="form-control" id="department" name="department">
                    <option selected disabled>Select Department</option>
                    <option value="Computer Engg." <?= $fetch['department'] == "Computer Engg." ? 'selected' : '' ?>>Computer Engg.</option>
                    <option value="Electronics Engg." <?= $fetch['department'] == "Electronics Engg." ? 'selected' : '' ?>>Electronics Engg.</option>
                    <option value="Electrical Engg." <?= $fetch['department'] == "Electrical Engg." ? 'selected' : '' ?>>Electrical Engg.</option>
                    <option value="Mechanical Engg." <?= $fetch['department'] == "Mechanical Engg." ? 'selected' : '' ?>>Mechanical Engg.</option>
                </select>
            </div>
            <div class="mb-2">
                <input type="hidden" value="<?= $fetch['subject_id'] ?>" name="subject_id" id="subject_id">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</main>
<?php include('footer.php'); ?>