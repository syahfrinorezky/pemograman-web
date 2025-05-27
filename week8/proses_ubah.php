<?php
include "koneksi.php";

$nim = $_GET['nim'];

$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

if(isset($_POST['ubah_foto'])){ 
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	
	$fotobaru = date('dmYHis').$foto;
	
	$path = "images/$fotobaru";

	if(move_uploaded_file($tmp, $path)){ 
		$query = "SELECT * FROM datasiswa WHERE nim='".$nim."'";
		$sql = mysqli_query($connect, $query); 
		$data = mysqli_fetch_array($sql); 

		if(is_file("images/".$data['foto'])) 
			unlink("images/".$data['foto']); 
		$query = "UPDATE datasiswa SET 
          nama = '$nama', 
          kelamin = '$kelamin', 
          telp = '$telp', 
          alamat = '$alamat', 
          foto = '$fotobaru' 
          WHERE nim = '$nim'";
		$sql = mysqli_query($connect, $query); 
		if($sql){ 
            header("location: index.php");
		}else{
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
		}
	}else{
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
}else{ 
	$query = "UPDATE datasiswa SET nama='".$nama."', kelamin='".$kelamin."', telp='".$telp."', alamat='".$alamat."' WHERE nim='".$nim."'";
	$sql = mysqli_query($connect, $query); 
	if($sql){ 
		header("location: index.php"); 
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
}
?>

