<?php 
  include "server.php";

 //koneksi database
  $user = $_POST['username'];
  $pass = $_POST['password'];

  $hasil = oci_parse($con, "SELECT * FROM ADMIN WHERE username='$user' and password='$pass' ");
  oci_execute($hasil);
  $row = oci_fetch_row($hasil);
  if ((oci_num_rows($hasil)) > 0){
    session_start();
    $_SESSION['namauser']     = $row[1];
    $_SESSION['passuser']     = $row[2];
    header('location:index3.php');
  } else {
    session_start();
    session_destroy();
    echo "<script type='text/javascript'>alert('Login gagal');
    document.location='index.php'</script>";
  }
?>