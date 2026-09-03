<?php

require 'config/database.php';

header('Content-Type: application/json');

// Mengambil data dari AJAX
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];

// Query update data
$query = mysqli_query(
    $conn,
    "UPDATE users SET
        nama='$nama',
        email='$email',
        no_telp='$no_telp',
        alamat='$alamat',
        usia='$usia'
    WHERE id='$id'"
);

// Mengecek apakah update berhasil
if ($query) {

    echo json_encode([
        "status" => "success",
        "message" => "Data pengguna berhasil diperbarui!",
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
        "message" => "Data pengguna gagal diperbarui!"
    ]);

}

?>