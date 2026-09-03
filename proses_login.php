<?php

session_start();

require 'config/database.php';

// Mengambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Mengecek username dan password
$query = mysqli_query(
    $conn,
    "SELECT * FROM admin 
    WHERE username='$username' 
    AND password='$password'"
);

// Mengecek apakah akun admin ditemukan
if (mysqli_num_rows($query) > 0) {

    // Menyimpan status login ke session
    $_SESSION['login'] = true;

    // Menyimpan username admin
    $_SESSION['username'] = $username;

    // Masuk ke dashboard
    header("Location: dashboard.php");
    exit;

} else {

    header("Location: login.php?error=1");
    exit;

}

?>