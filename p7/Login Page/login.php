<?php
$error = false;
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "Admin" && $_POST["password"] == "123") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mt-5">Login</h1>
    <div class="container justify-content-center w-50">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="Username" class="form-label">Username :</label>
                <input type="name" class="form-control" id="Username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password :</label>
                <input type="password" class="form-control" id="Password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="submit">Login</button>
        </form>
    </div>
    <?php if ($error == true): ?>
        <div class="alert alert-warning alert-dismissible fade show position-absolute bottom-0 w-100" role="alert">
            <strong>Error</strong>: Kamu memasukkan username/password yang salah!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>