<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: loginpage.php');
    exit();
}

$username = htmlspecialchars($_SESSION['username']);

$username = $_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LINK 3</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-[#303030]">
    <header class="absolute w-full bg-neutral-800 text-slate-100 flex flex-col justify-center items-center p-6">
        <h1 class="font-bold text-2xl">PEMOGRAMAN WEB</h1>
        <h2 class="font-medium">User : <span class="text-amber-400 font-bold"><?php echo $username ?></span></h2>
        <nav class="mt-5">
            <ul class="flex">
                <li class="text-yellow-500 flex items-center justify-center underline border-r border-white px-3"><a href="./dashboard.php">Dashboard</a></li>
                <li class="text-yellow-500 flex items-center justify-center underline border-r border-white px-3"><a href="./menu1.php">Link1</a></li>
                <li class="text-yellow-500 flex items-center justify-center underline border-r border-white px-3"><a href="./menu2.php">Link2</a></li>
                <li class="text-yellow-500 flex items-center justify-center underline px-3"><a href="./logout.php">Logout</a></li>
                
            </ul>
        </nav>
    </header>
    <main class="h-screen flex items-center justify-center text-white">
        <p>Ini adalah isi dari halama link 3</p>
    </main>
    <footer class="bg-neutral-800 text-white p-2 absolute bottom-0 w-full flex items-center justify-center">
        <div class="copyright-container">
            <p>&copy;<?php echo date("Y"); ?>. Made by <span class="font-bold">Syahfrino Rezky Oktaviant</span></p>
        </div>
    </footer>
</body>
</html>