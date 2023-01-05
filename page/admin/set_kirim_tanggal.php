 <?php
  while ($data = mysqli_fetch_array($query_tanggal)) {
    $qrycus = mysqli_query($koneksi, "SELECT * from customer where id_cus='$data[id_cus]'");
    $datacus = mysqli_fetch_array($qrycus);
    $nama = $datacus['nama_cus'];
  ?>
   <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $nama; ?></td>
     <td><?php echo $data['status_pengiriman'] ?></td>
     <td><?php echo $data['tgl_order'] ?></td>
     <td>
       <a href="#" class='tujuan btn btn-success' id='<?php echo  $data['kode_beli']; ?>'>Alamat Pengiriman</a>
       <a href="#" class='edit btn btn-primary' id='<?php echo  $data['kode_beli']; ?>'>Edit</a>
     </td>
   </tr>
 <?php
    $i++;
    $count++;
  }
