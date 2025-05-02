<?php
   echo "Halo, selamat datang di dunia PHP!";
 
   //variabel
   $nama = "Budi";
   $umur = 20;

   // Menampilkan nilai variabel
   echo "<br>";
   echo "Nama: " . $nama . "<br>";
   echo "Umur: " . $umur . " tahun<br>";

?>

<?php 
   //konstanta
   define("site_name", "unsika.ac.id");
   define("Version", "1.0");
   echo "<h1>";
   echo "Selamat datang di " .site_name. "<br>";
   echo "Versi Sistem: " .Version. "<br>";
?>

<?php
//string
   $nama = "Andi";
   echo "Nama saya adalah" .$nama;
?>

<?php
//integer
   $umur = 25;
   echo "Umur saya”. $umur. “tahun";
?>

<?php
//float
   $berat = 55.5;
   echo "Berat badan saya". $berat ."kg";
?>

<?php
//boolean
   $isLogin = true;
?>


<?php

    //array
   $buah = ["apel", "jeruk", "mangga"];
   echo $buah[1];

   //tipe data


?>


<?php
//object
   class Mahasiswa {
       public $nama;
       public function sapa() {
           return "Halo, saya $this->nama";
       }
   }
   $mhs = new Mahasiswa();
   $mhs->nama = "Jeni";
   echo $mhs->sapa();
?>

<?php
//null
   $data = null;
   var_dump($data);
?>



