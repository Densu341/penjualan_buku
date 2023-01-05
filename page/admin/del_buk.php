<?php
include"../../db.php";
$kd=$_GET['id'];
$qry=mysqli_query($koneksi,"DELETE FROM buku WHERE id_buku='$kd'");
mysqli_query($koneksi,"DELETE from stok where id_buku='$kd'");
header('location:buku.php');
