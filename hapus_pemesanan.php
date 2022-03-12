<?php
include 'koneksi.php';
$id_pemesanan=$_GET["id_pemesanan"];
$query="delete from pemesanan where id_pemesanan='$id_pemesanan'";
mysqli_query($koneksi, $query);
header("location:show_pemesanan1.php");
?>