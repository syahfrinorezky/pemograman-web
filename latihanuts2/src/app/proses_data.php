<?php 

session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "kampus_practice";

$connect = new mysqli($host, $user, $pass, $db);

if ($connect -> connect_error) {
    die("Connection failed: " . $connect -> connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS mahasiswa(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    kelas VARCHAR(15) NOT NULL,
    alamat VARCHAR(100) NOT NULL,
    jurusan VARCHAR(50) NOT NULL,
    tanggal DATETIME DEFAULT CURRENT_TIMESTAMP
)";

$connect -> query($sql);

$nama = htmlspecialchars($_POST['nama'] ?? "");
$kelas = htmlspecialchars($_POST['kelas'] ?? "");
$alamat = htmlspecialchars($_POST['alamat'] ?? "");
$jurusan = htmlspecialchars($_POST['jurusan'] ?? "");

$sql_insert = "INSERT INTO mahasiswa (nama, kelas, alamat, jurusan) VALUES ('$nama', '$kelas', '$alamat', '$jurusan')";

$connect -> query($sql_insert);
$connect -> close();


header("Location: tampil_data.php");
exit();

?>