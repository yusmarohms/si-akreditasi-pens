<?php

if (isset($_POST['simpan'])) {
  include('../koneksi.php');

    $id_program = $_POST['id_program'];
    $id_jurusan = $_POST['id_jurusan'];
    $id_peringkat = $_POST['id_peringkat'];
    $kadaluwarsa = $_POST['kadaluwarsa'];
    $id_batch = $_POST['id_batch'];
    $deadline = $_POST['deadline'];

    $cek = oci_parse($koneksi, "SELECT * FROM rencana WHERE id_program = $id_program AND id_jurusan = $id_jurusan");
    oci_execute($cek, OCI_DEFAULT) or die('execute error');
    oci_fetch_row($cek);

    if(oci_num_rows($cek) > 0){
      echo "<script>alert('Warning: Duplikat Data!');
      window.location.href='add_teknik.php'</script>";
    } 
    else {
      $sql = "INSERT INTO rencana (id_rencana, id_program, id_jurusan,  id_peringkat, kadaluwarsa, id_batch, deadline) 
              VALUES (rencana_seq.nextval, $id_program, $id_jurusan, $id_peringkat, to_date('".$kadaluwarsa."', 'YYYY-MM-DD'), 
              $id_batch, to_date('".$deadline."', 'MM-YYYY'))";
      $result = oci_parse($koneksi,$sql);
      $r = oci_execute($result, OCI_DEFAULT) or die('execute error');
      $res = oci_commit($koneksi) or die("error commit");
      oci_free_statement($result);
      oci_close($koneksi);
    }
    if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data berhasil ditambahkan'); 
    window.location.href='add_teknik.php'</script>";
    } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data gagal ditambahkan');
    window.location.href='add_teknik.php'</script>";
  }
}