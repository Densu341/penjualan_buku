<?php
include "db.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
//enkripsi password
$password = md5($_POST['password']);
mysqli_query($koneksi, "insert into user values('','$nama','$email','$password')");
header("location:index.php?pesan=berhasil daftar");
