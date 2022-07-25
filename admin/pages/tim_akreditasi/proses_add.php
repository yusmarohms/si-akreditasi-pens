<?php

if (isset($_POST['simpan'])) {
  include('../koneksi.php');

  error_reporting (E_ALL ^ E_NOTICE);
  $id_tim = $_POST['id_tim'];
  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $id_staff = $_POST['id_staff'];
  $id_program = $_POST['id_program'];
  $id_jurusan = $_POST['id_jurusan'];
  $id_statuskaryawan = $_POST['id_statuskaryawan'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $ceknip = oci_parse($koneksi, "SELECT nip FROM tim_akreditasi WHERE nip='".$_POST['nip']."' ");
  oci_execute($ceknip, OCI_DEFAULT) or die('execute error');
  oci_fetch_row($ceknip);
  $cekprogram = oci_parse($koneksi, "SELECT id_program FROM tim_akreditasi WHERE id_program = $id_program");
  oci_execute($cekprogram, OCI_DEFAULT) or die('execute error');
  oci_fetch_row($cekprogram);
  $cekjurusan = oci_parse($koneksi, "SELECT id_jurusan FROM tim_akreditasi WHERE id_jurusan=$_POST[id_jurusan] ");
  oci_execute($cekjurusan, OCI_DEFAULT) or die('execute error');
  oci_fetch_row($cekjurusan);
  $cekusername = oci_parse($koneksi, "SELECT username FROM tim_akreditasi WHERE username='".$_POST['username']."' ");
  oci_execute($cekusername, OCI_DEFAULT) or die('execute error');
  oci_fetch_row($cekusername);
  $cek_user = oci_parse($koneksi, "SELECT username FROM tim_akreditasi");
  oci_execute($cekusername, OCI_DEFAULT) or die('execute error');
  oci_fetch_row($cekusername);

  if((oci_num_rows($cekprogram) > 0) && (oci_num_rows($cekjurusan) > 0) && (oci_num_rows($cekusername) > 0)){
    echo "<script>alert('Warning: Duplikat Data!');
    window.location.href='add.php'</script>";
  }

  else {
    $sql = "INSERT INTO tim_akreditasi (id_tim, nip, nama, id_staff, id_program, id_jurusan, id_statuskaryawan, username, password) 
    VALUES (tim_seq.nextval, '" .$nip. "', '" .$nama. "', $id_staff, $id_program, $id_jurusan, $id_statuskaryawan, '" .$username. "', '" .$password. "')";
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