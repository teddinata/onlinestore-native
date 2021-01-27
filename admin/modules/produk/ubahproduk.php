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
            <div class="card-header">Ubah Produk</div>
            <div class="card-body">
              <!-- CONTENT -->

              <?php
              $ambil = $koneksi->query("SELECT * FROM tb_produk WHERE id_produk='$_GET[id]'");
              $pecah = $ambil->fetch_assoc();

              ?>

              <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_produk']; ?>">
                </div>
                <div class="form-group">
                  <label>Harga (Rp)</label>
                  <input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga_produk']; ?>">
                </div>
                <div class="form-group">
                  <label>Berat (Gr)</label>
                  <input type="number" name="berat" class="form-control" value="<?php echo $pecah['berat_produk']; ?>">
                </div>
                <div class="form-group">
                  <img src="../images/<?php echo $pecah['foto_produk'] ?>" width="200">
                </div>
                <div class="form-group">
                  <label>Ganti Foto</label>
                  <input type="file" name="foto" class="form-control">
                </div>

                <div class="form-group">
                  <select class="form-control" name="id_merek">
                    <option value="">Pilih Merek</option>
                    <?php 
                    $ambil = $koneksi->query("SELECT * FROM tb_merek");
                    while($permerek = $ambil->fetch_assoc()){
                      ?>
                      <option value="<?php echo $permerek['id_merek'] ?>">
                        <?php echo $permerek['nama_merek']?>
                      </option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <select class="form-control" name="id_kategori">
                    <option value="">Pilih Merek</option>
                    <?php 
                    $ambil = $koneksi->query("SELECT * FROM tb_kategori");
                    while($permerek = $ambil->fetch_assoc()){
                      ?>
                      <option value="<?php echo $permerek['id_kategori'] ?>">
                        <?php echo $permerek['nama_kategori']?>
                      </option>
                    <?php } ?>
                  </select>
                </div>

              <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="10"><?php echo $pecah['deskripsi_produk']; ?></textarea>
              </div>
              <button class="btn btn-primary" name="ubah">Ubah</button>
            </form>

            <?php
            if (isset($_POST['ubah'])) 
            {
              $id_merek = $_POST['id_merek'];
              $id_kategori = $_POST['id_kategori'];
              $namafoto = $_FILES['foto']['name'];
              $lokasifoto = $_FILES['foto']['tmp_name'];
                //jk foto dirubah
              if (!empty($lokasifoto)) 
              {
                move_uploaded_file($lokasifoto, "../images/$namafoto");

                $koneksi->query("UPDATE tb_produk SET id_merek='$_POST[id_merek]',id_kategori='$_POST[id_kategori]',nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',berat_produk='$_POST[berat]',foto_produk='$namafoto',deskripsi_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
              }

              else
              {
                $koneksi->query("UPDATE tb_produk SET id_merek='$_POST[id_merek]',id_kategori='$_POST[id_kategori]',nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',berat_produk='$_POST[berat]',deskripsi_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
              }

              echo "<script>alert('data produk telah dirubah');</script>";
              echo "<script>location='index.php?modules=produk';</script>";
            }
            ?>
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