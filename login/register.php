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
		        <li><a href="admin_login.php">Login as Admin</a></li>                  
       			</li>
			</ul>
		</div>
	</div>
</nav>

<!-- ./navbar -->

<!--getintouch foooter -->
<footer class="parallax-section" style="color: #2C0A05; text-align: justify-all;">
<!-- 	<div class="container" style="text-align: justify-all;"> -->
<!-- contain -->

<div class="container" >
  <div class="row"style="padding-top: 30px;">
  <div class="col-md-4 col-md-offset-4 jumbotron" style="background-color: rgba(236, 240, 241,0.5);">
    <header>
        <div class="intro-heading"><h3 align="center">Sign Up Here</h3></div>
    </header>

    <div class="form-group">
    	<form action="action_register.php" method="post">
		    <div class="form-group">
		    	<label>Full Name</label>
		        <input class="form-control" type="text" name="fullname" placeholder="Full Name" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
		    </div>
		    <div class="form-group">
		        <label>Username</label>
		        <input class="form-control" type="text" name="username" placeholder="Username" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
		    </div> 
		    <div class="form-group">
		        <label>Email</label>
		        <input class="form-control" type="text" name="email" placeholder="Email" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">        
		    </div>
		    <div class="form-group">
		        <label>Password</label>
		        <input class="form-control" type="password" name="password" placeholder="Password" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">       
		    </div>
		    <div class="form-group">
		        <button type="submit" class="btn btn-block btn-xl ">Sign Up</button>
		    </div>  
		    <div class="text-center" style="color: #2C0A05;">
		        Do you have an account? <a href="login.php">Login Here</a>
		    </div>  
      	</form>
      </div>
    </div>
  </div>
</div>
<script>
$('.fullname').bind('keyup paste', function(){
        this.value = this.value.replace(/[^A-Za-z0-9_@./#&+-]*$/g,'');
  });
</script>
<!-- /contain -->
<!-- 	</div> -->
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