<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pelanggan</title>
</head>
<body>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <!-- /.row (Traffic & Sales)-->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Kategori</div>
            <div class="card-body">
              <!-- CONTENT -->

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor=1; ?>
                  <?php $ambil=$koneksi->query("SELECT * FROM tb_kategori") or die ($koneksi->error); ?>
                  <?php while($pecah = $ambil->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $nomor; ?></td>
                      <td><?php echo $pecah['nama_kategori']; ?></td>
                      <td>
                        <a href="index.php?modules=hapuskategori&id=<?php echo $pecah['id_kategori'] ?>" class="btn-danger btn">Hapus</a>
                        <a href="index.php?modules=ubahkategori&id=<?php echo $pecah['id_kategori'] ?>" class="btn btn-warning">Ubah</a>
                      </td>
                    </tr>
                    <?php $nomor++; ?>
                  <?php } ?>
                </tbody>
              </table>
              <a href="index.php?modules=tambahkategori" class="btn btn-primary">Tambah Data</a>

              <!-- CONTENT -->
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