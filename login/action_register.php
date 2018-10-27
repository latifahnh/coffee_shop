<?php
include '../koneksi.php';

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


// perintah SQL
$query="INSERT INTO tb_user (fullname,username,email,password) VALUES ('$fullname','$username','$email','$password') " ;
$hasil = $connect->query($query);  

if ($hasil){

echo " <meta  http-equiv='refresh' content='2; url= login1.php'/>  ";
} else { echo "<center> <b> <font color = 'red' size = '4'> <p> Data gagal disimpan, gunakan username yang lain !!! </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= register.php'/> ";
}
?>
