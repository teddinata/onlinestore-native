<?php 
  
  $ambil = $koneksi->query("SELECT * FROM tb_merek WHERE id_merek='$_GET[id]'");
  $pecah = $ambil->fetch_assoc();

  $koneksi->query("DELETE FROM tb_merek WHERE id_merek='$_GET[id]'");

  echo "<script>alert('merek terhapus');</script>";
  echo "<script>location='index.php?modules=merek';</script>";
?>

