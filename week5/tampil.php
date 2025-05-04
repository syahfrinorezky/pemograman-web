<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPIL DATA</title>
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


    mysqli_select_db($connect, $db);
    $sql = "SELECT nim, nama, alamat, telepon FROM mahasiswa";

    $tampil = mysqli_query($connect, $sql);
    
    while ($data = mysqli_fetch_array($tampil)){ 
        echo "NIM : ". $data['nim']."<br/>"; 
        echo "Nama : ". $data['nama']."<br/>"; 
        echo "Alamat : ". $data['alamat']."<br/>"; 
        echo "Telp : ". $data['telepon']."<br/>"; 
        echo "<br/>";
    }
    ?>
</body>
</html>