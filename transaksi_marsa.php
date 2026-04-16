<?php

$namaProduk = "Minimarket marsa";
$lokasiToko = "cihelang";
$namakasirToko = "marsa";
$tanggalTransaksi = "10-04-2026";
$nomorTransaksi = "c12";

$namaProduk1 = "Beras 5kg";
$namaProduk4 = "Daging /kg";
$hargaProdak1 = 75000;
$hargaProduk4 = 50000;
$jumlahProduk1 = 1;
$jumlahProduk4 = 4;

$namaProduk2 = "Minyak Goreng 1L";
$namaProduk5 = "Tepung";
$hargaProduk2 = 13000;
$hargaProduk5 = 17000
$jumlahProduk2 = 2;
$jumlahProduk5 = 5;

$namaProduk3 = "Gula 1kg";
$namaProduk6 = "Mie instan /kg";
$hargaProduk3 = 14000;
$hargaProduk6 = 104000
$jumlahProduk3 = 3;
$jumlahProduk6 = 6;

$totalProduk1 = $hargaProduk1 * $jumlahProduk1;
$totalProduk4 = $hargaProduk4 * $jumlahProduk4;
$totalProduk2 = $hargaProduk2 * $jumlahProduk2;
$totalProduk5 = $hargaProduk5 * $jumlahProduk5;
$totalProduk3 = $hargaProduk3 * $jumlahProduk3;
$totalProduk6 = $hargaProduk6 * $jumlahProduk6;

$totalBelanja=$totalProduk1 + $totalProduk2 + $totalProduk3;
$totalBelanja=$totalProduk4 + $totalProduk5 + $totalProduk6;

$diskon = 10000;
$pajakPersen = 11;
$biayaPlastik = 2000;

$pajak = ($totalBelanja * $pajakPersen)/100;
$setelahDiskon = $totalBelanja - $diskon;
$totalAkhir = $setelahDiskon + $pajak + $biayaPlastik;

echo "<h2>$namaToko</h2>";
echo "Lokasi: $lokasiToko <hr>";

echo "$namaProduk1 ($jumlahProduk1 * $hargaProduk1) = Rp $totalProduk1<br>";
echo "$namaProduk2 ($jumlahProduk2 * $hargaProduk2) = Rp $totalProduk2<br>";
echo "$namaProduk3 ($jumlahProduk3 * $hargaProduk3) = Rp $totalProduk3<br>";
echo "$namaProduk4 ($jumlahProduk4 * $hargaProduk4) = Rp $totalProduk4<br>";
echo "$namaPRoduk5 ($jumlahProduk5 * $hargaProduk5) = Rp $totalProduk5<br>";
echo "$namaProduk6 ($jumlahProduk6 * $hargaProduk6) = Rp $totalProduk6<br>";

echo "<hr>";
echo "Total Belanja: Rp $totalBelanja <br>";
echo "Diskon:Rp $diskon <br>";
echo "pajak (11%): Rp $pajak <br>";
echo "biaya Plastik: Rp $biayaPlastik <br>";
echo "<strong>Total>Total Akhir: Rp $totalAkhir</strong>";

?>


