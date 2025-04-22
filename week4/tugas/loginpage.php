<?php
    session_start();

    $error = '';

    $validUser = [
        "Ali" => "password1", 
        "Bona" => "password2", 
        "Charlie" => "password3", 
        "Dede" => "password4", 
        "Emon" => "password5",
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = htmlspecialchars($_POST['username'] ?? '', ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars($_POST['password'] ?? '', ENT_QUOTES, 'UTF-8');

        if (array_key_exists($username, $validUser) && $validUser[$username] === $password) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['login'] = true;

            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Username atau password salah";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#303030]">
    <nav class="absolute w-full bg-neutral-800 text-slate-100 flex justify-center items-center p-6">
        <h1 class="font-bold text-2xl">PEMOGRAMAN WEB</h1>
    </nav>
    <main class="h-screen flex items-center justify-center text-white">
        <div class="login-container bg-neutral-800 p-5 rounded-md w-1/4">
            <h1 class="font-bold text-xl text-center mb-10 text-yellow-400">LOGIN</h1>
            <p class="text-red-500 text-sm"><?php if (!empty($error)) {
                echo $error;
            } ?></p>
            <div class="form-container">
                <form action="" class="flex flex-col space-y-3" method="POST">
                    <div class="username-container flex flex-col space-y-1">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Insert Username" class="border border-grey-400 text-sm bg-white text-black rounded-md p-2 w-full" required>
                    </div>
                    <div class="password-container flex flex-col space-y-1">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Insert Password"  class="font-mono text-sm border border-grey-400 bg-white text-black rounded-md p-2 w-full" required>
                    </div>
                    <div class="submit-button mt-5 bg-yellow-400 w-fit rounded-full mx-auto py-1 px-5 cursor-pointer">
                        <button type="submit" class="text-neutral-800 font-bold text-shadow-md">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="bg-neutral-800 text-white p-2 absolute bottom-0 w-full flex items-center justify-center">
        <div class="copyright-container">
            <p>&copy;<?php echo date("Y"); ?>. Made by <span class="font-bold">Syahfrino Rezky Oktaviant</span></p>
        </div>
    </footer>
</body>
</html>