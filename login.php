<?php
session_start();
include 'lib/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Login | Utama Karya Mebel</title>
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
								<li><a href=""><i class="fa fa-phone"></i> +6281 326 510 747</a></li>
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
		
		<section id="form"><!--form-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-1">
						<div class="login-form"><!--login form-->
							<h2>Login to your account</h2>
							<form method="POST">
								<input type="email" name="email" placeholder="Email Address" />
								<input type="password" name="password" placeholder="Password" />
								<span>
									<input type="checkbox" class="checkbox"> 
									Keep me signed in
								</span>
								<button name="login" class="btn btn-default">Login</button>
							</form>
						</div><!--/login form-->
					</div>
					<div class="col-sm-1">
						<h2 class="or">OR</h2>
					</div>
					<div class="col-sm-4">
						<div class="signup-form"><!--sign up form-->
							<h2>New User Signup!</h2>
							<form method="post">
								<div class="form-group">
								<label class="control-label col-md-3">Nama</label>
								<div class="col-md-7">
									<input type="text" name="nama" class="form-control" required placeholder="Nama">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Email</label>
								<div class="col-md-7">
									<input type="email" name="email" class="form-control" required placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Password</label>
								<div class="col-md-7">
									<input type="text" name="password" class="form-control" required placeholder="Password">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Alamat</label>
								<div class="col-md-7">
									<textarea class="form-control" name="alamat" required placeholder="Alamat Lengkap"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Telp/Hp</label>
								<div class="col-md-7">
									<input type="text" name="telepon" class="form-control" required placeholder="Telepon">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-7 col-md-offset-3">
									<button class="btn btn-default" name="daftar">Daftar</button>
								</div>
							</div>
							</form>
							<?php

						//jk ada tombol daftar(ditekan tombol daftar)
						if (isset($_POST['daftar'])) {
							//mengambil isian nama email password alamat telepon
							$nama = $_POST['nama'];
							$email = $_POST['email'];
							$password = $_POST['password'];
							$alamat = $_POST['alamat'];
							$telepon = $_POST['telepon'];

							//cek validasi apakah email sudah digunakan
							$ambil = $koneksi->query("SELECT * FROM tb_pelanggan WHERE email_pelanggan = '$email'");
							$yangcocok = $ambil->num_rows;
							if ($yangcocok == 1) 
							{
								echo "<script>alert('pendaftaran gagal, email sudah digunakan');</script>";	
								echo "<script>location='login.php';</script>";						
							}
							else
							{
								//query insert pelanggan
								$koneksi->query("INSERT INTO tb_pelanggan (email_pelanggan, password_pelanggan, nama_pelanggan, telepon_pelanggan, alamat_pelanggan) VALUES ('$email','$password','$nama','$telepon','$alamat')");

								echo "<script>alert('pendaftaran sukses, silahkan login');</script>";	
								echo "<script>location='login.php';</script>";
							}
						}

						?>
						</div><!--/sign up form-->
					</div>
				</div>
			</div>
		</section><!--/form-->

		<?php
	//jika ada tombol simpan(tombol simpan ditekan)
		if (isset($_POST['login'])) 
		{
			$email = $_POST['email'];
			$password = $_POST['password'];
		//lakukan query pengecekan akun di tabel pelanggan di db
			$ambil = $koneksi->query("SELECT * FROM tb_pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password'");
		//ngitung akun yang terambil
			$akunyangcocok = $ambil->num_rows;

		//jika 1 akun yg cocok, maka diloginkan
			if ($akunyangcocok == 1) {
		//anda sudah login
		//mendapatkan akun dlm bentuk array
				$akun = $ambil->fetch_assoc();
		//simpan di session pelanggan
				$_SESSION['pelanggan'] = $akun;
				echo "<script>alert('anda sukses login');</script>";
				echo "<script>location='checkout.php'</script>";
			}
			else
			{
		//anda gagal login
				echo "<script>alert('anda gagal login, periksa akun anda');</script>";
				echo "<script>location='login.php'</script>";
			}
		}
		?>

		<footer id="footer"><!--Footer-->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="companyinfo">
								<h2><span>e</span>-shopper</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
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
								<h2>Service</h2>
								<ul class="nav nav-pills nav-stacked">
									<li><a href="">Online Help</a></li>
									<li><a href="">Contact Us</a></li>
									<li><a href="">Order Status</a></li>
									<li><a href="">Change Location</a></li>
									<li><a href="">FAQ’s</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="single-widget">
								<h2>Quock Shop</h2>
								<ul class="nav nav-pills nav-stacked">
									<li><a href="">T-Shirt</a></li>
									<li><a href="">Mens</a></li>
									<li><a href="">Womens</a></li>
									<li><a href="">Gift Cards</a></li>
									<li><a href="">Shoes</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="single-widget">
								<h2>Policies</h2>
								<ul class="nav nav-pills nav-stacked">
									<li><a href="">Terms of Use</a></li>
									<li><a href="">Privecy Policy</a></li>
									<li><a href="">Refund Policy</a></li>
									<li><a href="">Billing System</a></li>
									<li><a href="">Ticket System</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="single-widget">
								<h2>About Shopper</h2>
								<ul class="nav nav-pills nav-stacked">
									<li><a href="">Company Information</a></li>
									<li><a href="">Careers</a></li>
									<li><a href="">Store Location</a></li>
									<li><a href="">Affillate Program</a></li>
									<li><a href="">Copyright</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3 col-sm-offset-1">
							<div class="single-widget">
								<h2>About Shopper</h2>
								<form action="#" class="searchform">
									<input type="text" placeholder="Your email address" />
									<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
									<p>Get the most recent updates from <br />our site and be updated your self...</p>
								</form>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<p class="pull-left">Copyright © 2020 Karya Utama Inc. All rights reserved.</p>
						<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
					</div>
				</div>
			</div>

		</footer><!--/Footer-->



		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/price-range.js"></script>
		<script src="assets/js/jquery.scrollUp.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.prettyPhoto.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
	</html>