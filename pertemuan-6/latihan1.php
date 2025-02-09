<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asosiatif</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: #bada55;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
            transition: .5s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {clear: both;}
    </style>
</head>
<body>

    <?php
        $angka = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
    ?>

    <?php foreach($angka as $a) : ?>
        <?php foreach($a as $b) : ?>
        <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?> 
    
</body>
</html>