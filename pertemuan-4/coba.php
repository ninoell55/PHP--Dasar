<?php

function ucapanSalam()
{
    date_default_timezone_set('Asia/Jakarta');
    $jam = date("H");

    if ($jam >= 5 && $jam < 12) {
        return "Selamat Pagi!";
    } elseif ($jam >= 12 && $jam < 17) {
        return "Selamat Siang!";
    } elseif ($jam >= 17 && $jam < 20) {
        return "Selamat Sore!";
    } else {
        "Selamat Malam!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat</title>
</head>
<body>

    <h1><?= ucapanSalam(); ?></h1>
    
</body>
</html>