<?php include('header.php'); ?>
<?php include('db.php'); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Class room Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#classroomModal">
                    Add Classroom
                </button>
            </div>
            <div class="modal fade" id="classroomModal" tabindex="-1" aria-labelledby="classroomModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="classroomModalLabel">Classroom Adding</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="addclassroom_action.php" method="POST">
                            <div class="modal-body">
                                <div class="mb-2">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Classroom Name">
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
                    <th>Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from classroom order by name asc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($fetch = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?= $fetch['name'] ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <button type="button" class="btn btn-sm btn-outline-warning" onclick="edit('<?= $fetch['classroom_id'] ?>')">Edit</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="delet('<?= $fetch['classroom_id'] ?>')">Delete</button>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?><tr>
                        <td colspan=2 class="text-center">No Data</td>
                    </tr><?php
                        }
                            ?>
            </tbody>
        </table>
    </div>
</main>
<script>
    function edit(id = 0){
        location.replace("editclassroom.php?id=" + id);
    }
    function delet(id = 0){
        location.replace("deleteclassroom.php?id=" + id);
    }
</script>
<?php include('footer.php'); ?>