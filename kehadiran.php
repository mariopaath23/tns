<?php 
require 'config.php';

$conn = mysqli_connect("localhost", "root", "", "tns");
$hadir = mysqli_query($conn, "SELECT * FROM kehadiran, pengguna, kelas WHERE kehadiran.id_pengguna=pengguna.nisn AND pengguna.id_kelas = kelas.id_kelas");

if (isset ($_POST["submit"])){

	if(kehadiran ($_POST)>0){
		echo "
		<script>
			alert('data berhasil ditambahkan!');
			document.location.href ='kehadiran.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href ='kehadiran.php';
		</script>
		";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>KEHADIRAN | Theodorus no Sonzai</title>
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
	<div class="header">
		<a href="beranda.php">
		<img src="img/logo.png" width="47" height="47" class="img header2"></a>
		<h2 class="header2"> Theodorus no Sonzai</h2>
		<a href="logout.php" class="kanan">Logout</a>
</head>
<body>
	<div class="header_kehadiran">
		<h1>Selamat Datang!</h1>
		<h3>Silahkan Scan Kartu Siswa</h3>
	</div>
	<center>
	</table>
		<form action="" method="POST>
			<li>
				<label for="tanggal">Tanggal
				</label>
				<input type="text" name="tanggal" id="tanggal" value="<?php 
				echo date("l d-m-Y");
				?>"required>
			</li>
			<li>
				<label for="id_pengguna">NISN </label>
				<input type="text" name="id_pengguna" id="id_pengguna" required>
			</li>
			<button type="submit" name="submit">Hadir</button>
		</form>

		<br>
		<br>

		<table>
		<tr><th>	
		<h2>Kehadiran Hari ini, <?php echo date("l d-m-Y"); ?></h2>
		</th></tr>
		</table>
		<div style="overflow-y: auto">
		<table style="background: white">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Kelas</th>
		</tr>
			<tr>
			<?php $i =1; ?>
			<?php while($row = mysqli_fetch_array($hadir)):?>
			<td><?= $i; ?></td>
			<td><?= $row["nama_lengkap"] ?></td>
			<td><?= $row["nama_kelas"] ?></td>
		</tr>
	<?php $i++ ?>
	<?php endwhile; ?>
		</table>
	</div>
	</center>
</body>
</html>