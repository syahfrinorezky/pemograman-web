<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUAT TABEL DATABASE</title>
</head>
<body>
    <?php 
    $hostname = 'localhost';
    $password = '';
    $root = 'root';
    $db = 'db_kampus';

    $connect = mysqli_connect($hostname, $root, $password, $db);
    $notconnect = mysqli_connect_errno();

    if ($notconnect) {
        echo "Koneksi gagal";
    }


    $sql = "CREATE TABLE mahasiswa (
        nim VARCHAR(10) NULL,
        nama VARCHAR(50) NULL,
        alamat VARCHAR(100) NULL,
        telepon VARCHAR(15) NULL,
        CONSTRAINT pk_datasiswa PRIMARY KEY (nim)
    )";

    if(mysqli_query($connect, $sql)) {
        echo "Pembuatan tabel berhasil";
    } else {
        echo "Pembuatan tabel gagal : " .  mysqli_error($connect);
    }


    mysqli_close($connect);
    ?>
</body>
</html>