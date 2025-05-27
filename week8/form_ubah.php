<html>
<head>
	<title>CRUD Data Siswa</title>
</head>
<body>
	<h1>Ubah Data Siswa</h1>
	
	<?php
	include "koneksi.php";
	
	$nim = $_GET['nim'];
	
	$query = "SELECT * FROM datasiswa WHERE nim='".$nim."'";
	$sql = mysqli_query($connect, $query); 
	$data = mysqli_fetch_array($sql); 
	?>
	
	<form method="post" action="proses_ubah.php?nim=<?php echo $nim; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
	</tr>
	<tr>
		<td>Jenim Kelamin</td>
		<td>
		<?php
		if($data['kelamin'] == "Laki-laki"){
			echo "<input type='radio' name='kelamin' value='laki-laki' checked='checked'> Laki-laki";
			echo "<input type='radio' name='kelamin' value='perempuan'> Perempuan";
		}else{
			echo "<input type='radio' name='kelamin' value='laki-laki'> Laki-laki";
			echo "<input type='radio' name='kelamin' value='perempuan' checked='checked'> Perempuan";
		}
		?>
		</td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td><input type="text" name="telp" value="<?php echo $data['telp']; ?>"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
	</tr>
	
<tr>
		<td>Foto</td>
		<td>
			<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
			<input type="file" name="foto">
		</td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
