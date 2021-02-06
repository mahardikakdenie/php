<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_POST["submit"])) : ?>
    <h1>Selamat Datanng , <?= $_POST["Nama"]; ?></h1>
    <?php endif ?>
    <form action="" method="post">
        Masukan Nama :
        <input type="text" name="Nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>

</body>

</html>