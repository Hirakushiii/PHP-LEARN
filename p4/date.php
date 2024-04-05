<!-- <?php
$hari = date("l");
$tanggal = date("j");
$bulan = date("F");
$tahun = date("Y");
echo "hari ini adalah hari $hari, tanggal $tanggal, bulan $bulan, tahun $tahun";
?> -->

<?php
// mktime(jam,menit,detik,bulan,tanggal,tahun);
echo date("l", mktime(0, 0, 0, 4, 5, 2007));
echo ("<br>");
echo date("l", strtotime("05 april 2007"));
?>