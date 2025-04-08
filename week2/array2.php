<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY 2</title>
</head>
<body>
<?php
 
 $array1 = array ("Sugana","Yoga","Rino"); echo"List nama pertama:<br/>";
  
 for ($i=0; $i<count($array1); $i++){
 echo"data ke-",$i," : ",$array1[$i],"<br/>";
 }
  
 echo "<br/>Setelah ditambahkan \"John, Jeri & Natha\" menggunakan fungsi array_push():<br/>";
  
 array_push($array1,"John","Jeri","Natha"); for ($i=0; $i<count($array1); $i++){
  
 echo"data ke-",$i," : ",$array1[$i],"<br/>";
 }
  
  
 echo "<br/>Setelah bagian awal array dihapus menggunakan fungsi array_shift():<br/>";
  
 array_shift($array1);
 for ($i=0; $i<count($array1); $i++){
 echo"data ke-",$i," : ",$array1[$i],"<br/>";
 }
  
 echo "<br/>Dan setelah isi array diurutkan menggunakan fungsi sort():<br/>";
  
 sort($array1);
 for ($i=0; $i<count($array1); $i++){
 echo"data ke-",$i," : ",$array1[$i],"<br/>";
  
 }
 ?> 
</body>
</html>