<?php
//contoh array 2 dimensi
$kelompokKelas = [["ani", "budi", "rini"], ["yudi", "hasan", "fajar"]];

//cara mengakses array multi dimensi
echo $kelompokKelas[1][1];
echo "<br>";
//for loop untuk array
for ($i = 0; $i < count($kelompokKelas); $i++) {
      for ($x = 0; $x < 3; $x++) {
            echo $kelompokKelas[$i][$x];
            echo "<br>";
      }
}
