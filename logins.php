<?php

session_start();
//Login
if (isset($_POST['submit'])) {
    //Set Connection
    include_once 'connection/dbh.inc.php';

    //Declare Variables
    $email = $_POST['email'];
    $password = $_POST['password'];
    $office = $_POST['offices'];

    if (empty($email && $password)) {
        header('Location: loginss.php?error=emptyfields');
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: loginss.php?error=erroremail');
        exit();
    } else {

        $sql = "SELECT * FROM account WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if ((mysqli_num_rows($result) === 1)) {
            $row = mysqli_fetch_array($result);
            $password_hash = $row['pass'];
            if (password_verify($password, $password_hash)) {
                $_SESSION["email"] = $row['email'];
                $_SESSION["pass"] = $row['pass'];
                header('Location: loginss.php?correct=check');
                exit();
            } else {
                header('Location: loginss.php?error=errorpass');
                exit();
            }
        } else {
            header('Location: loginss.php?error=noemail');
            exit();
        }
    }
}
if (isset($_SESSION["email"])) {
    header('Location: loginss.php');
    exit();
}
