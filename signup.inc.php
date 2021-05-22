<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$forename = filter_input(INPUT_POST, 'forename');
$surname = filter_input(INPUT_POST, 'surname');
$email = filter_input(INPUT_POST, 'email');
$firstad = filter_input(INPUT_POST, 'firstadd');
$secondad = filter_input(INPUT_POST, 'secondadd');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "SkyLaundry";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

function emptySignUp($username, $password, $forename, $surname, $email, $firstad, $secondad)
{
    $outcome;
    if (empty($username) || (empty($password)) || (empty($forename)) || (empty($surname)) || (empty($email)) || (empty($firstad)) || (empty($secondad)))
    {
        $outcome = true;
    }
    else
    {
        $outcome = false;
    }
    return $outcome;
}

function NOUser($username)
{
    $outcome;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        $outcome = true;
    }
    else
    {
        $outcome = false;
    }
    return $outcome;
}

function InvUser($conn, $username, $email)
{
    $sqlD = "SELECT * FROM Users WHERE Username = ? OR Email = ?;";
    $sqlPst = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($sqlPst, $sqlD))
    {
        header("location: signup.php?error=FAILED");
        exit();
    }
    mysqli_stmt_bind_param($sqlPst, "ss", $username, $email);
    mysqli_stmt_execute($sqlPst);

    $fresult = mysqli_stmt_get_result($sqlPst);
    if ($thisa = mysqli_fetch_assoc($fresult))
    {
        return $thisa;
    }
    else
    {
        $nowr = false;
        return $nowr;
    }

    mysqli_stmt_close($sqlPst);
}

/*function NOPass($password)
{
    $securePass = password_hash($password, PASSWORD_DEFAULT);
    $outcome;
    if (!password_verify($password, $securePass))
    {
        $outcome = true;
    }
    else
    {
        $outcome = false;
    }
    return $outcome;
} */

function NOEmail($email)
{
    $outcome;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $outcome = true;
    }
    else
    {
        $outcome = false;
    }
    return $outcome;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////

if (emptySignUp($username, $password, $forename, $surname, $email, $firstad, $secondad) !== false)
{
    header("location: ../signup.php?error=emptyinfo");
    exit();
}
if (NOUser($username) !== false)
{
    header("location: ../signup.php?error=nogooduser");
    exit();
}
if (InvUser($conn, $username, $email) !== false)
{
    header("location: ../signup.php?error=useralreadytaken");
    exit();
}
/*if (NOPass($password) !== false)
{
    header("location: ../signup.php?error=nogoodpassword");
    exit();
} */
if (NOEmail($email) !== false)
{
    header("location: ../signup.php?error=nogoodemail");
    exit();
}

else
{

    if (mysqli_connect_error())
    {
        die('Connection Error('.mysqli_connect_errno().') '
        . mysqli_connect_error());
    }
    else
    {
        $securePass = password_hash($password, PASSWORD_DEFAULT);
        //password_verify($password, $securePass);
        $sql = "INSERT INTO Users(Username,Password,Forename,Surname,Email,Firstad,Secondad)
        values('$username', '$password', '$forename', '$surname', '$email', '$firstad', '$secondad')";
        if ($conn->query($sql))
        {
            echo "Details Submitted";
            header("location: ../signup.php?error=none");
            exit();
        }
        else
        {
            echo "Error: ".$sql ."<br>".$conn->error;
        }
        $conn->close();
    }
}
