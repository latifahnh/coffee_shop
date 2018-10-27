<?php

include '../koneksi.php';

$admin_name = $_POST['admin_name'];
$admin_pass = $_POST['admin_pass'];

$query = "SELECT * FROM tb_admin WHERE admin_name = '$admin_name' AND admin_pass = '$admin_pass'";
$runquery = $connect->query($query);

if ($runquery->num_rows > 0){
	session_start();
	$_SESSION['admin_name'] = $admin_name;
	header("Location: home.php");
}
else {
	echo "<center><h1> Username atau Password Salah !</h1></center>
	<meta http-equiv='refresh' content='2; url= admin_login.php'/>";
}
?>