<?php
// $mahasiswa = [
//     ["Nino Adityo Nugroho", "087740864657", "Teknik Informatika", "ninoadityooo@gmail.com"],
//     ["Jihan Syahira", "085236231112", "Teknik Komputer", "jihan2289@gmail.com"],
//     ["Niji", "087736234612", "Ilmu Komunikasi", "niji150709@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "gambar" => "1.jpg",
        "nama" => "Nino Adityo Nugroho",
        "nim" => "087740864657",
        "jurusan" => "Teknik Informatika",
        "email" => "ninoadityooo@gmail.com",
    ],
    [
        "gambar" => "2.jpg",
        "nama" => "Jihan Syahira",
        "nim" => "085236231112",
        "jurusan" => "Teknik Komputer",
        "email" => "jihan2289@gmail.com",
    ],
    [
        "gambar" => "3.jpg",
        "nama" => "Nino Adityo Nugroho",
        "nim" => "087740864657",
        "jurusan" => "Teknik Informatika",
        "email" => "ninoadityooo@gmail.com",
    ],
    [
        "gambar" => "4.jpg",
        "nama" => "Jihan Syahira",
        "nim" => "085236231112",
        "jurusan" => "Teknik Komputer",
        "email" => "jihan2289@gmail.com",
    ],
    [
        "gambar" => "5.jpg",
        "nama" => "Nino Adityo Nugroho",
        "nim" => "087740864657",
        "jurusan" => "Teknik Informatika",
        "email" => "ninoadityooo@gmail.com",
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="./img/<?= $mhs["gambar"] ?>" alt="">
            </li>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NIM: <?= $mhs["nim"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>