<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky Laundry</title>
    <link rel="stylesheet" href="slstyles.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <header>
        <img class="sky-laundry-logo" src="images/sllogo.png">
    </header>

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
                <?php
                    if (isset($_SESSION["username"]))
                    {
                        echo "<div class='nav-link-wrapper'>";
                        echo "  <a href='slbookings.php'>Bookings</a>";
                        echo "</div>";
                    }
                ?>
            </div>
            <div class="nav-right">
                <?php
                    if (isset($_SESSION["username"]))
                    {
                        $user = $_SESSION["username"];
                        echo "<div class='nav-link-wrapper'>";
                        echo " <a href='#'>Welcome $user</a>";
                        echo "</div>";
                        echo "<div class='nav-link-wrapper'>";
                        echo " <a href='sllogout.inc.php'>Log Out</a>";
                        echo "</div>";
                    }
                    else
                    {
                        echo "<div class='nav-link-wrapper'>";
                        echo " <a href='sllogin.php'>Log In/Register</a>";
                        echo "</div>";
                    }
                ?>
            </div>
    </nav>

    <div class="container text-center p-4 bg-transparent mt-4">
        <div class="row">
            <div class="col col-sm-6">
                <h4 class="mt-4">About us</h4>
                <p class="text-start"> SkyLaundry is a company that takes pride in its work. We are a group of university students, and as a student run business, we know how precious your time can be.
                    Our aim is to provide customers with a convenient, flexible and reliable way to have your clothes laundered.​ 
                    <br> <br> We uphold high stands, yet keep our prices as competitive and low as possible. We offer a wide range of servies with professionals with over 20 years of experience
                    making sure, you get your laundry back spotless.
                </p>
            </div>
            <div class="col col-sm-6 row align-items-center">
                <img src="images/img4.jpg" class = "" alt= "" width="200px">
            </div>
        </div>
    </div>
    
</body>
</html>