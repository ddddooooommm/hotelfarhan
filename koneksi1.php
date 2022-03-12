<?php
$koneksi= mysqli_connect("localhost","root","","hotel_farhan");
if(mysqli_connect_errno()) {
  echo 'gagal terhubung ke database:'.mysqli_connect_error();
}
?>