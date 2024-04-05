<?php
$mahasiswa = [
    [
        "Nama" => "Kenn",
        "Id" => "1122334",
        "Jurusan" => "Teknik Informatika",
        "Email" => "Kenn@yahoo.co.id",
        "Gambar" => "Kenn.jpg"
    ],
    [
        "Nama" => "Ucup",
        "Id" => "1324354",
        "Jurusan" => "Teknik Permesinan",
        "Email" => "Ucup@gmail.com",
        "Gambar" => "Ucup.jpeg"
    ],
    [
        "Nama" => "Sendy",
        "Id" => "1625334",
        "Jurusan" => "Teknik Peternakan",
        "Email" => "Sendy@ymail.sch.id",
        "Gambar" => "Sendy.jpeg"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>

    <h1>Data Mahasiswa:</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
            <li>
                <a
                    href="index2.php?Nama=<?= $mhs["Nama"]; ?>&Id=<?= $mhs["Id"]; ?>&Jurusan=<?= $mhs["Jurusan"]; ?>&Email=<?= $mhs["Email"]; ?>&Gambar=<?= $mhs["Gambar"]; ?>">
                    <?= $mhs["Nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>