<?php
session_start();

$date = filter_input(INPUT_POST, 'date');
$time = filter_input(INPUT_POST, 'time');
$username = $_SESSION['username'];
$colldate = date('d/m/Y', strtotime($date));
$deldate = date('d/m/Y', strtotime($date.'+ 1 days'));

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "SkyLaundry";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error())
{
    die('Connection Error('.mysqli_connect_errno().') '
    . mysqli_connect_error());
}

else
{
   $sql = "INSERT INTO Bookings (Username,CollDate,CollTime,DeliDate,DeliTime)
   values ('$username','$colldate','$time','$deldate','$time')";
   if ($conn->query($sql))
   {
       header ("location: slsubmitted.php");
   }
   else
   {
       echo "Error: ".$sql ."<br>".$conn->error;
   }
   $conn->close();
}