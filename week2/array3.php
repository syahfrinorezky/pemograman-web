<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY 3</title>
</head>
<body>
<?php
$pegawai = array("Rino", "John", "Sugana", "Yoga", "Jeri", "Natha");
echo "<strong>Sebelum diurutkan</strong><br />";
foreach($pegawai as $data => $nama){
echo "$data: $nama"."<br />";
 }
sort($pegawai);
 
echo "<strong>Setelah diurutkan</strong><br />";
foreach($pegawai as $data => $nama){
echo "$data: $nama"."<br />";
}
 
?>
</body>
</html>