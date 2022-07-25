<?php
  error_reporting(0);

session_start();

if (empty($_SESSION[namatim]) AND empty($_SESSION[passtim])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses halaman ini,<br>Anda harus login <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI Akreditasi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/logoPENS.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
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

        <!-- Fullscreen -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <div class="user-panel mt-1 d-flex">
            <div class="info">
              <a href="#" class="d-block"><?php 
              echo $_SESSION['namatim'] 
              ?></a>
            </div>
            <div class="image">
              <img src="dist/img/logoPENS.png" class="img-circle elevation-1" alt="User Image" height="15" width="15">
            </div>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/logoPENS.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">SI Akreditasi</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="./index3.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Overview
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/akreditasi.php" class="nav-link">
                <i class="nav-icon fas fa-award"></i>
                <p>Akreditasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/rencana.php" class="nav-link">
                <i class="nav-icon fas fa-bookmark"></i>
                <p>Rencana Akreditasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/manajemen_file.php" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                  Manajemen File
                </p>
              </a>
            </li>
            <li class="nav-header"></li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
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
      <div class="content-header">
        <div class="container-fluid">
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-7">
              <div class="row">
              <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Overview Peringkat Akreditasi
                </h3>
              </div>
              <div class="card-body">
                <div id="donut-chart" style="min-height: 100px; height: 385px; max-height: 400px; 
                  width: 700px; max-width: 100%;"></div>
                <br>
                <div class="small-box bg-light">
                  <a href="pages/akreditasi.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              
              <!-- /.card-body-->
            </div>
                <!-- /.card -->
                <!-- /.Right col -->
              </div>
            </div>
            <div class="col-5">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                    Overview Kelengkapan Peringkat
                </div><!-- /.card-header -->
                <div class="row-md-auto">
                  <!-- small box -->
                  <div class="col">
                    <div class="progress-group">
                      Unggul
                      <?php
                        include 'pages/koneksi.php';
                        $count1 = oci_parse($koneksi, "SELECT COUNT (*) from AKREDITASI
                        INNER JOIN peringkat ON peringkat.id_peringkat = akreditasi.id_peringkat
                        where peringkat.akreditasi='Unggul'");
                        oci_execute($count1);
                        while ( $data1 = oci_fetch_row($count1) ) {
                      ?>
                      <span class="float-right"><b><?php echo $data1[0];?></b>
                        <?php
                          include 'pages/koneksi.php';
                          $count2 = oci_parse($koneksi, "SELECT COUNT (id_akreditasi) from AKREDITASI");
                          oci_execute($count2);
                          while ( $data2 = oci_fetch_row($count2) ) {
                        ?>
                      /
                      <?php echo $data2[0];?> (<?php $x = ($data1[0] / $data2[0]) * 100; $int_cast = (int)$x; echo $int_cast; ?>%) </span>
                      <div class="progress progress-sm">
                        <div class="progress-bar" style="width: <?php echo ($data1[0] / $data2[0]) * 100; } }?>%; background-color: #094C72"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                    <br>
                    <div class="progress-group">
                      Baik Sekali
                      <?php
                        include 'pages/koneksi.php';
                        $count1 = oci_parse($koneksi, "SELECT COUNT (*) from AKREDITASI
                        INNER JOIN peringkat ON peringkat.id_peringkat = akreditasi.id_peringkat
                        where peringkat.akreditasi='Baik Sekali'");
                        oci_execute($count1);
                        while ( $data1 = oci_fetch_row($count1) ) {
                      ?>
                      <span class="float-right"><b><?php echo $data1[0];?></b>
                        <?php
                          include 'pages/koneksi.php';
                          $count2 = oci_parse($koneksi, "SELECT COUNT (id_akreditasi) from AKREDITASI");
                          oci_execute($count2);
                          while ( $data2 = oci_fetch_row($count2) ) {
                        ?>
                      /
                      <?php echo $data2[0];?> (<?php $x = ($data1[0] / $data2[0]) * 100; $int_cast = (int)$x; echo $int_cast; ?>%) </span>
                      <div class="progress progress-sm">
                        <div class="progress-bar" style="width: <?php echo ($data1[0] / $data2[0]) * 100; } }?>%; background-color: #026AA7"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                    <br>
                    <div class="progress-group">
                      Baik
                      <?php
                        include 'pages/koneksi.php';
                        $count1 = oci_parse($koneksi, "SELECT COUNT (*) from AKREDITASI
                        INNER JOIN peringkat ON peringkat.id_peringkat = akreditasi.id_peringkat
                        where peringkat.akreditasi='Baik'");
                        oci_execute($count1);
                        while ( $data1 = oci_fetch_row($count1) ) {
                      ?>
                      <span class="float-right"><b><?php echo $data1[0];?></b>
                        <?php
                          include 'pages/koneksi.php';
                          $count2 = oci_parse($koneksi, "SELECT COUNT (id_akreditasi) from AKREDITASI");
                          oci_execute($count2);
                          while ( $data2 = oci_fetch_row($count2) ) {
                        ?>
                      /
                      <?php echo $data2[0];?> (<?php $x = ($data1[0] / $data2[0]) * 100; $int_cast = (int)$x; echo $int_cast; ?>%)
                      </span>
                      <div class="progress progress-sm">
                        <div class="progress-bar" style="width: <?php echo ($data1[0] / $data2[0]) * 100; } }?>%; background-color: #0079BF"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                    <br>
                    <div class="progress-group">
                      A
                      <?php
                        include 'pages/koneksi.php';
                        $count1 = oci_parse($koneksi, "SELECT COUNT (*) from AKREDITASI
                        INNER JOIN peringkat ON peringkat.id_peringkat = akreditasi.id_peringkat
                        where peringkat.akreditasi='A'");
                        oci_execute($count1);
                        while ( $data1 = oci_fetch_row($count1) ) {
                      ?>
                      <span class="float-right"><b><?php echo $data1[0];?></b>
                      <?php
                        include 'pages/koneksi.php';
                        $count2 = oci_parse($koneksi, "SELECT COUNT (id_akreditasi) from AKREDITASI");
                        oci_execute($count2);
                        while ( $data2 = oci_fetch_row($count2) ) {
                      ?>
                      / 
                      <?php echo $data2[0];?> (<?php $x = ($data1[0] / $data2[0]) * 100; $int_cast = (int)$x; echo $int_cast; ?>%) </span>
                      <div class="progress progress-sm">
                        <div class="progress-bar" style="width: <?php echo ($data1[0] / $data2[0]) * 100; } }?>%; background-color: #298FCA"></div>
                      </div>
                    </div>
                    <br>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                      B
                      <?php
                        include 'pages/koneksi.php';
                        $count1 = oci_parse($koneksi, "SELECT COUNT (*) from AKREDITASI
                        INNER JOIN peringkat ON peringkat.id_peringkat = akreditasi.id_peringkat
                        where peringkat.akreditasi='B'");
                        oci_execute($count1);
                        while ( $data1 = oci_fetch_row($count1) ) {
                      ?>
                      <span class="float-right"><b><?php echo $data1[0];?></b>
                        <?php
                          include 'pages/koneksi.php';
                          $count2 = oci_parse($koneksi, "SELECT COUNT (id_akreditasi) from AKREDITASI");
                          oci_execute($count2);
                          while ( $data2 = oci_fetch_row($count2) ) {
                        ?>
                      /
                      <?php echo $data2[0];?> (<?php $x = ($data1[0] / $data2[0]) * 100; $int_cast = (int)$x; echo $int_cast; ?>%) </span>
                      <div class="progress progress-sm">
                        <div class="progress-bar" style="width: <?php echo ($data1[0] / $data2[0]) * 100; } }?>%; background-color: #5BA4CF"></div>
                      </div>
                    </div>
                    <br>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                      C
                      <?php
                        include 'pages/koneksi.php';
                        $count1 = oci_parse($koneksi, "SELECT COUNT (*) from AKREDITASI
                        INNER JOIN peringkat ON peringkat.id_peringkat = akreditasi.id_peringkat
                        where peringkat.akreditasi='C'");
                        oci_execute($count1);
                        while ( $data1 = oci_fetch_row($count1) ) {
                      ?>
                      <span class="float-right"><b><?php echo $data1[0];?></b>
                        <?php
                          include 'pages/koneksi.php';
                          $count2 = oci_parse($koneksi, "SELECT COUNT (id_akreditasi) from AKREDITASI");
                          oci_execute($count2);
                          while ( $data2 = oci_fetch_row($count2) ) {
                        ?>
                      /
                      <?php echo $data2[0];?> (<?php $x = ($data1[0] / $data2[0]) * 100; $int_cast = (int)$x; echo $int_cast; ?>%) </span>
                      <div class="progress progress-sm">
                        <div class="progress-bar" style="width: <?php echo ($data1[0] / $data2[0]) * 100; } }?>%; background-color: #8BBDD9"></div>
                      </div>
                      <br>
                      <div class="progress-group">
                        Minimum
                        <?php
                          include 'pages/koneksi.php';
                          $count1 = oci_parse($koneksi, "SELECT COUNT (*) from AKREDITASI
                          INNER JOIN peringkat ON peringkat.id_peringkat = akreditasi.id_peringkat
                          where peringkat.akreditasi='MINIMUM'");
                          oci_execute($count1);
                          while ( $data1 = oci_fetch_row($count1) ) {
                        ?>
                        <span class="float-right"><b><?php echo $data1[0];?></b>
                          <?php
                            include 'pages/koneksi.php';
                            $count2 = oci_parse($koneksi, "SELECT COUNT (id_akreditasi) from AKREDITASI");
                            oci_execute($count2);
                            while ( $data2 = oci_fetch_row($count2) ) {
                          ?>
                        /
                        <?php echo $data2[0];?> (<?php $x = ($data1[0] / $data2[0]) * 100; $int_cast = (int)$x; echo $int_cast; ?>%)</span>
                        <div class="progress progress-sm">
                        <div class="progress-bar" style="width: <?php echo ($data1[0] / $data2[0]) * 100; } }?>%; background-color: #BCD9EA"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="small-box bg-light">
                      <a href="pages/akreditasi.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ./row -->
            </div>
            <!-- /.row -->
            <!-- Persentase-->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2022 <a href="https://www.pens.ac.id/">Politeknik Elektronika Negeri
          Surabaya</a>.</strong>
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
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- FLOT CHARTS -->
  <script src="plugins/flot/jquery.flot.js"></script>
  <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
  <script src="plugins/flot/plugins/jquery.flot.resize.js"></script>
  <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
  <script src="plugins/flot/plugins/jquery.flot.pie.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <script>
    $(function () {
    /*
     * DONUT CHART
     * -----------
     */

    var data = [
      {
        label: 'Unggul',
        data :  <?php
                  include 'pages/koneksi.php';
                  $count = oci_parse($koneksi, "SELECT COUNT (*) from AKREDITASI
                  INNER JOIN peringkat ON peringkat.id_peringkat = akreditasi.id_peringkat
                  where peringkat.akreditasi='Unggul'");
                  oci_execute($count);
                  while ( $data = oci_fetch_row($count) ) {
                    echo $data[0];
                  }
                ?>,
        color: '#094C72'
      },
      {
        label: 'Baik Sekali',
        data : <?php
                  include 'pages/koneksi.php';
                  $count = oci_parse($koneksi, "SELECT COUNT (*) from AKREDITASI
                  INNER JOIN peringkat ON peringkat.id_peringkat = akreditasi.id_peringkat
                  where peringkat.akreditasi='Baik Sekali'");
                  oci_execute($count);
                  while ( $data = oci_fetch_row($count) ) {
                    echo $data[0];
                  }
                ?>,
        color: '#026AA7'
      },
      {
        label: 'Baik',
        data : <?php
                  include 'pages/koneksi.php';
                  $count = oci_parse($koneksi, "SELECT COUNT (*) from AKREDITASI
                  INNER JOIN peringkat ON peringkat.id_peringkat = akreditasi.id_peringkat
                  where peringkat.akreditasi='Baik'");
                  oci_execute($count);
                  while ( $data = oci_fetch_row($count) ) {
                    echo $data[0];
                  }
                ?>,
        color: '#0079BF'
      },
      {
        label: 'A',
        data : <?php
                  include 'pages/koneksi.php';
                  $count = oci_parse($koneksi, "SELECT COUNT (*) from AKREDITASI
                  INNER JOIN peringkat ON peringkat.id_peringkat = akreditasi.id_peringkat
                  where peringkat.akreditasi='A'");
                  oci_execute($count);
                  while ( $data = oci_fetch_row($count) ) {
                    echo $data[0];
                  }
                ?>,
        color: '#298FCA'
      },
      {
        label: 'B',
        data : <?php
                  include 'pages/koneksi.php';
                  $count = oci_parse($koneksi, "SELECT COUNT (*) from AKREDITASI
                  INNER JOIN peringkat ON peringkat.id_peringkat = akreditasi.id_peringkat
                  where peringkat.akreditasi='B'");
                  oci_execute($count);
                  while ( $data = oci_fetch_row($count) ) {
                    echo $data[0];
                  }
                ?>,
        color: '#5BA4CF'
      },
      {
        label: 'C',
        data : <?php
                  include 'pages/koneksi.php';
                  $count = oci_parse($koneksi, "SELECT COUNT (*) from AKREDITASI
                  INNER JOIN peringkat ON peringkat.id_peringkat = akreditasi.id_peringkat
                  where peringkat.akreditasi='C'");
                  oci_execute($count);
                  while ( $data = oci_fetch_row($count) ) {
                    echo $data[0];
                  }
                ?>,
        color: '#8BBDD9'
      },
      {
        label: 'Minimum',
        data : <?php
                  include 'pages/koneksi.php';
                  $count = oci_parse($koneksi, "SELECT COUNT (*) from AKREDITASI
                  INNER JOIN peringkat ON peringkat.id_peringkat = akreditasi.id_peringkat
                  where peringkat.akreditasi='MINIMUM'");
                  oci_execute($count);
                  while ( $data = oci_fetch_row($count) ) {
                    echo $data[0];
                  }
                ?>,
        color: '#BCD9EA'
      }
    ]
    $.plot('#donut-chart', data, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      grid: {
        hoverable: true,
        clickable: true
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
  </script>
</body>
</html>
<?php
}
?>
