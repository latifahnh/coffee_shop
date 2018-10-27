<?php

include '../koneksi.php';
$id = $_POST['id'];
$id = $_POST['id_produk'];
$kode_produk = $_POST['kode_produk'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$status_produk = $_POST['status_produk'];
$id_sup = $_POST['id_sup'];

// perintah SQL

$query="UPDATE tb_produk SET kode_produk='$kode_produk', nama_produk='$nama_produk', harga_produk='$harga_produk', status_produk='$status_produk', id_sup='$id_sup' WHERE id_produk='$id'";

$hasil = $connect->query($query);  

if ($hasil){
//header ('location:view.php'); http-equiv='refresh' content='2; 
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= list_produk.php'/>";
 }
  else
   {  echo '<script>window.history.back()</script>' ;}
?>


