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
            <div class="card-header">Tambah Merek</div>
            <div class="card-body">
              <!-- CONTENT -->



              <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control">
                </div>
                <button class="btn btn-primary" name="save">Simpan</button>
              </form>
              <?php 
              if (isset($_POST['save'])) {
                $koneksi->query("INSERT INTO tb_merek(nama_merek) 
                  VALUES('$_POST[nama]')");

                echo "<script>alert('merek ditambahkan');</script>";
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