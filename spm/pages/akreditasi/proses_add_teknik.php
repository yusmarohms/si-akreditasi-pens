<?php

if (isset($_POST['simpan'])) {
  include('../koneksi.php');

    $id_program = $_POST['id_program'];
    $id_jurusan = $_POST['id_jurusan'];
    $id_peringkat = $_POST['id_peringkat'];
    $terbit = $_POST['terbit'];
    $kadaluwarsa = date("Y-m-d",strtotime(@$_POST['kadaluwarsa']));
    //$kadaluwarsa = $_POST['kadaluwarsa'] == '' ? 0 : $_POST['kadaluwarsa'];;
    $keterangan = $_POST['keterangan'];
    $tindak_lanjut = $_POST['tindak_lanjut'];
    $no_sk = $_POST['no_sk'];
    $file_sk = $_POST['file_sk'];

    $cek = oci_parse($koneksi, "SELECT * FROM akreditasi WHERE id_program = $id_program AND id_jurusan = $id_jurusan");
    oci_execute($cek, OCI_DEFAULT) or die('execute error');
    oci_fetch_row($cek);

    if(oci_num_rows($cek) > 0){
      echo "<script>alert('Warning: Duplikat Data!');
      window.location.href='add_teknik.php'</script>";
    } 
    else {
      $sql = "INSERT INTO akreditasi (id_akreditasi, id_program, id_jurusan, terbit, kadaluwarsa, keterangan, tindak_lanjut, id_peringkat, file_sk, no_sk) 
              VALUES (akreditasi_seq.nextval, $id_program, $id_jurusan, '" .$terbit. "' , to_date('".$kadaluwarsa."', 'YYYY-MM-DD') , 
              '" .$keterangan. "' , '" .$tindak_lanjut. "' , '" .$id_peringkat. "' , '" .$file_sk. "' , '" .$no_sk. "')";
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