<?php
include "../../db.php";
$kd = $_GET['id'];
$qryb = mysqli_query($koneksi, "SELECT * from buku where id_buku = '$kd'");
$dbuk = mysqli_fetch_array($qryb);
?>
<div class="modal-dialog">
	<div class="modal-content">

		<div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4 class="modal-title" id="myModalLabel">Tambah Data stok</h4>
		</div>

		<div class="modal-body">
			<form action="p_tambah_stok.php" name="modal_popup" enctype="multipart/form-data" method="POST">

				<div class="form-group" style="padding-bottom: 20px;">
					<label>judul buku</label>
					<input type="hidden" name="id_buku" class="form-control" value="<?php echo $dbuk['id_buku']; ?>" />
					<input type="text" name="judul" class="form-control" value="<?php echo $dbuk['judul']; ?>" readonly>
				</div>
				<div class="form-group" style="padding-bottom: 20px;">
					<label>Jumlah Stok</label>
					<input type="number" name="stok" class="form-control" value="1">
				</div>
				<div class="modal-footer">
					<button class="btn btn-success" type="submit" name="tambah">
						Confirm
					</button>

					<button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
						Cancel
					</button>
				</div>

			</form>
		</div>


	</div>
</div>