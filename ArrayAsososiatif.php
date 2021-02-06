<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
    .kotak {
        width: 30px;
        height: 30px;
        background-color: #BADA55;
        text-align: center;
        line-height: 30px;
        margin: 3px;
        float: left;
        transition: 0.5s;
    }

    .kotak:hover {
        transform: rotate(360deg);
        border-radius: 50%;
    }

    .clear {
        clear: both;
    }
    </style>
</head>

<body>

    <?php

    $angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $number = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];



    // Array asosiatif
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

    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $a) : ?>
    <ul>
        <li>
            <?= $a["nama"]; ?>
        </li>
        <li>
            <?= $a["noHp"]; ?>
        </li>
        <li>
            <?= $a["email"]; ?>
        </li>
        <li>
            <?= $a["Jurusan"]; ?>
        </li>
    </ul>
    <?php endforeach ?>
</body>


</html>