<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if (empty($username) || (empty($password)))
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
        $sql = "SELECT * FROM Users WHERE Username='$username' AND Password='$password';";
        $queres = mysqli_query($conn, $sql);
        $qrc = mysqli_num_rows($queres);

        if ($qrc > 0)
        {
            session_start();
            $_SESSION["username"] = $username;
            header("location: slhome.php");
            exit();
        }
        else
        {
            echo "Login Unsuccessful";
        }
        $conn->close();
    }
}