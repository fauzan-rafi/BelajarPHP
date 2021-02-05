<?php 

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

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
            <li> <?=  $nama ?></li>
            <li> <?= $alamat ?></li>
      </ul>

</body>
</html>