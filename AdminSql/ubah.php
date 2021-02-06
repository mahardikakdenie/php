<?php
require "function.php";
// ambil data
$id = $_GET["id"];
// query data mahasiswa berdasarkan ID
$mhs = query("SELECT * FROM mahasis3 WHERE id=$id")[0];
if (isset($_POST["submit"])) {

    // cek
    if (ubah($_POST) > 0) {
        echo "
        
            <script>
                alert('data berhasil di diubah');
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
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="nrp">nrp : </label>
                <input type="text" name="nrp" value="<?= $mhs["nrp"]; ?>">
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for=" jurusan">jurusan : </label>
                <input type="text" name="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <img src="images/<?= $mhs["gambar"]; ?>" width="50" alt="" srcset="">
            </li>
            <li>
                <label for=" gambar">gambar : </label>
                <input type="file" name="gambar">">
            </li>
            <li>
                <button type=" submit" name="submit">ubah Data!</button>
            </li>
            <li>
                <a href="admin.php">Kembali</a>
            </li>
        </ul>
    </form>
</body>

</html>