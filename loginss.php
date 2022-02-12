<?php
session_start();
$error = '';
if (isset($_POST['submit'])) {
	//Set Connection
	include_once 'connection/dbh.inc.php';

	//Declare Variables
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (empty($email && $password)) {

		$error = '<p class="error"><i class="fas fa-exclamation-triangle"></i>Fill in all fields!</p>';
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

		$error = '<p class="error"><i class="fas fa-exclamation-triangle"></i>Invalid Email!</p>';
	} else {

		$sql = "SELECT * FROM account WHERE email = '$email'";
		$result = mysqli_query($conn, $sql);

		if ((mysqli_num_rows($result) === 1)) {
			$row = mysqli_fetch_assoc($result);
			$password_hash = $row['pass'];
			if (password_verify($password, $password_hash)) {
				//$row = mysqli_num_rows($result);
				$_SESSION['offices'] = $row['office'];
				$_SESSION['IS_LOGIN'] = 'yes';
				if ($row['office'] == 'Admin') {

					header('location:table.php');
				}
				if ($row['office'] == 'CS') {

					header('location:cs.php');
				}
				if ($row['office'] == 'VPRE') {

					header('location:vpre.php');
				}
				if ($row['office'] == 'VPAA') {

					header('location:./Offices/vpaa.php');
				}
				if ($row['office'] == 'Budget') {

					header('location:./Offices/budget.php');
				}
				if ($row['office'] === 'Office of the Student Affairs') {

					header('location:./Offices/osa.php');
				}
				if ($row['office'] === 'Accounting') {

					header('location:accounting.php');
				}
				if ($row['office'] == 'University Board Secretary Office') {

					header('location:./Offices/boardsec.php');
				}
				if ($row['office'] == 'HRMO') {

					header('location:./Offices/hrmo.php');
				}
				if ($row['office'] == 'CAH') {

					header('location:./Offices/cah.php');
				}
				// boss jm right here is the office of the president
				if ($row['office'] == 'Office of the President') {

					header('location:./Offices/president.php');
				}
				if ($row['office'] == 'Records') {

					header('location:./Offices/records.php');
				}
				if ($row['office'] == 'VPFA') {

					header('location:./Offices/vfpa.php');
				}
				if ($row['office'] == 'CBA') {

					header('location: cba.php');
				}
			} else {

				$error = '<p class="error"><i class="fas fa-exclamation-triangle"></i>Incorrect password!</p>';
			}
		} else {

			$error = '<p class="error"><i class="fas fa-exclamation-triangle"></i>Email does not exist!</p>';
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

	<title>Login</title>
</head>

<body>
	<div class="mains">
		<div class="boxs">

		</div>
		<!-- TEXT SHOWING FOR THE TRACKING SYSTEM -->
		<div class="boxs">
			<img src="images/logo.png" alt="logo" width="150" height="150" /> PSU Records
			Tracking Website
		</div>
		<div class="boxs"></div>
	</div>

	<div class="main">
		<div class="box"></div>
		<div class="box">
			<h2>Login</h2>

			<form action="loginss.php" method="POST">

				<input type="text" class="form-control" placeholder="Enter Email" id="email" name="email" />

				<input type="password" class="form-control" placeholder="Enter Password" id="password" name="password" />

				<input type="submit" name="submit" value="Login" href="" />
				<?php

				echo $error ?>

				<span>Don't have any account?</span>
				<a class="sign" href="signupss.php">Sign Up</a>

				<a class="forgot" href="forgotss.php">Forgot your password?</a>
			</form>
		</div>
		<div class="box"></div>
	</div>
</body>

</html>