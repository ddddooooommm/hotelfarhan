<?php
include 'koneksi.php';
$id_kamar =$_POST['id_kamar'];
$jenis_kamar =$_POST['jenis_kamar'];
$deskripsi =$_POST['deskripsi'];
$harga =$_POST['harga'];
$query="UPDATE kamar SET id_kamar='$id_kamar',jenis_kamar='$jenis_kamar',deskripsi='$deskripsi',harga='$harga' where id_kamar='$id_kamar'";
mysqli_query($koneksi, $query);
header("location:show_kamar1.php");
?>