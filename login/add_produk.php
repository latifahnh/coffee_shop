<?php
include '../koneksi.php';

$id = $_POST['id_produk'];
$kode_produk = $_POST['kode_produk'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$status_produk = $_POST['status_produk'];
$id_sup = $_POST['id_sup'];



// perintah SQL
$query="INSERT INTO tb_produk (id_produk,kode_produk,nama_produk,harga_produk,status_produk,id_sup) VALUES ('$id','$kode_produk','$nama_produk','$harga_produk','$status_produk','$id_sup') " ;
$hasil = $connect->query($query);  

if ($hasil){

echo " <meta http-equiv='refresh' content='2; url= list_produk.php'/>  ";
} else { echo "<center> <b> <font color = 'red' size = '4'> <p> Data gagal disimpan, Masukkan data yang lain !!! </p> </center> </b> </font> <br/>
 <meta  url= list_produk.php'/> ";
}
?>
