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

    <!-- ACCORDION INFO -->
    <div class="container bg-info py-5">
        <!--Extreme Weather section-->
        <h2>Extreme Weather</h2>
        <div class="accordion">
            <!--Item 1-->
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#extremeaccitem1">
                        Heatwaves
                    </button>   
                </h3>
                <div id="extremeaccitem1" class="accordion-collapse collapse show">
                    <div class="accordion-text">
                        <p>A heatwave means that the temperature will be rapidly increasing, which can have multiple worsening effects on your body and health. Firstly, while sunburn may seem like not a big deal, extreme sunburn can be a serious issue and can cause a lot of damage. Sunscreen can be used to prevent this, along with staying inside or in shade to block out the sun entirely. While your skin may be protected, your eyes need to also be protected from sun's rays. Sunglasses help a lot with this, but if too much irrritation occurs, then it may be best to just stay inside.</p>
                    </div>
                </div>
            </div>
            <!--Item 2-->
            <div class="accordion-item">
                <h3 class="accordion-header" id="accitem">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#extremeaccitem2">
                        Blizzards
                    </button>   
                </h3>
                <div id="extremeaccitem2" class="accordion-collapse collapse">
                    <div class="accordion-text">
                        <p>A blizzard is a giant snow storm along with high power winds that can affect a person's health in multiple wayds. For instance, not only will the area be hard to travel through with thick snow and slippy ice, but the temperature will also be rapidly decreasing as the blizzard gets tougher. This can have a detrimental effect on the human body, as without enough heat it will increase the chance of catching illnesses like the flu or pneumonia, or even be cold enough to kill you. Staying in a heated environment with many layers of clothing will help prevent these cold-related illnesses</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Seasonal Allergies section-->
        <h2>Seasonal Allergies</h2>
        <div class="accordion">
            <!--Item 1-->
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#seasonaccitem1">
                        Hay fever
                    </button>   
                </h3>
                <div id="seasonaccitem1" class="accordion-collapse collapse show">
                    <div class="accordion-text">
                        <p>Hay fever is a mostly seasonal allergy which is cause when an excess amount of pollen is in the environment which the person has an allergic reaction to. There is no full-on cure, however there are multiple ways to prevent this, especially when pollen levels are high.</p>
                    </div>
                </div>
            </div>
            <!--Item 2-->
            <div class="accordion-item">
                <h3 class="accordion-header" id="accitem">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#seasonaccitem2">
                        Asthma
                    </button>   
                </h3>
                <div id="seasonaccitem2" class="accordion-collapse collapse">
                    <div class="accordion-text">
                        <p>Asthma is a lung conditions which can cause beathing difficulties at times. Asthmas gets worse during the Autumn and Winter seasons due to the weather conditions. There are treatments which include the use of 2 different types of inhalers. Reliever inhalers are used in emergencies to quickly relieve symptoms, whereas preventer inhalers are used daily to stop the symptoms from occuring.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Health Advice section-->
        <h2>How weather can affect your health</h2>
        <div class="accordion">
            <!--Item 1-->
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#healthaccitem1">
                        Barometric pressure
                    </button>   
                </h3>
                <div id="healthaccitem1" class="accordion-collapse collapse show">
                    <div class="accordion-text">
                        <p>Sudden increases or decreases in barometric pressure can cause problems like joint pain or headaches. It is always helpful to check pressure levels to prepare for these occurences.</p>
                    </div>
                </div>
            </div>
            <!--Item 2-->
            <div class="accordion-item">
                <h3 class="accordion-header" id="accitem">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#healthaccitem2">
                        Lung diseases
                    </button>   
                </h3>
                <div id="healthaccitem2" class="accordion-collapse collapse">
                    <div class="accordion-text">
                        <p>Humid weather can cuase breathing difficulties which can cause damage to the lungs. Air pollution is a big factor in lung diseases and it gets much worse in hot weather. It's recommended to use our air quality measuring system on the dashboard to see if it's safe breathing conditions.</p>
                    </div>
                </div>
            </div>
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