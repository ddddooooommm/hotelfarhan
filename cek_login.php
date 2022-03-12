<?php
session_start();
include "koneksi1.php";
        if(isset($_POST['masuk'])){
          $cek = mysqli_query($koneksi,"SELECT * FROM user WHERE email ='".$_POST['email']."'AND password='".$_POST['password']."'");
          $hasil=mysqli_fetch_array($cek);
          $count= mysqli_num_rows($cek);
          if ($count > 0){
            header ("location:index1.php");
          }else{
            echo "gagal masuk";
      die ("silahkan login kembali <a href='login.php'> disini </a>");

          }
        }


?>