<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: crimson;
        }

        .black {
            background-color: black;
            color: white;
        }

        .white {
            background-color: white;
        }
    </style>
</head>

<body>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php $colors = $i % 2 == 1 ? "warna-baris" : "black"; ?>
            <tr class="<?= $colors ?>">
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td> <?= "$i,$j"; ?> </td>
            <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <?php if ($c = ($i + $j) % 2 == 0) : ?>
                        <td class="white"> <?= "$i,$j"; ?>
                        <?php else : ?>
                        <td class="black"> <?= "$i,$j"; ?>
                        <?php endif; ?>
                    <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        $size = 5;

        for ($row = 0; $row < $size; $row++) {
            echo "<tr>";
            for ($col = 0; $col < $size; $col++) {
                $colorClass = ($row + $col) % 2 == 0 ? "white" : "black";
                echo "<td class='$colorClass'>1</td>";
            }
            echo "</tr>";
        }
        ?>

    </table>

</body>

</html>