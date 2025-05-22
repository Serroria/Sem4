<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 style="text-align: center;">Tugas 7 Pemrograman Berbasis Web</h1>
    <div class="container">
    <div class="section kendaraan">
        <h2>Kendaraan</h2>
        <?php include ('kendaraan.php'); ?>
    </div>

    <div class="section genap">
        <h2>Bilangan Genap</h2>
        <?php 
        include('bilangan.php');
        ?>
    </div>

    <div class="section hewan">
        <h2>Jenis-jenis Hewan</h2>
        <?php 
        include('hewan.php');
        ?>    
    </div>

    <div class="section genap-ganjil">
        <h2>Bilangan Ganjil Genap</h2>
        <?php 
        include ('genapGanjil.php');
        ?>    
    </div>

    </div>
</body>
</html>