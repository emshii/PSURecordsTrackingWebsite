<?php
session_start();
include('./connection/dbh.inc.php');

if (isset($_POST['updaterecord'])) {

    $user_trackingid = $_POST['user_trackingid'];
    $track_remarks = $_POST['track_remarks'];
    $track_actions = $_POST['track_actions'];
    $track_offices = $_POST['track_offices'];
    $track_dates = $_POST['track_dates'];



    // query for updated tracking

    $query = "INSERT INTO track_communication (user_trackingid,track_remarks,track_actions,track_offices,track_dates) 
    VALUES ('$user_trackingid', '$track_remarks', '$track_actions','$track_offices','$track_dates')";


    $result = mysqli_query($conn, $query);
    if ($result) {




        $_SESSION['status'] = "Updated Succesfully";
        $_SESSION['status_code'] = "success";
        header('location: CSupdatetrack.php');
    } else {
        $_SESSION['status_update'] =  "Error";
        $_SESSION['status_update_code'] = "warning";
        header("location: CSupdatetrack.php");
    }
}
// header('location: admin.php');
