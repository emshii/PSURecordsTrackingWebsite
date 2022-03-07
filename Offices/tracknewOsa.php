<?php
session_start();
include('../connection/dbh.inc.php');

if (isset($_POST['updaterecord'])) {

    $user_trackingid = $_POST['user_trackingid'];
    $track_remarks = $_POST['track_remarks'];
    $track_actions = $_POST['track_actions'];
    $track_offices = $_POST['track_offices'];


    // query for updated tracking

    $query = "INSERT INTO track_communication (user_trackingid,track_remarks,track_actions,track_offices) 
    VALUES ('$user_trackingid', '$track_remarks', '$track_actions','$track_offices')";


    $result = mysqli_query($conn, $query);
    if ($result) {
        $_SESSION['status'] = "Updated Succesfully";
        $_SESSION['status_code'] = "success";
        header('location: OSAupdatetrack.php');
    } else
        $_SESSION['status_update'] =  "Error";
    $_SESSION['status_update_code'] = "warning";
    header("location: OSAupdatetrack.php");
}
// header('location: admin.php');
