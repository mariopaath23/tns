<?php 
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "tns");


function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows =[];
	while ( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah ($data){
	global $conn;
	$nis = htmlspecialchars( $_POST["nis"]);
	$nisn = htmlspecialchars( $_POST["nisn"]);
	$nama_lengkap = htmlspecialchars($_POST["nama_lengkap"]);
	$tempat = htmlspecialchars($_POST["tempat"]);
	$tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
	$id_kelas = htmlspecialchars($_POST["id_kelas"]);
	$query = "INSERT INTO pengguna VALUES 
	('','$nis','$nisn','$nama_lengkap','$tempat','$tanggal_lahir','$id_kelas')
	";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);

}

function kehadiran ($data){
	global $conn;
	$tanggal = htmlspecialchars($_POST["tanggal"]);
	$id_pengguna = htmlspecialchars($_POST["id_pengguna"]);
	$query = "INSERT INTO kehadiran VALUES 
	('','$tanggal','$id_pengguna')
	";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function hapus ($id_pengguna){
	global $conn;
	mysqli_query($conn, "DELETE FROM pengguna WHERE id_pengguna = $id_pengguna");
	return mysqli_affected_rows($conn);
}



?>