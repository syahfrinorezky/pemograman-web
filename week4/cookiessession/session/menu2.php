<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: prosesLogin.php");
    exit();
}

if (isset($_GET['aksi']) && $_GET['aksi'] == "logout") {
    session_destroy();
    header("Location: prosesLogin.php");
    exit();
}

$nama = $_SESSION['username'];
?>
<center>
    <p>Selamat Datang <b><?php echo htmlspecialchars($nama); ?></b></p>
    <h2>INI HALAMAN 2</h2>
    <p>Berikut ini menu navigasi anda</p>
    <p>
        <a href='menu1.php'>Menu 1</a>&nbsp;
        <a href='menu3.php'>Menu 3</a>
        <a href="dashboard.php">Menu utama</a>
    </p>
    <a href="?aksi=logout">Logout</a>
</center>