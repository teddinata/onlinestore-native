<?php
//mendapatkan id pembelian
$id_pembelian = $_GET['id'];

//mengambil data pembayaran berdasarkan id_pembelian
$ambil = $koneksi->query("SELECT * FROM tb_pembayaran WHERE id_pembelian = '$id_pembelian' ");
$detail = $ambil->fetch_assoc();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Pembayaran</title>
</head>
<body>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <!-- /.row (Traffic & Sales)-->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Data Pembayaran</div>
            <div class="card-body">
              <!-- CONTENT -->
              <div class="row">
	<div class="col-md-6">
		<table class="table">
			<tr>
				<th>Nama</th>
				<td><?php echo $detail['nama'] ?></td>
			</tr>
			<tr>
				<th>Bank</th>
				<td><?php echo $detail['nama'] ?></td>
			</tr>
			<tr>
				<th>Jumlah</th>
				<td>Rp. <?php echo number_format($detail['jumlah']) ?></td>
			</tr>
			<tr>
				<th>Tanggal</th>
				<td><?php echo $detail['tanggal'] ?></td>
			</tr>
		</table>
	</div>
	<div class="col-md-6">
		<img src="../bukti_pembayaran/<?php echo $detail['bukti'] ?>" alt="" class="img-responsive">
	</div>
</div>

<form method="post">
	<div class="form-group">
		<label>No Resi Pengiriman</label>
		<input type="text" name="resi" class="form-control">
	</div>
	<div class="form-group">
		<label>Status</label>
		<select class="form-control" name="status">
			<option value="">Pilih Status</option>
			<option value="lunas">Lunas</option>
			<option value="barang dikirim">Barang dikirim</option>
			<option value="batal">Batal</option>
		</select>
	</div>
	<button class="btn btn-primary" name="proses">Proses</button>
</form>

<?php

if (isset($_POST['proses'])) 
{
	$resi = $_POST['resi'];
	$status = $_POST['status'];
	$koneksi->query("UPDATE tb_pembelian SET resi_pengiriman='$resi', status_pembelian='$status' WHERE id_pembelian='$id_pembelian' ");

	echo "<script>alert('data pembelian terupdate');</script>";
	echo "<script>location='index.php?modules=pembelian'</script>";
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