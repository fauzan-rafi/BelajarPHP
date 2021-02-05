<?php 
//function biasa
function display()
{
      echo "Selamat datang di toko kami<br>";
      echo "Silahkan berbelanja sesuka anda<br>";
      echo "Belanja banyak dapat diskon yang menarik<br>";
      echo "Dukung kami memberikan pelayanan terbaik<br>";
}
//return function
function namaSaya()
{
      $nama = "My name is FZN";
      return $nama;
}

function luasLingkaran()
{
      $luasLingkaran = 20;
      return $luasLingkaran;
}

//contoh
//function dengan parameter
function luasPersegi($p,$l)
{
      $luasPersegi = $p * $l;
      return $luasPersegi;
}

$luas1 = luasPersegi(3,4);
echo $luas1;
echo "<br>";

//function dengan parameter default
function luasPersegiPanjang($p = 0,$l = 0)
{
      $luas = $p * $l;
      return $luas;
}
echo luasPersegiPanjang(3,7);

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TOKO</title>
</head>
<body>
      <nav>
            <!-- <h1><?php  display(); ?></h1> -->
      </nav>

      <p>
            <?php echo namaSaya(); ?>
      </p>
</body>
</html>