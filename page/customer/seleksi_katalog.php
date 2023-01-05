<div class="hdnav">
    Katalog
</div>
<ul class="kategori">
    <?php
    while ($a = mysqli_fetch_array($q_seleksi_katalog)) {
    ?>
        <li><a href="home.php?katalog=<?php echo $a['id_katalog'] ?>&kategori=<?php echo $a['id_kategori'] ?>"><span class="glyphicon glyphicon-list"></span> <?php echo $a['katalog'] ?></a></li>
    <?php } ?>
</ul>