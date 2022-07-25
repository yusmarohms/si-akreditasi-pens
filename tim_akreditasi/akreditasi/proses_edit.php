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
  //$file_sk = $_POST['file_sk'];
  // $file_sk = 'tes'; 

  $root = getcwd();
	$file_sk = $_FILES['myfile']['name'];
	$ukuran	= $_FILES['myfile']['size'];
	$file_tmp = $_FILES['myfile']['tmp_name'];	
 
		if($ukuran < 10000000){			
			move_uploaded_file($file_tmp, $root.'/uploads/'.$file_sk) or die('execute error');;
    } else {
      $sql = "INSERT INTO akreditasi (id_akreditasi, id_program, id_jurusan, terbit, kadaluwarsa, keterangan, tindak_lanjut, id_peringkat, file_sk, no_sk) 
      VALUES (akreditasi_seq.nextval, $id_program, $id_jurusan, '" .$terbit. "' , to_date('".$kadaluwarsa."', 'YYYY-MM-DD') , '" .$keterangan. "' , '" .$tindak_lanjut. "' , '" .$id_peringkat. "' , '" .$file_sk. "' , '" .$no_sk. "')";
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
      window.location.href='add_akreditasi.php'</script>";
      } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data gagal ditambahkan');
        window.location.href='add_akreditasi.php'</script>";
      }
    }
}
  // $root = getcwd();
	// $file_sk = $_FILES['myfile']['name'];
	// $ukuran	= $_FILES['myfile']['size'];
	// $file_tmp = $_FILES['myfile']['tmp_name'];	
 
	// 	if($ukuran < 10000000){			
	// 		move_uploaded_file($file_tmp, '$root/uploads/'.$file_sk) or die('execute error');;
  //   } else {
  //     $sql = "INSERT INTO akreditasi (id_akreditasi, id_program, id_jurusan, terbit, kadaluwarsa, keterangan, tindak_lanjut, id_peringkat, file_sk, no_sk) 
  //     VALUES (akreditasi_seq.nextval, $id_program, $id_jurusan, '" .$terbit. "' , to_date('".$kadaluwarsa."', 'YYYY-MM-DD') , '" .$keterangan. "' , '" .$tindak_lanjut. "' , '" .$id_peringkat. "' , '" .$file_sk. "' , '" .$no_sk. "')";
  //     //echo($sql);
    
  //     $result = oci_parse($koneksi,$sql);
    
  //     //oci_execute($result);
  //     //echo($result);
  //     $r = oci_execute($result, OCI_DEFAULT) or die('execute error');
  //     $res = oci_commit($koneksi) or die("error commit");
  //     oci_free_statement($result);
  //     oci_close($koneksi);
  //     if ($res) {
  //       // pesan jika data tersimpan
  //       echo "<script>alert('Data berhasil ditambahkan'); 
  //     window.location.href='add_akreditasi.php'</script>";
  //     } else {
  //       // pesan jika data gagal disimpan
  //       echo "<script>alert('Data gagal ditambahkan');
  //     window.location.href='add_akreditasi.php'</script>";
  //   }
	
  //echo($kadaluwarsa);
  // $file_sk = 'tes';                  