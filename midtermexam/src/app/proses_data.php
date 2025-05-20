<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.html");
}


$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$telepon = htmlspecialchars($_POST['telepon']);
$pesanan = htmlspecialchars($_POST['pesanan']);
$produk = $_POST['produk'];
$deskripsi = htmlspecialchars($_POST['deskripsi']);


$_SESSION['form_contact'] = compact('nama', 'email', 'telepon', 'pesanan', 'produk', 'deskripsi');


header("Location: tampil_data.php");
exit();



?>