<?php
session_start();

// Jika belum login, kembali ke login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Pengguna</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/form.css">

</head>

<body>

    <div class="form-container">

        <div class="form-card">

            <h1>Tambah Data Pengguna</h1>


            <form id="formTambah">

                <!-- Nama -->
                <div class="form-group">

                    <label for="nama">
                        Nama
                    </label>

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        required
                    >

                </div>


                <!-- Email -->
                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                    >

                </div>


                <!-- Nomor Telepon -->
                <div class="form-group">

                    <label for="no_telp">
                        Nomor Telepon
                    </label>

                    <input
                        type="text"
                        id="no_telp"
                        name="no_telp"
                        required
                    >

                </div>


                <!-- Alamat -->
                <div class="form-group">

                    <label for="alamat">
                        Alamat
                    </label>

                    <textarea
                        id="alamat"
                        name="alamat"
                        required
                    ></textarea>

                </div>


                <!-- Usia -->
                <div class="form-group">

                    <label for="usia">
                        Usia
                    </label>

                    <input
                        type="number"
                        id="usia"
                        name="usia"
                        required
                    >

                </div>


                <!-- Tombol -->
                <div class="form-button">

                    <button
                        type="submit"
                        class="btn-simpan"
                    >
                        Simpan
                    </button>


                    <a
                        href="dashboard.php"
                        class="btn-kembali"
                    >
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>


    <!-- JavaScript AJAX Tambah -->
    <script src="assets/js/tambah.js"></script>

</body>

</html>