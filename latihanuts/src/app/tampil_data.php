<?php
session_start();

if (!isset($_SESSION['form_data'])) {
    header('Location: index.php');
    exit;
}

$formData = $_SESSION['form_data'];
unset($_SESSION['form_data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Details</title>
</head>
<body class="min-h-screen flex items-center justify-center text-white bg-neutral-900">
    <div class="bg-neutral-800 flex flex-col p-8 rounded-md max-w-md w-full">
        <h1 class="text-2xl font-bold font-sans text-amber-300 text-center mb-6">DATA DETAILS</h1>

        <div class="space-y-4">
            <?php
            $fields = [
                'Name' => $formData['name'],
                'NIM' => $formData['nim'],
                'Gender' => ucfirst($formData['gender']),
                'Study Program' => $formData['prodi'],
                'Hobbies' => !empty($formData['hobbies']) ? implode(', ', $formData['hobbies']) : 'No hobbies selected',
            ];

            foreach ($fields as $label => $value): ?>
                <div>
                    <p class="text-neutral-400"><?= $label ?>:</p>
                    <p class="text-white font-medium"><?= htmlspecialchars($value) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <a href="index.php" class="mt-6 bg-amber-300 text-neutral-900 font-bold text-center cursor-pointer p-2 rounded-md transition-all duration-300 hover:bg-amber-500">
            Back to Form
        </a>
    </div>
</body>
</html>
