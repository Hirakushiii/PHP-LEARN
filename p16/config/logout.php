<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

echo "<script>
    document.location.href = '../index.php';
</script>";
?>