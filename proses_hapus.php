<?php

require 'config/database.php';

// Mengambil ID dari AJAX
$id = $_POST['id'];

// Query menghapus data berdasarkan ID
$query = mysqli_query(
    $conn,
    "DELETE FROM users WHERE id='$id'"
);

// Mengecek apakah data berhasil dihapus
if ($query) {

    echo json_encode([
        "status" => "success",
        "message" => "Data pengguna berhasil dihapus!"
    ]);

} else {

    echo json_encode([
        "status" => "error",
        "message" => "Data pengguna gagal dihapus!"
    ]);

}

?>