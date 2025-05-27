<?php
$dbname='db_siswa';
$host='localhost';
$password='';
$username='root';
$cnn = mysqli_connect($host,$username,$password,$dbname);  
if(!$cnn){ 
	die("Koneksi Failed : ".mysqli_connect_error()); } 
$sql ="CREATE TABLE IF NOT EXISTS datasiswa (
	nim CHAR(10) NULL,
	nama VARCHAR(25) Null,
	alamat VARCHAR(50) Null,
	telp VARCHAR(15) Null,
	kelamin VARCHAR(10) Null,
	foto VARCHAR(50) Null,
  constraint pk_datasiswa primary key(nim)
)";

if (mysqli_query($cnn, $sql)){ 
 echo "Table Berhasil di Buat"; 
 } else { 
 echo "Table Gagal di Buat :".mysqli_error($cnn); } 
 mysqli_close($cnn); 
 ?>

