<?php
require '../function.php';
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id', '', time() - 60);
setcookie('key', '', time() - 60);


echo "<script>
    document.location.href = '../index.php';
</script>";
?>