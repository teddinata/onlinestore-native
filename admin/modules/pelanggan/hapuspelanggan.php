<?php 
  
  $ambil = $koneksi->query("SELECT * FROM tb_pelanggan WHERE id_pelanggan='$_GET[id]'");
  $pecah = $ambil->fetch_assoc();

  $koneksi->query("DELETE FROM tb_pelanggan WHERE id_pelanggan='$_GET[id]'");

  echo "<script>alert('pelanggan terhapus');</script>";
  echo "<script>location='index.php?modules=pelanggan';</script>";
?>

