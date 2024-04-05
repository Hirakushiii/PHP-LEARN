<?php
$mahasiswa = [
    [
        "Nama" => "Kenn",
        "Id" => "1122334",
        "Jurusan" => "Teknik Informatika",
        "Email" => "Kenn@yahoo.co.id",
        "Gambar" => "Kenn.jpeg"
    ],
    [
        "Nama" => "Ucup",
        "Id" => "1324354",
        "Jurusan" => "Teknik Permesinan",
        "Email" => "Ucup@yahoo.co.id",
        "Gambar" => "Ucup.jpeg"
    ],
    [
        "Nama" => "Sendy",
        "Id" => "1625334",
        "Jurusan" => "Teknik Peternakan",
        "Email" => "Sendy@yahoo.co.id",
        "Gambar" => "Sendy.jpeg"
    ],
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
                <img src="/img/Kenn.jpg">
            </li>
            <li>
                Nama:
                <?= $mhs["Nama"]; ?>
            </li>
            <li>
                Id :
                <?= $mhs["Id"]; ?>
            </li>
            <li>
                Jurusan :
                <?= $mhs["Jurusan"]; ?>
            </li>
            <li>
                Email :
                <?= $mhs["Email"]; ?>
            </li>
        </ul>
    <?php endforeach ?>
</body>

</html>