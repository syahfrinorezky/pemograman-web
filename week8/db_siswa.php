<?php 

$conn = mysqli_connect("localhost", "root", "");

if (mysqli_connect_errno()) {
    echo "koneksi server gagal : " . mysqli_connect_error();
}

$sql = "CREATE DATABASE IF NOT EXISTS db_siswa";
if (mysqli_query($conn, $sql)) {
    echo "Database berhasil dibuat";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}



?>