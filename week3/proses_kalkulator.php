<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASIL KALKULATOR</title>
</head>
<body>
<?php 
	$angka1=$_POST['angka1'];
	$angka2=$_POST['angka2'];
	$operator=$_POST['operator'];
	
	if($operator=="tambah"){
		$hasil=$angka1+$angka2;
	}else if ($operator=="kurang"){
		$hasil=$angka1-$angka2;
	}else if ($operator=="kali"){
		$hasil=$angka1*$angka2;
	}else if ($operator=="bagi" && $angka2!=0){
		$hasil=$angka1/$angka2;
	}else if ($operator=="bagi" && $angka2==0){
		$hasil="<b>Error Pembagi  0</b>";
	}else if ($operator=="modulo" && $angka2!=0){
		$hasil=$angka1%$angka2;
	}else if ($operator=="modulo" && $angka2==0){
		$hasil="<b>Error Pembagi  0</b>";
	}
echo"Hasil dari $angka1 di$operator $angka2 = $hasil";	
?>
<br>

<a href="kalkulator.html" type="Button">Kembali</a>
</body>
</html>