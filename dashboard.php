<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--Leaflet css link-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <!-- Weather API link-->
    <link href="https://api.open-meteo.com/v1/forecast?latitude=51.14&longitude=-2.73&hourly=temperature_2m,weathercode"/>
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

    <!-- GPS Location -->
    <div class="container d-flex justify-content-center">
        <button onclick="getLocation(), this.style.display='none'">Detect User Location</button>
        <p id="coords"></p>

        </div>
    <!-- Importing map from leaflet -->
    <div id="map" class="m-3"style="height: 500px;">
        <script>
            var x = document.getElementById("demo");

            //Function to get users location
            function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            //Error handling if the users browser does not support the program
            } else { 
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
            }

            //Gets the users lat and lng and puts it into seperate variables
            function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            var map = L.map('map').setView([latitude, longitude], 13);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);
            }


            
        //User location marker
        var marker = L.marker([51.5, -0.09]).addTo(map);
        </script>
    </div>

    <!-- API DATA -->

    <!-- Air Quality Data -->
    <?php

  

  

    //This gets the data and puts it into the variale
    $AQI_data = json_decode(file_get_contents('https://air-quality-api.open-meteo.com/v1/air-quality?latitude=52.5235&longitude=13.4115&hourly=european_aqi,us_aqi'), true);
    //Selects the US_AQI array section
    $AQIUS = $AQI_data["hourly"]["us_aqi"];
    //This gets the first five numbers from the hourly AQI array and puts them into variable.
    //There is a much better way to do this, by passing the index number through a foreach loop and separating each number. This version does not have this yet as it is currently used to test that the graph functions
    $AQIUS1 = $AQI_data["hourly"]["us_aqi"][1];
    $AQIUS2 = $AQI_data["hourly"]["us_aqi"][2];
    $AQIUS3 = $AQI_data["hourly"]["us_aqi"][3];
    $AQIUS4 = $AQI_data["hourly"]["us_aqi"][4];
    $AQIUS5 = $AQI_data["hourly"]["us_aqi"][5];
    //echo "<script> var linedata = json_encode($AQIUS)</script>";
    echo "<script> var linedata1 = $AQIUS1</script>";
    echo "<script> var linedata2 = $AQIUS2</script>";
    echo "<script> var linedata3 = $AQIUS3</script>";
    echo "<script> var linedata4 = $AQIUS4</script>";
    echo "<script> var linedata5 = $AQIUS5</script>";
    foreach($AQIUS as $value) {
        echo "<script> var linedata =$value</script>";
    }
    
    ?>
<div class="container">
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Now', '+1 hour', '+2 hours', '+3 hours', '+4 hours', '+5 hours'],
      datasets: [{
        label: 'Air Quality Index',
        data: [linedata, linedata1, linedata2, linedata3, linedata4, linedata5],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
      }
    }
  });
  </script>
  </div>

    <!-- Weather Forecasting -->
    <h2>

    <?php
    //Gets the content from the API and puts it into a variable
    $weather_data = json_decode(file_get_contents('https://api.open-meteo.com/v1/forecast?latitude=51.14&longitude=-2.75&current_weather=true'), true);
    //Gets the temperature data using the parameter
    $temp = $weather_data["current_weather"]["temperature"];
    //Gets the windspeed data using the parameter
    $windspeed = $weather_data["current_weather"]["windspeed"];
    //Gets the winddirection data using the parameter
    $winddirection = $weather_data["current_weather"]["winddirection"];
    //Gets the weather code data using the parameter
    $w_code = $weather_data["current_weather"]["weathercode"];

    //echo "<script> var temp $temp </script>";
    ?>
    </h2>
        <div class="container p-3">
        <div class="row">
    <!-- Temperature Card -->
    <div class="col">
        <div class="card bg-dark text-light" style="width: 25rem;">
                <div class="card-body">
                    <h4 class="card-header">Temperature</h4>
                        <p class="card-text">Current Temp: <?php echo $temp ?>°C</p>
                            <a href="info.php" class="btn btn-warning d-flex justify-content-center">How to deal with extreme temperatures</a>
                </div>
        </div>
    </div>
    <!-- Wind Card -->
    <div class="col">
        <div class="card bg-dark text-light" style="width: 25rem;">
                <div class="card-body">
                    <h4 class="card-header">Wind</h4>
                        <p class="card-text">Windspeed: <?php echo $windspeed ?>Km/h</p>
                        <p class="card-text">Wind Direction: <?php echo $winddirection ?>°</p>
                            <a href="info.php" class="btn btn-warning d-flex justify-content-center">How to deal with high winds</a>
                </div>
        </div>
    </div>
    <!-- Weather Code Card -->
    <div class="col">
        <div class="card bg-dark text-light" style="width: 25rem;">
                <div class="card-body">
                    <h4 class="card-header">Weather Code</h4>
                        <p class="card-text">Code: <?php echo $w_code ?></p>
                            <a href="weathercode.php" class="btn btn-warning d-flex justify-content-center">What does this mean?</a>
                </div>
        </div>
    </div>

    </div>
        </div>

    <!-- Daily Forecast -->
    <?php
    //Gets the content from the API and puts it into a variable
    $forecast_data = json_decode(file_get_contents('https://api.open-meteo.com/v1/forecast?latitude=51.13&longitude=-2.73&daily=temperature_2m_max,temperature_2m_min&timezone=auto'), true);
    //Gets the max temperature data using the parameter
    $maxtemp = $forecast_data["daily"]["temperature_2m_max"][0];
    $maxtemp1 = $forecast_data["daily"]["temperature_2m_max"][1];
    $maxtemp2 = $forecast_data["daily"]["temperature_2m_max"][2];
    $maxtemp3 = $forecast_data["daily"]["temperature_2m_max"][3];
    $maxtemp4 = $forecast_data["daily"]["temperature_2m_max"][4];
    $maxtemp5 = $forecast_data["daily"]["temperature_2m_max"][5];
    $maxtemp6 = $forecast_data["daily"]["temperature_2m_max"][6];
    //Gets the min temperature data using the parameter
    $mintemp = $forecast_data["daily"]["temperature_2m_min"][0];
    $mintemp1 = $forecast_data["daily"]["temperature_2m_min"][1];
    $mintemp2 = $forecast_data["daily"]["temperature_2m_min"][2];
    $mintemp3 = $forecast_data["daily"]["temperature_2m_min"][3];
    $mintemp4 = $forecast_data["daily"]["temperature_2m_min"][4];
    $mintemp5 = $forecast_data["daily"]["temperature_2m_min"][5];
    $mintemp6 = $forecast_data["daily"]["temperature_2m_min"][6];
    //Gets the current days for the next 7 days
    $maxtempday = $forecast_data["daily"]["time"][0];
    $maxtempday1 = $forecast_data["daily"]["time"][1];
    $maxtempday2 = $forecast_data["daily"]["time"][2];
    $maxtempday3 = $forecast_data["daily"]["time"][3];
    $maxtempday4 = $forecast_data["daily"]["time"][4];
    $maxtempday5 = $forecast_data["daily"]["time"][5];
    $maxtempday6 = $forecast_data["daily"]["time"][6];

    ?>
<!-- Daily Weather Forecast-->
<h1 class="text-center">Daily Forecast</h1>
<div class="container">
    <div class="row bg-light ">
        <div class="col border border-dark">
            <h4><?php echo 'Today'?></h4>
            <p>Max temperature: <?php echo $maxtemp?></p>
            <p>Min temperature: <?php echo $mintemp?></p>
        </div>
        <div class="col border border-dark">
            <h4><?php echo $maxtempday1?></h4>
            <p>Max temperature: <?php echo $maxtemp1?></p>
            <p>Min temperature: <?php echo $mintemp1?></p>
        </div>
        <div class="col border border-dark">
            <h4><?php echo $maxtempday2?></h4>
            <p>Max temperature: <?php echo $maxtemp2?></p>
            <p>Min temperature: <?php echo $mintemp2?></p>
        </div>
        <div class="col border border-dark">
            <h4><?php echo $maxtempday3?></h4>
            <p>Max temperature: <?php echo $maxtemp3?></p>
            <p>Min temperature: <?php echo $mintemp3?></p>
        </div>
        <div class="col border border-dark">
            <h4><?php echo $maxtempday4?></h4>
            <p>Max temperature: <?php echo $maxtemp4?></p>
            <p>Min temperature: <?php echo $mintemp4?></p>
        </div>
        <div class="col border border-dark">
            <h4><?php echo $maxtempday5?></h4>
            <p>Max temperature: <?php echo $maxtemp5?></p>
            <p>Min temperature: <?php echo $mintemp5?></p>
        </div>
        <div class="col border border-dark">
            <h4><?php echo $maxtempday6?></h4>
            <p>Max temperature: <?php echo $maxtemp6?></p>
            <p>Min temperature: <?php echo $mintemp6?></p>
        </div>
    </div>
</div>

    <!-- Bootstrap JS link-->
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