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
                    <th>id</th>
                    <th>Nama</th>
                    
                    <th>Jumlah Terjual</th>
                    <th>Total Harga</th>
                                       
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor=1; ?>
                  <?php $ambil=$koneksi->query("SELECT id_produk, nama, jumlah, subharga
                                                FROM (
                                                    SELECT nama, id_produk
                                                      ,SUM(jumlah) as jumlah
                                                      ,SUM(subharga)as subharga
                                                    FROM tb_pembelian_produk
                                                    GROUP BY nama, id_produk
                                                ) new_sales ORDER BY jumlah DESC") or die($koneksi->error); ?>
                  <?php while($pecah = $ambil->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $nomor; ?></td>
                      <td><?php echo $pecah['id_produk']; ?></td>
                      <td><?php echo $pecah['nama']; ?></td>
                      <td><?php echo number_format($pecah['jumlah']); ?></td>
                      
                      <td><?php echo number_format($pecah['subharga']); ?></td>
                      <!--td>
                        <img src="../images/<?php echo $pecah['foto_produk']; ?>" width="100">
                      </td-->
                      
                        <!--<a href="index.php?modules=hapusproduk&id=<?php echo $pecah['id_produk'] ?>" class="btn-danger btn">Hapus</a>-->
                        <!--<a href="index.php?modules=ubahproduk&id=<?php echo $pecah['id_produk'] ?>" class="btn btn-warning">Ubah</a>-->
                    </tr>
                    <?php $nomor++; ?>
                  <?php } ?>
                </tbody>
              </table>
              <!--<a href="index.php?modules=tambahproduk" class="btn btn-primary">Tambah Data</a>-->
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