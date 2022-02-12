<?php

include 'connection/dbh.inc.php';
?>

<?php


if (isset($_POST['deleterecord'])) {


    $id = $_POST['delete_id'];

    $sql = "DELETE FROM users WHERE  id = '$id' ";

    $results = mysqli_query($conn, $sql);
    // print($id);

    if ($results) {
        echo '<script> alert("Data Deleted!"); </script>';
        header('location: table.php');
    } else {
        echo '<script> alert("Data Not Deleted!"); </script>';
        header('location: table.php');
    }
}
?>

