<?php 

// $GLOBALS
function percobaan()
{
      $a = 10;
      $b = 20;
      
      $GLOBALS['hasil'] = $a + $b;

}

percobaan();
echo $hasil;

echo "<br>";

$k = 50;
$f = 20;

function percobaan2()
{
      
      return $GLOBALS['k'] + $GLOBALS['f'];

}

echo percobaan2();

echo "<br>";

function percobaan3()
{
      $GLOBALS['h'] = $GLOBALS['k'] * $GLOBALS['f'];
}

percobaan3();
echo $h;
?>