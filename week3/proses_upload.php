<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASIL UPLOAD</title>
</head>
<body>
<?php
$dir_upload = "files/";
$uploadfile = $dir_upload . basename($_FILES['file']['name']);

if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    $kirim = move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);

    if ($kirim) {
        echo "File berhasil diupload ke server pada folder <b>$uploadfile</b><br>";
        

        $file_extension = pathinfo($uploadfile, PATHINFO_EXTENSION);
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array(strtolower($file_extension), $allowed_extensions)) {
            echo "<img src='$uploadfile' alt='Uploaded Image' style='max-width: 1000px; max-height: 1000px;'><br>";
        } else {
            echo "File yang diupload bukan gambar.";
        }
    } else {
        echo "File gagal diupload<br>";
        echo "Error: " . $_FILES['file']['error'];
    }
}
?>
</body>
</html>