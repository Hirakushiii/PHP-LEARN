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
?>