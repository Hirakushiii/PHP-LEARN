<?php
if (
    !isset($_GET["Nama"]) ||
    !isset($_GET["Id"]) ||
    !isset($_GET["Jurusan"]) ||
    !isset($_GET["Gambar"]) ||
    !isset($_GET["Email"])
) {

    header("Location: Index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE LENGKAP MAHASISWA</title>
</head>

<body>

    <ul>
        <li><img src="img/<?= $_GET["Gambar"]; ?>"></li>
        <li>
            <?= $_GET["Nama"]; ?>
        </li>
        <li>
            <?= $_GET["Id"]; ?>
        </li>
        <li>
            <?= $_GET["Jurusan"]; ?>
        </li>
        <li>
            <?= $_GET["Email"]; ?>
        </li>
    </ul>

</body>

</html>