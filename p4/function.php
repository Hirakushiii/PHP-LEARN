<?php
$waktu = date("G");
if ($waktu <= 12) {
    $waktu = "PAGI";
} else if ($waktu >= 12 && $waktu <= 15) {
    $waktu = "SIANG";
} else if ($waktu >= 15 && $waktu <= 19) {
    $waktu = "SORE";
} else {
    $waktu = "MALAM";
}

function salam($nama)
{
    return "$nama";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNCTION PADA PHP</title>
</head>

<body>
    <h1>
        <?= "SELAMAT ", $waktu, salam(", KENN") ?>
    </h1>
</body>

</html>