<?php
//memulai proses hapus data
 
//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=_id
if(isset($_GET['id'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('../koneksi.php');
	
	//membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=siswa_id
	$id = $_GET['id'];
	
	//cek ke database apakah ada data siswa dengan siswa_id='$id'
	
	$result=$connect->query("SELECT * FROM tb_supplier WHERE id_sup='$id'") or die(mysql_error());
	//jika data siswa tidak ada
	if(mysqli_num_rows($result) == 0){
		
		//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
		echo '<script>window.history.back()</script>';
	
	}else{
		
		//jika data ada di database, maka melakukan query DELETE table siswa dengan kondisi WHERE siswa_id='$id'
		$del = $connect->query("DELETE FROM tb_supplier WHERE id_sup='$id'");
		
		//jika query DELETE berhasil
		if($del){
			
			echo 'Data berhasil di hapus! ';		//Pesan jika proses hapus berhasil
			echo '<script>window.history.back()</script>';	//membuat Link untuk kembali ke halaman beranda
			
		}else{
			
			echo 'Gagal menghapus data! ';		//Pesan jika proses hapus gagal
			echo '<a href="input_supplier.php">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>