<?php
//Change password
if (isset($_POST['submit'])) {


    //Set Connection
    include_once 'db.php';

    //Declare Variables
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    //Eror handler
    if (empty($email) || empty($password) || empty($confirm)) {
        header("Location: forgotss.php?error=emptyfields");
        exit();
    } else if ($password !== $confirm) {
        header("Location: forgotss.php?error=notmatch");
        exit();
    } else if ((strlen($password) < 5) || (strlen($confirm) < 5)) {
        header("Location: forgotss.php?error=short");
        exit();
    } else {

        $sql = "SELECT email FROM account WHERE email=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: forgotss.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck < 1) {
                header('Location: forgotss.php?error=notexist');
                exit();
            } else {
                $password = password_hash($password, PASSWORD_DEFAULT);

                if (mysqli_query($conn, "UPDATE account SET pass='$password' WHERE email='$email'")) {
                    header('Location: forgotss.php?correct=check');
                    exit();
                }

                /*$stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: forgotss.php?error=sqlerror");
                    exit();
                } else {
                    $password = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "s", $password);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    header("Location: forgotss.php?error=correct");
                    exit();
                }*/
            }
        }
    }
}
