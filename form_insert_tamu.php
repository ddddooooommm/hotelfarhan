
<html>
<head>
<link rel="stylesheet" type="text/css" href="styless.css">

<title>INSERT TAMU FARHAN</title>

<!-- Custom fonts for this template-->
<link href="frontend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="frontend/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
<div class="box-login">
        <form action="proses_insert_tamu.php" method="post">
        <div class="container">
  <div class="box-login">
  <h4 align="center">INPUT TAMU</h4>
  <hr>

  <form action="" method="post">
    <div class="form-group">
      <label>NIK TAMU</label>

      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div>
      <input type="text" name="nik_tamu" class="form-control">
    </div>
    </div>

    <div class="form-group">
      <label>NAMA TAMU</label>

      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div>
      <input type="text" name="nama_tamu" class="form-control">
    </div>
    </div>

    <div class="form-group">
      <label>NO TELP</label>

      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div>
      <input type="text" name="no_telp" class="form-control">
    </div>
    </div>
    </br>
    <button type="submit" name="masuk" class="btn btn-primary">SUBMIT</button>
    <button type="reset" class="btn btn-danger">RESET</button>
</form>

         <!-- Bootstrap core JavaScript-->
         <script src="frontend/vendor/jquery/jquery.min.js"></script>
    <script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="frontend/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="frontend/js/sb-admin-2.min.js"></script>
</body>
</html>
