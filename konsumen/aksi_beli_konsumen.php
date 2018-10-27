<?php
include '../koneksi.php';

$nama_kon = $_POST['nama_kon'];
$alm_kon = $_POST['alm_kon'];
$tlp_kon= $_POST['tlp_kon'];

// perintah SQL
$query="INSERT INTO tb_konsumen (nama_kon,alm_kon,tlp_kon) VALUES ('$nama_kon','$alm_kon','$tlp_kon') " ;
$hasil = $connect->query($query);  

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= checkout.php'/>  ";
} else { echo "<font color = 'red' size = '8'>Pembelian Tidak Berhasil <font>
 <meta http-equiv='refresh' content='2; url= beli_konsumen.php'/> ";
}
?>


