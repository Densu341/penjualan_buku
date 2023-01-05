<?php
include "../../db.php";
$kd = $_GET['id'];
$qry = mysqli_query($koneksi, "SELECT * FROM selesai WHERE kode_beli='$kd'");
while ($r = mysqli_fetch_array($qry)) {
?>
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Transaksi</h4>
            </div>

            <div class="modal-body">
                <form action="p_edit_transaksi.php?a=status transaksi" name="modal_popup" enctype="multipart/form-data" method="POST">

                    <div class="form-group">
                        <label for="Modal Name">Nama Customer</label>
                        <input type="hidden" name="kd" class="form-control" value="<?php echo $r['kode_beli']; ?>" />
                        <?php
                        $query = mysqli_query($koneksi, "SELECT * from customer where id_cus='$r[id_cus]'");
                        $data = mysqli_fetch_array($query);
                        $nama = $data['nama_cus'];
                        ?>
                        <input type="text" name="nama_cus" class="form-control" value="<?php echo $nama; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Status Transaksi</label>
                        <select name="status_transaksi" class="form-control">
                            <option selected><?php echo $r['status_beli']; ?></option>
                            <option>order</option>
                            <option>lunas</option>
                        </select>
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