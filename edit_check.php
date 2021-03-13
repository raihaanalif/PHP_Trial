<?php

include 'config.php';

$id=$_POST['id'];
$fullname=$_POST['fullname'];
$address=$_POST['address'];
$bornday=$_POST['bornday'];
$school=$_POST['school'];
$religion=$_POST['religion'];
$level=$_POST['level'];

$review=mysqli_query($connect,"update user set fullname='$fullname', address='$address', bornday='$bornday', school='$school', religion='$religion', level='$level' where id='$id'");

header("location:admin_page.php?edit=berhasil");
?>
