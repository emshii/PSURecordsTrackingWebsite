<?php


if (isset($_POST['submit'])) {
    //Set Connection
    include_once 'db.php';

    //Declare Variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $office = $_POST['office'];

    //Error handler
    if (empty($name) || empty($email) || empty($password) || empty($confirm) || empty($office)) {
        header("Location: signupss.php?error=emptyfields&name=" . $name . "email" . $email);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-z A-Z]*$/", $name)) {
        header("Location: signupss.php?error=invalidnameemail");
        exit();
    } else if (!preg_match("/^[a-z A-Z]*$/", $name)) {
        header("Location: signupss.php?error=invalidname");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: signupss.php?error=invalidemail");
        exit();
    } else if (strlen($password) < 5) {
        header("Location: signupss.php?error=short");
        exit();
    } else if ($password !== $confirm) {
        header("Location: signupss.php?error=notmatch");
        exit();
    } else {

        $sql = "SELECT email FROM account WHERE email=? OR office=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: signupss.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $email, $office);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: signupss.php?error=already&name=" . $name);
                exit();
            } else {
                $sql = "INSERT INTO account (name, email, pass, office)
                VALUES(?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: signupss.php?error=sqlerror");
                    exit();
                } else {
                    $password = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $password, $office);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    header('Location: signupss.php?correct=check');
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: signupss.php");
    exit();
}
