
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Program Studi | Add Prodi Infokom</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <div class="user-panel mt-1 d-flex">
            <div class="info">
              <a href="#" class="d-block"><?php 
              echo $_SESSION['namauser'] 
              ?></a>
            </div>
            <div class="image">
              <img src="../../dist/img/logoPENS.png" class="img-circle elevation-1" alt="User Image" height="15"
                width="15">
            </div>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index3.php" class="brand-link">
        <img src="../../dist/img/logoPENS.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">SI Akreditasi</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="../../index3.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Overview</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../program.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Program</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../program_studi.php" class="nav-link active">
                <i class="nav-icon fas fa-graduation-cap"></i>
                <p>Program Studi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../akreditasi.php" class="nav-link">
                <i class="nav-icon fas fa-award"></i>
                <p>Akreditasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../rencana.php" class="nav-link">
                <i class="nav-icon fas fa-bookmark"></i>
                <p>Rencana Akreditasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../manajemen_file.php" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>Manajemen File</p>
              </a>
            </li>
            <li class="nav-header"></li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Manajemen User
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../tim_akreditasi.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tim Akreditasi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../data_tim_ak.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Tim AK</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../spm.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SPM</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../admin.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Admin</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="../..index.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="../../index3.php">Home</a></li>
                <li class="breadcrumb-item"><a href="../program_studi.php">Program Studi</a></li>
                <li class="breadcrumb-item active">Add Prodi Infokom</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- card -->
          <div class="card">
            <!-- /.card-header -->
            <div class="card-header">
              <h3 class="card-title"><b>Add a new Prodi Infokom</b></h3>
            </div>
            <div class="card-body">
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- jquery validation -->
                  <!-- form start -->
                  <form id="quickForm" action="proses_add_infokom.php" method="post">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputProgram1">Nama Program:</label>
                        <select name="id_program" class="custom-select" id="exampleInputProgram1">
                          <option value="">--Pilih Program--</option>
                            <?php
                            include('../koneksi.php');
                            $sql = "SELECT * FROM program ORDER BY nomor ASC";
                            $result = oci_parse($koneksi, $sql);
                            oci_execute($result);
                            while ($row = oci_fetch_row($result)) {
                                echo "<option value=$row[0]>$row[1]</option>";
                            }
                            ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputJurusan1">Nama Jurusan:</label>
                        <select name="id_jurusan" class="custom-select" id="exampleInputJurusan1">
                          <option value="">--Pilih Jurusan--</option>
                            <?php
                            include('../koneksi.php');
                            $sql = "SELECT * FROM jurusan ORDER BY nomor ASC";
                            $result = oci_parse($koneksi, $sql);
                            oci_execute($result);
                            while ($row = oci_fetch_row($result)) {
                                echo "<option value=$row[0]>$row[1]</option>";
                            }
                            ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="Departemen1">Nama Departemen:</label>
                        <select name="id_departemen" class="custom-select" id="Departemen1">
                          <option value="">--Pilih Departemen--</option>
                            <?php
                            include('../koneksi.php');
                            $sql = "SELECT * FROM departemen ORDER BY nomor ASC";
                            $result = oci_parse($koneksi, $sql);
                            oci_execute($result);
                            while ($row = oci_fetch_row($result)) {
                                echo "<option value=$row[0] >$row[1]</option>";
                            }
                            ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <input type="reset" class="btn btn-secondary">&nbsp;&nbsp;
                        <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </form>
                  <!--/.col (left) -->
                  <!-- right column -->
                  <div class="col-md-6">

                  </div>
                  <!--/.col (right) -->
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <strong>Copyright &copy; 2022
        <a href="https://www.pens.ac.id/">Politeknik Elektronika Negeri Surabaya</a>.
      </strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        SI <b>Monitoring Akreditasi</b>
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jquery-validation -->
  <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      $('#quickForm').validate({
        rules: {
          id_program: {
            required: true
          },
          id_jurusan: {
            required: true
          },
          id_departemen: {
            required: true
          },
        },
        messages: {
          id_program: {
            required: "Please enter a program"
          },
          id_jurusan: {
            required: "Please enter a jurusan"
          },
          id_departemen: {
            required: "Please enter a departemen"
          },
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
<?php
}
?>