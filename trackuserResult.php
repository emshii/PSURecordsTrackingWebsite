<?php

include 'connection/dbh.inc.php';
include 'include/headerforuser.php';

?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/sweetalert.min.js"></script>
</head>
<html lang="en">

<body>

    <div class="container mt-2 text-dark">
        <center>
            <h5>TRACK RESULT</h5>
            <hr>

            <div class="card text-center">
                <div class="card-header">
                    Tracking Information


                    <?php
                    if (isset($_POST['trackuserResult'])) {
                        $user_trackingid = mysqli_real_escape_string($conn, $_POST['user_trackingid']);

                        // $user_trackingid = $_POST['user_trackingid'];
                        $query = "SELECT  users.user_trackingid , users.user_datecreate, users.user_name, users.user_officestarget, users.user_title,  track_communication.track_actions  FROM track_communication INNER JOIN users ON track_communication.user_trackingid = users.user_trackingid WHERE users.user_trackingid = '$user_trackingid'";

                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($result)) {

                            $timestamp = $row['user_datecreate'];
                            echo "<H5 class='text-left m-0 p-0'>" . "Tracking Number : " . "<strong>" . $row['user_trackingid'] . " </strong>" . "</H5>";
                            echo "<p class='text-left m-0 p-0 ml-0'>" . "Tittle : " . "<strong>" . $row['user_title'] . " </strong>" . "</p>";
                            echo "<p class='text-left m-0 p-0'>" . "Destination : " . "<strong>" . $row['user_officestarget'] . " </strong>" . "</p>";
                            echo "<p class='text-left m-0 p-0 ml-0'>" . "Name : " . "<strong>" . $row['user_name'] . " </strong>" . "</p>";
                            echo "<p class='text-left m-0 p-0 ml-0'>" . "Date Recieve : " . "<strong>" . date('M d, Y, g:ia', strtotime($timestamp)) . " </strong>" . "</p>";
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
                        if (isset($_POST['trackuserResult'])) {

                            $user_trackingid = $_POST['user_trackingid'];
                            // $user_officestarget = $_POST['user_officestarget'];
                            $query = "SELECT users.id,track_communication.user_trackingid, users.user_name,track_communication.track_remarks, users.user_title,users.user_officestarget,track_communication.track_actions,track_communication.track_dates, track_communication.track_offices, users.channel_1, 
                            users.channel_2,users.channel_3,users.channel_4,users.channel_5 FROM users
                            INNER JOIN track_communication ON  users.user_trackingid = track_communication.user_trackingid WHERE track_communication.user_trackingid = '$user_trackingid'";
                            $result = mysqli_query($conn, $query);
                        ?>

                            <thead class="bg-info">
                                <tr class="text-center">
                                    <td class="">Date</td>
                                    <td class="">Action</td>
                                    <th>Channel 1</th>
                                    <th>Channel 2</th>
                                    <th>Channel 3</th>
                                    <th>Channel 4</th>
                                    <th>Channel 5</th>
                                    <th>Destination</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {

                                        $timestamp = $row['track_dates'];
                                        $channel1 = $row['channel_1'];
                                        $channel2 = $row['channel_2'];
                                        $channel3 = $row['channel_3'];
                                        $channel4 = $row['channel_4'];
                                        $channel5 = $row['channel_5'];
                                        $action = $row['track_actions'];
                                        $office = $row['track_offices'];
                                        $destination = $row['user_officestarget']
                                ?>
                                        <tr>
                                            <td class="text-center m-1 p-1 mb-1">
                                                <?php echo date('M d, Y, g:ia', strtotime($timestamp)); ?>
                                            </td>

                                            <?php if (($channel1 == $office) && ($action == 'Received')) { ?>

                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' at ' . $row['track_offices'] ?></td>
                                            <?php } else if (($channel1 == $office) && ($action == 'Forwarded')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel1 == $office) && ($action == 'Returned')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel1 == $office) && ($action == 'Endorsed')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel2 == $office) && ($action == 'Received')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' at ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel2 == $office) && ($action == 'Forwarded')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel2 == $office) && ($action == 'Returned')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel2 == $office) && ($action == 'Endorsed')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel3 == $office) && ($action == 'Received')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' at ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel3 == $office) && ($action == 'Forwarded')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel3 == $office) && ($action == 'Returned')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel3 == $office) && ($action == 'Endorsed')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel4 == $office) && ($action == 'Received')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' at ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel4 == $office) && ($action == 'Forwarded')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel4 == $office) && ($action == 'Returned')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel4 == $office) && ($action == 'Endorsed')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel5 == $office) && ($action == 'Received')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' at ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel5 == $office) && ($action == 'Forwarded')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel5 == $office) && ($action == 'Returned')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($channel5 == $office) && ($action == 'Endorsed')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($destination == $office) && ($action == 'Received')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' at ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($destination == $office) && ($action == 'Forwarded')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($destination == $office) && ($action == 'Returned')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } else if (($destination == $office) && ($action == 'Endorsed')) { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['track_actions'] . ' to ' . $row['track_offices'] ?></td>
                                            <?php     } ?>






                                            <!-- Channel 1-->
                                            <?php if (($channel1 == $office) && ($action == 'Received')) { ?>

                                                <td class="text-center m-1 p-1 mb-1" bgcolor="#FFFF00"><?php echo $row['channel_1'] ?></td>
                                            <?php } else if (($channel1 == $office) && ($action == 'Forwarded')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="399CC66"><?php echo $row['channel_1'] ?></td>
                                            <?php     } else if (($channel1 == $office) && ($action == 'Returned')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="#FFC0CB"><?php echo $row['user_officestarget'] ?></td>
                                            <?php     } else if (($channel1 == $office) && ($action == 'Endorsed')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="##FFA500"><?php echo $row['user_officestarget'] ?></td>
                                            <?php     } else { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['channel_1'] ?></td>
                                            <?php   } ?>

                                            <!-- Channel 2-->
                                            <?php if (($channel2 == $office) && ($action == 'Received')) { ?>

                                                <td class="text-center m-1 p-1 mb-1" bgcolor="#FFFF00"><?php echo $row['channel_2'] ?></td>

                                            <?php } else if (($channel2 == $office) && ($action == 'Forwarded')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="399CC66"><?php echo $row['channel_2'] ?></td>
                                            <?php     } else if (($channel2 == $office) && ($action == 'Returned')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="#FFC0CB"><?php echo $row['user_officestarget'] ?></td>
                                            <?php     } else if (($channel2 == $office) && ($action == 'Endorsed')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="##FFA500"><?php echo $row['user_officestarget'] ?></td>
                                            <?php     } else { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['channel_2'] ?></td>
                                            <?php   } ?>

                                            <!-- Channel 3-->
                                            <?php if (($channel3 == $office) && ($action == 'Received')) { ?>

                                                <td class="text-center m-1 p-1 mb-1" bgcolor="#FFFF00"><?php echo $row['channel_3'] ?></td>

                                            <?php } else if (($channel3 == $office) && ($action == 'Forwarded')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="399CC66"><?php echo $row['channel_3'] ?></td>
                                            <?php     } else if (($channel3 == $office) && ($action == 'Returned')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="#FFC0CB"><?php echo $row['user_officestarget'] ?></td>
                                            <?php     } else if (($channel3 == $office) && ($action == 'Endorsed')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="##FFA500"><?php echo $row['user_officestarget'] ?></td>
                                            <?php     } else { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['channel_3'] ?></td>
                                            <?php   } ?>

                                            <!-- Channel 4-->
                                            <?php if (($channel4 == $office) && ($action == 'Received')) { ?>

                                                <td class="text-center m-1 p-1 mb-1" bgcolor="#FFFF00"><?php echo $row['channel_4'] ?></td>

                                            <?php } else if (($channel4 == $office) && ($action == 'Forwarded')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="399CC66"><?php echo $row['channel_4'] ?></td>
                                            <?php     } else if (($channel4 == $office) && ($action == 'Returned')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="#FFC0CB"><?php echo $row['user_officestarget'] ?></td>
                                            <?php     } else if (($channel4 == $office) && ($action == 'Endorsed')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="##FFA500"><?php echo $row['user_officestarget'] ?></td>
                                            <?php     } else { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['channel_4'] ?></td>
                                            <?php   } ?>

                                            <!-- Channel 5-->
                                            <?php if (($channel5 == $office) && ($action == 'Received')) { ?>

                                                <td class="text-center m-1 p-1 mb-1" bgcolor="#FFFF00"><?php echo $row['channel_5'] ?></td>

                                            <?php } else if (($channel5 == $office) && ($action == 'Forwarded')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="399CC66"><?php echo $row['channel_5'] ?></td>
                                            <?php     } else if (($channel5 == $office) && ($action == 'Returned')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="#FFC0CB"><?php echo $row['user_officestarget'] ?></td>
                                            <?php     } else if (($channel5 == $office) && ($action == 'Endorsed')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="##FFA500"><?php echo $row['user_officestarget'] ?></td>
                                            <?php     } else { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['channel_5'] ?></td>
                                            <?php   } ?>

                                            <?php if (($destination == $office) && ($action == 'Received')) { ?>

                                                <td class="text-center m-1 p-1 mb-1" bgcolor="#FFFF00"><?php echo $row['user_officestarget'] ?></td>
                                            <?php } else if (($destination == $office) && ($action == 'Forwarded')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="399CC66"><?php echo $row['user_officestarget'] ?></td>
                                            <?php     } else if (($destination == $office) && ($action == 'Returned')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="#FFC0CB"><?php echo $row['user_officestarget'] ?></td>
                                            <?php     } else if (($destination == $office) && ($action == 'Returned')) { ?>
                                                <td class="text-center m-1 p-1 mb-1" bgcolor="##FFA500"><?php echo $row['user_officestarget'] ?></td>
                                            <?php     } else { ?>
                                                <td class="text-center m-1 p-1 mb-1"><?php echo $row['user_officestarget'] ?></td>
                                            <?php   } ?>
                                        </tr>

                                    <?php
                                    }
                                } else {

                                    ?>
                            <?php
                                    $_SESSION['status_track'] =  "Tracking id Not Exist!";
                                    $_SESSION['status_code_track'] = "warning";
                                }
                            }

                            ?>
                            </tbody>
                    </table>
                    <br>
                    <!-- <a href="index.php" class="btn btn-primary"><span class="material-icons">
                            youtube_searched_for
                        </span>
                    </a> -->
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