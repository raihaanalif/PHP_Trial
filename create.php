<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Menambahkan Akun</title>
</head>
<body>
  <h1 align="center">Menambahkan Akun</h1>

  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header bg-transparent mb=0"><h5 class="text-center">Form Registrasi</h5></div>
          <div class="card-body">
            <form action="create_check.php" method="post">
              <div class="form-group">
                <input type="text" name="fullname" placeholder="Nama Lengkap" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="text" name="address" placeholder="Alamat" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="date" name="bornday" placeholder="Tanggal Lahir: YYYY-MM-DD" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="text" name="school" placeholder="Asal Sekolah" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="text" name="religion" placeholder="Agama" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="text" name="level" placeholder="Role" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="submit" name="create_submit" value="SUBMIT" class="btn btn-primary btn-block">
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
