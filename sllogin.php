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
    <title>SL Login</title>
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

    <div class="loginbox">
        <h1>Login</h1>
        <form method="post" action="sllogin.inc.php">
            <p>Username:</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password:</p>
            <input type="password" name="password" placeholder="Enter Password"><br>
            <input type="submit" name="Login"><br>
            <a href="slsignup.php">Sign Up</a><br>
        </form>
    </div>
</body>
</html>