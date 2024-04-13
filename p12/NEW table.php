<?php
require "function.php";

$saham = query("SELECT * FROM saham");
if (isset($_GET["Searching"])) {
    $saham = cari($_GET['key']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>DATA SAHAM IDX</title>
    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 5px;
            cursor: pointer;
        }

        form {
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h1 class="text-center mt-3">DATA PERUSAHAAN IDX</h1>
    <form class="card-sm w-50" action="" method="GET">
        <div class="row no-gutters">
            <div class="col">
                <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." name="key"
                    size="100">
            </div>
            <!--end col-->
            <div class="col-auto">
                <button class="btn btn-outline-secondary" type="submit" name="Searching">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </button>
            </div>
            <!--end col-->
        </div>
    </form>

    <div class="container mt-3">
        <table class="table">
            <thead>
                <tr class="text-uppercase">
                    <th scope="col">ID</th>
                    <th scope="col">Nama Perusahaan</th>
                    <th scope="col">Pemilik Perusahaan</th>
                    <th scope="col">Produksi Perusahaan</th>
                    <th scope="col">Nomor Telepon</th>
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
                            <?= $r["NOMOR TELEPON"]; ?>
                        </td>
                        <td>
                            <a href="ganti.php?id=<?= $r["ID"]; ?>" class="btn btn-primary" data-bs-toggle="tooltip"
                                data-bs-placement="left" data-bs-title="GANTI">GANTI</a> |
                            <a href="hapus.php?id=<?= $r["ID"]; ?>"
                                onclick="return confirm('YAKIN INGIN MENGHAPUS PERMANEN DATA INI?\n- OKE > LANJUT\n- BATAL > BATALKAN')"
                                class="btn btn-danger fs-6">HAPUS</a>
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
                            <label for="Telepon" class="form-label">Nomor Telepon :</label>
                            <input type="tel" class="form-control" id="Telepon" name="Telepon"
                                pattern="[0-9]{3}-[0-9]{8}" required>
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