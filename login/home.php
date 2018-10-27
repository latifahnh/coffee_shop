<?php
session_start();
//menghubungkan dengan MySQL
include "../koneksi.php";
//tampilan tabel
$result=$connect->query('SELECT * FROM tb_produk');
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
	<link rel="stylesheet" href="../css/lte.min.css">
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
				<li class="active"><a href="../index_admin.php">Welcome Admin</a></li>
				<li><a href="../login/logout.php">Logout</a></li>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- ./NAVBAR -->

<!--getintouch foooter -->
<footer class="parallax-section">
	<section style="padding: 50px;">
	    <header>
	        <div class="container text-center"><h2>Welcome Administrator ! </h2></div>
	    </header>
      <!-- Small boxes (Stat box) -->
      	<div class="row" style="margin: 50px; padding-top: 50px; padding-bottom: 100px;">
	        <div class="col-lg-3 col-xs-6 wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
	          <!-- small box -->
	          <div class="small-box bg-aqua">
	            <div class="inner">
	              <h3>Menu</h3>
	              <p>Detail</p>
	            </div>
	            <div class="icon">
	              <i class="ion ion-bag"></i>
	            </div>
	            <a href="list_produk.php" class="small-box-footer" style="font-size: 19px;">More info <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	        </div>
	        <!-- ./col -->
	        <div class="col-lg-3 col-xs-6 wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
	          <!-- small box -->
	          <div class="small-box bg-green">
	            <div class="inner">
	              <h3>Konsumen</h3>
	              <p>Detail</p>
	            </div>
	            <div class="icon">
	              <i class="ion ion-stats-bars"></i>
	            </div>
	            <a href="../konsumen/input_konsumen.php" class="small-box-footer" style="font-size: 19px;">More info <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	        </div>
	        <!-- ./col -->
	        <div class="col-lg-3 col-xs-6 wow fadeInUp animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
	          <!-- small box -->
	          <div class="small-box bg-yellow">
	            <div class="inner">
	              <h3>Karyawan</h3>
	              <p>Detail</p>
	            </div>
	            <div class="icon">
	              <i class="ion ion-person-add"></i>
	            </div>
	            <a href="../karyawan/input_karyawan.php" class="small-box-footer" style="font-size: 19px;">More info <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	        </div>
	        <!-- ./col -->
	        <div class="col-lg-3 col-xs-6 wow fadeInUp animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
	          <!-- small box -->
	          <div class="small-box bg-red">
	            <div class="inner">
	              <h3>Supplier</h3>
	              <p>Detail</p>
	            </div>
	            <div class="icon">
	              <i class="ion ion-pie-graph"></i>
	            </div>
	            <a href="../supplier/input_supplier.php" class="small-box-footer" style="font-size: 19px;">More info <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	        </div>
	        <!-- ./col -->
      	</div>
      <!-- /.row -->
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