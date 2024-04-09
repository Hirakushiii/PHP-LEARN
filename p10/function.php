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
    $id = htmlspecialchars($_POST["id"]);
    $namaP = htmlspecialchars($_POST["NameP"]);
    $pemilik = htmlspecialchars($_POST["pemilik"]);
    $produksi = htmlspecialchars($_POST["produk"]);
    $harga = htmlspecialchars($_POST["harga"]);
    global $connect;

    // QUERY MYSQL UNTUK INPUT DATA KE DATABASE
    $query = "INSERT INTO saham 
                VALUES
                ('$id', '$namaP','$pemilik', '$produksi', '$harga')";
    mysqli_query($connect, $query);
    echo mysqli_affected_rows($connect);
    if (mysqli_affected_rows($connect) > 0) {
        echo "
            <script>
                alert('DATA BERHASIL DIMASUKKAN!');
            </script>
            ";
    } else {
        echo "GAGAL MENAMBAHKAN DATA";
        echo "<br>";
    }
}

?>