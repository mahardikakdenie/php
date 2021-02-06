<?php

// pertemuan 2 - Sintaks PHP 
// SINTAKS PHP

// STANDAR Output
// echo, print
// print_r
// var_dump

//var_dump("Mahardika Kessuma Denie");

// Penulisan Php 
// 1.Penulisan Php di Dalam HTML 
// 2.Penulisan HTML di Dalam PHP

// Variabel dan Tipe data 
//Variabel
$nama = "Mahardika Kessuma Denie";



$nama_depan = "mahardika ";
$nama_belakang = "Kesuma Denie ";

echo $nama_depan . " " . $nama_belakang




?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Php</title>
</head>

<body>
    <h1>Selamat datang , <?php echo $nama; ?></h1>
</body>

</html>