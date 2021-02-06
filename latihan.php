<?php

$_GET["Nama"] = "Mahardika Kessuma Denie";
$_GET["NRP"] = "0451524522";

$mahasiswa = [
    [
        "nama" => "Mahardika Kessuma Denie",
        "noHp" => "081312356933",
        "email" => "dikamahar884@gmailcom",
        "Jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Reihan Awwaludin",
        "noHp" => "081312356203",
        "email" => "wawahsetan@gmailcom",
        "Jurusan" => "Seni Musik"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Get&Post</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <a
                href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["noHp"]; ?>&email=<?= $mhs["email"]; ?>&Jurusan=<?= $mhs["Jurusan"]; ?>">nama
                : <?= $mhs["nama"] ?></a>
        </li>
    </ul>
    <?php endforeach ?>
</body>

</html>