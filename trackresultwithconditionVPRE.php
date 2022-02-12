<?php

session_start();
include 'connection/dbh.inc.php';
?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<html lang="en">

<body>

    <div class="container mt-2 text-dark">
        <center>
            <h4>TRACK RESULT</h4>
            <hr>

            <div class="card text-center">
                <div class="card-header">
                    Tracking Information


                    <?php
                    if (isset($_POST['trackresult'])) {

                        $user_trackingid = $_POST['user_trackingid'];
                        // $user_trackingid = $_POST['user_trackingid'];
                        $query = "SELECT  users.user_trackingid , users.user_name, users.user_officestarget, users.user_title,  track_communication.track_actions  FROM track_communication INNER JOIN users ON track_communication.user_trackingid = users.user_trackingid WHERE users.user_trackingid = '$user_trackingid'";

                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($result)) {


                            echo "<H5 class='text-left m-0 p-0'>" . "Tracking Number : " . "<strong>" . $row['user_trackingid'] . " </strong>" . "</H5>";
                            echo "<p class='text-left m-0 p-0 ml-0'>" . "Tittle : " . "<strong>" . $row['user_title'] . " </strong>" . "</p>";
                            echo "<p class='text-left m-0 p-0'>" . "Target Offices : " . "<strong>" . $row['user_officestarget'] . " </strong>" . "</p>";
                            echo "<p class='text-left m-0 p-0 ml-0'>" . "Name : " . "<strong>" . $row['user_name'] . " </strong>" . "</p>";
                            // echo $row['user_name'];
                            break;
                        }
                    }
                    ?>
                </div>
                <div class="card-body">
                    <!-- table for showing the data that search from the staff office -->
                    <table class="table table-striped table-borderless">
                        <!-- <thead>

                        </thead> -->
                        <?php
                        if (isset($_POST['trackresult'])) {

                            $user_trackingid = $_POST['user_trackingid'];
                            $user_officestarget = $_POST['user_officestarget'];
                            $query = "SELECT users.user_trackingid ,  track_communication.track_remarks , track_communication.track_offices, track_communication.track_actions, track_communication.track_dates FROM users INNER JOIN track_communication ON users.user_trackingid = track_communication.user_trackingid WHERE track_communication.user_trackingid = '$user_trackingid' ORDER BY track_communication.track_dates DESC";
                            $result = mysqli_query($conn, $query);


                        ?>
                            <thead class="bg-info">
                                <tr class="text-center">
                                    <td class="">Remarks</td>
                                    <td class="">Date</td>
                                    <td class="">Offices</td>
                                    <td class="">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $timestamp = $row['track_dates'];
                                ?>
                                        <tr>
                                            <td class="text-center m-1 p-1 mb-1 "><?php echo $row['track_remarks'] ?></td>
                                            <td class="text-center m-1 p-1 mb-1"><?php echo date('M d, Y, g:ia', strtotime($timestamp)); ?> </td>
                                            <td class="text-center m-1 p-1 mb-1 "><?php echo $row['track_offices'] ?></td>

                                            <td class="text-center  m-1 p-1 mb-1"><?php echo $row['track_actions'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                            <?php
                                    $_SESSION['status'] = "DATA DOESNT EXIST";
                                    $_SESSION['status_code'] = "error";

                                    header("location: vpre.php");
                                    die();
                                }
                            }
                            ?>
                            </tbody>
                    </table>
                    <br>
                    <a href="vpre.php" class="btn btn-primary"><span class="material-icons">
                            youtube_searched_for
                        </span>
                    </a>
                </div>
                <div class="card-footer text-center ">
                    @PSU_TRACKING SYSTEM
                </div>
            </div>
        </center>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>