<?php

$nama = "My Name is FZN";
$alamat = "Jl.Salak";
$umur = 20;
$hobi = "Bersepeda";

?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Latihan</title>
</head>

<body>


      <table border="1">
            <tr>
                  <th>Nama :</th>
                  <td> <?php echo $nama ?> </td>
            </tr>
            <tr>
                  <th>Alamat :</th>
                  <td><?php echo $alamat ?></td>
            </tr>
            <tr>
                  <th>Umur :</th>
                  <td><?php echo $umur ?></td>
            </tr>
            <tr>
                  <th>Hobi :</th>
                  <td><?php echo $hobi ?></td>
            </tr>
      </table>

      <ul>
            <li><?php echo "Nama : $nama" ?></li>
            <li><?php echo "Alamat : $alamat" ?></li>
            <li><?php echo "Umur   :    $umur     "  ?></li>
            <li><?php echo "Hobi : $hobi" ?></li>
      </ul>

</body>

</html>