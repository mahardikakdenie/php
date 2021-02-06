<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require "function.php";
$mahasiswa = query("SELECT * FROM mahasis3 ORDER BY id DESC ");

// tombol cari di klik
if (isset($_POST["cari"])) {
    $mahasiswa = Cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & SQL</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>

    <form action="" method="post">
        <input type="text" placeholder="Cari" name="keyword" size="40" autofocus autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>

    <a href="tambah.php">Tambah</a>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ? ')">Hapus</a>
            </td>
            <td><img src="images/<?= $row["gambar"]; ?>" width="50" alt="" srcset=""></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach ?>
    </table>
</body>

</html>