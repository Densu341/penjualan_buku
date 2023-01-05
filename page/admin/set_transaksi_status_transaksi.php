 <?php
  while ($data = mysqli_fetch_array($query_status_transaksi)) {
    $qrycus = mysqli_query($koneksi, "SELECT * from customer where id_cus='$data[id_cus]'");
    $datacus = mysqli_fetch_array($qrycus);
    $nama = $datacus['nama_cus'];
  ?>
   <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $nama; ?></td>
     <td><?php echo $data['status_beli'] ?></td>
     <td><?php echo $data['tgl_order'] ?></td>
     <td>
       <a href="#" class='detail_order btn btn-info' id='<?php echo  $data['id_selesai']; ?>'>Detail Order</a>
       <a href="#" class='edit btn btn-primary' id='<?php echo  $data['id_selesai']; ?>'>Edit</a>
       <a href="#" onclick="confirm_modal('del_transaksi.php?&id=<?php echo  $data['id_selesai']; ?>'); " class="btn btn-danger">Delete</a>
     </td>
   </tr>
 <?php
    $i++;
    $count++;
  }
