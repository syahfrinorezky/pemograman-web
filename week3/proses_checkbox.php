<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA CHECKBOX</title>
</head>
<body>
<?php
echo "Hobi Anda Adalah :<br>";
if (isset($_POST['game1'])) {
echo "+ " . $_POST['game1'] . "<br>";
}
if (isset($_POST['game2'])) {
echo "+ " . $_POST['game2'] . "<br>";
}
if (isset($_POST['game3'])) {
echo "+ " . $_POST['game3'] . "<br>";
}
if (isset($_POST['game4'])) {
echo "+ " . $_POST['game4'] . "<br>";
}
?>

<br>

<a href="form_checkbox.html" type="Button">Kembali</a>
</body>
</html>