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
            <div class="card-header">Tambah Pelanggan</div>
            <div class="card-body">
              <!-- CONTENT -->


              <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input type="text" name="telepon" class="form-control">
                </div>
                <button class="btn btn-primary" name="save">Simpan</button>
              </form>
              <?php 
              if (isset($_POST['save'])) {
                $koneksi->query("INSERT INTO tb_pelanggan(email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan) 
                  VALUES('$_POST[email]','$_POST[password]','$_POST[nama]','$_POST[telepon]')");

                echo "<div class='alert alert-info'>Data Tersimpan</div>";
                echo "<meta http-equiv='refresh' content='1;url=index.php?modules=pelanggan'>";
              }
              ?>
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