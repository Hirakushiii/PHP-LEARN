<?php
require 'function.php';

if (isset($_POST['login-btn'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $result = mysqli_query($connect, "SELECT * FROM data_user WHERE USERNAME = '$username'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['PASSWORD'])) {
            echo "
            <script>
                alert('LOGIN BERHASIL!');
                document.location.href = 'NEW table.php';
            </script>
            ";
            exit;
        }
    }
    $error = true;
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
            padding: 25px 45px 0 45px;
            width: 40vw;
            box-shadow: 1px 1px 5px black;
            border-radius: 5px;
            backdrop-filter: blur(5px);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-light">Login</h1>
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
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="Remember" required>
                <label class="form-check-label text-white" for="Remember">Remember me!</label>
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-3" name="login-btn">Login</button>
            <a href="registrasi.php" class="btn btn-success w-100 mb-4">Daftar</a>
        </form>
    </div>
    <?php if (isset($error)): ?>
        <div class="alert alert-warning alert-dismissible fade show fixed-top bg-danger text-white border-opacity-10"
            role="alert">
            <strong>ERROR!!! </strong>Kamu memasukkan username atau password yang salah!
            <button type="button" class="btn-close text-light" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <!-- Pills content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>