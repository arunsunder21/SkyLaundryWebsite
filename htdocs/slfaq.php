
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
        <h5>How Do I use This Service?</h5>
        
        <p>You can either give us a call or book a slot via email which is available on our "Contact Us" page.</p>

        <h5>How Can I pay?</h5>
        <p>We accept card payments but can accept cash if needed.</p>

        <h5>Cancelling or updating a slot?</h5>
        <p>You can update or cancel your slot. All we ask for is let us know atleast 2 hours before.</p>

        <h5>Do I need to be at home when Laundary is collected and delivered?</h5>
        <p>No. You dont need to be in. Just leave us a note where to collect it from and where to deliver it to such as Porch.</p>

        <h5>Why Choose SkyLaundary?</h5>
        <p>Insured Company..............Non-smoking Environment................Collection and Delivery</p>
    </main>

    <footer>
        <h3>copyright © 2021-2030.All Rights Reserved. </h3>
    </footer>
        



</body>
</html>






   