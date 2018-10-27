<?php
include '../koneksi.php';

	//melakukan query ke database dg SELECT table nama_tabel dengan kondisi WHERE id_tabel = '$id'
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=id_tabel
	$id = $_GET['id'];
	
$result = $connect->query("SELECT * FROM tb_produk WHERE id_produk='$id'");
	
		if(mysqli_num_rows($result) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
	echo '<script>window.history.back()</script>';
		
}else{
	
		//jika data ditemukan, maka membuat variabel $data
	$row=$result->fetch_assoc();	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	}
	
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
				<li class="active"><a href="../index_admin.php">Welcome</a></li>
				<li><a href="../index_admin.php #getintouch">Get In Touch</a></li>
				<li><a href="../login/logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
</nav>
<!-- ./NAVBAR -->

<!--getintouch foooter -->
<footer class="parallax-section">
<section class="full" style="color: #2C0A05; text-align: left; padding-top: 50px;">

	<div class="container ">
		<div class="row">
		<div class="col-md-6 col-md-offset-3 jumbotron" style="background-color: rgba(236, 240, 241,0.5);">
			<header>
		        <div class="container">
		            <div class="intro-text">
		                <div class="intro-heading">Edit	Here</div>
		            </div>
		        </div>
		    </header>

			<div class="form-group">
			
				<form action="aksi_editing.php" method="post">
					<input type="hidden" name='id' value="<?php echo $id; ?>">	
						<div class="form-group">
							<label>ID Produk</label>
							<input class="form-control" type="text" name="id_produk" value="<?php echo $row['id_produk']; ?>">
						</div>	
						<div class="form-group">
							<label>Kode Menu</label>
						   <input class="form-control" type="text" name="kode_produk" value="<?php echo $row['kode_produk']; ?>">
						</div>	
						<div class="form-group">
							<label>Nama Menu</label>
						   <input class="form-control" type="text" name="nama_produk" value="<?php echo $row['nama_produk']; ?>">
						</div>		
						<div class="form-group">
							<label>Harga Menu</label>
							<input class="form-control" type="text" name="harga_produk" value="<?php echo $row['harga_produk']; ?>">
						</div>
						<div class="form-group">
							<label>Status</label>
							<select class="selectpicker form-control" name="status_produk" >
							<option>Ready Stock</option>
							<option>Pre-Order</option>
							</select>	
						</div>
						<div class="form-group">
							<label>Harga Menu</label>
							<input class="form-control" type="text" name="id_sup" value="<?php echo $row['id_sup']; ?>">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-block btn-xl ">Change Now</button>
						</div>	
						<div class="text-center">
							Do you wish to back to <a href="home.php">page before</a>?
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