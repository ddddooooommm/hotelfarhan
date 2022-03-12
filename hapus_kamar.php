<?php
include 'koneksi.php';
$id_kamar=$_GET["id_kamar"];
$query="delete from kamar where id_kamar='$id_kamar'";
mysqli_query($koneksi, $query);
header("location:show_kamar1.php");
?>