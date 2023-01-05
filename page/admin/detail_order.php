<?php
include "../../db.php";
$kd = $_GET['id'];
$byr = mysqli_fetch_array(mysqli_query($koneksi, "SELECT SUM(total_harga) as total_bayar from pembelian where kode_beli='$kd'"));
$qtot = mysqli_fetch_array(mysqli_query($koneksi, "SELECT SUM(qty) as qty_total from pembelian where kode_beli='$kd'"));
$b = $byr['total_bayar'];
$c = $qtot['qty_total'];
?>
<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Detail Order</h4>
        </div>

        <div class="modal-body">
            <table class="table table-stiped">
                <th>judul buku</th>
                <th>
                    <center>harga</center>
                </th>
                <th>
                    <center>qty</center>
                </th>
                <th>
                    <center>total harga</center>
                </th>
                <?php
                $qry = mysqli_query($koneksi, "SELECT * FROM pembelian WHERE kode_beli='$kd'");
                while ($r = mysqli_fetch_array($qry)) { ?>
                    <tr>
                        <td><?php $id_buku = $r['id_buku'];
                            $qrybuku = mysqli_query($koneksi, "SELECT * from buku where id_buku='$id_buku'");
                            $data_buku = mysqli_fetch_array($qrybuku);
                            $judul = $data_buku['judul'];
                            echo $judul; ?></td>
                        <td>
                            <center>Rp.<?php echo number_format($r['harga']); ?>,-</center>
                        </td>
                        <td>
                            <center><?php echo $r['qty'];  ?></center>
                        </td>
                        <td>
                            <center>Rp.<?php echo number_format($r['total_harga']);  ?>,-</center>
                        </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="2" style="text-align:center;"><b>Total<b></td>
                    <td>
                        <center><?php echo $c; ?></center>
                    </td>
                    <td>
                        <center>Rp.<?php echo number_format($b); ?>,-</center>
                    </td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">

            <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
                Kembali
            </button>
        </div>


    </div>
</div>