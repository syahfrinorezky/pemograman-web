<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY 1</title>
</head>
<body>
<?php
 
 $kelompok1 =
 array("Sucipta","Arya","Adit","Radit","John"); echo "Nama Kelompok 1 :<br />";
 for ($i=0; $i<=4; $i++){
 echo " -> ",$kelompok1[$i],"<br/>";
 }
  
 echo"<br /><br />";
  
 $kelompok2[] = "Sugana";
  
 $kelompok2[] = "Yoga";
 $kelompok2[] = "Rino";
 $kelompok2[] = "Jeri";
 $kelompok2[] = "Natha";
  
 echo "Nama Kelompok 2 :<br />";
 for ($i=0; $i<=4; $i++){
 echo " -> ",$kelompok2[$i],"<br/>";
 }
 ?>
</body>
</html>