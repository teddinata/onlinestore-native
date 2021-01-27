<?php
session_start();
//koneksi ke database
include 'lib/koneksi.php';

$id_kategori = $_GET['id'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Kategori | Utama Karya Mebel</title>
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
							<li><a href="#"><i class="fa fa-phone"></i> +6285 1552 3987</a></li>
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

		<section id="slider"><!--slider-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div id="slider-carousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#slider-carousel" data-slide-to="1"></li>
								<li data-target="#slider-carousel" data-slide-to="2"></li>
							</ol>

							<div class="carousel-inner">
								<div class="item active">
									<div class="col-sm-6">
										<h1>Utama Karya</h1>
										<h2>Mebel</h2>
										<p>Mebel Terpercaya Pilihan Anda</p>
										<button type="button" class="btn btn-default get" style="background-color: #2B6BB9;">Dapatkan Sekarang</button>
									</div>
									<div class="col-sm-6">
										<img src="assets/images/banner 6.svg" class="lp img-responsive" alt="" />
										
									</div>
								</div>
								<div class="item">
									<div class="col-sm-6">
										<h1>Utama Karya</h1>
										<h2>Mebel</h2>
										<p>Mebel Terpercaya Pilihan Anda</p>
										<button type="button" class="btn btn-default get" style="background-color: #2B6BB9;">Dapatkan Sekarang</button>
									</div>
									<div class="col-sm-6">
										<img src="assets/images/banner 4.svg" class="lp img-responsive" alt="" />
										
									</div>
								</div>

								<div class="item">
									<div class="col-sm-6">
										<h1>Utama Karya</h1>
										<h2>Mebel</h2>
										<p>Mebel Terpercaya Pilihan Anda</p>
										<button type="button" class="btn btn-default get" style="background-color: #2B6BB9;">Dapatkan Sekarang</button>
									</div>
									<div class="col-sm-6">
										<img src="assets/images/banner 3.svg" class="lp img-responsive" alt="" />
										
									</div>
								</div>

							</div>

							<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>

					</div>
				</div>
			</div>
		</section><!--/slider-->

		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="left-sidebar">
							<h2 style="color:#2B6BB9;">Kategori</h2>
							<div class="panel-group category-products" id="accordian"><!--category-productsr-->
								<?php $ambil = $koneksi->query("SELECT * FROM tb_kategori"); ?>
								<?php while($perkategori = $ambil->fetch_assoc()){ ?>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="kategori.php?id=<?php echo $perkategori['id_kategori']; ?>"><?php echo $perkategori['nama_kategori'];  ?></a></h4>
									</div>
								</div>
								<?php } ?>
							</div><!--/category-products-->

							<div class="brands_products"><!--brands_products-->
								<h2 style="color:#2B6BB9;">Brands</h2>
								<div class="brands-name">
									<ul class="nav nav-pills nav-stacked">
										<?php $ambil = $koneksi->query("SELECT * FROM tb_merek"); ?>
										<?php while($permerek = $ambil->fetch_assoc()){ ?>
											<li><a href="merek.php?id=<?php echo $permerek['id_merek']; ?>">
												<?php echo $permerek['nama_merek'];  ?></a></li>

											<?php } ?>
										</ul>
									</div>
								</div><!--/brands_products-->

							

							<div class="shipping text-center"><!--shipping-->
								<img src="assets/images/home/shipping.jpg" alt="" />
							</div><!--/shipping-->

						</div>
					</div>

					<div class="col-sm-9 padding-right">
						<div class="features_items"><!--features_items-->
							<h2 class="title text-center" style="color:#2B6BB9;">Features Items</h2>
							<?php $ambil = $koneksi->query("SELECT * FROM tb_produk WHERE id_kategori = $id_kategori"); ?>
							<?php while($perproduk = $ambil->fetch_assoc()){ ?>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/<?php echo $perproduk['foto_produk'];  ?>" alt="">
												<h2><?php echo number_format($perproduk['harga_produk']);  ?></h2>
												<p><?php echo $perproduk['nama_produk'];  ?></p>
												<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2><?php echo number_format($perproduk['harga_produk']);  ?></h2>
													<p><?php echo $perproduk['nama_produk'];  ?></p>
													<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
							

						</div><!--features_items-->

					</div>
				</div>
			</div>
		</section>

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
		<script src="assets/js/price-range.js"></script>
		<script src="assets/js/jquery.prettyPhoto.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
	</html>