<?php

require_once("config.php");

if (isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $jumlah = $_POST['jumlah'];
      $harga = $_POST['harga'];
      $jenis = $_POST['jenis'];
      $status = $_POST['status'];

      $result = mysqli_query(
            $connect,
            "INSERT INTO barang (nama,jumlah,harga,jenis,status) 
            VALUES ('$nama','$jumlah','$harga','$jenis','$status')"
      );

      if (mysqli_affected_rows($connect)) {
            echo "
            <script>
                  alert(\"Data berhasil ditambahkan,silahkan kembali ke halaman utama\");
            </script>
            ";
      } else {
            echo "
            <script>
                  alert(\"Data tidak berhasil ditambahkan,silahkan kembali ke halaman utama atau mengisi formulir ulang\");
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
      <title>INSERT Barang</title>
</head>

<body>

      <h1>Silahkan Masukan Data Barang</h1>

      <form action="" method="POST">
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama"> <br><br>
            <label for="jumlah">Jumlah : </label>
            <input type="text" name="jumlah" id="jumlah"> <br><br>
            <label for="harga">Harga : </label>
            <input type="number" name="harga" id="harga"> <br><br>
            <label for="jenis">Jenis : </label>
            <input type="text" name="jenis" id="jenis"> <br><br>
            <label for="status">Status : </label>
            <input type="text" name="status" id="status"> <br><br>
            <button type="submit" name="submit"> SUBMIT </button>
      </form>

      <br>

      <a href="read.php">Kembali ke halaman utama</a>
</body>

</html>