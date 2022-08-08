<?php 
require 'config.php';

$umat = query("SELECT * FROM pengguna ORDER BY nama_lengkap ASC");
?>


<!DOCTYPE html>
<html>
<head>
	<title>LIHAT DATA | Theodorus no Sonzai</title>
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
	<div class="header">
		<a href="beranda.php">
		<img src="img/logo.png" width="47" height="47" class="img header2"></a>
		<h2 class="header2"> Theodorus no Sonzai</h2>
		<a href="logout.php" class="kanan">Logout</a>
	</div>
</head>
<body>
	<center>
	<h1>Data Siswa</h1>
	<a href="tambah_pengguna.php" class="buttonUI">Tambah Data Pengguna</a>
	</center>
	<br>
	<div>
			<table  style="background: white; width: 100%; text-align: center; font-weight: bold;" cellpadding="2">
				<tr>
					<th>NO</th>
					<th>NIS</th>
					<th>NISN</th>
					<th>Nama Lengkap</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Aksi</th>
				</tr>

					<tr>
					<?php $i =1; ?>
					<?php foreach ($umat as $row) :?>
					<td><?= $i; ?></td>
					<td><?= $row["nis"] ?></td>
					<td><?= $row["nisn"] ?></td>
					<td><?= $row["nama_lengkap"] ?></td>
					<td><?= $row["tempat"] ?></td>
					<td><?= $row["tanggal_lahir"] ?></td>
					<td><a class="buttonUI_small" href="ubah.php?id_pengguna=<?= $row["id_pengguna"]; ?>">Ubah</a>  <a class="buttonUI_small"href="hapus_pengguna.php?id_pengguna=<?= $row["id_pengguna"]; ?>" onclick="return confirm('apakah anda ingin menghapus data_pengguna ini?')">Hapus</a>
		             <a class="buttonUI_small" href="lihatdetal.php?id_pengguna=<?= $row["id_pengguna"]; ?>">Lihat</a></td>
				</tr>
					<?php $i++ ?>
					<?php endforeach; ?>
			</table>
	</div>
</body>
</html>