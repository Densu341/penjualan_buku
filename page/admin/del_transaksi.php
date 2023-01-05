<?php
include "../../db.php";
$kd = $_GET['id'];
$qry = mysqli_query($koneksi, "DELETE FROM selesai WHERE kode_beli='$kd'");
header('location:transaksi.php');
