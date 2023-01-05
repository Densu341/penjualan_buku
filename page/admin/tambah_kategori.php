<?php
include "../../db.php";
$kategori = $_POST['kategori'];
mysqli_query($koneksi, "insert into kategori values('','$kategori')");
header("location:kategori.php");
