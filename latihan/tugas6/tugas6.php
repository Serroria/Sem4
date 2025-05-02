<?php
echo "<h2>";
echo "Perhitungan Total Pembelian (Dengan Array)" ;
echo "</h2>";
echo "====================================================" ."<br>";
?>

<?php
$barang = ["Keyboard", "Mouse", "Processor"];
$harga = array(150000,120000,130000000);
$jumlah = 2;
$indexbeli = 0;

const pajak = 0.10;

echo "Nama Barang:" . $barang[0] ."<br>";

// $subtotal = 0;
// for ($num = 0; $num < count($harga); $num +=1){
//     $subtotal += $harga[$num] * $jumlah;
// }

$subtotal = $harga[$indexbeli] * $jumlah;

$sebelumPajak = $subtotal;
$hargaPajak = $subtotal*pajak;
$total = $subtotal + $hargaPajak;

echo "Harga Satuan: Rp ".$harga[0] ."<br>";
echo "Jumlah beli: ".$jumlah ."<br>";
echo "Total Harga (Sebelum Pajak): Rp ".$sebelumPajak."<br>";
echo "Pajak (10%): Rp " .$hargaPajak ."<br>";
echo "<b>";
echo "Total Bayar: Rp ".$total ."<br>";

?>