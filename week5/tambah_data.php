<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENAMBAH DATA</title>
</head>
<body>
<?php 
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'db_kampus';

    $connect = mysqli_connect($hostname, $username, $password, $db);

    if (!$connect) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $nim = "2415323031";
    $nama = "SYAHFRINO REZKY OKTAVIANT";
    $alamat =  "JEMBER";
    $telepon = "082331253567";

    $sql = "INSERT INTO mahasiswa (nim, nama, alamat, telepon) VALUES ('$nim', '$nama', '$alamat', '$telepon')";

    if (mysqli_query($connect, $sql)) {
        echo "DATA BERHASIL DITAMBAHKAN<br>";
    } else {
        echo "DATA TIDAK BERHASIL DITAMBAHKAN: " . mysqli_error($connect) . "<br>";
    }

    echo "NIM       : $nim <br>";
    echo "NAMA      : $nama <br>";
    echo "ALAMAT    : $alamat <br>";
    echo "TELEPON   : $telepon <br>";

    mysqli_close($connect);
?>
</body>
</html>
