<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pembelian</title>
</head>
<body>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <!-- /.row (Traffic & Sales)-->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Pembelian</div>
            <div class="card-body">
              <!-- CONTENT -->

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Tanggal</th>
                    <th>Status Pembelian</th>
                    <th>Total</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor=1; ?>
                  <?php $ambil=$koneksi->query("SELECT * FROM tb_pembelian JOIN tb_pelanggan ON tb_pembelian.id_pelanggan=tb_pelanggan.id_pelanggan") ?>
                  <?php while($pecah = $ambil->fetch_assoc()){ ?>
                    <tr>
                      <td><?php echo $nomor; ?></td>
                      <td><?php echo $pecah['nama_pelanggan']; ?></td>
                      <td><?php echo $pecah['tanggal_pembelian']; ?></td>
                      <td><?php echo $pecah['status_pembelian'] ?></td>
                      <td><?php echo $pecah['total_pembelian']; ?></td>
                      <td>
                        <a href="index.php?modules=detail&id=<?php echo $pecah['id_pembelian'] ?>" class="btn btn-info">Detail</a>
                        <?php if($pecah['status_pembelian'] == "sudah kirim pembayaran"): ?>
                          <a href="index.php?modules=pembayaran&id=<?php echo $pecah['id_pembelian'] ?>" class="btn btn-success">Pembayaran</a>

                        <?php endif ?>
                      </td>
                    </tr>
                    <?php $nomor++; ?>
                  <?php } ?>
                </tbody>
              </table>
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