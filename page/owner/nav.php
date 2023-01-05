<div class="hdnav">
    Kategori Buku
    <a href="#" style="color:#fff;padding:0px;"><span class="glyphicon glyphicon-plus"></a>
</div>
<ul class="kategori">
    <?php
    $querykategori = mysqli_query($koneksi, "SELECT * from kategori");
    while ($kategori = mysqli_fetch_array($querykategori)) {
    ?>
        <li><a href="#"><?php echo $kategori['kategori'] ?></a> <a href="#"><span class="glyphicon glyphicon-pencil"></span></a></li>
    <?php } ?>
</ul>