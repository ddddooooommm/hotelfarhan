<html>

  <head>
    <link rel="stylesheet" type="text/css" href="styless.css">

    <title>Login</title>

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
        <form action="cek_login.php" method="post">
        <div class="container">
  <div class="box-login">
  <h4 align="center">FORM LOGIN</h4>
  <hr>

  <form action="" method="post">
    <div class="form-group">
      <label>Username</label>

      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
        </div>
      <input type="text" name="email" class="form-control" placeholder="Masukkan Username">
    </div>
    </div>

    <div class="form-group">
      <label>Password</label>

      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
        </div>
      <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
    </div>
    </div>

</br>
    <button type="submit" name="masuk" class="btn btn-primary">SUBMIT</button>
    <button type="reset" class="btn btn-danger">RESET</button>
        </div>

         <!-- Bootstrap core JavaScript-->
    <script src="frontend/vendor/jquery/jquery.min.js"></script>
    <script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="frontend/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="frontend/js/sb-admin-2.min.js"></script>
    </body>
  </html>