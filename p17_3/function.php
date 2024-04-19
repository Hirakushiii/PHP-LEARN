<?php
$hostname = "localhost";
$userDB = "root";
$passwordDB = "";
$namafileDB = "saham idx";
$connect = mysqli_connect("$hostname", "$userDB", "$passwordDB", "$namafileDB");     // HOSTNAME, USERNAME, PASSWORD, DATABASE NAME FILE

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

// FUNCTION TAMBAH DATA [C]RUD(CREATE)

// IF IT WORKS?, DON'T TOUCH IT....!
if (isset($_POST["submit"])) {
    // AMBIL DATA DARI TIAP ELEMENT YANG DI INPUT DI FORM
    $id = htmlspecialchars($_POST["id"]);
    $namaP = htmlspecialchars($_POST["NameP"]);
    $pemilik = htmlspecialchars($_POST["pemilik"]);
    $produksi = htmlspecialchars($_POST["produk"]);
    $telepon = htmlspecialchars($_POST["Telepon"]);
    global $connect;

    // QUERY MYSQL UNTUK INPUT DATA KE DATABASE
    $query = "INSERT INTO saham 
                VALUES
                ('$id', '$namaP','$pemilik', '$produksi', '$telepon')";
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
// FUNCTION UBAH DATA CR[U]D(UPDATE)
function ubah($Qdata)
{
    $id = $Qdata['id'];
    $name = htmlspecialchars($Qdata['NameP']);
    $pemilik = htmlspecialchars($Qdata['PemilikP']);
    $produksi = htmlspecialchars($Qdata['ProduksiP']);
    $telepon = htmlspecialchars($Qdata['Telepon']);

    global $connect;

    $query = "UPDATE saham SET 
                `NAMA PERUSAHAAN` = '$name',
                `PEMILIK PERUSAHAAN` = '$pemilik',
                `PRODUKSI PERUSAHAAN` = '$produksi',
                `NOMOR TELEPON` = '$telepon'
                WHERE `saham`.`ID` = '$id'
                ";

    mysqli_query($connect, $query);
    echo mysqli_affected_rows($connect);
}
// FUNCTION CARI DATA C[R]UD(READ)
function cari($key)
{
    $query = "SELECT * FROM saham
            WHERE 
            `ID` LIKE '%$key%'
            ";
    return query($query);
}

// FUCNTION SORT ID 
function urutkanU($b)
{
    $query = "SELECT * FROM saham ORDER BY `ID` ASC";
    return query($query);
}
function urutkanD($b)
{
    $query = "SELECT * FROM saham ORDER BY `ID` DESC";
    return query($query);
}

// FUNCTION REGISTRASI

function register($data)
{
    global $connect;
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $password2 = htmlspecialchars($data['password2']);

    $queryS = mysqli_query($connect, "SELECT USERNAME FROM data_user WHERE USERNAME = '$username'");
    if (mysqli_fetch_assoc($queryS)) {
        echo "
            <script>
                alert('USERNAME SUDAH ADA DI DALAM DATABASE!');
                document.location.href = 'registrasi.php';
            </script>
            ";
        return false;
    }
    if ($password !== $password2) {
        echo "
            <script>
                alert('KONFIRMASI PASSWORD BERBEDA!');
                document.location.href = 'index.php';
            </script>
            ";
        return false;
    }
    // ENSKRIPSI PASSWORD MENJADI CODE ACAK
    $password = password_hash($password, PASSWORD_DEFAULT);

    // MASUKAN DATA INPUT KEDALAM DATABASES
    mysqli_query($connect, "INSERT INTO data_user VALUES('','$username','$password')");

    return mysqli_affected_rows($connect);
}

// FUNCTION LOGIN 

?>