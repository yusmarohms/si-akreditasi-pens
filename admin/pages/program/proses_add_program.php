<?php

if (isset($_POST['simpan'])) {
  include('../koneksi.php');

  $program = $_POST['program'];
  $ket_program = $_POST['ket_program'];

  $sql = "INSERT INTO tb_program (id_program, program, ket_program) 
  VALUES (program_seq.nextval, '" .$program. "', '" .$ket_program. "')";
  //echo($sql);
    
  $result = oci_parse($koneksi,$sql);
    
  //oci_execute($result);
  //echo($result);
  $r = oci_execute($result, OCI_DEFAULT) or die('execute error');
  $res = oci_commit($koneksi) or die("error commit");
  oci_free_statement($result);
  oci_close($koneksi);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data berhasil ditambahkan'); 
    window.location.href='add_program.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data gagal ditambahkan');
    window.location.href='add_program.php'</script>";
  }
}
?>