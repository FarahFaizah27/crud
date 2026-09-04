<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'config/database.php';

$query = mysqli_query($conn, "SELECT * FROM users");
$data_users = [];
while ($row = mysqli_fetch_assoc($query)) {
    $data_users[] = $row;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Data Pengguna</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body>
    <div class="dashboard-container">

        <div class="dashboard-header">
            <div>
                <h1>Dashboard</h1>
                <p>
                    Selamat datang,
                    <b><?php echo $_SESSION['username']; ?></b>
                </p>
            </div>

            <a href="logout.php" class="btn-logout">
                Logout
            </a>
        </div>

        <div class="data-card">
            <div class="data-header">
                <h2>Daftar Data Pengguna</h2>

                <button
                    type="button"
                    class="btn-tambah"
                    onclick="bukaModalTambah()"
                >
                    + Tambah Pengguna
                </button>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. Telepon</th>
                            <th>Alamat</th>
                            <th>Usia</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody id="dataUsers">
                        <?php
                        $no = 1;

                        foreach ($data_users as $user):
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $user['nama']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['no_telp']; ?></td>
                                <td><?php echo $user['alamat']; ?></td>
                                <td><?php echo $user['usia']; ?></td>

                                <td class="aksi">
                                    <button
                                        type="button"
                                        class="btn-edit"
                                        data-id="<?php echo $user['id']; ?>"
                                        data-nama="<?php echo htmlspecialchars($user['nama']); ?>"
                                        data-email="<?php echo htmlspecialchars($user['email']); ?>"
                                        data-no-telp="<?php echo htmlspecialchars($user['no_telp']); ?>"
                                        data-alamat="<?php echo htmlspecialchars($user['alamat']); ?>"
                                        data-usia="<?php echo htmlspecialchars($user['usia']); ?>"
                                        onclick="bukaModalEdit(this)"
                                    >
                                        Edit
                                    </button>

                                    <button
                                        type="button"
                                        class="btn-hapus"
                                        onclick="hapusUser(<?php echo $user['id']; ?>, this)"
                                    >
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   <?php include 'modaltambah.php'; ?>
   <?php include 'modaledit.php'; ?>

    <script src="assets/js/hapus.js"></script>
    <script src="assets/js/edit.js"></script>
    <script src="assets/js/tambah.js"></script>
</body>

</html>