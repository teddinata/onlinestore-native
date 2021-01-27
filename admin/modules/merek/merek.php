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
            <div class="card-header">Merek</div>
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
                  <?php $ambil=$koneksi->query("SELECT * FROM tb_merek") or die ($koneksi->error); ?>
                  <?php while($pecah = $ambil->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $nomor; ?></td>
                      <td><?php echo $pecah['nama_merek']; ?></td>
                      <td>
                        <a href="index.php?modules=hapusmerek&id=<?php echo $pecah['id_merek'] ?>" class="btn-danger btn">Hapus</a>
                        <a href="index.php?modules=ubahmerek&id=<?php echo $pecah['id_merek'] ?>" class="btn btn-warning">Ubah</a>
                      </td>
                    </tr>
                    <?php $nomor++; ?>
                  <?php } ?>
                </tbody>
              </table>
              <a href="index.php?modules=tambahmerek" class="btn btn-primary">Tambah Data</a>

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