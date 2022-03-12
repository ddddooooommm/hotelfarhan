<?php
include 'koneksi.php';
$nik_tamu =$_POST['nik_tamu'];
$nama_tamu =$_POST['nama_tamu'];
$no_telp =$_POST['no_telp'];
$query="INSERT INTO tamu SET
nik_tamu='$nik_tamu',nama_tamu='$nama_tamu'
,no_telp='$no_telp'";
mysqli_query($koneksi,$query);
header("location:show_tamu1.php");
?>