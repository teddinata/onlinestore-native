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
              $ambil = $koneksi->query("SELECT * FROM tb_merek WHERE id_merek='$_GET[id]'");
              $pecah = $ambil->fetch_assoc();

              ?>

              <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Nama Merek</label>
                  <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_merek']; ?>">
                </div>
                <button class="btn btn-primary" name="ubah">Ubah</button>
              </form>

              <?php
              if (isset($_POST['ubah'])) 
              {
                $koneksi->query("UPDATE tb_merek SET nama_merek='$_POST[nama]' WHERE id_merek='$_GET[id]'");

                echo "<script>alert('data merek telah dirubah');</script>";
                echo "<script>location='index.php?modules=merek';</script>";
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