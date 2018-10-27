<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Bakery Shop Admin Login</title>
<link rel="stylesheet" href="assets/bootstrap-3.3.7/css/bootstrap.min.css"/>
<script type="text/javascript" src="/assets/jquery.js"></script>
<script type="text/javascript" src="/assets/bootstrap-3.3.7/js/bootstrap.min.js"></script></script>


<style>
body { background:#eeeeee;}
</style>
</head>

<body class="hold-transition login-page">
	
	
	<div class="container" style="margin-top: 15px; margin-bottom: -15px;">
	<div class="row">
	<div class="col-md-4 col-md-offset-4">
	<div class="panel panel-body" ><h3>Upload File</h3><hr>
	<div class="form-group">
		<!--<form action="upload.php" method="post" enctype="multipart/form-data">
    		Select image to upload:
    		<input class="required form-control" type="file" name="fileToUpload" id="fileToUpload">
    		<input class="btn btn-primary btn-block btn-flat" type="submit" value="Upload Image" name="submit">
    		
		</form> -->
		
		<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
	</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>