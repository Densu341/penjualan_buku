<?php
include "../../db.php";
$id = $_GET['id'];
$e_qry_cus = mysqli_query($koneksi, "SELECT * from customer where id_cus='$id'");
$e_cus = mysqli_fetch_array($e_qry_cus);
?>
<div class="hdkategoriadm">
	Edit Customer
</div>
<form action="" method="post" class="form-group">
	<input type="text" name="id_cus" class="form-control" style="margin:10px;" value="<?php echo $e_cus['id_cus']; ?>" readonly>
	<input type="text" name="nama_cus" class="form-control" style="margin:10px;" value="<?php echo $e_cus['nama_cus']; ?>">
	<input type="text" name="email_cus" class="form-control" style="margin:10px;" value="<?php echo $e_cus['email_cus']; ?>">
	<input type="text" name="passsword_cus" class="form-control" style="margin:10px;" value="<?php echo $e_cus['password_cus']; ?>">
	<input type="submit" name="edit" value="simpan" class="btn btn-success" style="margin:10px;">
</form>
<?php
@$simpan = $_POST['edit'];
if ($simpan) {
	$cos = $_POST['nama_cus'];
	$ecos = $_POST['email_cus'];
	$pcos = $_POST['password_cus'];
	$kd = $_POST['id_cus'];
	mysqli_query($koneksi, "UPDATE customer set nama_cus='$cos',email_cus='$ecos',password_cus='$pcos' where id_cus='$kd'");
	header("location:index.php?page=customer");
}
?>