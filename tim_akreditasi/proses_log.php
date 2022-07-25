<?php 
  include "server.php";

 //koneksi database
  $user = $_POST['username'];
  $pass = $_POST['password'];

  $hasil = oci_parse($con, "SELECT * FROM TIM_AKREDITASI WHERE username='$user' and password='$pass' ");
  oci_execute($hasil);
  $row = oci_fetch_row($hasil);
  if ((oci_num_rows($hasil)) > 0){
    session_start();
    $_SESSION['namatim']     = $row[3];
    $_SESSION['passtim']     = $row[4];
    header('location:index3.php');
  } else {
    session_start();
    session_destroy();
    echo "<script type='text/javascript'>alert('Login gagal');
    document.location='index.php'</script>";
  }
?>