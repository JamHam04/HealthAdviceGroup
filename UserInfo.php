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
    <title>Health Advice Group</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark p-3 mb-3">
        <div class="container h-100">
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



    <!-- LOGIN FORM-->
    <!--
    <div class="container p-5 text-center bg-light fs-3 input-group-prepend">
    <form method="post">
    <label class="input-group-text" for="inputGroupSelect01">Select</label>
    <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
-->

<!-- Health form --> 
<form method="POST">
<div class="container">

            <h5>Enter Location</h5>
            <div class="condition-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
</select>
            </div>
            <div class="condition-group">
                <label>Age</label>
                <input type="age" name="age">
            </div>
            <div class="condition-group">
                <label>Weight</label>
                <input type="weight" name="weight" placeholder="kilograms">
            </div>
            <div class="condition-group">
                <label>Height</label>
                <input type="height" name="height" placeholder="centimetres">
            </div>
            <label for="allergy">Allergy</label>
                <select name="allergy" id="allergy">
                    <option value="none">None</option>
                    <option value="Hay Fever">Hay Fever</option>
                    <option value="Asthma">Asthma</option>
</select>

            <div class="condition-group">
                <button type="submit" name="location" class="btn btn-primary">Confirm</button>
            </div>

</div>
</form>



<?php

$gender = "";
$age = "";
$weight = "";
$height = "";
$allergy = "";
include('config.php');
    if (isset($_POST['location'])) {
        //Posts results from form
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $allergy = $_POST['allergy'];
            $query = $conn->prepare("SELECT * FROM health WHERE age=:age");
            $query->bindParam("age", $gender);
            $query->execute();
            if ($query->rowCount() == 0) {
                //Prepares the inputs to be sent into SQL table through the config file with different values so that the password inputted and encrypted password do not overlap
                $query = $conn->prepare("INSERT INTO health(gender,age,weight,height,allergy) VALUES (:gender,:age,:weight,:height,:allergy)");
                //Binds the variables into the SQL table so that they are stored in the database
                $query->bindParam("gender", $gender);
                $query->bindParam("age", $age);
                $query->bindParam("weight", $weight);
                $query->bindParam("height", $height);
                $query->bindParam("allergy", $allergy);
                //$result is 
                $result = $query->execute();
                //If the SQL query has succeded then a confirmation message will appear on screen for users
                if ($result) {
                    echo '<p class="success">User info successfully updated!</p>';

                //Else an error message will appear
                } else {
                    echo '<p class="error">An error occured</p></br><p>Please contact us if this issue keeps occuring</p>';
                }
            }
        }

?>
<!-- Current data scetion -->
<div class="container bg-dark text-light">
    <p>Gender: <?php echo $gender ?></p>
    <p>Age: <?php echo $age ?></p>
    <p>Weight: <?php echo $weight ?>kg</p>
    <p>Height: <?php echo $height ?>cm</p>
    <p>Allergy: <?php echo $allergy ?></p>
</div>
    </body>
        <!-- FOOTER -->
        <footer class="text-light fixed-bottom bg-dark">
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