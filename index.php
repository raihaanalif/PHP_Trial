<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Pendaftaran Siswa Baru</title>
</head>
<body>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4" align="center">Pendaftaran Siswa Baru</h1>
      <p class="lead" align="center">Selamat Datang di Laman Pendaftaran Siswa Baru, Silahkan Login dengan Username dan Password. Jika Belum Memiliki Akun, Silahkan Registrasi Terlebih Dahulu.</p>
    </div>
  </div>
    <?php
  	if(isset($_GET['pesan'])){
  		if($_GET['pesan']=="gagal"){
  			echo "<div class='alert alert-danger' role='alert' align='center'>Username dan Password Tidak Sesuai</div>";
  		}
  	 }
     elseif(isset($_GET['passconfrm']))
     {
       if($_GET['passconfrm']=="berhasil")
       {
         echo "<div class='alert alert-success' role='alert' align='center'>Registrasi Berhasil, Silahkan Login</div>";
       }
     }
  	?>
	<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header bg-transparent mb-0"><h5 class="text-center">Silahkan Login</h5></div>
          <div class="card-body">
		          <form action="check.php" method="post">
			             <div class="form-group">
                     <input type="text" name="username" class="form-control" placeholder="Username" required="required">
                   </div>
                   <div class="form-group">
                     <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                   </div>
                   <div class="form-group">
                      <input type="submit" name="login" class="btn btn-primary btn-block" value="LOGIN">
                   </div>
		          </form>
              <form action="register.php">
              <div class="form-group">
                <input type="submit" name="register" value="REGISTER" class="btn btn-primary btn-block">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
	</div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
