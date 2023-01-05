<?php
include "../../db.php";
$kd = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * from tujuan where kode_beli='$kd'");
$datatujuan = mysqli_fetch_array($query);
?>
<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Alamat Pengiriman</h4>
        </div>

        <div class="modal-body">
            <p>Nama Penerima : <?php echo $datatujuan['nama_penerima']; ?></p>
            <p>Provinsi : <?php echo $datatujuan['provinsi']; ?></p>
            <p>Kabupaten : <?php echo $datatujuan['kabupaten']; ?></p>
            <p>Kecamatan : <?php echo $datatujuan['kecamatan']; ?></p>
            <p>Desa : <?php echo $datatujuan['desa']; ?></p>
            <p>Rw : <?php echo $datatujuan['rw']; ?></p>
            <p>Rt : <?php echo $datatujuan['rt']; ?></p>
            <p>no rumah : <?php echo $datatujuan['no_rumah']; ?></p>
            <p>no telp : <?php echo $datatujuan['no_telp']; ?></p>
        </div>
        <div class="modal-footer">

            <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
                Kembali
            </button>
        </div>


    </div>
</div>