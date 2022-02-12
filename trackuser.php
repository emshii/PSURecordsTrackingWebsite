<?php

include 'connection/dbh.inc.php';
include 'include/headerforuser.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Palawan State Univesity Tracking</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<br>
<!-- <div class="container">
    <ul class="nav justify-content-center text-dark">
        <li class="nav-item ">
            <a class="nav-link active" href="aboutforUser.php">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="trackuser.php">Track</a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> 
    </ul>
</div> -->
<hr>

<body class="bg-light">
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-8 mx-auto bg-light rounded p-4">
        <h3 class="text-center font-weight-bold m-0 p-0 ">Welcome to Palawan State Univesity Tracking System</h3>
        <hr class="my-4 m-0 p-0 ">
        <p class="text-center text-secondary pl-4 m-0"> <small> Hussle Free, Track on the GO
            @PSU Record Tracking System
          </small></p>
        <form action="trackuserResult.php" method="post" class="p-3">
          <div class="input-group">
            <input type="number" name="user_trackingid" id="user_trackingid" class="form-control form-control-lg rounded-0 border-info" placeholder="Enter Your Tracking Number Here" autocomplete="off" required>
            <div class="input-group-append">
              <input type="submit" name="trackuserResult" value="Search" class="btn btn-info btn-sm rounded-0">
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
  </div>

</body>

</html>