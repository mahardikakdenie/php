<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require "function.php";

// pagination
//konfigurasi
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM mahasis3"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasis3 LIMIT $awalData, $jumlahDataPerHalaman ");

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
    <!-- navigasi -->
    <?php if ($halamanAktif > 1) : ?>
    <a href="?page=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif ?>

    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if ($i == $halamanAktif) : ?>
    <a href="?page=<?= $i; ?>" style="font-weight: bold; color:redr"><?= $i; ?></a>
    <?php else : ?>
    <a href="?page=<?= $i; ?>"><?= $i; ?></a>
    <?php endif ?>
    <?php endfor ?>
    <?php if ($halamanAktif < $jumlahHalaman) : ?>
    <a href="?page=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif ?>
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
            <td><?= $i + $awalData ?></td>
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