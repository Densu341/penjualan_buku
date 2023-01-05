<?php
include"../../db.php";
$kd=$_GET['id'];
$qry=mysqli_query($koneksi,"DELETE FROM customer WHERE id_cus='$kd'");
header('location:customer.php');
