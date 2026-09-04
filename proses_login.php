<?php

session_start();

require 'config/database.php';


$username = $_POST['username'];
$password = $_POST['password'];


$query = mysqli_query(
    $conn,
    "SELECT * FROM admin 
    WHERE username='$username' 
    AND password='$password'"
);


if (mysqli_num_rows($query) > 0) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit;

} else {

    header("Location: login.php?error=1");
    exit;

}

?>