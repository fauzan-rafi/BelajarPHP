<?php
require_once("config.php");

$result = mysqli_query($connect, "SELECT * FROM barang");

?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <title>TOKO</title>
</head>

<body>
      <div class="container">
            <div class="row">
                  <div class="col">
                        <h1>Aplikasi pengelola barang</h1>
                        <a href="insert.php" class="btn btn-primary"> Insert Data</a>
                  </div>
            </div>
      </div>


      <br>

      <table class="table">
            <thead class="thead-dark">
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
            </thead>
            
            <?php $i = 1; ?>

            <?php while ($data = mysqli_fetch_assoc($result)) { ?>
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
                              <a href="delete.php?id=<?= $data['id'] ?>" onclick="return confirm('yakin dihapus?')">Hapus</a> |
                              <a href="edit.php?id=<?= $data['id'] ?>"> Edit </a>
                        </td>
                  </tr>
                  <?php $i++; ?>
            <?php } ?>

      </table>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>