<?php
include '../koneksi.php';

$id = $_POST['id_kar'];
$kode_kar = $_POST['kode_kar'];
$nama_kar = $_POST['nama_kar'];
$bagian= $_POST['bagian'];
$alm_kar= $_POST['alm_kar'];
$tlp_kar= $_POST['tlp_kar'];

// perintah SQL
$query="INSERT INTO tb_karyawan (id_kar,kode_kar,nama_kar,bagian,alm_kar,tlp_kar) VALUES ('$id','$kode_kar','$nama_kar','$bagian','$alm_kar','$tlp_kar') " ;
$hasil = $connect->query($query);  

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= input_karyawan.php'/>  ";
} else { echo "<center> <b> <font color = 'red' size = '4'> <p> Data gagal disimpan</p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= tambah_karyawan.php'/> ";
}
?>
