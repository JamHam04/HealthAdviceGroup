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

    <!-- SIGNUP FORM-->
    <div class="container p-5 text-center bg-light fs-3">
    <form method="post">
    <!--Inputs are required so that no empty fields can be sumbitted to the table accidentally-->
    <label>Email</label>
    <div>
        <input type="email" name="email" required />
    </div>
        <label>Password</label>
    <div>
        <input type="password" name="password" required />
    </div>
        <label>Confirm Password</label>
    <div>
        <input type="password2" name="password2" required />
    </div>
        <input class="m-3" type="submit" name="register" value="Register"></input>
    </form>
    <a href="login.php">Already have an account?</a>
<?php
    session_start();
    include('config.php');
    //Assigns inputs to variable ready to be sent to database
    if (isset($_POST['register'])) {
        $email = $_POST['email'];
        if($_POST['password']!==$_POST['password2']) {
            
            header("Location: passwordcomf.php");
        }   else {
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            }
            //ADD IF STATEMENTS FOR PASSWORD VALIDATION (LENGTH, CHARACTERS)
            //hash the password and encrypt using pre-built PHP variable (PASSWORD_BCRYPT)
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $password_hash = password_hash($password2, PASSWORD_BCRYPT);
            //Connects with database to check if any email fields match the one the user has just inputted.
            $query = $conn->prepare("SELECT * FROM users WHERE email=:email");
            $query->bindParam("email", $email);
            $query->execute();
            //If they do match  then the email is already in the database (value higher than 0) and cannot be used again.
            if ($query->rowCount() > 0) {
                echo '<p class="error">This email is already in-use</p>';
                exit();
            }
            //Seems to force the program to output error message and doesn't upload to database, even if password is not less the 8 characters
            /*if ($password_hash < 8) {
                echo '<p class="error">Please enter a password longer than 8 characters</p>';
                exit ();
            }*/
            //Else if there isn't that email already in the database, then it can carry on to the next step
            if ($query->rowCount() == 0) {
                //Prepares the inputs to be sent into SQL table through the config file with different values so that the password inputted and encrypted password do not overlap
                $query = $conn->prepare("INSERT INTO users(password,email) VALUES (:password_hash,:email)");
                //Binds the variables into the SQL table so that they are stored in the database
                $query->bindParam("password_hash", $password_hash);
                $query->bindParam("email", $email);
                //$result is used to tell the user if the process succeeded or failed
                $result = $query->execute();
                //If the SQL query has succeded then a confirmation message will appear on screen for users
                if ($result) {
                    echo '<p class="success">You have successfully registered</p>';
                    header("location: UserInfo.php");
                //Else an error message will appear
                } else {
                    echo '<p class="error">An error occured</p></br><p>Please contact us if this issue keeps occuring</p>';
                }
            }
        
        }

?>




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
</html>