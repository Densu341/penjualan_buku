 <?php
  $nama = $_POST['nama'];
  $query = mysqli_query($koneksi, "SELECT * from customer where nama_cus like '%$nama%'");
  while ($data = mysqli_fetch_array($query)) {
    $query_id = mysqli_query($koneksi, "SELECT * FROM selesai where id_cus='$data[id_cus]'");
    while ($datal = mysqli_fetch_array($query_id)) {
      $qrycus = mysqli_query($koneksi, "SELECT * from customer where id_cus='$data[id_cus]'");
      $datacus = mysqli_fetch_array($qrycus);
      $nama = $datacus['nama_cus'];
  ?>
     <tr>
       <td><?php echo $no++ ?></td>
       <td><?php echo $nama; ?></td>
       <td><?php echo $datal['status_pengiriman'] ?></td>
       <td><?php echo $datal['tgl_order'] ?></td>
       <td>
         <a href="#" class='tujuan btn btn-success' id='<?php echo  $data['kode_beli']; ?>'>Alamat Pengiriman</a>
         <a href="#" class='edit btn btn-primary' id='<?php echo  $data['kode_beli']; ?>'>Edit</a>
       </td>
     </tr>
 <?php
      $i++;
      $count++;
    }
  }
  ?>