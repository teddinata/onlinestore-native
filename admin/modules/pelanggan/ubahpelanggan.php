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
              $ambil = $koneksi->query("SELECT * FROM tb_pelanggan WHERE id_pelanggan='$_GET[id]'");
              $pecah = $ambil->fetch_assoc();

              ?>

              <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" value="<?php echo $pecah['email_pelanggan']; ?>">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" value="<?php echo $pecah['password_pelanggan']; ?>">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_pelanggan']; ?>">
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input type="text" name="telepon" class="form-control" value="<?php echo $pecah['telepon_pelanggan']; ?>">
                </div>
                <button class="btn btn-primary" name="ubah">Ubah</button>
              </form>

              <?php
              if (isset($_POST['ubah'])) 
              {
                $koneksi->query("UPDATE tb_pelanggan SET email_pelanggan='$_POST[email]',password_pelanggan='$_POST[password]',nama_pelanggan='$_POST[nama]',telepon_pelanggan='$_POST[telepon]' WHERE id_pelanggan='$_GET[id]'");

                echo "<script>alert('data pelanggan telah dirubah');</script>";
                echo "<script>location='index.php?modules=pelanggan';</script>";
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