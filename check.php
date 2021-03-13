<!--setelah tadi dari lama index, kita dibawa ke file ini yang berfungsi untuk mengecek password dan username-->
<?php
session_start();

include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($connect,"select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['level']=="admin"){

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		$_SESSION['fullname'] = mysqli_query($connect,"select fullname from user where username='$username'");
		header("location:admin_page.php");

	}else if($data['level']=="users"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "users";
		$_SESSION['fullname'] = mysqli_query($connect,"select fullname from user where username='$username'");
		header("location:user_page.php");
	}else{
		header("location:index.php?pesan=gagal");
	}
}else{
	header("location:index.php?pesan=gagal");
}

?>
