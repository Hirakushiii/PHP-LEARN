<?php
session_start();
if (!isset($_SESSION["login"])) {
    echo "
            <script>
                document.location.href = 'index.php';
            </script>
            ";
    exit;
}
require "function.php";

$saham = query("SELECT * FROM saham");
if (isset($_GET["Searching"])) {
    $saham = cari($_GET['key']);
} else if (isset($_POST['uSort'])) {
    $b = $_POST['uSort'];
    $saham = urutkanU($b);
} else if (isset($_POST['dSort'])) {
    $b = $_POST['dSort'];
    $saham = urutkanD($b);
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

        .sort-btn {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <a href="config/logout.php" class="btn btn-danger position-absolute ms-2">Logout</a>
    <!-- <div class="head position-absolute">
        <a href="registrasi.php" class="btn btn-success">DAFTAR</a>
    </div> -->
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
                    <th scope="col">
                        <form action="" method="POST">
                            <button type="submit" class="btn" role="button" name="uSort" value="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                    class="bi bi-sort-alpha-up short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371zm1.57-.785L11 2.687h-.047l-.652 2.157z" />
                                    <path
                                        d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645zm-8.46-.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.5.5 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707z" />
                                </svg>
                            </button>
                            <button type="submit" class="btn" role="button" name="dSort" value="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                    class="bi bi-sort-alpha-down-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.96 7H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645z" />
                                    <path fill-rule="evenodd"
                                        d="M10.082 12.629 9.664 14H8.598l1.789-5.332h1.234L13.402 14h-1.12l-.419-1.371zm1.57-.785L11 9.688h-.047l-.652 2.156z" />
                                    <path
                                        d="M4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293z" />
                                </svg>
                            </button>
                        </form>
                        ID
                    </th>
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