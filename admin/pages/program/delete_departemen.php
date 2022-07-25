<?php
include('../koneksi.php');
// cek id
if (isset($_GET['id'])) {
  $ID = $_GET['id'];
	$sql = "delete from tb_departemen where id_departemen='$ID' ";
	$parsesql = oci_parse($koneksi, $sql);
	$q = oci_execute($parsesql) or die(oci_error());
	
  // cek perintah
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='../program.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data gagal dihapus'); window.location.href='../program.php'</script>";
  }
} 
?>