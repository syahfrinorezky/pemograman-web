<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPIL DATA</title>
</head>
<body>
    <?php 
        // Mengambil data dari form
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];

        // Menampilkan data yang diambil
        echo "<h1>Data yang Anda Masukkan</h1>";
        echo "<p>NIM: " . htmlspecialchars($nim) . "</p>";
        echo "<p>Nama: " . htmlspecialchars($nama) . "</p>";
    ?>
</body>
</html>