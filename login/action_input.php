<?php

include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
$runquery = $connect->query($query);

if ($runquery->num_rows > 0){
	session_start();
	$_SESSION['username'] = $username;
	header("Location: ../index_user.php");
}
else {
	echo "<center><h1> Username atau Password Salah !</h1></center>
	<meta http-equiv='refresh' content='2; url= ../index.html'/>";
}
?>