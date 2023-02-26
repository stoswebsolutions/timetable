<?php include('header.php'); ?>
<?php include('db.php'); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Allotment Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#theoryModal" onclick="theory()">
                    Theory
                </button>
                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#practicalModal" onclick="practical()">
                    Practical
                </button>
                <button type="button" class="btn btn-sm btn-outline-dark" data-bs-toggle="modal" data-bs-target="#classroomsModal" onclick="classroom()">
                    Classrooms
                </button>
            </div>
            <div class="modal fade" id="theoryModal" tabindex="-1" aria-labelledby="theoryModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="theoryModalLabel">Allotment Theory</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="addtheory_action.php" method="POST">
                            <div class="modal-body">
                                <div class="mb-2">
                                    <select class="form-control" id="code" name="code">
                                        <option selected disabled>Select Subject</option>
                                        <?php
                                        $sql = "select * from subject where course='THEORY' order by code asc";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($fetch = $result->fetch_assoc()) {
                                        ?>
                                                <option value="<?= $fetch['code'] ?>"><?= $fetch['name'] ?></option>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <option selected disabled>No Subject</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <select class="form-control" id="faculty_number" name="faculty_number">
                                        <option selected disabled>Select Faculty</option>
                                        <?php
                                        $sql1 = "select * from faculty order by faculty_number asc";
                                        $result1 = $conn->query($sql1);
                                        if ($result1->num_rows > 0) {
                                            while ($fetch1 = $result1->fetch_assoc()) {
                                        ?>
                                                <option value="<?= $fetch1['faculty_number'] ?>"><?= $fetch1['name'] ?></option>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <option selected disabled>No Subject</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Allotment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="practicalModal" tabindex="-1" aria-labelledby="practicalModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="practicalModalLabel">Allotment Practical</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="addpractical_action.php" method="POST">
                            <div class="modal-body">
                                <div class="mb-2">
                                    <select class="form-control" id="code" name="code">
                                        <option selected disabled>Select Subject</option>
                                        <?php
                                        $sql = "select * from subject where isAlloted=1 and course = 'LAB' order by code asc";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($fetch = $result->fetch_assoc()) {
                                        ?>
                                                <option value="<?= $fetch['code'] ?>"><?= $fetch['name'] ?></option>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <option selected disabled>No Subject</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <select class="form-control" id="faculty_number1" name="faculty_number1">
                                        <option selected disabled>Select Faculty</option>
                                        <?php
                                        $sql1 = "select * from faculty order by faculty_number asc";
                                        $result1 = $conn->query($sql1);
                                        if ($result1->num_rows > 0) {
                                            while ($fetch1 = $result1->fetch_assoc()) {
                                        ?>
                                                <option value="<?= $fetch1['faculty_number'] ?>"><?= $fetch1['name'] ?></option>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <option selected disabled>No Subject</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <select class="form-control" id="faculty_number2" name="faculty_number2">
                                        <option selected disabled>Select Faculty</option>
                                        <?php
                                        $sql4 = "select * from faculty order by faculty_number asc";
                                        $result4 = $conn->query($sql4);
                                        if ($result4->num_rows > 0) {
                                            while ($fetch4 = $result4->fetch_assoc()) {
                                        ?>
                                                <option value="<?= $fetch4['faculty_number'] ?>"><?= $fetch4['name'] ?></option>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <option selected disabled>No Subject</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <select class="form-control" id="faculty_number3" name="faculty_number3">
                                        <option selected disabled>Select Faculty</option>
                                        <?php
                                        $sql5 = "select * from faculty order by faculty_number asc";
                                        $result5 = $conn->query($sql5);
                                        if ($result5->num_rows > 0) {
                                            while ($fetch5 = $result5->fetch_assoc()) {
                                        ?>
                                                <option value="<?= $fetch5['faculty_number'] ?>"><?= $fetch5['name'] ?></option>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <option selected disabled>No Subject</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Allotment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="classroomsModal" tabindex="-1" aria-labelledby="classroomsModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="classroomsModalLabel">Allotment Classrooms</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="addclass_action.php" method="POST">
                            <div class="modal-body">
                                <div class="mb-2">
                                    <select class="form-control" id="year" name="year">
                                        <option selected disabled>Select Year</option>
                                        <option value="2">BTech 2nd Year</option>
                                        <option value="3">BTech 3rd Year</option>
                                        <option value="4">BTech 4rth Year</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <select class="form-control" id="name" name="name">
                                        <option selected disabled>Select Classroom</option>
                                        <?php
                                        $sql1 = "select * from classroom where status <> 1 order by classroom_id asc";
                                        $result1 = $conn->query($sql1);
                                        if ($result1->num_rows > 0) {
                                            while ($fetch1 = $result1->fetch_assoc()) {
                                        ?>
                                                <option value="<?= $fetch1['name'] ?>"><?= $fetch1['name'] ?></option>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <option selected disabled>No Subject</option>
                                        <?php
                                        }
                                        ?>
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
    <div id="theoryTable" style="display:block">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Subject Code</th>
                        <th>Subject Name</th>
                        <th>Faculty No</th>
                        <th>Faculty Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql2 = "select * from subject order by code asc";
                    $result2 = $conn->query($sql2);
                    if ($result2->num_rows > 0) {
                        while ($fetch2 = $result2->fetch_assoc()) {
                            if ($fetch2['isAlloted'] == 0 || $fetch2['course'] == 'LAB')
                                continue;
                            $faculty_number = $fetch2['allotTheory'];
                            $sql3 = "select * from faculty where faculty_number = '" . $faculty_number . "' ";
                            $result3 = $conn->query($sql3);
                            if ($result3->num_rows > 0) {
                                $fetch3 = $result3->fetch_assoc();
                    ?>
                                <tr>
                                    <td><?= $fetch2['code'] ?></td>
                                    <td><?= $fetch2['name'] ?></td>
                                    <td><?= $fetch3['faculty_number'] ?></td>
                                    <td><?= $fetch3['name'] ?></td>
                                </tr>
                        <?php
                            }
                        }
                    } else {
                        ?><tr>
                            <td colspan=4 align='center'>No Data</td>
                        </tr><?php
                            }
                                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="practicalTable" style="display:none">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>FacultyNumber</th>
                        <th>FacultyName</th>
                        <th>FacultyNumber</th>
                        <th>FacultyName</th>
                        <th>FacultyNumber</th>
                        <th>FacultyName</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $courses = array('B.Tech 2nd Year', 'B.Tech 3rd Year', 'B.Tech 4rth Year');
                    $sql2 = "select * from subject order by code asc";
                    $result2 = $conn->query($sql2);
                    if ($result2->num_rows > 0) {
                        while ($fetch2 = $result2->fetch_assoc()) {
                            if ($fetch2['isAlloted'] == 0)
                                continue;
                            if (!($fetch2['course'] == "LAB"))
                                continue;
                            $allotTheory = $fetch2['allotTheory'];
                            $allotPractical = $fetch2['allotPractical'];
                            $allotClassrooms = $fetch2['allotClassrooms'];
                            $q1 = "select * from faculty where faculty_number = '" . $allotTheory . "' ";
                            $res1 = $conn->query($q1);
                            $fet1 = $res1->fetch_assoc();
                            $q2 = "select * from faculty where faculty_number = '" . $allotPractical . "' ";
                            $res2 = $conn->query($q2);
                            $fet2 = $res2->fetch_assoc();
                            $q3 = "select * from faculty where faculty_number = '" . $allotClassrooms . "' ";
                            $res3 = $conn->query($q3);
                            $fet3 = $res3->fetch_assoc();
                    ?>
                            <tr>
                                <td><?= $fetch2['code'] ?></td>
                                <td><?= $fetch2['name'] ?></td>
                                <td><?= $fet1['faculty_number'] ?></td>
                                <td><?= $fet1['name'] ?></td>
                                <td><?= $fet2['faculty_number'] ?></td>
                                <td><?= $fet2['name'] ?></td>
                                <td><?= $fet3['faculty_number'] ?></td>
                                <td><?= $fet3['name'] ?></td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?><tr>
                            <td colspan=4 align='center'>No Data</td>
                        </tr><?php
                            }
                                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="classroomsTable" style="display:none">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Classroom</th>
                        <th>Alloted To</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $courses = array('B.Tech 2nd Year', 'B.Tech 3rd Year', 'B.Tech 4rth Year');
                    $sql2 = "select * from classroom where status <> 0 order by classroom_id asc";
                    $result2 = $conn->query($sql2);
                    if ($result2->num_rows > 0) {
                        while ($fetch2 = $result2->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?= $fetch2['name'] ?></td>
                                <td><?= $courses[$fetch2['status'] - 2] ?></td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?><tr>
                            <td colspan=4 align='center'>No Data</td>
                        </tr><?php
                            }
                                ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<script>
    function theory() {
        var theoryTable = document.getElementById("theoryTable");
        theoryTable.style.display = "block";
        var practicalTable = document.getElementById("practicalTable");
        practicalTable.style.display = "none";
        var classroomsTable = document.getElementById("classroomsTable");
        classroomsTable.style.display = "none";
    }

    function practical() {
        var theoryTable = document.getElementById("theoryTable");
        theoryTable.style.display = "none";
        var practicalTable = document.getElementById("practicalTable");
        practicalTable.style.display = "block";
        var classroomsTable = document.getElementById("classroomsTable");
        classroomsTable.style.display = "none";
    }

    function classroom() {
        var theoryTable = document.getElementById("theoryTable");
        theoryTable.style.display = "none";
        var practicalTable = document.getElementById("practicalTable");
        practicalTable.style.display = "none";
        var classroomsTable = document.getElementById("classroomsTable");
        classroomsTable.style.display = "block";
    }
</script>
<?php include('footer.php'); ?>