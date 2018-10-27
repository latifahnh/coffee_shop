<?php
require_once ('../koneksi.php');
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

</head>
<body>

<!-- navbar -->

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
		<img src="../img/header-icon.png"></img>
		<a class="navbar-brand" href="../index.html">COFFEE LATEEF</a>
	</div>
		<!-- daftar item menu -->
		<div class="collapse navbar-collapse" id="mymenu" style="background-color: #2C0A05;">
			<ul class="nav navbar-nav pull-right page-scroll">
				<li class="active"><a href="../index.html">Welcome</a></li>
				<!-- <li><a href="#menu">Menu</a></li> -->
				<li><a href="../index.html #getintouch">Get In Touch</a></li>
				<li><a href="register.php">Register</a></li>
			</ul>
		</div>
	</div>
</nav>

<!-- ./navbar -->

<!--getintouch foooter -->
<footer class="parallax-section">
	<div class="container" style="text-align: justify-all;">
			<!-- contain -->
		<div class="container" >
			<div class="row" style="padding-top: 100px; padding-bottom: 80px;" >
				<div class="col-md-4 col-md-offset-4 jumbotron" style="background-color: rgba(236, 240, 241,0.5);">
				    <header>
				        <div class="container">
				            <div class="intro-text">
				                <div class="intro-heading"><h3 align="center" style="color: #2C0A05;">Forgot Password</h3></div>
				            </div>
				        </div>    
				    </header>
				    <div class="form-group">
						<form class="form-signin" method="POST" action="forgot_hasil.php">
				        	<div class="input-group">
					  			<span class="input-group-addon" id="basic-addon1">@</span>
					  			<input type="text" name="username" class="form-control" placeholder="Username" required>
							</div>
							<br />
				        		<button class="btn btn-lg btn-primary btn-block" type="submit">Get Password</button>
				        		<a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
				        </form>
				    </div>
			    </div>
			  </div>
		</div>
<!-- /contain -->
	</div>
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