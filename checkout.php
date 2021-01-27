<?php
session_start();
include 'lib/koneksi.php';


//jika tidak ada session pelanggan(blm login) mk dilarikan ke login.php

if (!isset($_SESSION['pelanggan'])) 
{
	echo "<script>alert('silahkan login');</script>";
	echo "<script>location='login.php'</script>";
}

if (empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])) 
{
	echo "<script>alert('keranjang kosong, silahkan belanja dulu');</script>";
	echo "<script>location='index.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout | Utama Karya Mebel</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +6285 1552 3987</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> hitus@karyautama.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="assets/images/logo mebel.svg" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="akun.php"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="keranjang.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php if (isset($_SESSION['pelanggan'])): ?>
									<li><a href="riwayat.php"><i class="fa fa-book"></i> Riwayat Belanja</a></li>
									<li><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>
									<?php else: ?>
										<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
									<?php endif ?>
								</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
								<ul class="nav navbar-nav collapse navbar-collapse">
									<li><a href="index.php" class="active">Home</a></li>			
									<li><a href="contact-us.php">Contact</a></li>
								</ul>
							</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section class="konten">
			<div class="container">
				<h1></h1>
				<hr>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Produk</th>
							<th>Harga</th>
							<th>Jumlah</th>
							<th>Subharga</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor=1; ?>
						<?php $totalbelanja=0; ?>
						<?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
							<!-- menampilkan produk yg sedang diperulangkan berdasarkan id_produk -->
							<?php $ambil = $koneksi->query("SELECT * FROM tb_produk WHERE id_produk='$id_produk'");
							$pecah = $ambil->fetch_assoc();
							$subharga = $pecah['harga_produk']*$jumlah;

							?>
							<tr>
								<td><?php echo $nomor; ?></td>
								<td><?php echo $pecah['nama_produk']; ?></td>
								<td>Rp. <?php echo number_format($pecah['harga_produk']); ?></td>
								<td><?php echo $jumlah ?></td>
								<td>Rp. <?php echo number_format($subharga); ?></td>
							</tr>
							<?php $nomor++; ?>
							<?php $totalbelanja+=$subharga ?>
						<?php endforeach ?>

					</tbody>
					<tfoot>
						<tr>
							<th colspan="4">Total Belanja</th>
							<th>Rp. <?php echo number_format($totalbelanja) ?></th>
						</tr>
					</tfoot>
				</table>

				<form method="post">

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" readonly value="<?php echo $_SESSION['pelanggan']['nama_pelanggan'] ?>" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" readonly value="<?php echo $_SESSION['pelanggan']['telepon_pelanggan'] ?>" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<select class="form-control" name="id_ongkir">
								<option value="">Pilih Ongkos Kirim</option>

								<?php 
								$ambil = $koneksi->query("SELECT * FROM tb_ongkir");
								while($perongkir = $ambil->fetch_assoc()){
									?>
									<option value="<?php echo $perongkir['id_ongkir'] ?>">
										<?php echo $perongkir['nama_kota']?> - 
										Rp. <?php echo number_format($perongkir['tarif']) ?>
									</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="row">
							<div class="col-md-4">
							<div class="form-group">
								<label >Provinsi</label>
								<input type="text" name="provinsi" class="form-control">
							</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
								<label >Kabupaten</label>
								<input type="text" name="kabupaten" class="form-control">
							</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
								<label >Kecamatan</label>
								<input type="text" name="kecamatan" class="form-control">
							</div>
							</div>
					</div>
					
							
							
					<div class="form-group">
						<label>Alamat Lengkap</label>
						<textarea class="form-control" name="alamat_pengiriman" placeholder="masukkan alamat lengkap pengiriman (termasuk kode pos)"></textarea>
					</div>
					<div class="form-group">
						<label>Keterangan untuk Toko</label>
						<textarea class="form-control" name="keterangan" placeholder="masukkan keterangan untuk toko.(contoh: pesan warna Biru.)"></textarea>
					</div>
					<button class="btn btn-primary" name="checkout">Checkout</button>
				</form>


				<?php 
				if (isset($_POST["checkout"])) {
					$id_pelanggan = $_SESSION['pelanggan']['id_pelanggan'];
					$id_ongkir = $_POST['id_ongkir'];
					$tanggal_pembelian = date("Y-m-d");
					$alamat_pengiriman = $_POST['alamat_pengiriman'];
					$provinsi = $_POST['provinsi'];
					$kabupaten = $_POST['kabupaten'];
					$kecamatan = $_POST['kecamatan'];
					$keterangan = $_POST['keterangan'];

					$ambil = $koneksi->query("SELECT * FROM tb_ongkir WHERE id_ongkir='$id_ongkir'");
					$arrayongkir = $ambil->fetch_assoc();
					$namakota = $arrayongkir['nama_kota'];
					$tarif = $arrayongkir['tarif'];


					$total_pembelian = $totalbelanja + $tarif;

				//1. menyimpan data ke tabel pembelian
					$koneksi->query("INSERT INTO tb_pembelian(id_pelanggan,id_ongkir, tanggal_pembelian, total_pembelian, nama_kota, tarif, alamat_pengiriman, provinsi, kabupaten, kecamatan, keterangan) VALUES ('$id_pelanggan','$id_ongkir','$tanggal_pembelian','$total_pembelian','$namakota','$tarif','$alamat_pengiriman', '$provinsi', '$kabupaten', '$kecamatan','$keterangan')");
					// mendapatkan id pembelian barusan terjadi
					$id_pembelian_barusan = $koneksi->insert_id;

					foreach ($_SESSION['keranjang'] as $id_produk => $jumlah)
					{

						//mendapatkan data produk berdasarkan id_produk
						$ambil = $koneksi->query("SELECT * FROM tb_produk WHERE id_produk='$id_produk'");
						$perproduk = $ambil->fetch_assoc();
						$nama = $perproduk['nama_produk'];
						$harga = $perproduk['harga_produk'];
						$berat = $perproduk['berat_produk'];
						$subberat = $perproduk['berat_produk']*$jumlah;
						$subharga = $perproduk['harga_produk']*$jumlah;
						$koneksi->query("INSERT INTO tb_pembelian_produk (id_pembelian,id_produk,nama,harga,berat,subberat,subharga,jumlah) VALUES ('$id_pembelian_barusan','$id_produk','$nama','$harga','$berat','$subberat','$subharga','$jumlah') ");
					}


					//mengkosongkan keranjang belanja
					unset($_SESSION['keranjang']);


					//tampilan dialihkan ke halaman nota, nota dari pembelian barusan
					echo "<script>alert('pembelian sukses');</script>";
					echo "<script>location='nota.php?id=$id_pembelian_barusan'</script>";

				}
				?>


			</div>
		</section>

<br>

<footer id="footer"><!--Footer-->
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-sm-2">
								<div class="companyinfo">
                  <h2 style="color: #2B6BB9;">Utama Karya</h2>
									<p>Mebel Terpercaya Pilihan Anda</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="footer-widget">
					<div class="container">
						<div class="row">
							<div class="col-sm-2">
								<div class="single-widget">
									<h2>Layanan</h2>
									<ul class="nav nav-pills nav-stacked">
										<li><a href="#">Bantuan Layanan</a></li>
										<li><a href="#">Kontak Kami</a></li>
										<li><a href="#">Status Pemesanan</a></li>
										<li><a href="#">Produk Kami</a></li>
										<li><a href="#">Cara Order</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="single-widget">
									<h2>Produk Kami</h2>
									<ul class="nav nav-pills nav-stacked">
										<li><a href="#">Spring Bed</a></li>
										<li><a href="#">Lemari</a></li>
										<li><a href="#">Dipan</a></li>
										<li><a href="#">Meja Kerja</a></li>
										<li><a href="#">Kursi Kerja</a></li>


									</ul>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="single-widget">
									<h2>Kebijakan</h2>
									<ul class="nav nav-pills nav-stacked">
										<li><a href="#">Kebijakan Retur</a></li>
										<li><a href="#">Kebijakan Refund</a></li>
										
									</ul>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="single-widget">
									<h2>Tentang Utama Karya</h2>
									<ul class="nav nav-pills nav-stacked">
										<li><a href="#">Profil Utama Karya</a></li>
										<li><a href="#">Karir</a></li>
										<li><a href="#">Lokasi Toko</a></li>
										<li><a href="#">Vendor</a></li>
										
									</ul>
								</div>
							</div>
							

						</div>
					</div>
				</div>

				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<p class="pull-left">Copyright © 2019 Utama Karya Inc. All rights reserved.</p>
							<p class="pull-right">Designed by <span><a target="_blank" href="http://www.Karyautama.com">Karyautama</a></span></p>
						</div>
					</div>
				</div>

			</footer><!--/Footer-->
	


    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
