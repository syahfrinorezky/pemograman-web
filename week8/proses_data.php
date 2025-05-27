<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
	
$fotobaru = date('dmYHis').$foto;

$path = "images/{$fotobaru}";

if(move_uploaded_file($tmp, $path)){ 
	$query = "INSERT INTO datasiswa VALUES('".$nim."', '".$nama."', '".$jenis_kelamin."', '".$telp."', '".$alamat."', '".$fotobaru."')";
	$sql = mysqli_query($connect, $query) or die(mysqli_error($connect));


	if($sql){ 
		header("location: index.php"); 
		exit();
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='tambah_data.php'>Kembali Ke Form</a>";
	}
}else{
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='tambah_data.php'>Kembali Ke Form</a>";
}
?>
