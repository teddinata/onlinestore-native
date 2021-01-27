<?php 
  
  $ambil = $koneksi->query("SELECT * FROM tb_kategori WHERE id_kategori='$_GET[id]'");
  $pecah = $ambil->fetch_assoc();

  $koneksi->query("DELETE FROM tb_kategori WHERE id_kategori='$_GET[id]'");

  echo "<script>alert('kategori terhapus');</script>";
  echo "<script>location='index.php?modules=kategori';</script>";
?>

