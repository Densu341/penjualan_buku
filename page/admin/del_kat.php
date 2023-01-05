<?php
	include "../../db.php";
	$kd=$_GET['id'];
	$qry=mysqli_query($koneksi,"DELETE FROM kategori WHERE id_kategori='$kd'");
	header('location:kategori.php');
