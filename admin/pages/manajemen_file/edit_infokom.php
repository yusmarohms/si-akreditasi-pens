
<?php
  error_reporting(0);

session_start();

if (empty($_SESSION[namauser]) AND empty($_SESSION[passuser])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses halaman ini,<br>Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manajemen File | Edit File Infokom</title>

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
              <a href="../../index.php" class="nav-link">
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
              <a href="../program_studi.php" class="nav-link">
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
              <a href="../manajemen_file.php" class="nav-link active">
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
              <a href="../../logout.php" class="nav-link">
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
                <li class="breadcrumb-item"><a href="../manajemen_file.php">Manajemen File</a></li>
                <li class="breadcrumb-item active">Edit File Akreditasi LAM Infokom</li>
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
              <h3 class="card-title"><b>Edit File Infokom</b></h3>
            </div>
            <div class="card-body">
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- jquery validation -->
                  <?php
                    include('../koneksi.php');
                    // cek id
                    $ID = (isset($_GET['id']) ? $_GET['id'] : '');
                    error_reporting (E_ALL ^ E_NOTICE);
                    $query = "SELECT * from file_infokom
                    where id_infokom='$ID' ";
                    $parsesql = oci_parse($koneksi, $query);
                    oci_execute($parsesql);
                    while ($row = oci_fetch_row($parsesql)) {
                  ?>
                  <!-- form start -->
                  <form id="quickForm" action="" method="post"">
                    <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="exampleInputProgram1">Nama Program:</label>
                          <select name="id_program" class="custom-select" id="exampleInputProgram1">
                            <?php
                              include('../koneksi.php');
                              $sql = "SELECT * FROM file_infokom
                              INNER JOIN program ON program.nomor = file_infokom.id_program
                              where id_infokom='$ID' ";
                              $result = oci_parse($koneksi, $sql);
                              oci_execute($result);
                              while ($prog = oci_fetch_row($result)) {
                                echo "<option value=$prog[10]>$prog[11]</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputJurusan1">Nama Jurusan:</label>
                          <select name="id_jurusan" class="custom-select" id="exampleInputJurusan1">
                            <?php
                              include('../koneksi.php');
                              $database = "SELECT * FROM file_infokom
                              INNER JOIN jurusan ON jurusan.nomor = file_infokom.id_jurusan
                              where id_infokom='$ID' ";
                              $hasil = oci_parse($koneksi, $database);
                              oci_execute($hasil);
                              while ($jurus = oci_fetch_row($hasil)) {
                                echo "<option value=$jurus[10]>$jurus[11]</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="lkpss">Link File LKPS:</label>
                          <input type="text" name="lkps" class="form-control" id="lkpss"
                          value="<?= $row[6]; ?>" >
                        </div>
                        <div class="form-group">
                          <label for="ledd">Link File LED:</label>
                          <input type="text" name="led" class="form-control" id="ledd"
                          value="<?= $row[5]; ?>" >
                        </div>
                        <div class="form-group">
                          <label for="exampleKed">Terakhir di Update:</label>
                          <input type="date" name="tgl_update" class="form-control" id="exampleKed">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="ket">Keterangan:</label>
                          <textarea type="text" name="ket" class="form-control" id="ket" 
                          readonly ><?php echo $row[8]; ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="pengantarr">Link Surat Pengantar:</label>
                          <input type="text" name="surat_pengantar" class="form-control" id="pengantarr"
                          value="<?= $row[3]; ?>" >
                        </div>
                        <div class="form-group">
                          <label for="pernyataann">Link Surat Pernyataan:</label>
                          <input type="text" name="surat_pernyataan" class="form-control" id="pernyataann"
                          value="<?= $row[4]; ?>" >
                        </div>
                        <div class="form-group">
                          <label for="dataa">Link Data Pendukung:</label>
                          <input type="text" name="data_infokom" class="form-control" id="dataa"
                          value="<?= $row[7]; ?>">
                        </div>
                        <div class="form-group">
                          <input type="reset" class="btn btn-secondary">&nbsp;&nbsp;
                          <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                        </div>
                      </div>
                    </div>
                    </div>
                    <!-- /.card-body -->
                  </form>
                  <?php

                    if (isset($_POST['simpan'])) {
                    include('../koneksi.php');

                    $id_program = $_POST['id_program'];
                    $id_jurusan = $_POST['id_jurusan'];
                    $surat_pengantar = $_POST['surat_pengantar'];
                    $surat_pernyataan = $_POST['surat_pernyataan'];
                    $led = $_POST['led'];
                    $lkps = $_POST['lkps'];
                    $data_infokom = $_POST['data_infokom'];
                    $ket = $_POST['ket'];
                    $tgl_update = date("Y-m-d",strtotime(@$_POST['tgl_update']));

                      $ubah = "UPDATE file_infokom SET id_infokom=$ID, id_program=$id_program, id_jurusan=$id_jurusan, 
                      surat_pengantar='$surat_pengantar', surat_pernyataan='$surat_pernyataan', led='$led', lkps='$lkps', 
                      data_infokom='$data_infokom', ket='$ket', tgl_update=to_date('$tgl_update', 'YYYY-MM-DD') WHERE id_infokom=$ID";  

                      $hasilubah = oci_parse($koneksi,$ubah);
                       
                      $r = oci_execute($hasilubah, OCI_DEFAULT);
                      $res = oci_commit($koneksi) or die("error commit");
                      oci_free_statement($hasilubah);
                      oci_close($koneksi);

                    if ($res) {
                      // pesan jika data tersimpan
                      echo "<script>alert('Data berhasil diupdate'); 
                      window.location.href='../manajemen_file.php'</script>";
                    } else {
                      // pesan jika data gagal disimpan
                      echo "<script>alert('Data gagal diupdate');
                      window.location.href='../manajemen_file.php'</script>";
                    }
                  } 
                  }
                  ?>
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
          tgl_update: {
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
          tgl_update: {
            required: "Please enter a terakhir di update"
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