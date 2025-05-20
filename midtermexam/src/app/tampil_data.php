<?php 

session_start();

if (!isset($_SESSION['form_contact'])) {
    header("Location: index.html");
    exit();
}


$nama = $_SESSION['form_contact']['nama'];
$email = $_SESSION['form_contact']['email'];
$telepon = $_SESSION['form_contact']['telepon'];
$pesanan = $_SESSION['form_contact']['pesanan'];
$produk = $_SESSION['form_contact']['produk'];
$deskripsi = $_SESSION['form_contact']['deskripsi'];


unset($_SESSION['form_contact']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPIL DATA</title>
    <link rel="stylesheet" href="../style/output.css">
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-slate-300">
        <div class="w-1/3 flex flex-col bg-slate-100 p-4 gap-5">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-slate-600">Tampil Data</h1>
            </div>
            <div class="flex flex-col gap-2">
                <p class="text-slate-600">Nama : <br> <?php echo $nama; ?></p>
                <p class="text-slate-600">Email : <br> <?php echo $email; ?></p>
                <p class="text-slate-600">Telepon : <br> <?php echo $telepon; ?></p>
                <p class="text-slate-600">Pesanan : <br> <?php echo $pesanan; ?></p>
                <p class="text-slate-600">Produk : <br> <?php echo $produk; ?></p>
                <p class="text-slate-600">Deskripsi : <br> <?php echo $deskripsi; ?></p>
            </div>
        </div>
    </div>
</body>
</html>