<?php

require_once("config.php");

if (isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $jumlah = $_POST['jumlah'];
      $harga = $_POST['harga'];
      $jenis = $_POST['jenis'];
      $status = $_POST['status'];

      $random = uniqid();
      $allowedExt = ['png', 'jpg', 'jpeg'];
      $fileNames = $_FILES['foto']['name'];
      $fileSize = $_FILES['foto']['size'];
      $fileExt = pathinfo($fileNames, PATHINFO_EXTENSION);

      if (!in_array($fileExt, $allowedExt)) {
            echo "
            <script>
                  alert(\"Data tidak berhasil ditambahkan,extensi yang diupload tidak sesuai\");
            </script>
            ";
      } else {
            if ($fileSize >= 2000000) {
                  echo "
                  <script>
                        alert(\"Data tidak berhasil ditambahkan,ukuran file yang diupload tidak sesuai\");
                  </script>
                  ";
            } else {
                  $foto = $random . "_" . $fileNames;
                  move_uploaded_file($_FILES['foto']['tmp_name'], 'img/' . $foto);

                  $result = mysqli_query(
                        $connect,
                        "INSERT INTO barang (nama,foto,jumlah,harga,jenis,status) 
                        VALUES ('$nama','$foto','$jumlah','$harga','$jenis','$status')"
                  );
            }
      }



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

      <form action="" method="POST" enctype="multipart/form-data">
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

            <label for="foto">Foto : </label>
            <input type="file" name="foto" id="foto" required="required">
            <p style="color: red;">File yang harus diupload berformat PNG | JPG | JPEG</p>
            <button type="submit" name="submit"> SUBMIT </button>
      </form>

      <br>

      <a href="read.php">Kembali ke halaman utama</a>
</body>

</html>