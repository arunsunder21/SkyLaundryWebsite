<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky Laundry</title>
    <link rel="stylesheet" href="slstyles.css">
</head>
<body>
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
    
    <main>
        <h1>CONTACT US</h1>
        <h2>Getting in touch is easy!</h2>
        <p>If you are interested in the services we provide, please give us a call on 0121 800 9630 or email us at Skylaundary2021@hotmail.com</p>

        <a href="mailto:skylaundary2021@hotmail.com?Subject=Book a Slot">Book Your Slots Via E-mail</a>

    </main> 
   
    
    <section class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3428.02820483128!2d-2.129645731218289!3d52.58801885647489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487083cb0f37dc97%3A0x9cb8e3cc0509a0d0!2sUniversity%20of%20Wolverhampton!5e0!3m2!1sen!2suk!4v1619740078858!5m2!1sen!2suk" width="1333" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        
    </section>
    


    <footer>
        <h3>copyright © 2021-2030.All Rights Reserved. </h3>
     </footer>



</body>
</html>