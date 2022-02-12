<?php
session_start();
include 'connection/dbh.inc.php';
?>
<?php

if (isset($_POST['updaterecord'])) {

    $id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $user_trackingid = mysqli_real_escape_string($conn, $_POST['user_trackingid']);
    $user_title = mysqli_real_escape_string($conn, $_POST['user_title']);
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user_byreceive = mysqli_real_escape_string($conn, $_POST['user_byreceive']);
    $user_officestarget = mysqli_real_escape_string($conn, $_POST['user_officestarget']);


    $sql = "UPDATE users SET  user_trackingid = '$user_trackingid' , user_title = '$user_title',user_name = '$user_name',
    email ='$email', user_byreceive = '$user_byreceive', user_officestarget = '$user_officestarget' WHERE id ='$id' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $_SESSION['status'] =  "Updated Succesfully";
        $_SESSION['status_code'] = "success";
        // echo '<script> alert("Data update"); </script>';
        // echo "data save";
        header("location: table.php");
    } else {
        $_SESSION['status'] = "EDIT UNSUCCESFULLY";
        $_SESSION['status_code'] = "warning";
        header("location: table.php");
    }
}

?>

