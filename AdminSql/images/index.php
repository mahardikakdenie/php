<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil data Mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasis3");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// ambil data dari database -> Objct result (fetch)
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // array assosiatif
// mysqli_fetch_array() // Mengembalikan Keduanya
// mysqli_fetch_object()

// while ($look = mysqli_fetch_array($result)) {
//     var_dump($look["nama"]);
// }
if (!$result) {
    echo mysqli_error($db);
}

function tambah($data)
{
    // AMNIL DATA
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // upload gambar 
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasis3
     VALUES
 ('','$nama','$nrp','$email','$jurusan','$gambar')
";
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasis3 WHERE id = $id");

    return mysqli_affected_rows($conn);
};

function ubah($data)
{
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar =  htmlspecialchars($data["gambar"]);


    // query insert data
    $query = "UPDATE mahasis3 SET
                nama = '$nama', 
                nrp = '$nrp' ,
                email = '$email', 
                jurusan = '$jurusan',
                gambar = '$gambar',
            WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES["gambar"]["name"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpName = $_FILES["gambar"]["tmp_name"];

    // cek apakah ada gamnbar

    if ($error === 4) {
        echo "
            <script>

                alert('Pilih Gambar');

            </script>
        
        ";
        return false;
    }

    // cek
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtoLower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script>

            alert('Bukan Gambar');

        </script>
    
    ";
    }

    if ($ukuranFile > 10000000) {
        echo "
        <script>

            alert('Ukuran Gambar Terlalu Besar');

        </script>
    
    ";
    }
    // Lolos
    move_uploaded_file($tmpName, 'images/' . $namaFile);

    return $namaFile;
}

function Cari($keyword)
{
    $query = "SELECT * FROM mahasis3 WHERE nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%'";
    return query($query);
}