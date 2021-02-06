<?php
// cek
if (isset($_POST["submit"])) {
    if ($_POST["Nama"] == "Mahardika" && $_POST["Password"] == "dika9232") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login Admin</h1>


    <?php if (isset($error)) : ?>
    <p style="color: red; font-style: italic">Password atau Email Salah</p>
    <?php endif ?>
    <ul>
        <form action="" method="post">

            <li>
                <label for="username">Username</label>
                <input type="text" name="Nama" id="username">
            </li>
            <br>
            <li>
                <label for="password">Password</label>
                <input type="password" name="Password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>




        </form>
    </ul>
</body>

</html>