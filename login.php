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
    
    <div class="container p-5 text-center bg-light fs-3">
    <form method="post">
    <label>Email</label>
        <div>
            <input type="text" name="email"  required></input>
        </div>
            <label>Password</label>
        <div>
            <input type="password" name="password" required></input>
        </div>
            <input class="m-3" type="submit" name="login" value="Login"></input>
    </form>
    <a href="signup.php">Don't have an account?</a>
    </div>
    </body>
    <?php

//Uploads data from inputs to database
session_start();
include('config.php');
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = $conn->prepare("SELECT * FROM users WHERE email=:email");
    $query->bindParam("email", $email);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo '<p class="error">Email/Password is wrong</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['id'];
            header("Location: UserInfo.php");
            echo '<p class="text-center">You are now logged in</p></br><a class="text-center" href="index.php">Return To Home</a>';

        } else {
            echo '<p class="error">Email/Password is wrong</p>';
        }
    }
}
?>
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