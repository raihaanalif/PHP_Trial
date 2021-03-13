<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Halaman Siswa</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item-active">
          <a class="nav-link text-danger" href="logout.php">Logout</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input type="search" class="form-control mr-sm-2" placeholder="Cari Nama Disini" aria-label="Search" name="search">
        <button type="submit" class="btn btn-outline-primary my-2 my-sm-0">Search</button>
      </form>
    </div>
  </nav>
	<?php
	session_start();

	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4" align="center">Halaman User</h1>
      <p class="lead" align="center">Selamat Datang <b><?php echo $_SESSION['username'];?></p>
    </div>
  </div>
  <br/>
  <div class="container">
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope='col'>Nama Lengkap</th>
        <th scope='col'>Alamat</th>
        <th scope='col'>Tanggal Lahir</th>
        <th scope='col'>Agama</th>
        <th scope='col'>Asal Sekolah</th>
        <th scope='col'> </th>
      </tr>
    </thead>
    <tbody class="font-weight-normal">
      <tr>
        <?php
        include 'config.php';
        $no = 1;
        if(isset($_GET['search']))
        {
          $search = $_GET['search'];
          $fill= mysqli_query($connect,"select * from user where level like 'users' and fullname like '%$search%'");
        }else{
            $fill= mysqli_query($connect,"select * from user where level = 'users'");
        }
            while($f=mysqli_fetch_array($fill)){
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $f['fullname']; ?></td>
              <td><?php echo $f['address']; ?></td>
              <td><?php echo $f['bornday']; ?></td>
              <td><?php echo $f['religion']; ?></td>
              <td><?php echo $f['school']; ?></td>
            </tr>
            <?php
          }
      ?>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
