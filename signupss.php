<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/signups.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<script src="https://kit.fontawesome.com/e2996581b1.js" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>Sign Up</title>
</head>

<body>
	<div class="mains">
		<div class="boxs"></div>
		<div class="boxs">
			<img src="./images/logo.png" alt="logo" width="150" height="150" />
			PSU Records
			Tracking Website
		</div>
		<div class="boxs"></div>
	</div>

	<div class="main">
		<div class="box"></div>
		<div class="box">
			<h2>Sign Up</h2>
			<form action="signups.php" method="POST">
				<span class="name">Name:</span>
				<input type="text" class="form-control first" placeholder="Enter Name" id="name" name="name" />

				<br /><span class="email">PSU email:</span>
				<input type="text" class="form-control third" placeholder="Enter Email" id="email" name="email" />
				<br /><span class="pass">Password:</span>
				<input type="password" class="form-control first" placeholder="Enter Password" id="password" name="password" />
				<br /><span class="confirm">Confirm password:</span>
				<input type="password" class="form-control sec" placeholder="Confirm Password" id="confirm" name="confirm" />

				<br /><span class="office">Assigned office:</span>
				<select name="office" id="office">
					<option value="">Choose your office...</option>
					<option value="Admin">Administrator</option>
					<option value="Accountant's office">Accountant's office</option>
					<option value="Accounting">Accounting</option>
					<option value="Accounting - Bookkeeper (101)">
						Accounting - Bookkeeper (101)
					</option>
					<option value="Accounting - Bookkeeper (164)">
						Accounting - Bookkeeper (164)
					</option>
					<option value="Accounting - Bookkeeper (164-Bookstore)">
						Accounting - Bookkeeper (164-Bookstore)
					</option>
					<option value="Accounting - Bookkeeper (164-Canteen)">
						Accounting - Bookkeeper (164-Canteen)
					</option>
					<option value="Accounting - Bookkeeper (164-CCRD)">
						Accounting - Bookkeeper (164-CCRD)
					</option>
					<option value="Accounting - Bookkeeper (164-Hostel)">
						Accounting - Bookkeeper (164-Hostel)
					</option>
					<option value="Accounting - Bookkeeper (401)">
						Accounting - Bookkeeper (401)
					</option>
					<option value="Alumni Office">Alumni Office</option>
					<option value="BAC">BAC</option>
					<option value="BIMP-EAGA">BIMP-EAGA</option>
					<option value="Budget">Budget</option>
					<option value="CAH">CAH</option>
					<option value="CAO">CAO</option>
					<option value="Cashier">Cashier</option>
					<option value="CBA">CBA</option>
					<option value="CCJE">CCJE</option>
					<option value="CCRD">CCRD-Main</option>
					<option value="CCRD-North">CCRD-North</option>
					<option value="CCRD-South">CCRD-South</option>
					<option value="CEAT">CEAT</option>
					<option value="CFO">CFO</option>
					<option value="CHMT">CHMT</option>
					<option value="Clinic">Clinic</option>
					<option value="CNHS">CNHS</option>
					<option value="COA">COA</option>
					<option value="Construction and Maintenance Services">
						Construction and Maintenance Services
					</option>
					<option value="CS">CS</option>
					<option value="CSPG">CSPG</option>
					<option value="CTE">CTE</option>
					<option value="Curriculum Instructional Materials Development Office">
						Curriculum Instructional Materials Development Office
					</option>
					<option value="Dep-Ed K to 12 G9">Dep-Ed K to 12 G9</option>
					<option value="Electrical & Audio-visual Section">
						Electrical & Audio-visual Section
					</option>
					<option value="ETEEAP">ETEEAP</option>
					<option value="Extension Office">Extension Office</option>
					<option value="F&S Development Director">
						F&S Development Director
					</option>
					<option value="Gender and Development">
						Gender and Development
					</option>
					<option value="Graduate School">Graduate School</option>
					<option value="HRMO">HRMO</option>
					<option value="ICT">ICT</option>
					<option value="ICU">ICU</option>
					<option value="IGP">IGP</option>
					<option value="Institutional Development">
						Institutional Development
					</option>
					<option value="Internal Audit Service Office">
						Internal Audit Service Office
					</option>
					<option value="Janitorial Services">Janitorial Services</option>
					<option value="Legal Affairs">Legal Affairs</option>
					<option value="LES">LES</option>
					<option value="LHS">LHS</option>
					<option value="Library">Library</option>
					<option value="Marine Science Laboratory">
						Marine Science Laboratory
					</option>
					<option value="Medical Laboratory">Medical Laboratory</option>
					<option value="Medical School">Medical School</option>
					<option value="Motorpool">Motorpool</option>
					<option value="NROTCU">NROTCU</option>
					<option value="NSTP Office">NSTP Office</option>
					<option value="Office of the President">
						Office of the President
					</option>
					<option value="Office of the Student Affairs">
						Office of the Student Affairs
					</option>
					<option value="Office of Transnational Education">
						Office of Transnational Education
					</option>
					<option value="PAC">PAC</option>
					<option value="Palawan Studies Center">
						Palawan Studies Center
					</option>
					<option value="Panrehiyong Sentro ng Wika ng Filipino">
						Panrehiyong Sentro ng Wika ng Filipino
					</option>
					<option value="PIONEER">PIONEER</option>
					<option value="PITBI">PITBI</option>
					<option value="Planning Office">Planning Office</option>
					<option value="PMO">PMO</option>
					<option value="PRIMO">PRIMO</option>
					<option value="Property & Warehouse Unit">
						Property & Warehouse Unit
					</option>
					<option value="PSU Band">PSU Band</option>
					<option value="PSU Bookstore">PSU Bookstore</option>
					<option value="PSU Canteen">PSU Canteen</option>
					<option value="PSU CUYO">PSU CUYO</option>
					<option value="PSU Faculty Union">PSU Faculty Union</option>
					<option value="PSU Hostel">PSU Hostel</option>
					<option value="PSU I-Hub">PSU I-Hub</option>
					<option value="PSU LSHS">PSU LSHS</option>
					<option value="PSU Multi Purpose Cooperative">
						PSU Multi Purpose Cooperative
					</option>
					<option value="PSU Museum">PSU Museum</option>
					<option value="PSU Sining Palawan Dance Troupe">
						PSU Sining Palawan Dance Troupe
					</option>
					<option value="PSU-Palawan Studies Cente">
						PSU-Palawan Studies Center
					</option>
					<option value="Quality Assurance and Services">
						Quality Assurance and Services
					</option>
					<option value="Records">Records</option>
					<option value="Registrar's Office">Registrar's Office</option>
					<option value="Research">Research</option>
					<option value="ROTC Office">ROTC Office</option>
					<option value="SCAO">SCAO</option>
					<option value="School of Graduate Studies & Research">
						School of Graduate Studies & Research
					</option>
					<option value="School of Law">School of Law</option>
					<option value="Security Office">Security Office</option>
					<option value="SEMDO">SEMDO</option>
					<option value="SEPO">SEPO</option>
					<option value="SGO">SGO</option>
					<option value="Sports Division">Sports Division</option>
					<option value="Stock Room">Stock Room</option>
					<option value="Supply">Supply</option>
					<option value="SWKO">SWKO</option>
					<option value="Transnational Education">
						Transnational Education
					</option>
					<option value="UDRRMT">UDRRMT</option>
					<option value="University Board Secretary Office">
						University Board Secretary Office
					</option>
					<option value="University Intellectual Property Office">
						University Intellectual Property Office
					</option>
					<option value="University Quality Assurance Center (UQAC)">
						University Quality Assurance Center (UQAC)
					</option>
					<option value="UREO">UREO</option>
					<option value="Utility Services">Utility Services</option>
					<option value="VPAA">VPAA</option>
					<option value="VPEC">VPEC</option>
					<option value="VPFA">VPFA</option>
					<option value="VPRE">VPRE</option>
				</select>
				<?php
				if (isset($_GET['error'])) {
					if ($_GET['error'] == "emptyfields") {
						echo '<p class="error"><i class="fas fa-exclamation-triangle"></i>Fill in all fields!</p>';
					} else if ($_GET['error'] == "invalidnameemail") {
						echo '<p class="error"><i class="fas fa-exclamation-triangle"></i>Invalid Format Name and Email!</p>';
					} else if ($_GET['error'] == "invalidname") {
						echo '<p class="error"><i class="fas fa-exclamation-triangle"></i>Invalid Format Name!</p>';
					} else if ($_GET['error'] == "invalidemail") {
						echo '<p class="error"><i class="fas fa-exclamation-triangle"></i>Invalid Format Email!</p>';
					} else if ($_GET['error'] == "short") {
						echo '<p class="error"><i class="fas fa-exclamation-triangle"></i>Password must be minimum of 5 letters!</p>';
					} else if ($_GET['error'] == "notmatch") {
						echo '<p class="error"><i class="fas fa-exclamation-triangle"></i>Password does not match!</p>';
					} else if ($_GET['error'] == "already") {
						echo '<p class="error"><i class="fas fa-exclamation-triangle"></i>Someone already registered this email or Office!</p>';
					} else if ($_GET['error'] == "sqlerror") {
						echo '<p class="error"><i class="fas fa-exclamation-triangle"></i>Error!</p>';
					}
				} else if (isset($_GET['correct'])) {
					if ($_GET['correct'] == "check") {
						echo "<script>
						swal({
							title: 'Signed Up',
							text: 'Successfully!',
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
				<input type="submit" name="submit" value="Sign Up" href="" />
			</form>
		</div>
		<div class="box"></div>
	</div>

	<script></script>
</body>

</html>