   
<?php
	//data
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="coffee_shop";

	$connect=new mysqli($hostname,$username,$password,$dbname);

	//cek koneksi
	if(!$connect){
		die("<center> <b> <h1>Koneksi Gagal! </h1> </center> </b> ");
	}
?>