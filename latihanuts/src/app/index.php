<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link rel="stylesheet" href="../styles/output.css">
</head>
<body>
    <div class="min-h-screen flex items-center justify-center text-white bg-neutral-900">
        <div class="bg-neutral-800 flex flex-col p-4 rounded-md w-full max-w-md">
            <h1 class="text-lg font-bold font-sans text-amber-300 text-center mb-4">INPUT DATA</h1>

            <?php if (isset($_SESSION['errors'])): ?>
                <div class="bg-red-500 text-white p-2 rounded-md mb-4 text-sm text-center">
                    <?php 
                    echo is_array($_SESSION['errors']) ? implode('<br>', $_SESSION['errors']) : $_SESSION['errors'];
                    unset($_SESSION['errors']); 
                    ?>
                </div>
            <?php endif; ?>

            <form action="proses_data.php" method="post" class="flex flex-col gap-4">
                <div class="flex flex-col gap-1">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Input your name"
                        class="p-2 border-b border-stone-500 bg-transparent transition-all duration-500 ease-in-out hover:bg-neutral-900 hover:border-white focus:outline-none focus:border-white focus:bg-neutral-900">
                </div>

                <div class="flex flex-col gap-1">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" placeholder="Input your NIM"
                        class="p-2 border-b border-stone-500 bg-transparent transition-all duration-500 ease-in-out hover:bg-neutral-900 hover:border-white focus:outline-none focus:border-white focus:bg-neutral-900">
                </div>

                <div class="flex flex-col gap-1">
                    <label for="gender">Gender</label>
                    <div class="flex items-center">
                        <input type="radio" name="gender" id="male" value="male"
                            class="mr-2 appearance-none border-2 border-amber-300 rounded-full w-4 h-4 transition-all duration-300 checked:bg-amber-300 focus:outline-none focus:ring-1 focus:ring-white">
                        <label for="male" class="mr-4">Male</label>

                        <input type="radio" name="gender" id="female" value="female"
                            class="mr-2 appearance-none border-2 border-amber-300 rounded-full w-4 h-4 transition-all duration-300 checked:bg-amber-300 focus:outline-none focus:ring-1 focus:ring-white">
                        <label for="female">Female</label>
                    </div>
                </div>

                <div class="flex flex-col gap-1">
                    <label for="prodi">Study Program</label>
                    <select name="prodi" id="prodi"
                        class="p-2 rounded-md bg-neutral-900 border border-stone-500 focus:outline-none focus:ring-1 focus:ring-amber-300">
                        <option value="">Choose</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                    </select>
                </div>

                <div class="flex flex-col gap-1">
                    <label for="hobby">Hobbies</label>
                    <div class="flex flex-wrap items-center gap-4">
                        <div class="flex items-center">
                            <input type="checkbox" name="hobby[]" id="reading" value="Reading" class="mr-2">
                            <label for="reading">Reading</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="hobby[]" id="sports" value="Sports" class="mr-2">
                            <label for="sports">Sports</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="hobby[]" id="music" value="Music" class="mr-2">
                            <label for="music">Music</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="hobby[]" id="traveling" value="Traveling" class="mr-2">
                            <label for="traveling">Traveling</label>
                        </div>
                    </div>
                </div>

                <button type="submit"
                    class="bg-amber-300 text-neutral-900 font-bold cursor-pointer p-2 rounded-md transition-all duration-300 hover:bg-amber-400">
                    Submit
                </button>
            </form>
        </div>
    </div>
</body>
</html>
