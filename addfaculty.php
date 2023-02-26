<?php include('header.php'); ?>
<?php include('db.php'); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Faculty Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#facultyModal">
                    Add Faculty
                </button>
            </div>
            <div class="modal fade" id="facultyModal" tabindex="-1" aria-labelledby="facultyModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="facultyModalLabel">Faculty Registration</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="addfaculty_action.php" method="POST">
                            <div class="modal-body">
                                <div class="mb-2">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Faculty's Name">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" id="faculty_number" name="faculty_number" placeholder="Faculty ID">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" id="dummy" name="dummy" placeholder="Dummy Name">
                                </div>
                                <div class="mb-2">
                                    <select class="form-control" id="designation" name="designation">
                                        <option selected disabled>Select</option>
                                        <option value="Professor">Professor</option>
                                        <option value="Assistant Professor">Assistant Professor</option>
                                        <option value="Associate Professor">Associate Professor</option>
                                        <option value="Lab Faculty">Lab Faculty</option>
                                        <option value="Guest Faculty">Guest Faculty</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" id="contact" name="contact" placeholder="9999999999">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="abc@xyz.com">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Faculty No</th>
                    <th>Name</th>
                    <th>Alias</th>
                    <th>Designation</th>
                    <th>Contact No</th>
                    <th>Email ID</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from faculty order by faculty_number asc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($fetch = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?= $fetch['faculty_number'] ?></td>
                            <td><?= $fetch['name'] ?></td>
                            <td><?= $fetch['dummy'] ?></td>
                            <td><?= $fetch['designation'] ?></td>
                            <td><?= $fetch['contact'] ?></td>
                            <td><?= $fetch['email'] ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <button type="button" class="btn btn-sm btn-outline-warning" onclick="edit('<?= $fetch['faculty_id'] ?>')">Edit</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="delet('<?= $fetch['faculty_id'] ?>')">Delete</button>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?><tr>
                        <td colspan=7 class="text-center">No Data</td>
                    </tr><?php
                        }
                            ?>
            </tbody>
        </table>
    </div>
</main>
<script>
    function edit(id = 0) {
        location.replace("editfaculty.php?id=" + id);
    }

    function delet(id = 0) {
        location.replace("deletefaculty.php?id=" + id);
    }
</script>
<?php include('footer.php'); ?>