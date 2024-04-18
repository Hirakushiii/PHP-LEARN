<?php
$connect = mysqli_connect("localhost", "root", "", "saham idx");     // HOSTNAME, USERNAME, PASSWORD, DATABASE NAME FILE

$data = mysqli_query($connect, "SELECT * FROM saham");   //AMBIL DATA SAHAM PADA QUERY YANG DI CONNECT KE MYSQL DATABASE YANG MENHASILKAN ARRAY OF OBJECT

// 4 CARA MENGAMBIL DATA PADA DATA YANG SUDAH DIUBAH MENJADI ARRAY OF OBJECT DIATAS
// -  mysqli_fetch_row()  "MENGEMBALIKAN ARRAY YANG BER INDEX NUMERIK / ANGKA"
// -  mysqli_fetch_assoc()  "MENGEMBALIKAN ARRAY YANG BER INDEX ASSOSIATIF / ALPHABET"
// -  mysqli_fetch_array()  "MENGEMBALIKAN KEDUANYA, NAMUN LEBIH BERAT DATANYA"
// -  mysqli_fetch_object()  "MENGEMBALIKAN OBJECT"

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center mt-3">DATA PERUSAHAAN SAHAM IDX</h1>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr class="text-uppercase">
                    <th scope="col">ID PERUSAHAAN</th>
                    <th scope="col">Nama Perusahaan</th>
                    <th scope="col">Pemilik Perusahaan</th>
                    <th scope="col">Produksi Perusahaan</th>
                    <th scope="col">Harga Per/ Lembar</th>
                    <th scope="col" class="text-center">Edit</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php while ($r = mysqli_fetch_assoc($data)): ?>
                    <tr>
                        <th scope="row">
                            <?= $r["ID"]; ?>
                        </th>
                        <td>
                            <?= $r["NAMA PERUSAHAAN"]; ?>
                        </td>
                        <td>
                            <?= $r["PEMILIK PERUSAHAAN"]; ?>
                        </td>
                        <td>
                            <?= $r["PRODUKSI PERUSAHAAN"]; ?>
                        </td>
                        <td>
                            <?= $r["HARGA PER/ LEMBAR"]; ?>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary">GANTI</a> |
                            <a href="" class="btn btn-danger fs-6">HAPUS</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
