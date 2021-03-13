<?php
include 'config.php';

$id = $_GET['id'];

$hasil=mysqli_query($connect, "delete from user where id='$id'");

if(!$hasil){
  echo "Gagal di delete";
}else{
  header('location:admin_page.php?delete=berhasil');
}
?>
