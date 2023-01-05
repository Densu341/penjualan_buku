<?php
	include "../../db.php";
	$kd=$_GET['id'];
	$qry=mysqli_query($koneksi,"DELETE FROM katalog WHERE id_katalog='$kd'");
	header('location:katalog.php');
