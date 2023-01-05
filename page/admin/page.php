<?php
@$page = $_GET['page'];
if($page=="" || $page=="home")
{
	include("welcome.php");
}
else if($page=="kategori")
{
	include("kategori.php");
}
else if($page=="buku")
{
	include("buku.php");
}
else if($page=="customer")
{
	include("customer.php");
}
else if($page=="konfirmasi")
{
	include("konfirmasi.php");
}
