 <?php
// switch 

 $hari = "Senin";

 switch ($hari){
    case "Senin":
        echo "Hari pertama kerja!";
        break;

    case "jum'at":
        echo "Solat jum'at!";
        break;

    case "Minggu":
        echo "Libur akhir pekan!";
        break;

    default:
        echo "Hari biasa.";
 }
 ?>

<?php 
//perulangan
  for ($i = 1; $i <=5; $i++){
    echo "Angka ke-" .$i."<br>";
  }

//contoh
  for ($i = 0; $i < count($buah); $i++){
    echo $buah[$i]. "<br>";
  }

//peulangan while
  $nilai = 1;

  while ($nilai <=5){
    echo "Nilai: ".$nilai."<br>";
    $nilai++;
  }
?>

<?php
//perulangan forech
  $mahasiswa = [ 
    "10001" => "Andi",
    "10002"=> "Budi",
    "10003"=> "Citra"];

    foreach($mahasiswa as $nim => $nama){
        echo "NIM: ".$nim ."Nama: ".$nama. "<br>";
    }
?>

<?php
//Ternary
$umur = 18;
$status ($umur >=17)? "Dewasa" : "Anal-anak";

echo $status;
?>