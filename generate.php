<?php include('header.php'); ?>
<?php include('db.php'); ?>
<?php
if (isset($_GET['success'])) {
    echo "<script type='text/javascript'>alert('Time Table Generated');</script>";
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Time Table Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="algorithm.php">
                    <button type="button" class="btn btn-md btn-outline-success mt-1">
                        Generate Time Table
                    </button>
                </a>
                <form class="m-1" action="generate.php" method="POST">
                    <div class="input-group">
                        <select class="form-control" id="select_faculty" name="select_faculty">
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
                                <option selected disabled>No Faculty</option>
                            <?php
                            }
                            ?>
                        </select>
                        <button type="submit" class="btn btn-outline-primary">Faculty Time Table</button>
                    </div>
                </form>
                <form class="m-1" action="generate.php" method="POST">
                    <div class="input-group">
                        <select class="form-control" name="select_semester" id="select_semester">
                            <option selected disabled>Select Semester</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                        <button type="submit" class="btn btn-outline-warning">Semester Time Table</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <td colspan="8" align="center">
                        <?php
                        $table = null;
                        if (isset($_POST['select_semester'])) {
                            $sem = $_POST['select_semester'];
                            $year = (int)($sem / 2) + $sem % 2;
                            $s1 = "select * from classroom where status = '" . $year . "' ";
                            $r1 = $conn->query($s1);
                            $f1 = $r1->fetch_assoc();
                            echo "Time Table " . $year . "-" . $sem . " sem(" . $f1['name'] . ")";
                            $table = " semester" . $sem . " ";
                        } else if (isset($_POST['select_faculty'])) {
                            $num = $_POST['select_faculty'];
                            $s1 = "select * from faculty where faculty_number = '" . $num . "' ";
                            $r1 = $conn->query($s1);
                            $f1 = $r1->fetch_assoc();
                            echo "Time Table " . $f1['name'];
                            $table = " " . $num . " ";
                        } else {
                            echo "Time Table";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th style="text-align:center">WEEKDAYS</th>
                    <th style="text-align:center">8:00-8:50</th>
                    <th style="text-align:center">8:55-9:45</th>
                    <th style="text-align:center">9:50-10:40</th>
                    <th style="text-align:center">10:45-11:35</th>
                    <th style="text-align:center">11:40-12:30</th>
                    <th style="text-align:center">12:30-1:30</th>
                    <th style="text-align:center">1:30-4:00</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $str = "<br>";
                if (isset($_POST['select_semester']) || isset($_POST['select_faculty'])) {
                    $days = array('MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY');
                    $i = -1;
                    $sql1 = "select * from " . strtolower($table);
                    $result1 = $conn->query($sql1);
                    $sql2 = "select * from subject";
                    $result2 = $conn->query($sql2);
                    if (isset($_POST['select_semester'])) {
                        while ($fetch2 = $result2->fetch_assoc()) {
                            if ($fetch2['isAlloted'] == 1 && $fetch2['semister'] == $_POST['select_semester']) {
                                $str .= $fetch2['code'] . ": " . $fetch2['name'] . ", ";
                                if (isset($fetch2['allotTheory'])) {
                                    $allotTheory = $fetch2['allotTheory'];
                                    $sql3 = "select * from faculty where faculty_number= '" . $allotTheory . "' ";
                                    $result3 = $conn->query($sql3);
                                    $fetch3 = $result3->fetch_assoc();
                                    $str .= " " . $fetch3['dummy'] . ": " . $fetch3['name'] . " ";
                                }
                                if ($fetch2['course'] !== "LAB") {
                                    $str .= "<br>";
                                    continue;
                                } else {
                                    $str .= ", ";
                                }
                                if (isset($fetch2['allotPractical'])) {
                                    $allotPractical = $fetch2['allotPractical'];
                                    $sql3 = "select * from faculty where faculty_number= '" . $allotPractical . "' ";
                                    $result3 = $conn->query($sql3);
                                    $fetch3 = $result3->fetch_assoc();
                                    $str .= " " . $fetch3['dummy'] . ": " . $fetch3['name'] . " ";
                                }
                                if (isset($fetch2['allotClassrooms'])) {
                                    $allotClassrooms = $fetch2['allotClassrooms'];
                                    $sql3 = "select * from faculty where faculty_number= '" . $allotClassrooms . "' ";
                                    $result3 = $conn->query($sql3);
                                    $fetch3 = $result3->fetch_assoc();
                                    $str .= " " . $fetch3['dummy'] . ": " . $fetch3['name'] . "<br>";
                                }
                            }
                        }
                    } else if (isset($_POST['select_faculty'])) {
                        $num = $_POST['select_faculty'];
                        while ($fetch2 = $result2->fetch_assoc()) {
                            if ($fetch2['isAlloted'] == 1 && $fetch2['allotTheory'] == $num) {
                                $str .= $fetch2['code'] . ": " . $fetch2['name'] . " <br>";
                            } else if ($fetch2['isAlloted'] == 1 && isset($fetch2['allotPractical']) && $fetch2['allotPractical'] == $num) {
                                $str .= $fetch2['code'] . ": " . $fetch2['name'] . " <br>";
                            } else if ($fetch2['isAlloted'] == 1 && isset($fetch2['allotClassrooms']) && $fetch2['allotClassrooms'] == $num) {
                                $str .= $fetch2['code'] . ": " . $fetch2['name'] . " <br>";
                            }
                        }
                    }
                    while ($fetch1 = $result1->fetch_assoc()) {
                        $i++;
                ?>
                        <tr>
                            <td><?= $days[$i] ?></td>
                            <td><?= $fetch1['period1'] ?></td>
                            <td><?= $fetch1['period2'] ?></td>
                            <td><?= $fetch1['period3'] ?></td>
                            <td><?= $fetch1['period4'] ?></td>
                            <td><?= $fetch1['period5'] ?></td>
                            <td>LUNCK</td>
                            <td><?= $fetch1['period6'] ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="8"><?= $str ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
</main>
<?php include('footer.php'); ?>