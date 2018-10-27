<?php
include '../koneksi.php';

$id = $_POST['id_kon'];
$nama_kon = $_POST['nama_kon'];
$alm_kon = $_POST['alm_kon'];
$tlp_kon= $_POST['tlp_kon'];

// perintah SQL
$query="INSERT INTO tb_konsumen (id_kon,nama_kon,alm_kon,tlp_kon) VALUES ('$id','$nama_kon','$alm_kon','$tlp_kon') " ;
$hasil = $connect->query($query);  

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= input_konsumen.php'/>  ";
} else { echo "Data gagal disimpan
 <meta http-equiv='refresh' content='2; url= tambah_konsumen.php'/> ";
}
?>


