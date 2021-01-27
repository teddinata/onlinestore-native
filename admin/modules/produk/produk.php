<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Produk</title>
</head>
<body>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <!-- /.row (Traffic & Sales)-->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Data Produk</div>
            <div class="card-body">
              <!-- CONTENT -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Berat</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor=1; ?>
                  <?php $ambil=$koneksi->query("SELECT * FROM tb_produk") or die($koneksi->error); ?>
                  <?php while($pecah = $ambil->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $nomor; ?></td>
                      <td><?php echo $pecah['nama_produk']; ?></td>
                      <td><?php echo number_format($pecah['harga_produk']); ?></td>
                      <td><?php echo number_format($pecah['berat_produk']); ?></td>
                      <td>
                        <img src="../images/<?php echo $pecah['foto_produk']; ?>" width="100">
                      </td>
                      <td>
                        <a href="index.php?modules=hapusproduk&id=<?php echo $pecah['id_produk'] ?>" class="btn-danger btn">Hapus</a>
                        <a href="index.php?modules=ubahproduk&id=<?php echo $pecah['id_produk'] ?>" class="btn btn-warning">Ubah</a>
                      </td>
                    </tr>
                    <?php $nomor++; ?>
                  <?php } ?>
                </tbody>
              </table>
              <a href="index.php?modules=tambahproduk" class="btn btn-primary">Tambah Data</a>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- /.row-->
      <!-- /.row-->
    </div>
  </div>
</body>
</html>