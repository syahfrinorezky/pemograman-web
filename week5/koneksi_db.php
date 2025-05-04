<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONEKSI DATABASE</title>
</head>
<body>
    <?php 
    $hostname = 'localhost';
    $password = '';
    $root = 'root';
    
 

    $connect = mysqli_connect('localhost', 'root', '');
    $notconnect = mysqli_connect_errno();

    if ($notconnect) {
        echo "Koneksi gagal";
    }

    $sql = "CREATE DATABASE db_kampus";
    if(mysqli_query($connect, $sql)) {
        echo "Pembuatan database berhasil";
    } else {
        echo " Pembuatan database gagal";
    }

    mysqli_close($connect)
    ?>
</body>
</html>