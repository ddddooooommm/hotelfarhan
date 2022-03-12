<?php
include 'koneksi.php';
$nik_tamu=$_GET["nik_tamu"];
$query="delete from tamu where nik_tamu='$nik_tamu'";
mysqli_query($koneksi, $query);
header("location:show_tamu1.php");
?>