<html>
<head>
	<title>CRUD Data Siswa</title>
</head>
<body>
	<h1>Data Siswa</h1>
	<a href="tambah_data.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>Foto</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Telepon</th>
		<th>Jenis Kelamin</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	include "koneksi.php";
	
	$query = "SELECT * FROM datasiswa";
	$sql = mysqli_query($connect, $query); 
	while($data = mysqli_fetch_array($sql)){ 
		echo "<tr>";
		echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
		echo "<td>".$data['nim']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['kelamin']."</td>";
		echo "<td>".$data['telp']."</td>";
		echo "<td>".$data['alamat']."</td>";
		echo "<td><a href='form_ubah.php?nim=".$data['nim']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?nim=".$data['nim']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
