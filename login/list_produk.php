<?php
//menghubungkan dengan MySQL
include '../koneksi.php';
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
	<section style="padding-top: 50px;">
    <header>
        <div class="container text-center" style="padding-bottom: 20px">
	            <div class="intro-text">
	                <div class="intro-heading" style="color: white">Daftar Menu</div>
	                <form action="new_produk.php"><button type="submit" method="post" class=" btn btn-xl" style="color: white;"> Tambah Menu
	                </form>
	            </div>
	        </div>
	    </header>
	    <div class="col-md-3" style="padding-bottom: 10px;"><a href="../login/home.php"><button class="btn btn-info btn-info-outline" style="color:#2C0A05;">Kembali</button></a>
	    </div>
	    	<div class="container ">	
				<table class="table table-striped jumbotron" align="right" style="background-color: rgba(236, 240, 241,0.8);color: #2C0A05;" >
				   <th class="text-center">Nomor</th>
				   <th class="text-center">ID Menu</th>
				   <th class="text-center">Kode Menu</th>
				   <th class="text-center">Gambar</th>
				   <th class="text-center">Nama Menu</th>
				   <th class="text-center">Harga Menu</th>
				   <th class="text-center">Status Menu</th>
				   <th class="text-center">ID Supplier</th>
				   <th class="text-center">Aksi</th>

					<?php
					$no = 1;
					while ($row=$result->fetch_assoc())
					{
				    echo "<tr>";
				    echo "<td align='center'>".$no."</td>";
				    echo "<td align='center'>".$row['id_produk']."</td>";
				    echo "<td>".$row['kode_produk']."</td>";
				    echo "<td>".$row['gambar']."</td>";
				    echo "<td>".$row['nama_produk']."</td>";
				    echo "<td>".$row['harga_produk']."</td>";
				    echo "<td>".$row['status_produk']."</td>";
					echo "<td>".$row['id_sup']."</td>";
					echo '<td align="center"><a href= "update_edit.php?id='.$row['id_produk'].'"><button class="btn btn-info btn-info-outline">Edit</button></a>  <a href="hapus.php?id='.$row['id_produk'].'" onclick="return confirm(\'Anda yakin ingin menghapusnya?\')"><button class="btn btn-danger btn-danger-outline">Hapus</button></a></td>';
									 
					$no++;
					}
					?>
				</table></br>
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