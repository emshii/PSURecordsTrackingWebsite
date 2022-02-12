<?php
include 'include/header.php';
include 'connection/dbh.inc.php';
?>

<html lang="en">

<body>
    <div class="container mt-2 text-dark">
        <center class="">
            <h4>Track Result</h4>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <!-- <th class="text-righ">Date</th> -->
                        <!-- <th>Actions</th> -->
                    </tr>
                </thead>
                <?php
                if (isset($_POST['trackresult'])) {

                    $user_trackingid = $_POST['user_trackingid'];

                    $query = "SELECT users.user_trackingid, track_communication.track_actions, track_communication.track_dates FROM users INNER JOIN track_communication ON users.user_trackingid = track_communication.user_trackingid WHERE track_communication.user_trackingid = '$user_trackingid'";
                    $result = mysqli_query($conn, $query);

                    echo ' Tracking Number : ' .  $user_trackingid;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $timestamp = $row['track_dates'];
                ?>
                        <tbody class="">
                            <tr>
                                <td></td>
                                <td> <?php echo date('M d, Y, g:ia', strtotime($timestamp)); ?> </td>
                                <td class="text-left"><?php echo $row['track_actions'] ?></td>
                            </tr>
                        </tbody>
                <?php
                    }
                }
                ?>
            </table>


        </center>
    </div>
</body>

</html>