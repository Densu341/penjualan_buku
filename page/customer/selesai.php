<?php
$query_kode_beli = mysqli_query($koneksi, "SELECT * from selesai where id_cus='$_SESSION[id_cus]' && status_beli='order' || status_beli='lunas' && status_pengiriman='belum dikirim' || status_pengiriman='dikirim'");
$data_kode_beli = mysqli_fetch_array($query_kode_beli);
$kode_beli = $data_kode_beli['kode_beli'];
$qryselesai = mysqli_query($koneksi, "SELECT * from pembelian where kode_beli='$kode_beli'");
$qrytujuan = mysqli_query($koneksi, "SELECT * from tujuan where kode_beli='$kode_beli'");
$datatujuan = mysqli_fetch_array($qrytujuan);
$qrybayar = mysqli_query($koneksi, "SELECT * from selesai where kode_beli='$kode_beli'");
$databayar = mysqli_fetch_array($qrybayar);
@$pesan = $_GET['pesan'];
if ($pesan == "belum dikirim") {
	echo "<script type='text/javascript'>alert('barang anda lho belum dikirim... :-D atau anda belum bayar');</script>";
}
?>
<div class="hdkeranjang">
	Tahap Akhir Pembayaran
</div>
<center>
	<h2>terima kasih telah melakukan order di Bakulbuku Sisfor </h2>
</center>
<p>Data Penerima</p>
<p>Tanggal order : <?php echo date($databayar['tgl_order']); ?></p>
<p>Nama Penerima : <?php echo $datatujuan['nama_penerima']; ?></p>
<p>Provinsi : <?php echo $datatujuan['provinsi']; ?>,tarif : Rp.<?php echo ($datatujuan['tarif']); ?>,-</p>
<p>Kabupaten : <?php echo $datatujuan['kabupaten']; ?></p>
<p>Kecamatan : <?php echo $datatujuan['kecamatan']; ?></p>
<p>Desa : <?php echo $datatujuan['desa']; ?></p>
<p>Rw : <?php echo $datatujuan['rw']; ?></p>
<p>Rt : <?php echo $datatujuan['rt']; ?></p>
<p>no rumah : <?php echo $datatujuan['no_rumah']; ?></p>
<p>no telp : <?php echo $datatujuan['no_telp']; ?></p>
<p>Data order anda adalah sebagai berikut:</p>
<table class="table table-bordered">
	<th>Judul Buku</th>
	<th>harga</th>
	<th>qty</th>
	<th>Subtotal</th>
	<?php while ($dataselesai = mysqli_fetch_array($qryselesai)) { ?>
		<tr>
			<td><?php $qrybuku = mysqli_query($koneksi, "SELECT * from buku where id_buku='$dataselesai[id_buku]'");
				$databuku = mysqli_fetch_array($qrybuku);
				echo $databuku['judul']; ?></td>
			<td><?php echo $dataselesai['harga']; ?></td>
			<td><?php echo $dataselesai['qty']; ?></td>
			<td>Rp.<?php echo number_format($dataselesai['total_harga']); ?>,-</td>
		</tr>
	<?php } ?>
	<tr>
		<td colspan="2"></td>
		<td>Tarif Pengiriman</td>
		<td>Rp.<?php echo ($datatujuan['tarif']); ?>,-</td>
	</tr>
	<tr>
		<td colspan="2"></td>
		<td>Total Pembayaran</td>
		<td>Rp.<?php echo number_format($databayar['total_bayar']); ?>,-</td>
	</tr>
</table>
<p>Silahkan transfer uang sejumlah <b>Rp.<?php echo number_format($databayar['total_bayar']); ?>,-</b> ke no-rek 62xxxxx atas nama Deni Irawan</p>
<p>Anda dapat mengonfirmasi pembayaran ke:</p>
<p> no telp <b>(0857) 8332 3182</b></p>
<p>WA <b>085783323182</b></B></p>
<p>*Jika 2 hari tidak dilakukan konfirmasi(belum membayar) maka transaksi anda akan kami batalkan</p>
<p>*Perlu kami ingatkan,bahwa anda tidak akan dapat melakukan pembelian dalam jangka waktu 2 hari(proses tunggu pembayaran dan konfirmasi)</p>
<p>*Anda dapat melakukan pembelian kembali setelah melakukan pembayaran dan konfirmasi,atau setelah waktu tunggu 2 hari</p>
<p>*Jika barang sudah anda terima, silahkan lakukan <a href="konfirmasi_terima.php?kode=<?php echo $kode_beli; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Konfirmasi</a>