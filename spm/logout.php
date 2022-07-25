<?php
  session_start();
  session_destroy();
  echo "<script>alert('Anda telah keluar dari Halaman SPM'); window.location = 'index.php'</script>";
?>
