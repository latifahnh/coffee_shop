<?php
//mengabaikan error
error_reporting(E_ALL ^ E_DEPRECATED);
//membuat koneksi ke database
include '../koneksi.php';
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Coffee Lateef</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/animate.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link rel="stylesheet" href="../css/lte.css">
	<link rel="stylesheet" href="../css/agency.min.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/additional.css">

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #2C0A05;">
	<!-- di dalam container -->
	<div class="container">
	<!-- header menu -->
		<div class="navbar-header">
			<button type="button"
					class="navbar-toggle collapsed"
					data-toggle="collapse"
					data-target="#mymenu"
					aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<img src="../img/header-icon.png" />
			<a class="navbar-brand" href="../index_admin.php">COFFEE LATEEF</a>
		</div>
		<!-- daftar item menu -->
		<div class="collapse navbar-collapse" id="mymenu" style="background-color: #2C0A05;">
			<ul class="nav navbar-nav pull-right page-scroll">
				<li class="active"><a href="../index_admin.php">Welcome</a></li>
				<li><a href="../index_admin.php #getintouch">Get In Touch</a></li>
				<li><a href="../login/logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
</nav>
<!-- ./NAVBAR -->

<!--getintouch foooter -->
<footer class="parallax-section" style="padding-bottom: 60px;">
    <section class="full" style="color: #2C0A05; padding-top: 10px; text-align: left;">

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 jumbotron " style="background-color: rgba(236, 240, 241,0.5);">
			<header>
		        <div class="container">
		            <div class="intro-text">
		                <div class="intro-heading" style="color: white">Add Here</div>
		            </div>
		        </div>
		    </header>

			<div class="form-group">
				<form action="aksi_tambah_supplier.php" method="post">
					<div class="form-group">
						<label>ID Supplier</label>
						<input class="form-control" type="text" name="id_sup" placeholder="ID Supplier" required="">
					</div>
					<div class="form-group">
						<label>Nama Supplier</label>
						<input class="form-control" type="text" name="nama_sup" placeholder="Nama Supplier" required="">
					</div>	
					<div class="form-group">
						<label>Alamat Supplier</label>
						<input class="form-control" type="text" name="alm_sup" placeholder="Alamat Supplier" required="">
					</div>	
					<div class="form-group">
						<label>Telepon</label>
						<input class="form-control" type="text" name="tlp_sup" placeholder="Telepon" required="">
					</div>	
					<div class="form-group">
						<label>Jenis Supplier</label>
						<select class="selectpicker form-control" name="jenis_sup" >
						<option>Ready Stock</option>
						<option>Pre-Order</option>
						</select>	
					</div>	
					<div class="form-group">
						<button type="submit" class="btn btn-block btn-xl ">Add Now</button>
					</div>	
					<div class="text-center">
						Do you wish to back to <a href="input_supplier.php">page before</a>?
					</div>	
				</form>
		 	</div>
		</div>
	</div>
</div>
</section>
</footer>

<!-- ./footer -->

<!-- jquery -->
<script src="../js/jquery.easing.min.js"</script>
<script src="../js/agency.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/index.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jqBootstrapValidation.js"></script>

</body>
</html>