<?php

include 'config.php';

$fullname=$_POST['fullname'];
$address=$_POST['address'];
$bornday=$_POST['bornday'];
$school=$_POST['school'];
$religion=$_POST['religion'];
$level=$_POST['level'];

$review=mysqli_query($connect,"insert into user(fullname, address, bornday, school, religion, level) values ('$fullname', '$address', '$bornday', '$school', '$religion', '$level')");

if(!$review){
  echo "gagal memuat data";
} else{
  header("location:admin_page.php?create=berhasil");
}
?>
