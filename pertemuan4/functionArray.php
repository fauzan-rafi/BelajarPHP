<?php 

$namaBuah = array("Pisang","Apel","Semangka","Nanas");
$bilanganGenap = array(4,22,34,86,42,92);

//sort untuk mengurutkan element array dari terkecil ke besar Ascending
sort($bilanganGenap);

foreach ($bilanganGenap as $bilangan) {
      echo $bilangan;
      echo "<br>";
}
echo "<br>";
//rsort untuk mengurutkan element array dari terbesar ke terkecil Descending
rsort($bilanganGenap);
foreach ($bilanganGenap as $bilangan) {
      echo $bilangan;
      echo "<br>";
}

echo "<br>";
//count untuk menghitung banyaknya anggota array
$jumlahNamaBuah = count($namaBuah);
echo $jumlahNamaBuah;
echo "<br>";

//lopping untuk mencetak isi array
for ($i = 0;$i < count($namaBuah); $i++ ) { 
      echo $namaBuah[$i];
      echo "<br>";
}
//foreach
//contoh penggunaan foreach
foreach($namaBuah as $nama){
      echo $nama;
      echo "<br>";
}






?>