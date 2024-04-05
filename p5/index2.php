<?php
$angka = [1, 11, 22, 33, 44, 55, 66];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERESPAWN ARRAY, MENGGUNAKAN PENGULANGAN FOR/FOREACH</title>
    <style>
        div.oy {
            float: left;
            width: 50px;
            height: 50px;
            background-color: orange;
            color: white;
            margin: 5px;
            text-align: center;
            line-height: 50px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <!-- <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div>
            <?= $angka[$i]; ?>  //MENGGUNAKAN FOR
        </div>
    <?php } ?> -->

    <div class="clear"></div>

    <?php
    foreach ($angka as $a): ?>
        <div class="oy">
            <?= $a ?>
        </div>
    <?php endforeach; ?>
</body>

</html>