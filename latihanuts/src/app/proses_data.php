<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php'); 
    exit;
}

$name    = htmlspecialchars(trim($_POST['name'] ?? ''));
$nim     = htmlspecialchars(trim($_POST['nim'] ?? ''));
$gender  = htmlspecialchars($_POST['gender'] ?? '');
$prodi   = htmlspecialchars($_POST['prodi'] ?? '');
$hobbies = $_POST['hobby'] ?? [];

// Validasi
$errors = [];

if ($name === '') {
    $errors[] = "Name is required";
}
if ($nim === '') {
    $errors[] = "NIM is required";
}
if ($gender === '') {
    $errors[] = "Gender is required";
}
if ($prodi === '') {
    $errors[] = "Study Program is required";
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: index.php');
    exit;
}

$_SESSION['form_data'] = compact('name', 'nim', 'gender', 'prodi', 'hobbies');

header('Location: tampil_data.php');
exit;
?>
