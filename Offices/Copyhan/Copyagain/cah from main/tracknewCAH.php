<?php

include('/connection/dbh.inc.php');

if (isset($_POST['tracknew'])) {

    $user_trackingid = $_POST['user_trackingid'];
    $track_remarks = $_POST['track_remarks'];
    $track_actions = $_POST['track_actions'];
    $track_offices = $_POST['track_offices'];
    $track_dates = $_POST['track_dates'];
    $track_careof = $_POST['track_careof'];

    // query for updated tracking

    $query = "INSERT INTO track_communication (user_trackingid,track_remarks,track_actions,track_offices,track_careof) 
    VALUES ('$user_trackingid', '$track_remarks', '$track_actions','$track_offices','$track_careof')";


    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo '<script> alert("Data update"); </script>';
        header('location: cah.php');
    } else
        echo '<script> alert("Data not update"); </script>';
    header("location: cah.php");
}
// header('location: admin.php');
