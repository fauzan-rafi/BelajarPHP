<?php

$mahasiswa = [
      //nama,     jurusan,     angkatan, nim
      ["Fauzan", "Informatika", 2020,    3192],
      ["Intan",  "Kimia",       2019,    4014]
];




?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>

<body>
      <!-- 
            -Tampilkan array tersebut menggunakan :
                  a) for looping
                  b) foreach
                  c) manual
            -Contoh keluaran
                  Nama : Fauzan
                  Jurusan : Informatika
                  Angkatan : 2020
                  NIM : 3192   
       -->

      <!-- Memnaggil array 2 dimensi menggunakan manual -->

      <h2> Cara manual </h2>
      <ul>
            <li>Nama : <?= $mahasiswa[0][0]  ?></li>
            <li>Jurusan : <?= $mahasiswa[0][1]  ?></li>
            <li>Angkatan : <?= $mahasiswa[0][2]  ?></li>
            <li>Nim : <?= $mahasiswa[0][3]  ?></li>
      </ul>
      <br>
      <ul>
            <li>Nama : <?= $mahasiswa[1][0]  ?></li>
            <li>Jurusan : <?= $mahasiswa[1][1]  ?></li>
            <li>Angkatan : <?= $mahasiswa[1][2]  ?></li>
            <li>Nim : <?= $mahasiswa[1][3]  ?></li>
      </ul>

      <h2> Menggunakan cara for loop</h2>

      <?php for ($i = 0; $i < count($mahasiswa); $i++) { ?>
            <ul>
                  <?php for ($k = 0; $k < 4; $k++) { ?>
                        <li> <?= $mahasiswa[$i][$k]  ?></li>
                  <?php } ?>
            </ul>
      <?php } ?>

      <h2>Menggunakan foreach</h2>
      <!-- Menampilkan array menggunakan foreach -->
      <?php foreach ($mahasiswa as $mhs) { ?>
            <ul>
                  <?php foreach ($mhs as $mh) { ?>
                        <li><?= $mh ?></li>
                  <?php } ?>
            </ul>
      <?php } ?>

</body>

</html>