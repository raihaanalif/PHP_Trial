<?php

include "config.php";

$username=$_POST['username'];
$password=$_POST['password'];
$confirm=$_POST['pass_confirm'];
$fullname=$_POST['fullname'];
$address=$_POST['address'];
$bornday=$_POST['bornday'];
$school=$_POST['school'];
$religion=$_POST['religion'];

if($password != $confirm){
  header('location:register.php?passconfrm=gagal');
}
else{
  $equal=mysqli_num_rows(mysqli_query($connect,"select username from user where username like '$_POST[username]'"));

  if($equal){
    header('location:register.php?passconfrm=sama');
  }else{
  $sql="insert into user(username, password, fullname, address, bornday, school, religion) values ('$username', '$password', '$fullname', '$address', '$bornday', '$school', '$religion')";
  $hasil = mysqli_query($connect,$sql);
  if($hasil){
    header('location:index.php?passconfrm=berhasil');
    }
  }
}
?>
