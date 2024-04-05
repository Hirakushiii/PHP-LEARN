<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGGULANGAN ARRAY PADA ARRAY</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            background-color: salmon;
            color: white;
            margin: 3px;
            text-align: center;
            line-height: 50px;
            float: left;
            transition: .5s ease-out;
        }

        .box:hover {
            background-color: orange;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php
    $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>
    <?php foreach ($angka as $a): ?>
        <?php foreach ($a as $b): ?>
            <div class="box">
                <?= $b ?>
            </div>
        <?php endforeach ?>
        <div class="clear"></div>
    <?php endforeach ?>
</body>

</html>