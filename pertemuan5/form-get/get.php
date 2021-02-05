<?php 
// menangkap data yang dikirimkan oleh user
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];

$x = $_GET['x'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
            <ul>
                  <li><?php echo $nama ?></li>
                  <li><?php echo $alamat ?></li>
            </ul>

            <h4><?php echo $x ?></h4>
</body>
</html>