<?php include('header.php'); ?>
<?php include('db.php'); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Subjects Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#subjectModal">
                    Add Subject
                </button>
            </div>
            <div class="modal fade" id="subjectModal" tabindex="-1" aria-labelledby="subjectModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="subjectModalLabel">Subject Adding</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="addsubject_action.php" method="POST">
                            <div class="modal-body">
                                <div class="mb-2">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Subject Name">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" id="code" name="code" placeholder="Subject Code">
                                </div>
                                <div class="mb-2">
                                    <select class="form-control" id="course" name="course">
                                        <option selected disabled>Select Class</option>
                                        <option value="THEORY">THEORY</option>
                                        <option value="LAB">LAB</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <select class="form-control" id="semister" name="semister">
                                        <option selected disabled>Select Semester</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <select class="form-control" id="department" name="department">
                                        <option selected disabled>Select Department</option>
                                        <option value="Computer Engg.">Computer Engg.</option>
                                        <option value="Electronics Engg.">Electronics Engg.</option>
                                        <option value="Electrical Engg.">Electrical Engg.</option>
                                        <option value="Mechanical Engg.">Mechanical Engg.</option>
                                    </select>
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
                    <th>Code</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Semister</th>
                    <th>Department</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from subject order by code asc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($fetch = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?= $fetch['code'] ?></td>
                            <td><?= $fetch['name'] ?></td>
                            <td><?= $fetch['course'] ?></td>
                            <td><?= $fetch['semister'] ?></td>
                            <td><?= $fetch['department'] ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <button type="button" class="btn btn-sm btn-outline-warning" onclick="edit('<?= $fetch['subject_id'] ?>')">Edit</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="delet('<?= $fetch['subject_id'] ?>')">Delete</button>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?><tr>
                        <td colspan=6 class="text-center">No Data</td>
                    </tr><?php
                        }
                            ?>
            </tbody>
        </table>
    </div>
</main>
<script>
    function edit(id = 0) {
        location.replace("editsubject.php?id=" + id);
    }

    function delet(id = 0) {
        location.replace("deletesubject.php?id=" + id);
    }
</script>
<?php include('footer.php'); ?>