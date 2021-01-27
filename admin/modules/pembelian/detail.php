<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <!-- /.row (Traffic & Sales)-->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Welcome Admin</div>
            <div class="card-body">
              <!-- CONTENT -->
              <h2>Detail Pembelian</h2>

              <?php 
              $ambil = $koneksi->query("SELECT * FROM tb_pembelian JOIN tb_pelanggan ON tb_pembelian.id_pelanggan=tb_pelanggan.id_pelanggan WHERE tb_pembelian.id_pembelian='$_GET[id]'") or die($koneksi->error);
              $detail = $ambil->fetch_assoc();
              ?>

              <strong><?php echo $detail['nama_pelanggan']; ?></strong><br>
              <p>
                <?php echo $detail['telepon_pelanggan']; ?><br>
                <?php echo $detail['email_pelanggan'];  ?>
              </p>

              <p>
                Tanggal: <?php echo $detail['tanggal_pembelian']; ?><br>
                Total: <?php echo $detail['total_pembelian']; ?>
              </p>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor=1; ?>
                  <?php $ambil=$koneksi->query("SELECT * FROM tb_pembelian_produk JOIN tb_produk ON tb_pembelian_produk.id_produk=tb_produk.id_produk 
                  WHERE tb_pembelian_produk.id_pembelian='$_GET[id]'") ?>
                  <?php while($pecah=$ambil->fetch_assoc()){ ?>
                    <tr>
                      <td><?php echo $nomor; ?></td>
                      <td><?php echo $pecah['nama_produk']; ?></td>
                      <td><?php echo $pecah['harga_produk']; ?></td>
                      <td><?php echo $pecah['jumlah']; ?></td>
                      <td>
                        <?php echo $pecah['harga_produk']*$pecah['jumlah']; ?>
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