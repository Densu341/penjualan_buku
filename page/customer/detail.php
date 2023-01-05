<?php
include "../../db.php";
$kd = $_GET['id'];
session_start();
$q_detail = mysqli_query($koneksi, "SELECT * from buku where id_buku='$kd'");
$detail = mysqli_fetch_array($q_detail);
?>
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
            <img src="../../img/gambar_buku/<?php echo $detail['gambar'];  ?>">
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
      <form action="t_transaksi.php" method="post">
        <input type="hidden" name="id_buku" value="<?php echo $detail['id_buku']; ?>" style="width:10px;">
        <input type="hidden" name="harga" value="<?php echo $detail['harga']; ?>" style="width:10px;">
        <?php
        $qrystok = mysqli_query($koneksi, "SELECT * FROM stok where id_buku='$detail[id_buku]'");
        $stok = mysqli_fetch_array($qrystok);
        ?>
        Qty : <input type="number" name="qty" value="1" min="0" max="<?php echo $stok['stok']; ?>" style="width:70px;height:33px;">
        <?php
        $q_cek_s = mysqli_query($koneksi, "SELECT * from selesai where id_cus='$_SESSION[id_cus]' && status_beli='lunas' && status_pengiriman='belum dikirim'");
        $cek_s = mysqli_num_rows($q_cek_s);
        $q_cek_z = mysqli_query($koneksi, "SELECT * from selesai where id_cus='$_SESSION[id_cus]' && status_beli='lunas' && status_pengiriman='dikirim'");
        $cek_z = mysqli_num_rows($q_cek_z);
        $query_kode_beli = mysqli_query($koneksi, "SELECT * from selesai where id_cus='$_SESSION[id_cus]' && status_beli='order' && status_pengiriman='belum dikirim'");
        $data_kode_beli = mysqli_fetch_array($query_kode_beli);
        $kode_beli = $data_kode_beli['kode_beli'];
        $cc = mysqli_query($koneksi, "SELECT * from tujuan where kode_beli='$kode_beli'");
        $cc1 = mysqli_num_rows($cc);
        $qcc = mysqli_query($koneksi, "SELECT * from  selesai where id_cus='$_SESSION[id_cus]' && status_beli='lunas' && status_pengiriman='belum dikirim'");
        $ccc = mysqli_num_rows($qcc);
        if ($ccc >= 1) { ?>
          <a href="home.php?pesan=status belum kirim" class="btn btn-success">Add to Cart</a>
        <?php  } else if ($cc1 >= 1) { ?>
          <a href="home.php?pesan=statusorder" class="btn btn-success">Add to Cart</a>
        <?php } else if ($cek_s >= 1) { ?>
          <a href="home.php?pesan=status belum kirim" class="btn btn-success">Add to Cart</a>

        <?php } else if ($cek_z >= 1) { ?>
          <a href="home.php?hal=selesai&pesan=status belum terima" class="btn btn-success">Add to Cart</a>

        <?php } else {
        ?>
          <button class="btn btn-success" type="submit">
            Add to Cart
          </button>
        <?php } ?>
        <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
          cancel
        </button>
      </form>
    </div>
  </div>
</div>