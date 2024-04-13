<?php
require 'function.php';

$uid = $_GET["id"];

global $connect;
$sql = "DELETE FROM saham WHERE `saham`.`ID` = '$uid'";

if ($connect->query($sql) === TRUE) {
    echo "
            <script>
                alert('DATA BERHASIL DIHAPUS!');
                document.location.href = 'NEW table.php';
            </script>
            ";
} else {
    echo "
            <script>
                alert('DATA GAGAL DIHAPUS!');
                document.location.href = 'NEW table.php';
            </script>
            ";
}
?>