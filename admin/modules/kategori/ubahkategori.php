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
              $ambil = $koneksi->query("SELECT * FROM tb_kategori WHERE id_kategori='$_GET[id]'");
              $pecah = $ambil->fetch_assoc();

              ?>

              <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Nama kategori</label>
                  <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_kategori']; ?>">
                </div>
                <button class="btn btn-primary" name="ubah">Ubah</button>
              </form>

              <?php
              if (isset($_POST['ubah'])) 
              {
                $koneksi->query("UPDATE tb_kategori SET nama_kategori='$_POST[nama]' WHERE id_kategori='$_GET[id]'");

                echo "<script>alert('data kategori telah dirubah');</script>";
                echo "<script>location='index.php?modules=kategori';</script>";
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