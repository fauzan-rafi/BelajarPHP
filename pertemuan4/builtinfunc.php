<?php 

//built in function php

//var_dump()
var_dump( 4 > 5);
echo "<br>";
//membuat fungsi waktu
date_default_timezone_set('Asia/Bangkok');
echo " mencetak waktu dengan function date";
echo "<br>";
echo date('l \t\h\e jS');

//mencetak tahun
echo "<br>";
echo " mencetak waktu dengan function date";
echo "<br>";
$today = date("Y-m-d H:i:s"); 
echo $today;
