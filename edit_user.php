<?php

session_start();

// Mengecek apakah pengguna sudah login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'config/database.php';

// Mengambil ID dari URL
$id = $_GET['id'];

// Mengambil data pengguna berdasarkan ID
$query = mysqli_query(
    $conn,
    "SELECT * FROM users WHERE id='$id'"
);

// Mengambil satu data pengguna
$user = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Data Pengguna</title>

</head>

<body>

    <h1>Edit Data Pengguna</h1>

    <form id="formEdit">

    <!-- Menyimpan ID pengguna -->
    <input
        type="hidden"
        name="id"
        value="<?php echo $user['id']; ?>"
    >

    <div>

        <label for="nama">Nama</label>

        <br>

        <input
            type="text"
            id="nama"
            name="nama"
            value="<?php echo $user['nama']; ?>"
            required
        >

    </div>

    <br>

    <div>

        <label for="email">Email</label>

        <br>

        <input
            type="email"
            id="email"
            name="email"
            value="<?php echo $user['email']; ?>"
            required
        >

    </div>

    <br>

    <div>

        <label for="no_telp">No. Telepon</label>

        <br>

        <input
            type="text"
            id="no_telp"
            name="no_telp"
            value="<?php echo $user['no_telp']; ?>"
            required
        >

    </div>

    <br>

    <div>

        <label for="alamat">Alamat</label>

        <br>

        <textarea
            id="alamat"
            name="alamat"
            rows="4"
            required
        ><?php echo $user['alamat']; ?></textarea>

    </div>

    <br>

    <div>

        <label for="usia">Usia</label>

        <br>

        <input
            type="number"
            id="usia"
            name="usia"
            min="1"
            value="<?php echo $user['usia']; ?>"
            required
        >

    </div>

    <br>

    <button type="submit">
        Update Data
    </button>

    </form>

    <br>

    <a href="dashboard.php">
        Kembali ke Dashboard
    </a>

     <script src="assets/js/edit.js"></script>

</body>

</html>