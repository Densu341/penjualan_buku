<?php
include "db.php";
$email = $_POST['email'];
$pass = $_POST['password'];
$q_log_cus = mysqli_query($koneksi, "SELECT * from customer where email_cus = '$email' && password_cus='$pass'");
$q_log_su = mysqli_query($koneksi, "SELECT * from superuser where email_su = '$email' && password_su='$pass'");
$q_cus = mysqli_fetch_array($q_log_cus);
$q_su = mysqli_fetch_array($q_log_su);
$email_su = $q_su['email_su'];
$email_cus = $q_cus['email_cus'];
$nama_cus = $q_cus['nama_cus'];
$id_cus = $q_cus['id_cus'];
$nama_su = $q_su['nama_su'];
$level = $q_su['level'];
if ($email == $email_su && $pass == $q_su['password_su']) {
	session_start();
	$_SESSION['email_su'] = $email_su;
	$_SESSION['nama_su'] = $nama_su;
	$_SESSION['level'] = $level;
	header("location:page/admin/index.php");
} else if ($email == $email_cus && $pass == $q_cus['password_cus']) {
	session_start();
	$_SESSION['email_cus'] = $email_cus;
	$_SESSION['nama_cus'] = $nama_cus;
	$_SESSION['id_cus'] = $id_cus;
	header("location:index.php");
} else {
	header("location:index.php?pesan=gagal");
}
