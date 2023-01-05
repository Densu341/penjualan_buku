<?php
include "../../db.php";
$kd = $_POST['id_buku'];
$stok = $_POST['stok'];
$qry = mysqli_query($koneksi, "UPDATE stok SET stok = '$stok' WHERE id_buku = '$kd'");
header('location:buku.php');
