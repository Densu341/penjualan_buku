<?php
include "../../db.php";
$search = $_POST['cari'];
header("location:home.php?aksi=cari&search=$search");
