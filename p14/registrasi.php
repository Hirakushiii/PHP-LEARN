<?php
require 'function.php';

if (isset($_POST['regist-btn'])) {
    if (register($_POST) > 0) {
        echo "
            <script>
                alert('REGISTRASI BERHASIL!');
                document.location.href = 'registrasi.php';
            </script>
            ";
    } else {
        mysqli_error($connect);
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
    <style>
        body {
            width: 100vw;
            height: 100vh;
            background-image: url(img/giphy1.gif);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow: hidden;
        }

        .container {
            margin-top: 45px;
            padding: 10px 25px;
            width: 50vw;
            height: 80vh;
            box-shadow: 1px 1px 5px black;
            border-radius: 5px;
            backdrop-filter: blur(5px);
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-light">Registrasi</h1>
        <form action="" method="POST" class="mt-5">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="usename" placeholder="username" name="username"
                    autocomplete="no" pattern="[a-z0-9_]+" maxlength="25" required>
                <label for="usename">Username</label>
                <div class="form-text text-white">[ _ . ] *Harus menggunakan huruf kecil / Non kapital</div>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                    required>
                <label for="password">Password</label>
                <div class="form-text text-white">Buat sandi yang rumit dengan campuran huruf, angka, dan simbol</div>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="Password2" placeholder="Konfirmasi Password"
                    name="password2" required>
                <label for="Password2">Konfirmasi Password</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="Remember" required>
                <label class="form-check-label text-white" for="Remember">Remember me!</label>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="regist-btn">Daftar</button>
        </form>
    </div>
    <div class="clear"></div>
    <!-- Pills content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>