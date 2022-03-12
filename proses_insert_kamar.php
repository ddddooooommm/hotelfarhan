<?php
include 'koneksi.php';
$id_kamar =$_POST['id_kamar'];
$jenis_kamar =$_POST['jenis_kamar'];
$deskripsi =$_POST['deskripsi'];
$harga =$_POST['harga'];
$query="INSERT INTO kamar SET
id_kamar='$id_kamar',jenis_kamar='$jenis_kamar'
,deskripsi='$deskripsi',harga='$harga'";
mysqli_query($koneksi,$query);
header("location:show_kamar1.php");
?>