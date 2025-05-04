<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE DATA</title>
</head>
<body>
    <?php 
    $hostname = 'localhost';
    $password = '';
    $username = 'root';
    $db = 'db_kampus';
    
 

    $connect = mysqli_connect($hostname, $username, $password, $db);

    if (!$connect) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    

    $sql = "DELETE FROM mahasiswa where nim = '2415323031'";

    $delete = mysqli_query($connect, $sql);


    if (!$delete) {
        echo "DATA TIDAK BERHASI DIHAPUS";
    } else {
        echo "DATA BERHASIL DIHAPUS";
    }

    mysqli_close($connect);
    
    ?>
</body>
</html>