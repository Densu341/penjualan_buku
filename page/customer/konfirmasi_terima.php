<?php
include"../../db.php";
session_start();
$kode = $_GET['kode'];
$q_cek = mysqli_query($koneksi, "SELECT * from selesai where id_cus='$_SESSION[id_cus]' && status_pengiriman='belum dikirim'");
$cek = mysqli_num_rows($q_cek);
if($cek>=1)
{
	header("location:home.php?hal=selesai&pesan=belum dikirim");
}
else{
	mysqli_query($koneksi,"UPDATE selesai set status_pengiriman='diterima' where id_cus='$_SESSION[id_cus]' && kode_beli='$kode'");
	header("location:home.php");
}
