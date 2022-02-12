<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/forgot.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/e2996581b1.js" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>Forgot password</title>
</head>

<body>
	<div class="mains">
		<div class="boxs"></div>
		<div class="boxs">
			<img src="./images/logo.png" alt="logo" width="150" height="150" /> PSU Records
			Tracking Website
		</div>
		<div class="boxs"></div>
	</div>

	<div class="main">
		<div class="box"></div>
		<div class="box">
			<h2>Forgot password?</h2>
			<form action="forgots.php" method="POST">
				<input type="text" class="form-control" placeholder="Enter email" id="email" name="email" />

				<input type="password" class="form-control" placeholder="Enter password" id="password" name="password" />

				<input type="password" class="form-control" placeholder="Confirm new password" id="confirm" name="confirm" />
				<?php
				if (isset($_GET['error'])) {
					if ($_GET['error'] == "emptyfields") {
						echo '<p class="error"><i class="fas fa-exclamation-triangle"></i>Fill in all fields!</p>';
					} else if ($_GET['error'] == "notmatch") {
						echo '<p class="error"><i class="fas fa-exclamation-triangle"></i>Password does not match!</p>';
					} else if ($_GET['error'] == "short") {
						echo '<p class="error"><i class="fas fa-exclamation-triangle"></i>Password must be minimum of 5 letters!</p>';
					} else if ($_GET['error'] == "notexist") {
						echo '<p class="error"><i class="fas fa-exclamation-triangle"></i>Email does not exist!</p>';
					} else if ($_GET['error'] == "sqlerror") {
						echo '<p class="error"><i class="fas fa-exclamation-triangle"></i>Error!</p>';
					} else if ($_GET['error'] == "correct") {
						echo '<p class="error"><i class="fas fa-exclamation-triangle"></i>Password change successful!</p>';
					}
				} else if (isset($_GET['correct'])) {
					if ($_GET['correct'] == "check") {
						echo "<script>
						swal({
							title: 'Password',
							text: 'Changed Successfully',
							type: 'success'
						  }).then(() => {
							  window.location = 'loginss.php';
						  })
						
						</script>";
						//header('Location: ../track/index.php ');

						//();

					}
				}
				?>

				<input type="submit" name="submit" value="Confirm" href="" />
			</form>
		</div>
		<div class="box"></div>
	</div>
</body>

</html>