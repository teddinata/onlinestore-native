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
            <div class="card-header">Tambah Produk</div>
            <div class="card-body">
              <!-- CONTENT -->



              <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                  <label>Harga (Rp)</label>
                  <input type="number" name="harga" class="form-control">
                </div>
                <div class="form-group">
                  <label>Berat (Gr)</label>
                  <input type="number" name="berat" class="form-control">
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label>Stok</label>
                  <input type="number" name="stok" class="form-control">
                </div>
                <dir class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto" class="form-control">
                </dir>
                
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
                <button class="btn btn-primary" name="save">Simpan</button>
              </form>
              <?php 
              if (isset($_POST['save'])) {
                $id_merek = $_POST['id_merek'];
                $id_kategori = $_POST['id_kategori'];
                $nama = $_FILES['foto']['name'];
                $lokasi = $_FILES['foto']['tmp_name'];
                move_uploaded_file($lokasi, "../images/".$nama);
                $koneksi->query("INSERT INTO tb_produk(id_merek,id_kategori,nama_produk,harga_produk,berat_produk,foto_produk,deskripsi_produk,stok) 
                  VALUES('$id_merek','$id_kategori','$_POST[nama]','$_POST[harga]','$_POST[berat]','$nama','$_POST[deskripsi]','$_POST[stok]')");

                echo "<script>alert('produk ditambahkan');</script>";
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