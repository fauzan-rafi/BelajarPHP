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

      <h1>Aplikasi pengelola barang</h1>

      <a href="insert.php"> Insert Data</a>

      <br>
      
      <table border="1">
            <tr>
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Jumlah Stok</th>
                  <th>Jenis</th>
                  <th>Status</th>
                  <th>Foto</th>
                  <th>Aksi</th>
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
                        <td>
                              <img src="img/<?= $data['foto'] ?>" alt="" width="100px" height="90px">
                        </td>
                        <td>
                        <a href="delete.php?id=<?= $data['id']?>" onclick="return confirm('yakin dihapus?')">Hapus</a> |
                        <a href="edit.php?id=<?= $data['id']?>"> Edit </a>
                        </td>
                  </tr>
                  <?php $i++; ?>
            <?php } ?>
            
      </table>

</body>
</html>