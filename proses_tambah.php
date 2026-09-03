<?php

require 'config/database.php';

header('Content-Type: application/json');

// Mengambil data dari AJAX
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];

// Query menambahkan data pengguna
$query = mysqli_query(
    $conn,
    "INSERT INTO users (nama, email, no_telp, alamat, usia)
    VALUES ('$nama', '$email', '$no_telp', '$alamat', '$usia')"
);

// Mengecek apakah data berhasil ditambahkan
if ($query) {

    // Mengambil ID data yang baru ditambahkan
    $id = mysqli_insert_id($conn);

    echo json_encode([
        "status" => "success",
        "message" => "Data pengguna berhasil ditambahkan!",
        "user" => [
            "id" => $id,
            "nama" => $nama,
            "email" => $email,
            "no_telp" => $no_telp,
            "alamat" => $alamat,
            "usia" => $usia
        ]
    ]);

} else {

    echo json_encode([
        "status" => "error",
        "message" => "Data pengguna gagal ditambahkan!"
    ]);

}

?>