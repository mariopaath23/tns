<?php 
require 'config.php';

if (isset ($_POST["submit"])){

	if(tambah ($_POST)>0){
		echo "
		<script>
			alert('data berhasil ditambahkan!');
			document.location.href ='lihat_data.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href ='lihat_data.php';
		</script>
		";
	}
}

$umat = query("SELECT * FROM kelas ORDER BY id_kelas ASC");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Siswa</title>
</head>
<body>
	<h1>Tambah Data Pengguna</h1>
	<form action="" method="POST">
		<ul>
			<li>
				<label for="nis">NIS</label>
				<input type="text" name="nis" id="nis" required>
			</li>
			<li>
				<label for="nisn">NISN</label>
				<input type="text" name="nisn" id="nisn" required>
			</li>
			<li>
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" name="nama_lengkap" id="nama_lengkap" required>
			</li>
			<li>
				<label for="tempat">Tempat Lahir</label>
				<input type="text" name="tempat" id="tempat" required>
			</li>
			<li>
				<label for="tanggal_lahir">Tanggal Lahir</label>
				<input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
			</li>
			<li>	
				<label for="id_kelas">Kelas</label>
				<select name="id_kelas" id="id_kelas">
					<?php foreach ($umat as $row) :?>
					<option value="<?= $row["id_kelas"] ?>"><?= $row["nama_kelas"] ?></option>
					<?php endforeach; ?>
				</select>
			</li>
			<button type="submit" name="submit">Tambah Pengguna</button>
		</ul>		
	</form>
</body>
</html>