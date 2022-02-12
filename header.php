<?php
session_start();
if (!isset($_SESSION['IS_LOGIN'])) {
    header('location:loginss.php');
    die();
}
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!-- for table link style -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.11.3/datatables.min.css" />
    <link rel="stylesheet" href="/css/signups.css">
    <link rel="stylesheet" href="/css/logins.css">
    <!-- LINK FOR ICON GOOGLE nasa google notes ko yung ibang refference-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/about.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Boxicons CDN Link ito yung sa sideback icons-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="style" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link href='http://cdn.datatable.net/1.10.19/css/dataTables.bootstrap4.min.css' rel='stylesheet'>
    <meta name=" viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/sweetalert.min.js"></script>

</head>
<!-- // ito yung dating sidebar -->

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bx-search-alt-2 icon'></i>
            <div class="logo_name">Tracking</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <!-- <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li> -->
            <?php if ($_SESSION['offices'] == 'Admin') { ?>
                <li>
                    <a href="table.php">
                        <i class='bx bx-grid-alt'></i>
                        <span class="links_name">Dashboard</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>
                <li>
                    <a href="index.php">
                        <i class='bx bx-add-to-queue'></i>
                        <span class="links_name">Track</span>
                    </a>
                    <span class="tooltip">Track</span>
                </li>
                <li>
                    <a href="ADMINupdatetrack.php">
                        <i class='bx bx-chat'></i>
                        <span class="links_name">Update</span>
                    </a>
                    <span class="tooltip">Update</span>
                </li>
            <?php }
            if ($_SESSION['offices'] == 'CS') { ?>
                <li>
                    <a href="cs.php">
                        <i class='bx bx-add-to-queue'></i>
                        <span class="links_name">Track</span>
                    </a>
                    <span class="tooltip">Track</span>
                </li>
                <li>
                    <a href="CSupdatetrack.php">
                        <i class='bx bx-chat'></i>
                        <span class="links_name">Update</span>
                    </a>
                    <span class="tooltip">Update</span>
                </li>
            <?php }
            if ($_SESSION['offices'] == 'VPRE') { ?>
                <li>
                    <a href="vpre.php">
                        <i class='bx bx-add-to-queue'></i>
                        <span class="links_name">Track</span>
                    </a>
                    <span class="tooltip">Track</span>
                </li>
                <li>
                    <a href="VPREupdatetrack.php">
                        <i class='bx bx-chat'></i>
                        <span class="links_name">Update</span>
                    </a>
                    <span class="tooltip">Update</span>
                </li>
            <?php }
            if ($_SESSION['offices'] == 'CAH') { ?>
                <li>
                    <a href="cah.php">
                        <i class='bx bx-add-to-queue'></i>
                        <span class="links_name">Track</span>
                    </a>
                    <span class="tooltip">Track</span>
                </li>
            <?php }
            if ($_SESSION['offices'] == 'CBA') { ?>
                <li>
                    <a href="cba.php">
                        <i class='bx bx-add-to-queue'></i>
                        <span class="links_name">Track</span>
                    </a>
                    <span class="tooltip">Track</span>
                </li>
                <li>
                    <a href="CBAupdatetrack.php">
                        <i class='bx bx-chat'></i>
                        <span class="links_name">Update</span>
                    </a>
                    <span class="tooltip">Update</span>
                </li>
            <?php }

            if ($_SESSION['offices'] == 'Accounting') { ?>
                <li>
                    <a href="accounting.php">
                        <i class='bx bx-add-to-queue'></i>
                        <span class="links_name">Track</span>
                    </a>
                    <span class="tooltip">Track</span>
                </li>
                <li>
                    <a href="ACCupdatetrack.php">
                        <i class='bx bx-chat'></i>
                        <span class="links_name">Update</span>
                    </a>
                    <span class="tooltip">Update</span>
                </li>
            <?php } ?>

            <!-- NOTE! THIS HEADER IS FOR THE MAIN DASHBOARD -->
            <!-- since wala pang budget sa API manual muna -->
            <!-- ito yung manual tab na mag nonotif sa client onces na received na ng records. -->

            <li>
                <a href="about.php">
                    <i class='bx bx-info-circle'></i>
                    <span class="links_name">About</span>
                </a>
                <span class="tooltip">About</span>
            </li>
            <li class="profile">
                <div class="profile-details">

                    <div class="name_job">
                        <div class="name">Tracking System</div>
                        <div class="job">PsuDev</div>
                    </div>
                </div> <a href="logout.php">
                    <i class='bx bx-log-out' id="log_out"></i>
                    <span class="tooltip">Logout</span>
                </a>
            </li>
        </ul>
    </div>