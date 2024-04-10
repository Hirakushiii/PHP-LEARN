<?php
require "function.php";

$uid = $_GET["id"];

$data = query("SELECT * FROM saham WHERE id = '$uid'")[0];
if (isset($_POST["submiten"])) {
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('DATA GAGAL DIUBAH!');
                document.location.href = 'NEW table.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('DATA BERHASIL DIUBAH!');
                document.location.href = 'NEW table.php';
            </script>
            ";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center">GANTI DATA</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="id" class="form-label">ID PERUSAHAAN :</label>
                <input type="name" class="form-control" id="id" name="id" value="<?= $data["ID"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="NameP" class="form-label">NAMA PERUSAHAAN :</label>
                <input type="text" class="form-control" id="NameP" name="NameP" value="<?= $data["NAMA PERUSAHAAN"]; ?>"
                    required>
            </div>
            <div class="mb-3">
                <label for="PemilikP" class="form-label">PEMILIK PERUSAHAAN :</label>
                <input type="text" class="form-control" id="PemilikP" name="PemilikP"
                    value="<?= $data["PEMILIK PERUSAHAAN"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="ProduksiP" class="form-label">PRODUKSI PERUSAHAAN :</label>
                <input type="text" class="form-control" id="ProduksiP" name="ProduksiP"
                    value="<?= $data["PRODUKSI PERUSAHAAN"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="Telepon" class="form-label">NOMER TELEPON :</label>
                <input type="text" class="form-control" id="Telepon" name="Telepon"
                    value="<?= $data["NOMOR TELEPON"]; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submiten">GANTI</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>