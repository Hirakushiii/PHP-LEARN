<?php
$mahasiswa = [
    ["Kenn", "1122334", "Teknik Informatika", "Kenn@yahoo.co.id"],
    ["Ucup", "1324354", "Teknik Permesinan", "Ucup@yahoo.co.id"],
    ["Sendy", "1625334", "Teknik Peternakan", "Sendy@yahoo.co.id"],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY DI DALAM ARRAY (OBJECT)</title>
</head>

<body>
    <h1>DAFTAR MAHASISWA</h1>
    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li>
                Nama:
                <?= $mhs[0] ?>
            </li>
            <li>
                Id :
                <?= $mhs[1] ?>
            </li>
            <li>
                Jurusan :
                <?= $mhs[2] ?>
            </li>
            <li>
                Email :
                <?= $mhs[3] ?>
            </li>
        </ul>
    <?php endforeach ?>
</body>

</html>