<?php

include 'include/header.php';
include 'include/sidebar.php';
include_once 'connection/dbh.inc.php';
if (isset($_POST['emaildone'])) {
    $user_trackingid = $_POST['user_trackingid'];


    $website = "http://localhost/navigation1/trackuser.php";
    $subject = "Your Document had arrived to its Final Destination";

    $sender = "from: PSU Records Tracking Website";

    $body = "Hello " . $user_name . "  your Document had Arrived to its final destination. To check tracking history simply visit our Tracking Website " . $website;

    $sender = "from: PSU Records Tracking Website";


    $sql = "SELECT * FROM users WHERE user_trackingid = '$user_trackingid' AND user_name='$user_name' email = '$email' ";
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $row = mysqli_fetch_assoc($result);
        print_r($row);
    }




    // if (mail($email, $subject, $body, $sender)) {
    //     echo 'done successfully';
    //     header("location: email.php");
    // }

}

?>




<?php
include 'include/footer.php';
?>