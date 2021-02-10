<?php
require_once("config.php");

$id = $_GET['id'];

// edit

if (isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $jumlah = $_POST['jumlah'];
      $harga = $_POST['harga'];
      $jenis = $_POST['jenis'];
      $status = $_POST['status'];
      $id = $_POST['id'];



      $result = mysqli_query($connect, "UPDATE barang SET 
                       nama='$nama',jumlah='$jumlah',harga='$harga',jenis='$jenis',status='$status' WHERE id='$id' ");


      if (mysqli_affected_rows($connect)) {
            echo "
      <script>
            alert(\"Data berhasil diedit\");
            document.location.href = 'read.php';
      </script>
      ";
      } else {
            echo "
      <script>
            alert(\"Data tidak berhasil diedit\");
      </script>
      ";
      }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>EDIT data</title>
</head>

<body>
      <h1>Edit data</h1>

      <?php $result = mysqli_query($connect, "SELECT * FROM barang WHERE id=$id") ?>
      <?php while ($data = mysqli_fetch_assoc($result)) { ?>

            <form action="" method="post" enctype="multipart/form-data">
                  <label for="nama">Nama : </label>
                  <input type="text" name="nama" id="nama" value="<?= $data['nama'] ?>"> <br><br>

                  <label for="jumlah">Jumlah : </label>
                  <input type="text" name="jumlah" id="jumlah" value="<?= $data['jumlah'] ?>"> <br><br>

                  <label for="harga">Harga : </label>
                  <input type="number" name="harga" id="harga" value="<?= $data['harga'] ?>"> <br><br>

                  <label for="jenis">Jenis : </label>
                  <input type="text" name="jenis" id="jenis" value="<?= $data['jenis'] ?>"> <br><br>

                  <label for="status">Status : </label>
                  <input type="text" name="status" id="status" value="<?= $data['status'] ?>"> <br><br>
                  <input type="hidden" name="id" value="<?= $data['id'] ?>">

                  <button type="submit" name="submit"> SUBMIT </button>
            </form>
      <?php } ?>
</body>

</html>