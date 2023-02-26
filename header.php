<?php
ob_start();
session_start();
if (isset($_SESSION["login_id"])) {
} else {
    header('Location: index.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Time Table</title>
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.3/examples/dashboard/dashboard.css" rel="stylesheet">
    <!-- Custom styles s2s -->
    <link href="s2sstyle.css" rel="stylesheet">
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Time Table</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="addfaculty.php">Add Faculty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="addsubject.php">Add Subject</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="addclassroom.php">Add Class Room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="allotment.php">Allotment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="generate.php">Generate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Sign out</a>
                        </li>
                    </ul>
                </div>
            </nav>