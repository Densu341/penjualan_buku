<?php
include "../../db.php";
$kd = $_GET['id'];
$qry = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$kd'");
while ($r = mysqli_fetch_array($qry)) {
?>
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Edit Buku</h4>
            </div>

            <div class="modal-body">
                <form action="p_edit_buk.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                    <div class="form-group" style="padding-bottom: 10px;">
                        <label for="Modal Name">Kategori</label>
                        <select class="form-control" name="kategori">
                            <?php
                            $idkat = $r['id_kategori'];
                            $qrykat = mysqli_query($koneksi, "SELECT * from kategori where id_kategori = '$idkat'");
                            $kat = mysqli_fetch_array($qrykat);
                            $kategori = $kat['kategori'];
                            $q_allkat = mysqli_query($koneksi, "SELECT * from kategori");
                            ?>
                            <option selected><?php echo $kategori ?></option>
                            <?php while ($kat1 = mysqli_fetch_array($q_allkat)) { ?>
                                <option><?php echo $kat1['kategori']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group" style="padding-bottom: 10px;">
                        <label for="Modal Name">Judul Buku</label>
                        <input type="hidden" name="id_buku" class="form-control" value="<?php echo $r['id_buku']; ?>" />
                        <input type="text" name="judul" class="form-control" value="<?php echo $r['judul']; ?>" />
                    </div>
                    <div class="form-group" style="padding-bottom: 10px;">
                        <label for="Modal Name">Pengarang</label>
                        <input type="text" name="pengarang" class="form-control" value="<?php echo $r['pengarang']; ?>" />
                    </div>
                    <div class="form-group" style="padding-bottom: 10px;">
                        <label for="Modal Name">penerbit</label>
                        <input type="text" name="penerbit" class="form-control" value="<?php echo $r['penerbit']; ?>" />
                    </div>
                    <div class="form-group" style="padding-bottom: 10px;">
                        <label for="Modal Name">Harga Buku</label>
                        <input type="text" name="harga" class="form-control" value="<?php echo $r['harga']; ?>" />
                    </div>
                    <div class="form-group" style="padding-bottom: 10px;">
                        <label for="Modal Name">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="<?php echo $r['deskripsi']; ?>" />
                    </div>
                    <label for="Modal Name">Jumlah Halaman</label>
                    <input type="text" name="halaman" class="form-control" value="<?php echo $r['hal']; ?>" />
            </div>
            <div class="form-group" style="padding-bottom: 10px;">
                <label for="Modal Name">Gambar Buku</label>
                <input type="file" name="gambar" value="<?php echo $r['gambar']; ?>" />
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