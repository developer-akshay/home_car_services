<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="vendor/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendor/css/grid.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet"> 
    
    <title>Home Car Services</title>
</head>
<body>
    <header>

        <nav>
            <div class="row">
                <!-- for the logo -->
                <img src="resources/img/logo_black.jpg" alt="Home Car Services" class="logo">
                <ul class="main-nav">
                    <li><a href="#">Services</a></li>
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Our cities</a></li>
                    <li>
                        <?php session_start();
                        if(empty($_SESSION['email'])) { ?>
                            <a href="login.php" >Signup / Login</a>
                        <?php } 
                        else { ?>
                        <form method="GET" action="user_login.php">
                            <a href="login.php" name="logout">logout&nbsp; <?php echo"$_SESSION[email]"; ?></a>
                        </form>
                        <?php   }  ?>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- hum yeh yeh banayenge logo,nav,hero image ,main heading  -->
        <div class="hero-text-box">
            <h1>A clean car says a lot about you</h1>
            <a class=" btn btn-full" href="#">Can't Wait For A Car Wash</a>
            <a class=" btn btn-ghost" href="#">Show Me More</a>
        </div>
    </header>

    <section class="section-features">

        <div class="row">
            <h2>Get a showroom shine , Every time</h2>
            <p class="long-copy">
                Hello , We're specialized in car wash , computer diagnostics
                and repair. We also specialize in A/C service, brakes, suspension,
                engine cooling systems, and much more, including all of your vehicle
                maintenance services.
            </p>
        </div>

        <div class="row">
            <div class="col span-1-of-4 box">
                <i class="car_wash">
                    <img src="vendor/fonts/car_wash.png" alt="Car Wash">
                </i>
                <h3>Car Wash</h3>
                <p>
                    One of our main priorities is to clean the our
                    client's vehicle, guarenteed. We also recommend any improvements
                    clients can have for their vehicle.
                </p>
            </div>

            <div class="col span-1-of-4 box">
                <i class="car_service">
                    <img src="vendor/fonts/car_service.png" alt="Car Service">
                </i>
                <h3>Car and Guest Service</h3>
                <p>
                    Not only do we offer great service to vehicles,
                    but we also ensure trust and reliability with our clients.
                </p>
            </div>

            <div class="col span-1-of-4 box">
                <i class="car_knowledge">
                    <img src="vendor/fonts/car_knowledge.png" alt="Car Knowledge">
                </i>
                <h3>Car Knowledge</h3>
                <p>
                    As vehicles improve in technology, so do we. We study and keep
                    up to date with any updates vehicles may have.
                </p>
            </div>

            <div class="col span-1-of-4 box">
                <i class="car_parts">
                    <img src="vendor/fonts/car_parts.png" alt="Car Parts">
                </i>
                <h3>Best Part Change</h3>
                <p>
                    we provide best quality of automobile parts and great discounts in exchange of old parts.
                </p>
            </div>
        </div>

    </section>

    <section class="section-carwash">
        <ul class="carwash-showcase clearfix">
            <li>
                <figure class="carwash-photo">
                    <img src="resources/img/audi_car_wash.jpg" alt="audi car wash" class="carwash-size">
                </figure>
            </li>
            <li>
                <figure class="carwash-photo">
                    <img src="resources/img/bmw_car_wash.jpg" alt="bmw car wash" class="carwash-size">
                </figure>
            </li>
            <li>
                <figure class="carwash-photo">
                    <img src="resources/img/Ferrari_car_wash.jpg" alt="ferrari car wash" class="carwash-size">
                </figure>
            </li>
            <li>
                <figure class="carwash-photo">
                    <img src="resources/img/jaguar_car_wash.jpg" alt="jaguar car wash" class="carwash-size">
                </figure>
            </li>
        </ul>
        <ul class="carwash-showcase clearfix">
            <li>
                <figure class="carwash-photo">
                    <img src="resources/img/lam_car_wash.jpg" alt="lambergeni car wash" class="carwash-size">
                </figure>
            </li>
            <li>
                <figure class="carwash-photo">
                    <img src="resources/img/mustang_car_wash.jpg" alt="mustang car wash" class="carwash-size">
                </figure>
            </li>
            <li>
                <figure class="carwash-photo">
                    <img src="resources/img/porche_car_wash.jpg" alt="porche car wash" class="carwash-size">
                </figure>
            </li>
            <li>
                <figure class="carwash-photo">
                    <img src="resources/img/engine_car_wash.jpg" alt="engine car wash" class="carwash-size">
                </figure>
            </li>
        </ul>
    </section>

    <section class="section-steps">
        <div class="row">
            <h2>
                How it works &mdash; Simple as 1, 2, 3
            </h2>
            <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <img src="resources/img/app_logo.jpg" alt="App Logo" class="app_logo">
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="work-steps">
                        <div>1</div>
                        <p>Chosse the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    <div class="work-steps">
                        <div>2</div>
                        <p>Book your appointment using our mobile app or website . Or you can evne call us!</p>
                    </div>
                    <div class="work-steps">
                        <div>3</div>
                        <p>Enjoy your clean car in less then 60 minutes. See you the next time!</p>
                    </div>

                    <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="Ios app"></a>
                    <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="android app"></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-cities">
        <div class="row">
            <h2>We're currentley in these cities</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-4 city">
                <img src="resources/img/mohali.jpg" alt="mohali" class="diffcity">
                <h3>MOHALI</h3>
                <div class="city-features">
                    <i class="ion-ios-person"><img src="resources/img/person-outline.svg" alt="ion-ios-person"></i>
                    <p>900 + Happy Customers</p>
                </div>
                <div class="city-features">
                    <i class="employees"><img src="resources/img/employees.svg" alt="employees"></i>
                    <p>20 Available Employees</p>
                </div>
            </div>
            <div class="col span-1-of-4 city">
                <img src="resources/img/ambala.jpg" alt="ambala" class="diffcity">
                <h3>AMBALA</h3>
                <div class="city-features">
                    <i class="ion-ios-person"><img src="resources/img/person-outline.svg" alt="ion-ios-person"></i>
                    <p>500 + Happy Customers</p>
                </div>
                <div class="city-features">
                    <i class="employees"><img src="resources/img/employees.svg" alt="employees"></i>
                    <p>30 Available Employees</p>
                </div>
            </div>
            <div class="col span-1-of-4 city">
                <img src="resources/img/chandigarh.jpg" alt="chandigarh" class="diffcity">
                <h3>CHANDIGARH</h3>
                <div class="city-features">
                    <i class="ion-ios-person"><img src="resources/img/person-outline.svg" alt="ion-ios-person"></i>
                    <p>720 + Happy Customers</p>
                </div>
                <div class="city-features">
                    <i class="employees"><img src="resources/img/employees.svg" alt="employees"></i>
                    <p>25 Available Employees</p>
                </div>
            </div>
            <div class="col span-1-of-4 city">
                    <img src="resources/img/zirakpur.jpg" alt="zirakpur" class="diffcity">
                    <h3>ZIRAKPUR</h3>
                    <div class="city-features">
                        <i class="ion-ios-person"><img src="resources/img/person-outline.svg" alt="ion-ios-person"></i>
                        <p>900 + Happy Customers</p>
                    </div>
                    <div class="city-features">
                        <i class="employees"><img src="resources/img/employees.svg" alt="employees"></i>
                        <p>38 Available Employees</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="section-plans">
        <div class="row">
            <h2>The champagne of car health.</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>premium</h3>
                        <p class="plan-price">₹ 4000 </p>
                        <p class="plan-price-quote">The carwash people.</p>
                    </div>
                    <div>
                        <ul>

                            <li>
                                <i class="ios-ios-checkmark-empty">
                                    <img src="resources/img/check.png" alt="check">
                                </i>
                                Filter & Oil change
                            </li>
                            <li>
                                <i class="ios-ios-checkmark-empty">
                                    <img src="resources/img/check.png" alt="check">
                                </i>
                                Engine cleaning
                            </li>
                            <li>
                                <i class="ios-ios-checkmark-empty">
                                    <img src="resources/img/check.png" alt="check">
                                </i>
                                Interior cleaning
                            </li>
                            <li>
                                <i class="ios-ios-checkmark-empty">
                                    <img src="resources/img/check.png" alt="check">
                                </i>
                                Car Wash
                            </li>

                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-full">Sign up now</a>
                    </div>
                </div>
            </div>

            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Pro</h3>
                        <p class="plan-price">₹ 3000 </p>
                        <p class="plan-price-quote">The carwash people.</p>
                    </div>
                    <div>
                        <ul>

                            <li>
                                <i class="ios-ios-checkmark-empty">
                                    <img src="resources/img/close.png" alt="close">
                                </i>
                                Filter & Oil change
                            </li>
                            <li>
                                <i class="ios-ios-checkmark-empty">
                                    <img src="resources/img/check.png" alt="check">
                                </i>
                                Engine cleaning
                            </li>
                            <li>
                                <i class="ios-ios-checkmark-empty">
                                    <img src="resources/img/check.png" alt="check">
                                </i>
                                Interior cleaning
                            </li>
                            <li>
                                <i class="ios-ios-checkmark-empty">
                                    <img src="resources/img/check.png" alt="check">
                                </i>
                                Car Wash
                            </li>

                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-full">Sign up now</a>
                    </div>
                </div>
            </div>

            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Starter</h3>
                        <p class="plan-price">₹ 2000 </p>
                        <p class="plan-price-quote">The carwash people.</p>
                    </div>
                    <div>
                        <ul>

                            <li>
                                <i class="ios-ios-checkmark-empty">
                                    <img src="resources/img/close.png" alt="close">
                                </i>
                                Filter & Oil change
                            </li>
                            <li>
                                <i class="ios-ios-checkmark-empty">
                                    <img src="resources/img/close.png" alt="close">
                                </i>
                                Engine cleaning
                            </li>
                            <li>
                                <i class="ios-ios-checkmark-empty">
                                    <img src="resources/img/check.png" alt="check">
                                </i>
                                Interior cleaning
                            </li>
                            <li>
                                <i class="ios-ios-checkmark-empty">
                                    <img src="resources/img/check.png" alt="check">
                                </i>
                                Car Wash
                            </li>

                        </ul>
                    </div>
                    <div >
                        <a href="#" class="btn btn-full">Sign up now</a>
                    </div>
                </div>
            </div>

            
            
        </div>
    </section>


    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Photos</a></li>
                    <li><a href="#">IOS App</a></li>
                    <li><a href="#">Android App</a></li>
                </ul>
            </div>
            <div class="col span-1-of-2">
                <ul class="social-icons">
                    <li><a href="#"><i class="social-facebook"><img src="resources/img/facebook.png" alt="facebook"></i></a></li>
                    <li><a href="#"><i class="social-instagram"><img src="resources/img/instagram.png" alt="instagram"></i></a></li>
                    <li><a href="#"><i class="social-github"><img src="resources/img/github.png" alt="github"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p>
                Copyright &copy;  2020 by  Home Car Services.  All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>