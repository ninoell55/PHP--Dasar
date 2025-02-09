<?php

$mahasiswa = [
    ["Nino Adityo Nugroho", "087740864657", "Teknik Informatika", "ninoadityooo@gmail.com"],
    ["Jihan Syahira", "085236231112", "Teknik Komputer", "jihan2289@gmail.com"],
    ["Niji", "087736234612", "Ilmu Komunikasi", "niji150709@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama: <?= $mhs[0]; ?></li>    
        <li>NIM: <?= $mhs[1]; ?></li>    
        <li>Jurusan: <?= $mhs[2]; ?></li>    
        <li>Email: <?= $mhs[3]; ?></li>    
    </ul>
    <?php endforeach; ?>
    
</body>
</html>