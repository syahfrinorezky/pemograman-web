<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center">
        <div class="biodata-container p-6 bg-[#0B192C] text-white rounded shadow-md w-1/2">
            <h1 class="text-2xl font-bold mb-4 text-center text-yellow-500">Biodata</h1>
            
            <?php
            $name = $nim = $major = $desc = 'N/A';
            $skills = [];
            $uploadedFile = null;
            $uploadError = null;

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Ambil data dari form
                $name = htmlspecialchars($_POST['name'] ?? 'N/A');
                $nim = htmlspecialchars($_POST['nim'] ?? 'N/A');
                $major = htmlspecialchars($_POST['major'] ?? 'N/A');
                $skills = $_POST['skills'] ?? [];
                $desc = nl2br(htmlspecialchars($_POST['desc'] ?? 'N/A'));

                // Proses upload file
                if (isset($_FILES['upload'])) {
                    $uploadDir = 'uploads/';
                    
                    if (!file_exists($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
                    
                    if ($_FILES['upload']['error'] === UPLOAD_ERR_OK) {
                        $check = getimagesize($_FILES['upload']['tmp_name']);
                        if ($check !== false) {
                            $fileName = uniqid() . '_' . basename($_FILES['upload']['name']);
                            $targetPath = $uploadDir . $fileName;
                            
                            if (move_uploaded_file($_FILES['upload']['tmp_name'], $targetPath)) {
                                $uploadedFile = $targetPath;
                            } else {
                                $uploadError = "Gagal menyimpan file.";
                            }
                        } else {
                            $uploadError = "File bukan gambar.";
                        }
                    } else {
                        $uploadError = "Error upload: " . $_FILES['upload']['error'];
                    }
                }
            }
            ?>

            <!-- Tampilkan data -->
            <div class="data-container grid grid-cols-2 gap-4">
                <div class="left-container flex flex-col space-y-3">
                    <div class="name-container">
                        <p class='mb-1 font-bold'>Name :</p>
                        <p><?= $name ?></p>
                    </div>
                    <div class="nim-container flex flex-col space-y-3">
                        <p class='mb-1 font-bold'>NIM :</p>
                        <p><?= $nim ?></p>
                    </div>
                    <div class="major-container flex flex-col space-y-3">
                        <p class='mb-1 font-bold'>Major :</p>
                        <p><?= $major ?></p>
                    </div>
                    <div class="skills-container flex flex-col space-y-3">
                        <p class='mb-1 font-bold'>Skills :</p>
                        <?= !empty($skills) ? implode(", ", array_map('htmlspecialchars', $skills)) : 'N/A' ?>
                    </div>
                </div>
                <div class="right-container flex flex-col space-y-2">
                <div class="desc-container flex flex-col space-y-3">
                    <p class='mb-1 font-bold'>Description :</p>
                    <p><?= $desc ?></p>
                </div>
                <div class="upload-container">

                    <?php if ($uploadedFile): ?>
                        <div class='mt-4'>
                            <p class='font-bold'>Foto:</p>
                            <img src='<?= $uploadedFile ?>' alt='Uploaded photo' class='mt-2 max-w-xs border border-gray-300'>
                        </div>
                        <?php else: ?>
                            <p class='mt-4'><strong>Foto:</strong> 
                            <?= $uploadError ? "Error: $uploadError" : "Tidak ada foto yang diupload" ?>
                        </p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if ($_SERVER['REQUEST_METHOD'] !== 'POST'): ?>
                    <p>No data submitted.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>