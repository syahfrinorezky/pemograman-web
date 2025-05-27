<?php

include "koneksi.php";

$nim = $_GET['nim'];

$query = "SELECT * FROM datasiswa WHERE nim='".$nim."'";
$sql = mysqli_query($connect, $query); 
$data = mysqli_fetch_array($sql); 

if(is_file("images/".$data['foto'])) 
	unlink("images/".$data['foto']); 

$query2 = "DELETE FROM datasiswa WHERE nim='".$nim."'";
$sql2 = mysqli_query($connect, $query2); 
if($sql2){ 
	header("location: index.php"); 
}else{
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
