<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$forename = filter_input(INPUT_POST, 'forename');
$surname = filter_input(INPUT_POST, 'surname');
$email = filter_input(INPUT_POST, 'email');
$firstad = filter_input(INPUT_POST, 'firstadd');
$secondad = filter_input(INPUT_POST, 'secondadd');
if (empty($username) || (empty($password)) || (empty($forename)) || (empty($surname)) || (empty($email)) || (empty($firstad)) || (empty($secondad)))
{
    echo "There are some missing fields";
    die();
}

else
{
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
        $sql = "INSERT INTO Users (Username,Password,Forename,Surname,Email,Firstad,Secondad)
        values ('$username', '$password', '$forename', '$surname', '$email', '$firstad', '$secondad')";
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
}