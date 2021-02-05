<?php 

//contoh membuat array asosiatif

$kelompokA = [
      "ketua" => "Budi",
      "wakil" => "Joko",
      "sekretaris" => "Rini",
      "bendahara" => "Ani"];
echo $kelompokA["sekretaris"];
echo "<br>";

// foreach default
foreach($kelompokA as $key => $anggota)
{
      echo $key . " " . "Kelompok A adalah" . " " . $anggota;
      echo "<br>";
}



?>