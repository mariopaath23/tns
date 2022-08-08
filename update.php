<?php 
	include 'config.php';
// menyimpan data kedalam variabel
$id_pengguna	= $_POST['id_pengguna'];
$nis  			= $_POST['nis'];
$nisn 			= $_POST['nisn'];
$nama           = $_POST['nama'];
$tempat_lahir   = $_POST['tempat'];
$tanggal_lahir  = $_POST['tanggal'];
$kelas          = $_POST['kelas'];
// query SQL untuk insert data
$query="UPDATE pengguna, kelas SET nis='$nis',nisn='$nisn',tempat='$tempat_lahir',tanggal_lahir='$tanggal_lahir',kelas='nama_kelas' where id_pengguna='$id_pengguna'";
mysqli_query($conn, $query);

// mengalihkan ke halaman lihat_data.php
header("location:lihat_data.php");
 ?>