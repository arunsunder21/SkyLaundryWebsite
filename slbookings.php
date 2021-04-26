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

    <div class="bookings1">
        <h1>Make a Booking</h1>
        <form method="post" action="createbooking.inc.php">
        <p>Collection Date:</p>
        <input type="date" name="date" max="2021-06-01">
        <p>Collection Time:</p>
        <input type="time" name="time" min="10:00" max="19:00"><br>
        <div class="submitbox">
            <input type ="submit" name="Book"><br>
        </div>
        </form>
    </div>
    <div class="bookings2">
        <h1>Bookings</h1>
        <table>
            <tr>
                <th>BookingNo.</th>
                <th>Collection Date</th>
                <th>Collection Time</th>
                <th>Expected Delivery Date</th>
                <th>Expected Delivery Time</th>
            </tr>
            <tr>
                <?php
                $user = $_SESSION["username"];
                $conn = new mysqli ("localhost","root","","SkyLaundry");
                if (mysqli_connect_error())
                {
                    die('Connection Error('.mysqli_connect_errno().') '
                    . mysqli_connect_error());
                }
                else
                {
                    $sql = "SELECT BookNo, CollDate, CollTime, DeliDate, DeliTime from Bookings WHERE Username='$user'";
                    $queres = $conn->query($sql);
                    $qrc = mysqli_num_rows($queres);

                    if ($qrc > 0)
                    {
                        while ($rows = $queres-> fetch_assoc())
                        {
                            echo "<tr><td>". $rows["BookNo"]. "</td><td>". $rows["CollDate"]. "</td><td>"
                            . $rows["CollTime"] ."</td><td>". $rows["DeliDate"] ."</td><td>"
                            . $rows["DeliTime"] ."</td></tr>";
                        }
                    }
                    else
                    {
                        echo "";
                    }
                }
                ?>
            </tr>
        </table>
    </div>
</body>
<script>
var todaysdate = new Date().toISOString().split('T')[0];
document.getElementsByName("date")[0].setAttribute('min', todaysdate);
</script>
</html>