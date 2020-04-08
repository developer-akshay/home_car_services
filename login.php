<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="resources/css/login.css">
    
    <title>Signup/Login</title>
</head>
<body>
    <!-- hum 4 screens baneyenge container component ka andar -->
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <!-- signup -->
            <form method="POST" action="user_login.php">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab social-facebook"><img src="resources/img/facebook.png" alt="facebook"></i></a>
                    <a href="#" class="social"><i class="fab social-instagram"><img src="resources/img/instagram.png" alt="instagram"></i></a>
                    <a href="#" class="social"><i class="fab social-github"><img src="resources/img/github.png" alt="github"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text"      name="username"     placeholder="Username" />
                <input type="email"     name="email"        placeholder="Email" />
                <input type="password"  name="password"     placeholder="Password" />
                <input type="text"      name="address"      placeholder="Address" />
                <input type="text"      name="city"         placeholder="City" />
                <input type="text"      name="postal_code"  placeholder="Postal code" />
                <input type="text"      name="phone_no"     placeholder="Phone No" />
                <button name="sign_up">Sign Up</button>
            </form>

        </div>
        <div class="form-container sign-in-container">
            <!-- signin -->
            <form method="POST" action="user_login.php">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab social-facebook"><img src="resources/img/facebook.png" alt="facebook"></i></a>
                    <a href="#" class="social"><i class="fab social-instagram"><img src="resources/img/instagram.png" alt="instagram"></i></a>
                    <a href="#" class="social"><i class="fab social-github"><img src="resources/img/github.png" alt="github"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email"     name="email"    placeholder="Email" />
                <input type="password"  name="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button name="sign_in">Sign In</button>
            </form>


        </div>
        <div class="overlay-container">
            <!-- The overlay code -->
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>
                        To keep connected with us please login with your personal info
                    </p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>

        </div>
    </div>

    <script src="resources/js/login.js"></script>
</body>
</html>