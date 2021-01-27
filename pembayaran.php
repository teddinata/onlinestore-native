<?php
session_start();
//koneksi ke database

include 'lib/koneksi.php';


//jika tidak ada session pelanggan
if (!isset($_SESSION['pelanggan']) OR empty($_SESSION['pelanggan'])) {
	echo "<script>alert('silahkan login');</script>";
	echo "<script>location='login.php';</script>";
	exit();
}

//mendapatkan id pembelian dari url

$idpem = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM tb_pembelian WHERE id_pembelian = '$idpem'");
$detpem = $ambil->fetch_assoc();


//mendapatkan id pelanggan yang beli
$idpelangganyangbeli = $detpem['id_pelanggan'];

//mendapatkan id pelanggan yang login
$idpelangganyanglogin = $_SESSION['pelanggan']['id_pelanggan'];

if ($idpelangganyanglogin !== $idpelangganyangbeli) {
	echo "<script>alert('jangan nakal');</script>";
	echo "<script>location='riwayat.php';</script>";
	exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | Primakom Sragen</title>
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
							<li><a href="#"><i class="fa fa-phone"></i> +6289 8686 0201</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> karyautama</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
							<a href="index.php"><img src="assets/images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="akun.php"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="keranjang.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php if (isset($_SESSION['pelanggan'])): ?>
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
								<form method="GET">
									<input type="text" name="cari" placeholder="Search"/>
								</form>
							</div>
						</div>

					</div>
				</div>
			</div><!--/header-bottom-->
		</header><!--/header-->

		<!-- CONTENT -->
		<div class="container">
		<h2 class="title text-center">Konfirmasi pembayaran</h2>
		<p>Kirim bukti pembayaran anda disini</p>

		<div class="alert alert-info">
			Total tagihan anda <strong>Rp. <?php echo number_format($detpem['total_pembelian']) ?></strong>
		</div>

		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Penyetor</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label>Bank</label>
				<input type="text" name="bank" class="form-control">
			</div>
			<div class="form-group">
				<label>Jumlah</label>
				<input type="number" name="jumlah" class="form-control" min="1">
			</div>
			<div class="form-group">
				<label>Foto Bukti</label>
				<input type="file" name="bukti" class="form-control">
				<p class="text-danger">foto bukti harus JPEG maks 2 Mb</p>
			</div>
			<button class="btn btn-primary" name="kirim">Kirim</button>
		</form>
	</div>

	<?php

//jika ada tombol kirim

if (isset($_POST['kirim'])) {
	//upload foto bukti dulu
	$namabukti = $_FILES['bukti']['name'];
	$lokasibukti = $_FILES['bukti']['tmp_name'];
	$namafiks = date("YmdHis").$namabukti;
	move_uploaded_file($lokasibukti, "bukti_pembayaran/$namafiks");

	$nama = $_POST['nama'];
	$bank = $_POST['bank'];
	$jumlah = $_POST['jumlah'];
	$tanggal = date("Y-m-d");


	$koneksi->query("INSERT INTO tb_pembayaran (id_pembelian, nama, bank, jumlah, tanggal, bukti) VALUES ('$idpem','$nama','$bank','$jumlah','$tanggal','$namafiks')");


	//update pembayaran dari pending ke sudah kirim pembayaran
	$koneksi->query("UPDATE tb_pembelian SET status_pembelian = 'sudah kirim pembayaran' WHERE id_pembelian = '$idpem'");

	echo "<script>alert('Terimkasih sudah mengirimkan bukti pembayaran');</script>";
	echo "<script>location='riwayat.php';</script>";
}

?>
		<!-- CONTENT -->

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
							<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
						</div>
					</div>
				</div>

			</footer><!--/Footer-->



		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.scrollUp.min.js"></script>
		<script src="assets/js/price-range.js"></script>
		<script src="assets/js/jquery.prettyPhoto.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
	</html>
