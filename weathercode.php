<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Info</title>
</head>

<body class="bg-secondary fs-5">
    
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

    <!-- Weather Code Descriptions -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>0</h1>
                <p>Clear Sky</p>
            </div>
            <div class="container">
                <h1>1, 2, 3</h1>
                <p>Mainly clear, partly cloudy, and overcast</p>
            </div>
            <div class="container">
                <h1>45, 48</h1>
                <p>	Fog and depositing rime fog</p>
            </div>
            <div class="container">
                <h1>51, 53, 55</h1>
                <p>	Drizzle: Light, moderate, and dense intensity</p>
            </div>
            <div class="container">
                <h1>56, 57</h1>
                <p>	Freezing Drizzle: Light and dense intensity</p>
            </div>
            <div class="container">
                <h1>61, 63, 65</h1>
                <p>Rain: Slight, moderate and heavy intensity</p>
            </div>
            <div class="container">
                <h1>66, 67</h1>
                <p>	Freezing Rain: Light and heavy intensity</p>
            </div>
            <div class="container">
                <h1>71, 73, 75</h1>
                <p>Snow fall: Slight, moderate, and heavy intensity</p>
            </div>
            <div class="container">
                <h1>77</h1>
                <p>	Snow grains</p>
            </div>
            <div class="container">
                <h1>80, 81, 82</h1>
                <p>Rain showers: Slight, moderate, and violent</p>
            </div>
            <div class="container">
                <h1>85, 86</h1>
                <p>Snow showers slight and heavy</p>
            </div>
            <div class="container">
                <h1>95</h1>
                <p>Thunderstorm: Slight or moderate</p>
            </div>
            <div class="container">
                <h1>96, 99</h1>
                <p>Thunderstorm with slight and heavy hail</p>
            </div>
            <div class="container d-flex justify-content-center">
                <a class="text-decoration-none text-light" href="dashboard.php">Back to dashboard</a>
            </div>

</div>
<div class="col">
    <p>The United States Air Quality Index (AQI) ranges from 0-50 (good), 51-100 (moderate), 101-150 (unhealthy for sensitive groups), 151-200 (unhealthy), 201-300 (very unhealthy) and 301-500 (hazardous).</p>
</div>
<div class="col">
    <p>The European Air Quality Index (AQI) ranges from 0-20 (good), 20-40 (fair), 40-60 (moderate), 60-80 (poor), 80-100 (very poor) and exceeds 100 for extremely poor conditions.</p>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
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