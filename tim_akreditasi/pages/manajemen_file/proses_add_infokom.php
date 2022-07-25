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
  $ket = '-';
  $tgl_update = date("Y-m-d",strtotime(@$_POST['tgl_update']));

  $cek = oci_parse($koneksi, "SELECT * FROM file_infokom WHERE id_program = $id_program AND id_jurusan = $id_jurusan");
  oci_execute($cek, OCI_DEFAULT) or die('execute error');
  oci_fetch_row($cek);

  if(oci_num_rows($cek) > 0){
    echo "<script>alert('Warning: Duplikat Data!');
    window.location.href='add_infokom.php'</script>";
  } 

  else{
    $sql = "INSERT INTO file_infokom (id_infokom, id_program, id_jurusan, surat_pengantar, surat_pernyataan, 
            led, lkps, data_infokom, ket, tgl_update)
            VALUES (fileinfokom_seq.nextval, $id_program, $id_jurusan, '" .$surat_pengantar. "', 
            '" .$surat_pernyataan. "', '" .$led. "', '" .$lkps. "', '" .$data_infokom. "', '" .$ket. "',
            to_date('".$tgl_update."', 'YYYY-MM-DD') )";  
    $result = oci_parse($koneksi, $sql);
    $r = oci_execute($result, OCI_DEFAULT) or die('execute error');
    $res = oci_commit($koneksi) or die("error commit");
    oci_free_statement($result);
    oci_close($koneksi);
  }
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data berhasil ditambahkan'); 
    window.location.href='add_infokom.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data gagal ditambahkan');
    window.location.href='add_infokom.php'</script>";
  }
}