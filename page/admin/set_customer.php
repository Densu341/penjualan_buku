        <?php
        //        includekan fungsi paginasi
        include 'pagination1.php';
        //        koneksi ke database
        $koneksi = mysqli_connect("localhost", "root", "", "store_book");
        $db = mysqli_select_db($koneksi, "store_book");

        //        query
        $sql =  "SELECT * FROM customer ORDER BY nama_cus";
        $result = mysqli_query($koneksi, $sql);

        //pagination config start
        $rpp = 10; // jumlah record per halaman
        $reload = "customer.php?pagination=true";
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
          Data Customer
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Customer</th>
              <th>
                <center>Aksi</center>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            while (($count < $rpp) && ($i < $tcount)) {
              mysqli_data_seek($result, $i);
              $data = mysqli_fetch_array($result);
            ?>
              <tr>
                <td width="80px">
                  <?php echo ++$no_urut; ?>
                </td>

                <td>
                  <?php echo $data['nama_cus']; ?>
                </td>
                <td width="120px" class="text-center">
                  <a href="#" onclick="confirm_modal('del_cus.php?&id=<?php echo  $data['id_cus']; ?>');" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
              </tr>
            <?php
              $i++;
              $count++;
            }
            ?>
          </tbody>
        </table>
        <div><?php echo paginate_one($reload, $page, $tpages); ?></div>
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

        <!-- Javascript untuk popup modal Delete-->
        <script type="text/javascript">
          function confirm_modal(delete_url) {
            $('#modal_delete').modal('show', {
              backdrop: 'static'
            });
            document.getElementById('delete_link').setAttribute('href', delete_url);
          }
        </script>