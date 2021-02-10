<?php 

require_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($connect,"DELETE FROM barang WHERE id=$id");

header("Location: read.php");



?>