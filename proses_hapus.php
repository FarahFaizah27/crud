<?php

require 'config/database.php';


$id = $_POST['id'];

$query = mysqli_query(
    $conn,
    "DELETE FROM users WHERE id='$id'"
);


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