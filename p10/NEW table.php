<?php
require "function.php";

$saham = query("SELECT * FROM saham");

// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     header("Location: NEW table.php");
//     header("Location: NEW table.php", false);
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>DATA SAHAM IDX</title>
</head>

<body>
    <h1 class="text-center mt-3">DATA PERUSAHAAN IDX</h1>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr class="text-uppercase">
                    <th scope="col">ID</th>
                    <th scope="col">Nama Perusahaan</th>
                    <th scope="col">Pemilik Perusahaan</th>
                    <th scope="col">Produksi Perusahaan</th>
                    <th scope="col">Harga Per/ Lembar</th>
                    <th scope="col" class="text-center">Edit</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($saham as $r): ?>
                    <tr>
                        <th scope="row">
                            <?= $r["ID"]; ?>
                        </th>
                        <td>
                            <?= $r["NAMA PERUSAHAAN"]; ?>
                            <!--  -->
                        </td>
                        <td>
                            <?= $r["PEMILIK PERUSAHAAN"]; ?>
                            <!--  -->
                        </td>
                        <td>
                            <?= $r["PRODUKSI PERUSAHAAN"]; ?>
                            <!--  -->
                        </td>
                        <td>
                            <?= $r["HARGA PER/ LEMBAR"]; ?>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary">GANTI</a> |
                            <a href="hapus.php?id=<?= $r["ID"]; ?>" class="btn btn-danger fs-6" method="post">HAPUS</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-success w-100" data-bs-toggle="modal"
                            data-bs-target="#ShowModal">TAMBAH</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade modal-lg" id="ShowModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="ShowModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h1 class="modal-title fs-5" id="ShowModalLabel">TAMBAH DATA</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="id" class="form-label">ID Perusahaan :</label>
                            <input type="text" class="form-control" id="id" aria-describedby="emailHelp" minlength="4"
                                maxlength="4" name="id" required>
                        </div>
                        <div class="mb-3">
                            <label for="NameP" class="form-label">Nama Perusahaan :</label>
                            <input type="text" class="form-control" id="NameP" name="NameP" required>
                        </div>
                        <div class="mb-3">
                            <label for="Pemilik" class="form-label">Pemilik Perusahaan :</label>
                            <input type="text" class="form-control" id="Pemilik" name="pemilik" required>
                        </div>
                        <div class="mb-3">
                            <label for="Produk" class="form-label">Produksi Perusahaan :</label>
                            <input type="text" class="form-control" id="Produk" name="produk" required>
                        </div>
                        <div class="mb-3">
                            <label for="Harga" class="form-label">Harga Per/ Lembar :</label>
                            <input type="number" class="form-control" id="Harga" minlength="6" maxlength="7"
                                name="harga" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>