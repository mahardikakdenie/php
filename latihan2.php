<?php
// cek ti
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["Jurusan"])
) {
    // redirect
    header("Location: latihan.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Detail Mahasiswa</h1>
    <ul>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["Jurusan"]; ?></li>
    </ul>
    <a href="latihan.php">Kembali Ke halaman Pertama</a>
</body>

</html>