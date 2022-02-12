<!-- dito yung tungkol sa system -->
<?php
include './include/footer.php';

include './include/headerforuser.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TrackUser</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>

<body>
    <!-- <div class="container text-dark">
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
    <div class="container mt-4 text-left">
        <!-- <div class="">
            <a href="trackuser.php">
                <span class="material-icons">
                    keyboard_return
                </span>
            </a>
            <span></span>

        </div> -->
        <div class="container-fluid mb-4 text-center">
            <h3>About Us </h3>
            <span>@Palawan State University Tracking System</span>
        </div>

        <hr>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body bg-light">
                        <h5 class="card-title pl-2 mt-2"> <span class="material-icons ">
                                beenhere
                            </span> Vision</h5>
                        <p class="card-text  text-dark text-justify"> <small>To continuosly develop and to upgrade the services, programs and objectives of the office towards a sustainable recvords and archives management
                                systyem of the University. </small></p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body bg-light">
                        <h5 class="card-title mt-2 pl-2"><span class="material-icons">
                                beenhere
                            </span> Mission</h5>
                        <p class="card-text text-dark text-justify"> <small>Continuosly implement an effiecient, effective systematic, and functional records management program university-wide. <br> </small> </p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <br>
        <div class="card mb-2">
            <div class="card-body bg-light">
                <h5 class="card-title">Quality Policy <span class="material-icons">
                        policy
                    </span></h5>
                <p class="card-text text-dark text-justify"> <small> We provided equal opportunities for relevant and innovative higher education and advanced studies in Southest Asia for Sustainable development.
                        <br>
                        We strongly commit to produce competent and humane resilient communities though excellent programs in instruction, research, extenxions, transnational collaborations.
                        <br>
                        We shall continually upgrade our quality management system to adapt to the changing societal needs and aspiration.
                        <hr>
                    </small></p>
                <p class="card-text"><small class="text-muted">Offices of the records</small></p>
            </div>
            <img src="./images/psu2.png" class=" card-img-top" alt="...">
        </div>
        <hr>
        <br>
        <div class="container">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/Psubackground.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Palawan State University</h5>
                                <p>Welcome to Palawan State University</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="images/cs.png" class="d-block w-100" alt="logo.png">
                            <div class="carousel-caption d-none d-md-block">
                                <!-- <h5>Track System</h5> -->
                                <p class="pt-4">Welcome PSuan's: Welcome to the new Tracking</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/psu2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Track With Us Now</h5>
                                <p class="text-light">PSU RECORD ANNOUNCE THE NEW TRACKING WEBSITE FOR HUSSLE FREE DOCUMENT TRACKING</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>


        <hr>
        <div class="card text-center">
            <div class="card-header">
                In Partnership With the College Of Science
            </div>
            <div class="card-body">
                <h5 class="card-title">Web Base Tracking System <span class="material-icons">
                        fmd_good
                    </span>
                </h5>
                <img src="./images/logo.png" alt="logo" class="img-thumbnail rounded-circle">

                <p class="card-text">Psu'ans Can Now Track Thier record with less hussle and free enviroment</p>
                <a href="trackuser.php" class="btn btn-primary"> <span class="material-icons">
                        tour
                    </span> Visit Website</a>
            </div>
            <div class="card-footer text-muted">
                @PsuTrack
            </div>
        </div>
    </div>

</body>


</html>