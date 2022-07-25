<?php

if (isset($_POST['simpan'])) {
  include('../koneksi.php');

  error_reporting (E_ALL ^ E_NOTICE);
  $id_tim = $_POST['id_tim'];
  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $id_staff = $_POST['id_staff'];
  $id_statuskaryawan = $_POST['id_statuskaryawan'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $ceknip = oci_parse($koneksi, "SELECT nip FROM spm WHERE nip=$nip ");
  oci_execute($ceknip, OCI_DEFAULT) or die('execute error');
  oci_fetch_row($ceknip);

  if(oci_num_rows($ceknip) > 0){
    echo "<script>alert('Warning: Duplikat Data!');
    window.location.href='add.php'</script>";
  }

  else {
    $sql = "INSERT INTO spm (id_spm, nip, nama, id_staff, id_statuskaryawan, username, password) 
    VALUES (spm_seq.nextval, '" .$nip. "', '" .$nama. "', $id_staff, $id_statuskaryawan, '" .$username. "', '" .$password. "')";
    $result = oci_parse($koneksi,$sql);
    $r = oci_execute($result, OCI_DEFAULT) or die('execute error');
    $res = oci_commit($koneksi) or die("error commit");
    oci_free_statement($result);
    oci_close($koneksi);
  }

  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data berhasil ditambahkan'); 
    window.location.href='add.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data gagal ditambahkan');
    window.location.href='add.php'</script>";
  }
}