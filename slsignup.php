<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="slstyles.css">
    <title>SL SignUp</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <div class="nav-left">
                <div class="nav-link-wrapper">
                    <a href="slhome.php">Home</a>
                </div>
                <div class="nav-link-wrapper">
                    <a href="slhiw.php">How It Works</a>
                </div>
                <div class="nav-link-wrapper">
                    <a href="slaboutus.php">About Us</a>
                </div>
                <div class="nav-link-wrapper">
                    <a href="slappdwnld.php">Download App</a>
                </div>
                <div class="nav-link-wrapper">
                    <a href="slcontact.php">Contact Us</a>
                </div>
                <div class="nav-link-wrapper">
                    <a href="slfaq.php">FAQ</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="loginlogo">
        <img class="sky-laundry-logo" src="images/sllogo.png">
    </div>

    <div class="signupbox">
        <h1>Sign Up</h1>
        <form method="post" action="signup.inc.php">
            <p>Username:</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password:</p>
            <input type="password" name="password" placeholder="Enter Password"><br>
            <p>Forename:</p>
            <input type="text" name="forename" placeholder="Enter Forename"><br>
            <p>Surname:</p>
            <input type="text" name="surname" placeholder="Enter Surname"><br>
            <p>Email:</p>
            <input type="text" name="email" placeholder="Enter Email"><br>
            <p>Address:</p>
            <input type="text" name="firstadd" placeholder="First Line"><br>
            <input type="text" name="secondadd" placeholder="Second Line"><br>
            <input type="submit" name="Submit"><br>
            <a href="sllogin.php">Log In</a><br>
        </form>
    </div>
</body>
</html>