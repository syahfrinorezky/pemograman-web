<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA</title>
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


     $sql = "UPDATE mahasiswa set alamat = 'Jimbaran' where nim = '2415323031'";

     $update = mysqli_query($connect, $sql);

     if (!$update) {
        echo "DATA GAGAL DIUPDATE <br>";
    } else {
        echo "DATA BERHASIL DIRUBAH <br>";
    }

    mysqli_close($connect);
    ?>
</body>
</html>