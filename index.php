<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="npm i bootstrap-icons">
    <title>Health Advice Group</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark p-3 mb-3">
        <div class="container">
            <!--Navbar title-->
            <a class="bs-primary navbar-brand">Health Advice Group</a>
                <!--Burger Menu button-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--Each page button that appears on the navbar-->
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link text-light">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link text-light">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="info.php" class="nav-link text-light">Information & Advice</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link text-light">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="settings.php" class="nav-link text-light">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.php" class="nav-link text-light">Login/Signup</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>

    <h1 class="primary text-center bg-info fw-bold">Health Advice Group</h1>

    <!--Main Body -->
    <div class="container">
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/storm.jpg" alt="Slide One" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/paper.jpg" alt="Slide Two" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/heatwave.jpg" alt="Slide Three" class="d-block w-100">
                </div>
            </div>
        </div>
</div>


    <!-- CARDS -->
    <h1 class="text-center text-success bg-dark">What we do:</h1>
    <div class="container bg-light p-3">
        <div class="row">
        <!--Card One-->
        <div class="col">
        <div class="card bg-light" style="width: 25rem;">
            <img src="img/paper.jpg" alt="" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-header">Advice</h4>
                        <p class="card-text">We offer free information and advice regarding health matters and how they can be affected by enviornmental weather</p>
                            <a href="info.php" class="btn btn-primary">Learn more</a>
                </div>
        </div>
</div>

        <!--Card Two-->
        <div class="col">
        <div class="card bg-light" style="width: 25rem;">
            <img src="img/lightning.jpg" alt="" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-header">About Us</h4>
                        <p class="card-text">As a charity organisation, it's our goal to help people around the world with environmental hazzards and dangerous weather conditions.</p>
                            <a href="about.php" class="btn btn-primary">Find out more</a>
                </div>
</div>
        </div>

        <!--Card Three-->
        <div class="col">
        <div class="card bg-light" style="width: 25rem;">
            <img src="img/clouds.jpg" alt="" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-header">Create an account with us!</h4>
                        <p class="card-text">Make our service more personalised for you by creating a free account today! Recieve personalised health and weather advice, along with 24/7 weather forecasting and air quality checks.</p>
                            <a href="signup.php" class="btn btn-primary">Create an account</a>
                </div>
                </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
    <!-- FOOTER -->
    <footer class="text-light border-bottom bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Health Advice Group</h3>
                    <a href="terms.php">Terms & Conditions</a>
                    <a href="privacy.php">Privacy Policy</a>
                </div>
                <div class="col">
                    <h4>Contact Us</h4>
                    <p>HealthAdviceGroup@gmail.com</p>
                    <p>*Phone Number*</p>
                </div>
                <div class="col text-center">
                    <p>@2023 copyright - Health Advice Group</p>
                </div>
            </div>
        </div>
</footer>
</html>