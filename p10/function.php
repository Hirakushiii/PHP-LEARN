<?php
$connect = mysqli_connect("localhost", "root", "", "saham idx");     // HOSTNAME, USERNAME, PASSWORD, DATABASE NAME FILE
function query($q)
{
    global $connect;
    $result = mysqli_query($connect, $q);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// FUNCTION TAMBAH DATA.
// IF IT WORKS?, DON'T TOUCH IT....!
if (isset($_POST["submit"])) {
    // AMBIL DATA DARI TIAP ELEMENT YANG DI INPUT DI FORM
    $id = $_POST["id"];
    $namaP = $_POST["NameP"];
    $pemilik = $_POST["pemilik"];
    $produksi = $_POST["produk"];
    $harga = $_POST["harga"];
    global $connect;

    // QUERY MYSQL UNTUK INPUT DATA KE DATABASE
    $query = "INSERT INTO saham 
                VALUES
                ('$id', '$namaP','$pemilik', '$produksi', '$harga')";
    mysqli_query($connect, $query);
}
?>