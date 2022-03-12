<?php
include 'koneksi.php';
$id_pemesanan =$_POST['id_pemesanan'];
$id_kamar =$_POST['id_kamar'];
$nik_tamu =$_POST['nik_tamu'];
$cekin =$_POST['cekin'];
$cekout =$_POST['cekout'];
$query="UPDATE pemesanan SET id_pemesanan='$id_pemesanan',id_kamar='$id_kamar',nik_tamu='$nik_tamu',cekin='$cekin',cekout='$cekout' where id_pemesanan='$id_pemesanan'";
mysqli_query($koneksi, $query);
header("location:show_pemesanan1.php");
?>