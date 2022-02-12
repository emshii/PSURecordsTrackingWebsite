<?php


include 'header.php';
include_once 'connection/dbh.inc.php';

if (isset($_POST['submit'])) {
    $user_trackingid = $_POST['tracking'];



    $sql = "SELECT * FROM users WHERE user_trackingid = '$user_trackingid' ";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_name = $row['user_name'];

        $website = "http://localhost/navigation1/trackuser.php";

        $subject = "Your Document had arrived to its Final Destination";

        $body = "Hello " . $user_name . "  your Document had Arrived to its final destination. To check tracking history simply visit our Tracking Website " . $website;

        $sender = "from: PSU Records Tracking Website";

        $email = $row['email'];


        if (mail($email, $subject, $body, $sender)) {
            // echo 'Done successfully';
            $_SESSION['status_email'] =  "Notification Sent to Email";
        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/logins.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e2996581b1.js" crossorigin="anonymous"></script>
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="js/sweetalert2.all.min.js"></script>

    <style>
        body {

            background: whitesmoke;
            height: 100vh;
        }
    </style>
    <title>Email</title>
</head>

<body>
    <div class="mains">
        <div class="boxs"></div>
        <div class="boxs">

        </div>
        <div class="boxs"></div>
    </div>

    <div class="main">
        <div class="box"></div>
        <div class="box">
            <h2>Email</h2>


            <form action="email.php" method="POST">

                <input type="text" class="form-control" placeholder="Enter tracking number" id="tracking" name="tracking" />
                <SPAN>Note: It will Automatically Generate Email Notification After inputing the tracking Number
                    <br> Make sure it the document is already done to all neccesary route
                </SPAN>
                <input type="submit" name="submit" value="Submit" href="" />


            </form>


        </div>
        <div class="box"></div>
    </div>

</body>


</html>


<?php
include 'include/footer.php';
?>