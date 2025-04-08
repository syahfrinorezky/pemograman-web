<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONDISI 2</title>
</head>
<body>
<?php
$nilai = 80;
 
if($nilai >= 90){
  echo "Nilai Memuaskan";
}elseif ($nilai >= 80){
  echo "Nilai Bagus";
}elseif($nilai >=50){
  echo "Nilai Kurang";
}else{
  echo "Nilai Sangat Kurang";
}
?>
</body>
</html>