<?php
include "db.php";
$kd = $_GET['id'];
$q_detail = mysqli_query($koneksi, "select * from buku where id_buku='$kd'");
$detail = mysqli_fetch_array($q_detail);
?>

<link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<div class="container-fluid">
				<h3>Detail buku "<i style="font-size:20px;"><?php echo $detail['judul']; ?></i>"</h3>
			</div>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="detailbuku">
					<div class="col-md-4">
						<img src="img/gambar_buku/<?php echo $detail['gambar'];  ?>">
					</div>
					<div class="col-md-6">
						<table>
							<tr>
								<td width="140px;">
									<p>Judul
								</td>
								<td>: <?php echo $detail['judul']; ?></p>
								</td>
							<tr>
								<td>
									<p>Pengarang
								</td>
								<td>: <?php echo $detail['pengarang']; ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<p>Penerbit
								</td>
								<td>: <?php echo $detail['penerbit']; ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<p>Jumlah Halaman
								</td>
								<td>: <?php echo $detail['hal'] ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<p>Harga
								</td>
								<td>: Rp.<?php echo number_format($detail['harga']) ?>,-</p>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<i style="font-size:20px;">Deskripsi :</i>
			<p><?php echo $detail['deskripsi']; ?></p>
		</div>
		<div class="modal-footer">
			<p>Anda harus login terlebih dahulu jika ingin membeli buku kami</p>
			<button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
				Kembali
			</button>
		</div>
	</div>
</div>

<!-- modal login dulu -->
<div id="loginsek" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="text-align:center;background:#2e8b57;color:#fff;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Silahkan Login dulu untuk dapat membeli</h4>
			</div>
			<div class="modal-body">
				<form action="actlogin.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input name="email" type="email" class="form-control" placeholder="email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input name="password" type="password" class="form-control" placeholder="Password">
					</div>
					<input type="submit" class="btn btn-success" value="Masuk">
					belum punya akun? <a data-toggle="modal" data-target="#daftar">Daftar</a>
			</div>
			</form>
		</div>
	</div>
</div>