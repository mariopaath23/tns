<?php
include 'config.php';
$id         = $_GET['id_pengguna'];
$siswa  	= mysqli_query($conn, "SELECT * FROM pengguna, kelas where id_pengguna='$id'");
$row        = mysqli_fetch_array($siswa);

// membuat data jurusan menjadi dinamis dalam bentuk array
$kelas    = array('X MIA 1','X MIA 2','X MIA 3', 'X IIS', 'XI MIA 1', 'XI MIA 2', 'XI MIA 3', 'XI IIS', 'XII MIA 1', 'XII MIA 2', 'XII IIS 1', 'XII IIS 2');

// membuat function untuk set aktif radio button
function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
	<title>Ubah Data | Theodorus no Sonzai</title>
</head>
<body>
	<form action="update.php" method="post">
		NIS: <input type="text" name="nis" value="<?php echo $row['nis'];?>"><br>
		NISN: <input type="text" name="nisn" value="<?php echo $row['nisn'];?>"><br>
		Nama: <input type="text" name="nama" value="<?php echo $row['nama_lengkap'];?>"><br>
		Tempat Lahir: <input type="text" name="tempat" value="<?php echo $row['tempat'];?>"><br>
		Tanggal Lahir: <input type="date" name="tanggal" value="<?php echo $row['tanggal_lahir'];?>"><br>
		Kelas:
		<select name="kelas">
			<?php
			foreach ($kelas as $k){
				echo "<option value='$k' ";
				echo $row['nama_kelas']==$k?'selected="selected"':'';
				echo ">$k</option>";
			}
			?>
		</select><br>
		<button type="submit" value="simpan">Ubah Data</button>
	</form>
</body>
</html>