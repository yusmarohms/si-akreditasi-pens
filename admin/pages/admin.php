<?php
  error_reporting(0);

session_start();

if (empty($_SESSION[namauser]) AND empty($_SESSION[passuser])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses halaman ini,<br>Anda harus login <br>";
  echo "<a href=../index.php><b>LOGIN</b></a></center>";
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI Akreditasi | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index3.php" class="nav-link">Home</a>
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
            <img src="../dist/img/logoPENS.png" class="img-circle elevation-1" alt="User Image" height="15" width="15">
          </div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.php" class="brand-link">
      <img src="../dist/img/logoPENS.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SI Akreditasi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../index3.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Overview</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="program.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Program</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="program_studi.php" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>Program Studi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="akreditasi.php" class="nav-link">
              <i class="nav-icon fas fa-award"></i>
              <p>Akreditasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="rencana.php" class="nav-link">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>Rencana Akreditasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="manajemen_file.php" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>Manajemen File</p>
            </a>
          </li>
          <li class="nav-header"></li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Manajemen User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tim_akreditasi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tim Akreditasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_tim_ak.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Tim AK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="spm.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SPM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
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
            <h1><b>Admin</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index3.php">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
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
            <h3 class="card-title"><b>Data Admin</b></h3>
            <a href="admin/add.php">
              <button type="button" class="btn-sm btn-info float-sm-right">
                Add New
              </button>
            </a>
          </div>
          <div class="card-body">
            <table id="admin" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Actions</th>
                </tr>
              </thead class="bg-secondary">
              <tbody>
              <?php
                include 'koneksi.php';
                $stid = oci_parse($koneksi, 'SELECT * from admin');
                oci_execute($stid);
                while ($data = oci_fetch_row($stid)) {
              ?>
              <tr>
                <td><?php echo $data[1]; ?></td>
                <td><a href="#" data-toggle="popover"  
                      data-content="<?php echo $data[2]; ?>">
                      view
                    </a>
                </td>
                <td class="td-actions">
                  <div class="btn-group-sm" role="group" aria-label="Basic example">
                  <a href="admin/edit.php?id=<?= $data[0] ?>">
                      <button type="button" class="btn-sm btn-success">
                        <i class="nav-icon fas fa-pen"></i>
                      </button>
                    </a>
                    <a href="admin/delete.php?id=<?= $data[0] ?>" 
							        onclick="return confirm('Anda yakin akan menghapus data ini?')">
                      <button type="button" class="btn-sm btn-danger" data-toggle="modal" data-target="hashtagModalCenter1">
                      <i class="nav-icon fas fa-trash"></i>
                      </button>
                    </a>
                  </div>
                </td>
              </tr>
              <?php
                }
              ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
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
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script type="text/javascript">   
  $(document).ready(function () {
    $('#admin').dataTable({
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('[data-toggle="popover"]').popover();
  });
</script>
</body>
</html>
<?php
}
?>