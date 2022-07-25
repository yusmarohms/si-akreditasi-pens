<?php
  session_start();
  session_destroy();
  echo "<script>alert('Anda telah keluar dari Halaman Tim Akreditasi'); window.location = 'index.php'</script>";
?>