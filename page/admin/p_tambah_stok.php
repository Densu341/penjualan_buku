<?php
include "../../db.php";
$id_buku = $_POST['id_buku'];
$stok = $_POST['stok'];
mysqli_query($koneksi, "INSERT into stok set id_buku='$id_buku',stok='$stok'");
header("location:buku.php");
