<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SI Akreditasi | Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <!-- /.login-logo -->
    <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <a href="#" class="h3"><b>SI</b> Monitoring Akreditasi</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login untuk masuk sebagai <b>Admin</b></p>

      <form id="quickForm" method="post" action="proses_log.php" >
        <div class="form-group mb-3">
          <input type="email" class="form-control" placeholder="Username" name="username" id="username">
        </div>
        <div class="form-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
        </div>
        <div class="row">
          <div class="col-8">
            <div class="form-group">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="Submit" value="Login">Login</button>
            </div>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script>
    $(function () {
      $('#quickForm').validate({
        rules: {
          username: {
            required: true
          },
          password: {
            required: true
          }
        },
        messages: {
          username: {
            required: "Please enter an username"
          },
          password: {
            required: "Please enter a password"
          }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
  </body>
</html>