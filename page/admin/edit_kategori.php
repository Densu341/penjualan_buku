<?php
include "../../db.php";
$kd = $_GET['id'];
$qry = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori='$kd'");
while ($r = mysqli_fetch_array($qry)) {
?>
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Edit Data Menggunakan Modal Boostrap (popup)</h4>
			</div>

			<div class="modal-body">
				<form action="p_edit_kat.php" name="modal_popup" enctype="multipart/form-data" method="POST">

					<div class="form-group" style="padding-bottom: 20px;">
						<label for="Modal Name">Modal Name</label>
						<input type="hidden" name="id_kategori" class="form-control" value="<?php echo $r['id_kategori']; ?>" />
						<input type="text" name="kategori" class="form-control" value="<?php echo $r['kategori']; ?>" />
					</div>
					<div class="modal-footer">
						<button class="btn btn-success" type="submit">
							Confirm
						</button>

						<button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
							Cancel
						</button>
					</div>

				</form>
			<?php } ?>
			</div>


		</div>
	</div>