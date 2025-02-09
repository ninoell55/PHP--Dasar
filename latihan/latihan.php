<?php
// $mahasiswa = [
//     ["Nino Adityo Nugroho", "087740864657", "Teknik Informatika", "ninoadityooo@gmail.com"],
//     ["Jihan Syahira", "085236231112", "Teknik Komputer", "jihan2289@gmail.com"],
//     ["Niji", "087736234612", "Ilmu Komunikasi", "niji150709@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$shoes = [
    [
        "gambar" => "1.jpg",
        "nama" => "StrideX",
        "deskripsi" => "- Sepatu sporty dengan desain ringan dan fleksibel untuk kenyamanan sepanjang hari.",
        "harga" => "Rp.120.000,00",
        "tanggal" => "09/02/2025",
    ],
    [
        "gambar" => "2.jpg",
        "nama" => "Velox",
        "deskripsi" => "- Sepatu lari dengan teknologi bantalan canggih untuk performa maksimal.",
        "harga" => "Rp.200.000,00",
        "tanggal" => "12/02/2025",
    ],
    [
        "gambar" => "3.jpg",
        "nama" => "Aether",
        "deskripsi" => "- Sneaker premium dengan bahan breathable dan desain minimalis yang stylish.",
        "harga" => "Rp.150.000,00",
        "tanggal" => "19/02/2025",
    ],
    [
        "gambar" => "4.jpg",
        "nama" => "TrekNova",
        "deskripsi" => "- Sepatu hiking tahan air dengan grip kuat untuk petualangan ekstrem.",
        "harga" => "Rp.300.000,00",
        "tanggal" => "29/02/2025",
    ],
    [
        "gambar" => "5.jpg",
        "nama" => "LumeStep",
        "deskripsi" => "- Sepatu kasual dengan sol empuk yang nyaman untuk aktivitas harian.",
        "harga" => "Rp.250.000,00",
        "tanggal" => "01/03/2025",
    ],
    [
        "gambar" => "6.jpg",
        "nama" => "Evoluxe",
        "deskripsi" => "- Sepatu formal dengan material kulit berkualitas untuk tampilan elegan.",
        "harga" => "Rp.400.000,00",
        "tanggal" => "09/03/2025",
    ],
    [
        "gambar" => "7.jpg",
        "nama" => "Vortex",
        "deskripsi" => "- Sepatu basket dengan support optimal untuk pergerakan agresif di lapangan.",
        "harga" => "Rp.300.000,00",
        "tanggal" => "20/03/2025",
    ],
    [
        "gambar" => "8.jpg",
        "nama" => "Flexora",
        "deskripsi" => "- Sepatu training multifungsi dengan fleksibilitas tinggi untuk berbagai olahraga.",
        "harga" => "Rp.390.000,00",
        "tanggal" => "21/03/2025",
    ],
    [
        "gambar" => "9.jpg",
        "nama" => "Gravitas",
        "deskripsi" => "- Sepatu safety dengan perlindungan ekstra dan desain ergonomis.",
        "harga" => "Rp.500.000,00",
        "tanggal" => "25/03/2025",
    ],
    [
        "gambar" => "10.jpg",
        "nama" => "Zyphos",
        "deskripsi" => "- Sepatu futsal ringan dengan daya cengkeram kuat untuk kontrol bola yang presisi.",
        "harga" => "Rp.1.000.000,00",
        "tanggal" => "01/04/2025",
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="text-center p-5 h2">DAFTAR SEPATU YANG ADA DI TOKO KAMI</div>

        <div class="row">
            <?php foreach ($shoes as $shoe) : ?>
                <div class="col-md-3">
                    <div class="card d-flex m-2" style="width: 18rem; height: full;">
                        <img src="./img/<?= $shoe["gambar"]; ?>" class="img-fluid img-thumbnail"  style="height: 200px;";   alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $shoe["nama"]; ?></h5>
                            <p class="card-text"><?= $shoe["deskripsi"]; ?></p>
                            <a href="#" class="btn btn-primary"><?= $shoe["harga"]; ?></a>
                            <a href="#" class="font-bold "><?= $shoe["tanggal"]; ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>