<?php 
require_once("config.php");

$result = mysqli_query($connect,"SELECT * FROM barang");

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TOKO</title>
</head>
<body>
      
      <table border="1">
            <tr>
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Jumlah Stok</th>
                  <th>Jenis</th>
                  <th>Status</th>
            </tr>
            <?php $i = 1; ?>
            
            <?php while($data = mysqli_fetch_assoc($result)) { ?>
                  <tr> 
                        <td><?= $i ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['harga'] ?></td>
                        <td><?= $data['jumlah'] ?></td>
                        <td><?= $data['jenis'] ?></td>
                        <td><?= $data['status'] ?></td>
                  </tr>
                  <?php $i++; ?>
            <?php } ?>
            
      </table>

</body>
</html>