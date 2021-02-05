<?php

$dataDiri = [
      "nama" => "Fauzan",
      "umur" => 19,
      "alamat" => "Jl. Magelang KM.5",
      "hobbi" => "jogging",
      "status" => "mahasiswa"
]


?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>

<body>

      <!-- TAMPILKAN DATA DIRI KALIAN DARI ARRAY DALAM BENTUK LIST HTML -->
      <!-- 
            CONTOH
            1. Nama : Fauzan
            2. umur : 19
            Dst...

       -->
      <!-- Cara memanggil array dengan biasa -->
      <ul>
            <li>Nama : <?= $dataDiri['nama'] ?></li>
            <li>Umur : <?= $dataDiri['umur'] ?></li>
            <li>Alamat : <?= $dataDiri['alamat'] ?></li>
            <li>Hobi : <?= $dataDiri['hobbi'] ?></li>
            <li>Status : <?= $dataDiri['status'] ?></li>
      </ul>

      <br>
      <br>
      <!-- Cara memanggil array dengan looping for -->

      <ul>
            <?php foreach ($dataDiri as $key => $value) { ?>
                  <li><?= $key . " : " . $value ?></li>
            <?php } ?>
      </ul>
</body>

</html>