<?php
//        includekan fungsi paginasi
include 'pagination1.php';
//        koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "store_book");
$db = mysqli_select_db($koneksi, "store_book");

//        query
$sql =  "SELECT * FROM buku ORDER BY judul";
$result = mysqli_query($koneksi, $sql);

//pagination config start
$rpp = 5; // jumlah record per halaman
$reload = "buku.php?page=&pagination=true";
@$page = intval($_GET["page"]);
if ($page <= 0) $page = 1;
$tcount = mysqli_num_rows($result);
$tpages = ($tcount) ? ceil($tcount / $rpp) : 1; // total pages, last page number
$count = 0;
$i = ($page - 1) * $rpp;
$no_urut = ($page - 1) * $rpp;
//pagination config end
?>
<div class="hdkonten">
  Data Buku
</div>
<div class="container">
  <p><a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a>

  <table id="mytable" class="table table-bordered" style="width:78%;">
    <style type="text/css">
      th {
        text-align: center;
      }
    </style>
    <thead>
      <th>No</th>
      <th>Judul Buku</th>
      <th>Gambar Buku</th>
      <th>Stok</th>
      <th>Aksi</th>
    </thead>
    <?php
    $no = 1;
    while (($count < $rpp) && ($i < $tcount)) {
      mysqli_data_seek($result, $i);
      $data = mysqli_fetch_array($result);
    ?>
      <tr>
        <td>
          <center><?php echo $no++ ?></center>
        </td>
        <td><?php echo  $data['judul'] ?></td>
        <td>
          <center><img src="../../img/gambar_buku/<?php echo $data['gambar'] ?> " style="width:70px;height:80px;"></center>
        </td>
        <td>
          <center><?php $qrystok = mysqli_query($koneksi, "SELECT * from stok where id_buku='$data[id_buku]'");
                  $data_stok = mysqli_fetch_array($qrystok);
                  $stok = $data_stok['stok'];
                  echo $stok;
                  if ($stok == "") { ?>
              <a href="#" class='open_modal_tstok' id='<?php echo  $data['id_buku']; ?>'><span class="glyphicon glyphicon-plus"></span></a> <?php } else { ?>
              <a href="#" class='open_modal_stok' id='<?php echo  $data['id_buku']; ?>'><span class="glyphicon glyphicon-pencil"></span></a><?php } ?>
          </center>
        </td>
        <td>
          <center>
            <a href="#" class='open_modal btn btn-info' id='<?php echo  $data['id_buku']; ?>'><span class="glyphicon glyphicon-pencil"></span></a>
            <a href="#" class="btn btn-danger" onclick="confirm_modal('del_buk.php?&id=<?php echo  $data['id_buku']; ?>');"><span class="glyphicon glyphicon-trash"></span></a>
          </center>
        </td>
      </tr>
    <?php
      $i++;
      $count++;
    }
    ?>
  </table>
</div>
<div><?php echo paginate_one($reload, $page, $tpages); ?></div>

<!-- Modal Popup untuk Add buku-->
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;color:#fff;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Buku</h4>
      </div>

      <div class="modal-body">
        <form action="tambah_buku.php" name="modal_popup" enctype="multipart/form-data" method="POST">
          <div class="form-group">
            <label for="Modal Name">Kategori</label>
            <select class="form-control" name="kategori">
              <?php
              $q_allkat = mysqli_query($koneksi, "SELECT * from kategori");
              while ($kat1 = mysqli_fetch_array($q_allkat)) {
              ?>
                <option><?php echo $kat1['kategori']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="Modal Name">Katalog</label>
            <select class="form-control" name="katalog">
              <?php
              $q_allkatalog = mysqli_query($koneksi, "SELECT * from katalog");
              while ($katalog = mysqli_fetch_array($q_allkatalog)) {
              ?>
                <option><?php echo $katalog['katalog']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="judul">Judul Buku</label>
            <input type="text" name="judul" class="form-control" />
          </div>
          <div class="form-group" style="padding-bottom: 10px;">
            <label for="Modal Name">Pengarang</label>
            <input type="text" name="pengarang" class="form-control" />
          </div>
          <div class="form-group" style="padding-bottom: 10px;">
            <label for="Modal Name">penerbit</label>
            <input type="text" name="penerbit" class="form-control" />
          </div>
          <div class="form-group" style="padding-bottom: 10px;">
            <label for="Modal Name">Harga Buku</label>
            <input type="text" name="harga" class="form-control" />
          </div>
          <div class="form-group" style="padding-bottom: 10px;">
            <label for="Description">Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
          </div>
          <div class="form-group" style="padding-bottom: 10px;">
            <label for="Modal Name">Jumlah Halaman</label>
            <input type="text" name="halaman" class="form-control" />
          </div>
          <div class="form-group">
            <label>Tanggal</label>
            <input name="tanggal" type="text" class="form-control" id="tgl" autocomplete="off">
          </div>
          <div class="form-group" style="padding-bottom: 10px;">
            <label for="Modal Name">Gambar</label>
            <input type="file" name="gambar" class="form-control" />
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



      </div>


    </div>
  </div>
</div>

<!-- Modal Popup untuk Edit-->
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>
<!-- Modal Popup untuk tambah stok-->
<div id="Modaltstok" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>
<!-- Modal Popup untuk Edit stok-->
<div id="ModalEditstok" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete-->
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Hapus data? ?</h4>
      </div>

      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Confirm</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



<!-- Javascript untuk popup modal Edit-->
<script type="text/javascript">
  $(document).ready(function() {
    $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
      $.ajax({
        url: "edit_buku.php",
        type: "GET",
        data: {
          id: m,
        },
        success: function(ajaxData) {
          $("#ModalEdit").html(ajaxData);
          $("#ModalEdit").modal('show', {
            backdrop: 'true'
          });
        }
      });
    });
  });
</script>

<!-- Javascript untuk popup modal Edit-->
<script type="text/javascript">
  $(document).ready(function() {
    $(".open_modal_stok").click(function(e) {
      var m = $(this).attr("id");
      $.ajax({
        url: "edit_stok.php",
        type: "GET",
        data: {
          id: m,
        },
        success: function(ajaxData) {
          $("#ModalEditstok").html(ajaxData);
          $("#ModalEditstok").modal('show', {
            backdrop: 'true'
          });
        }
      });
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".open_modal_tstok").click(function(e) {
      var m = $(this).attr("id");
      $.ajax({
        url: "tambah_stok.php",
        type: "GET",
        data: {
          id: m,
        },
        success: function(ajaxData) {
          $("#Modaltstok").html(ajaxData);
          $("#Modaltstok").modal('show', {
            backdrop: 'true'
          });
        }
      });
    });
  });
</script>

<!-- Javascript untuk popup modal Delete-->
<script type="text/javascript">
  function confirm_modal(delete_url) {
    $('#modal_delete').modal('show', {
      backdrop: 'static'
    });
    document.getElementById('delete_link').setAttribute('href', delete_url);
  }
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $("#tgl").datepicker({
      dateFormat: 'yy/mm/dd'
    });
  });
</script>