<?php
include '../koneksi.php';

$id = $_POST['id_sup'];
$nama_sup = $_POST['nama_sup'];
$alm_sup = $_POST['alm_sup'];
$tlp_sup= $_POST['tlp_sup'];
$jenis_sup= $_POST['jenis_sup'];

// perintah SQL
$query="INSERT INTO tb_supplier (id_sup,nama_sup,alm_sup,tlp_sup,jenis_sup) VALUES ('$id','$nama_sup','$alm_sup','$tlp_sup','$jenis_sup') " ;
$hasil = $connect->query($query);  

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= input_supplier.php'/>  ";
} else { echo "Data gagal disimpan
 <meta http-equiv='refresh' content='2; url= tambah_supplier.php'/> ";
}
?>


