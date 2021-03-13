<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Halaman admin</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item-active">
          <a class="nav-link text-primary" href="create.php">Create <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
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
      <h1 class="display-4" align="center">Halaman Admin</h1>
      <p class="lead" align="center">Selamat Datang <b><?php echo $_SESSION['username'];?></p>
    </div>
  </div>
<br/>
<?php
  if(isset($_GET['create'])){
    if($_GET['create']=="berhasil"){
      echo "<div class='alert alert-success' role='alert' align='center'> Berhasil Menambah Data </div>";
    }
  }
  elseif (isset($_GET['edit'])) {
    if($_GET['edit']=="berhasil"){
      echo "<div class='alert alert-success' role='alert' align='center'> Berhasil Mengupdate Data </div>";
    }
  }
  elseif (isset($_GET['delete'])) {
    if($_GET['delete']=="berhasil"){
      echo "<div class='alert alert-success' role='alert' align='center'> Berhasil Menghapus Data </div>";
    }
  }
?>
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
        <th scope='col'>Role</th>
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
          $fill=mysqli_query($connect, "select * from user where fullname like '%$search%'");
        }else{
            $fill= mysqli_query($connect,"select * from user");
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
            <td><?php echo $f['level']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $f['id']; ?>" class="btn btn-warning" role="button">Edit</a>
              <a href="delete.php?id=<?php echo $f['id']; ?>" class="btn btn-danger" role="button">Delete</a>
            </td>
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
