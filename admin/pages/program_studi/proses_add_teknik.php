<?php

if (isset($_POST['simpan'])) {
  include('../koneksi.php');

  $id_program = $_POST['id_program'];
  $id_jurusan = $_POST['id_jurusan'];
  $id_departemen = $_POST['id_departemen'];

  $cek = oci_parse($koneksi, "SELECT * FROM prodi_teknik WHERE id_program = $id_program AND id_jurusan = $id_jurusan");
  oci_execute($cek, OCI_DEFAULT) or die('execute error');
  oci_fetch_row($cek);

  if((oci_num_rows($cek) > 0)){
    echo "<script>alert('Warning: Duplikat Data!');
    window.location.href='add_prodi_teknik.php'</script>";
  }

  else {
    $sql = "INSERT INTO prodi_teknik (id_teknik, id_program, id_jurusan, id_departemen) 
    VALUES (teknik_seq.nextval, $id_program, $id_jurusan, $id_departemen)";
    $result = oci_parse($koneksi,$sql);
    $r = oci_execute($result, OCI_DEFAULT) or die('execute error');
    $res = oci_commit($koneksi) or die("error commit");
    oci_free_statement($result);
    oci_close($koneksi);
  }
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data berhasil ditambahkan'); 
    window.location.href='add_prodi_teknik.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data gagal ditambahkan');
    window.location.href='add_prodi_teknik.php'</script>";
  }
}               
?>