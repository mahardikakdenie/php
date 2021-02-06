<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require "function.php";

if (isset($_POST["submit"])) {


    // cek
    if (tambah($_POST) > 0) {
        echo "
        
            <script>
                alert('data berhasil di tambahkan');
                document.location.href = 'admin.php';
            </script>
        
        ";
    } else {
        echo "
        
        <script>
            alert('data gagal');
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" required>
            </li>
            <li>
                <label for="nrp">nrp : </label>
                <input type="text" name="nrp">
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email">
            </li>
            <li>
                <label for="jurusan">jurusan : </label>
                <input type="text" name="jurusan">
            </li>
            <li>
                <label for="gambar">gambar : </label>
                <input type="file" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
            <li>
                <a href="admin.php">Kembali</a>
            </li>
        </ul>
    </form>
</body>

</html>