<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require "function.php";
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
        
            <script>
                alert('data berhasil di hapus');
                document.location.href = 'admin.php';
            </script>
        
        ";
} else {
    echo "
        
            <script>
                alert('gagal');
                document.location.href = 'admin.php';
            </script>
        
        ";
}