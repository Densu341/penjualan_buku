<?php
include "../../db.php";
$kd = $_GET['id'];
$qry = mysqli_query($koneksi, "SELECT * FROM katalog WHERE id_katalog='$kd'");
while ($r = mysqli_fetch_array($qry)) {
?>
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Edit Data Katalog</h4>
			</div>

			<div class="modal-body">
				<form action="p_edit_katalog.php" name="modal_popup" enctype="multipart/form-data" method="POST">

					<div class="form-group" style="padding-bottom: 20px;">
						<label for="Modal Name">Katalog</label>
						<input type="hidden" name="id_katalog" class="form-control" value="<?php echo $r['id_katalog']; ?>" />
						<input type="text" name="katalog" class="form-control" value="<?php echo $r['katalog']; ?>" />
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