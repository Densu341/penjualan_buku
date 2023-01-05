<div class="hdnav">
  Katalog
</div>
<ul class="kategori">
  <?php
  include "pagination1.php";
  $querykatalog = mysqli_query($koneksi, "SELECT * FROM katalog");
  $rpp = 4; // jumlah record per halaman
  $reload = "index.php?page=&pagination=true";
  @$page = intval($_GET["page"]);
  if ($page <= 0) $page = 1;
  $tcount = mysqli_num_rows($querykatalog);
  $tpages = ($tcount) ? ceil($tcount / $rpp) : 1; // total pages, last page number
  $count = 0;
  $i = ($page - 1) * $rpp;
  $no_urut = ($page - 1) * $rpp;
  while (($count < $rpp) && ($i < $tcount)) {
    mysqli_data_seek($querykatalog, $i);
    $katalog = mysqli_fetch_array($querykatalog);
  ?>
    <li><a href="index.php?katalog=<?php echo $katalog['id_katalog'] ?>&kategori=<?php echo $katalog['id_kategori']; ?>"><span class="glyphicon glyphicon-list"></span> <?php echo $katalog['katalog'] ?></a></li>
  <?php
    $i++;
    $count++;
  } ?>
</ul>
<div><?php echo paginate_katalog($reload, $page, $tpages); ?></div>