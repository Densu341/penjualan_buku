<?php
include "../../db.php";
$qrybuku = mysqli_query($koneksi, "select * from buku order by id_buku desc");
@$act = $_GET['act'];
if ($act == "tambah") {
	include("tambah_buku.php");
} else if ($act == "edit") {
	include("edit_buku.php");
} else if ($act == "hapus") {
	$id = $_GET['id'];
	mysqli_query($koneksi, "delete from buku where id_buku='$id'");
	header("location:index.php?page=buku");
}
?>
<?php
include "../../db.php";
session_start();
$nama = $_SESSION['nama_su'];
if (!isset($_SESSION['email_su'])) {
	header("location:../../index.php?act=masuk");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Bakulbuku Sisfor</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
	<script type="text/javascript" src="../../js/jquery-ui/jquery-ui.js"></script>
</head>

<body>
	<div id="head">
		<div class="hdkiri">
			<a href="index.php">Bakul<b>buku</b>Sisfor</a>
		</div>
		<div class="hdkanan">
			<form>
				<input type="text" name="cari" placeholder="cari buku yang anda inginkan disini.." class="cari">
				<input type="submit" name="search" value="cari" class="tombolcari">
			</form>
		</div>
	</div>
	<div id="menu">
		<div class="menukiri">
			<b style="padding:20px;line-height:70px;font-size:20px;color:#fff;">Aplikasi Penjualan Buku</b>
		</div>
		<div class="menukanan">
			<ul>
				<li><i style="color:#fff;">Selamat Datang ,</i>, <a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo "<b>" . $nama . "</b> (admin)"; ?></a></li>
			</ul>
		</div>
	</div>
	<div id="content">
		<div id="contentkiri">
			<div class="welcome">
				<?php
				include("set_buku.php");
				?>
			</div>
		</div>
		<div id="contentkanan">
			<div class="navkanan">
				<div class="hdnavadmin">
					Navigasi
				</div>
				<ul class="navadmin">
					<li><a href="index.php?page=home"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
					<li><a href="kategori.php"><span class="glyphicon glyphicon-list"></span> Kategori</a></li>
					<li><a href="katalog.php"><span class="glyphicon glyphicon-list"></span> Katalog</a></li>
					<li><a href="buku.php"><span class="glyphicon glyphicon-book"></span> Buku</a></li>
					<li><a href="customer.php"><span class="glyphicon glyphicon-user"></span> Customer</a></li>
					<li><a href="transaksi.php"><span class="glyphicon glyphicon-question-sign"></span> Status Transaksi</a></li>
					<li><a href="pengiriman.php"><span class="glyphicon glyphicon-question-sign"></span> Pengiriman buku</a></li>
					<li><a href="keluar.php"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="footeradmin">
		<?php include("../../footer.php") ?>
	</div>
</body>

</html>