<?php 

session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "kampus_practice";

$connect = new mysqli($host, $user, $pass, $db);

if ($connect -> connect_error) {
    die("Connection failed : " . $connect -> connect_error);
}

$result = $connect->query("SELECT * FROM mahasiswa ORDER BY tanggal DESC");
$connect -> close();

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
    <div class="min-h-screen flex items-center justify-center text-white">
        <div class="bg-neutral-800 flex flex-col p-4 rounded-md">
            <h1 class="text-3xl text-yellow-300 font-bold mb-4 text-center">TAMPIL DATA</h1>
            <table class="border-collapse border border-slate-200">
                <thead>
                    <tr>
                        <th class="p-2 border border-neutral-600">No</th>
                        <th class="p-2 border border-neutral-600">Nama</th>
                        <th class="p-2 border border-neutral-600">Kelas</th>
                        <th class="p-2 border border-neutral-600">Jurusan</th>
                        <th class="p-2 border border-neutral-600">Alamat</th>
                        <th class="p-2 border border-neutral-600">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($result->num_rows > 0): ?>
                        <?php $no = 1; ?>
                        <?php while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td class="p-2 border border-neutral-600"><?= $no++ ?></td>
                                <td class="p-2 border border-neutral-600"><?= $row['nama'] ?></td>
                                <td class="p-2 border border-neutral-600"><?= $row['kelas'] ?></td>
                                <td class="p-2 border border-neutral-600"><?= $row['alamat'] ?></td>
                                <td class="p-2 border border-neutral-600"><?= $row['jurusan'] ?></td>
                                <td class="p-2 border border-neutral-600"><?= $row['tanggal'] ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                         <tr>
                            <td colspan="6" class="p-2 text-center">Tidak ada data</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>