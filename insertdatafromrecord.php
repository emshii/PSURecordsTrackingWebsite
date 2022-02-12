<?php
session_start();
include('connection/dbh.inc.php');

if (isset($_POST['insertdatafromrecord'])) {

    $user_trackingid = $_POST['user_trackingid'];
    $user_title = $_POST['user_title'];
    $user_name = $_POST['user_name'];
    $user_byreceive = $_POST['user_byreceive'];
    $user_officestarget = $_POST['user_officestarget'];
    $channel_1 = $_POST['channel_1'];
    $channel_2 = $_POST['channel_2'];
    $channel_3 = $_POST['channel_3'];
    $channel_4 = $_POST['channel_4'];
    $channel_5 = $_POST['channel_5'];

    //Email notify when get recieve by the record office
    $website = "http://localhost/FinAL%20WEBSITE/login/loginss.php";
    $email = $_POST['email'];
    $subject = "Your Document has been recorded in PSU Record System";
    $body = "Hello " . $user_name . " your Document has been recorded in PSU Record System. It is on its way to its destination. 
    To track your Document simply visit our Tracking Website " . $website;
    $sender = "from: PSU Records Tracking Website";

    $sql = "SELECT * FROM users WHERE user_trackingid = '$user_trackingid'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($result);
    if ($row === 1) {
        $_SESSION['status'] =  "Tracking Number Is Already taken";
        $_SESSION['status_code'] = "warning";
        header('location: table.php');
    } else {
        $query = "INSERT INTO users (user_trackingid,user_title,user_name,email,user_byreceive,user_officestarget,channel_1,channel_2,channel_3,channel_4,channel_5) 
        VALUES ('$user_trackingid', '$user_title', '$user_name','$email','$user_byreceive', '$user_officestarget','$channel_1','$channel_2','$channel_3','$channel_4','$channel_5')";
        $resultsave = mysqli_query($conn, $query);
        // ETO po gmail code kaso po localhost lang so cinomment out ko nalang po para di makagulo
        //     if (mail($email, $subject, $body, $sender)) {

        $_SESSION['status'] =  "Data Added Succesfully";
        $_SESSION['status_code'] = "success";
        header("location: table.php");

        // }
    }
}


// header('location: admin.php');
