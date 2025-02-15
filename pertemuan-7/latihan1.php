<?php

// SUPERGLOBALS
// variable global milik php
// merupakan Array Associative

// GET  
// $_GET["nama"] = "Jihan Syahira";
// $_GET["nrp"] = "087740864657";
// var_dump($_GET);

$mahasiswa = [
    [
        "gambar" => "1.jpg",
        "nama" => "Nino",
        "nim" => "087740864657",
        "jurusan" => "Teknik Informatika",
        "email" => "ninoadityooo@gmail.com",
    ],
    [
        "gambar" => "2.jpg",
        "nama" => "Jihan",
        "nim" => "085236231112",
        "jurusan" => "Teknik Komputer",
        "email" => "jihan2289@gmail.com",
    ],
    [
        "gambar" => "3.jpg",
        "nama" => "Adityo",
        "nim" => "087740864657",
        "jurusan" => "Teknik Informatika",
        "email" => "ninoadityooo@gmail.com",
    ],
    [
        "gambar" => "4.jpg",
        "nama" => "Syahira",
        "nim" => "085236231112",
        "jurusan" => "Teknik Komputer",
        "email" => "jihan2289@gmail.com",
    ],
    [
        "gambar" => "5.jpg",
        "nama" => "Nugroho",
        "nim" => "087740864657",
        "jurusan" => "Teknik Informatika",
        "email" => "ninoadityooo@gmail.com",
    ]
];

// variable scope / lingkup variabel
// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"] ?></a>
        </li>
    <?php endforeach; ?>
</ul>
    
</body>
</html>