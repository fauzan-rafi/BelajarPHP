<?php

//penggunaan else if
$hari = "jumat";
echo "<br>";
if ($hari == "senin") {
      echo "Hari senin";
} elseif ($hari == "selasa") {
      echo "Hari selasa";
} elseif ($hari == "rabu") {
      echo "Hari rabu";
} elseif ($hari == "kamis") {
      echo "Hari Kamis";
} else {
      // echo " sekarang bukan hari senin,selasa,rabu,dan kamis";
}
?>
<br>
<?php
// $nilai = 70;
// if ($nilai <= 20) { //rentang 0-20
//       echo "Siswa dapat predikat E";
// } elseif ($nilai <= 40) { //rentang 21 - 40
//       echo "Siswa dapat predikat D";
// } elseif ($nilai <= 60) { //rentang 41 - 60
//       echo "Siswa dapat predikat C";
// } elseif ($nilai <= 80) { // rentang 61 - 80
//       echo "Siswa dapat predikat B";
// } else {
//       echo "Siswa dapat predikat A";
// }
?>
<?php
// switch
$nilai = 70;
switch ($nilai) {
      case $nilai <= 20:
            echo "Siswa dapat predikat E";
            break;
      case $nilai <= 40:
            echo "Siswa dapat predikat D";
            break;
      case $nilai <= 60:
            echo "Siswa dapat predikat C";
            break;
      case $nilai <= 80:
            echo "Siswa dapat predikat B";
            break;
      default:
            echo "Siswa dapat predikat A";
            break;
}
// selesai mengeksekusi switch
echo "<br>";
echo "test";