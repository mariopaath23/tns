<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
	<title>BERANDA | Theodorus no Sonzai</title>
	<div class="header">
		<a href="beranda.php">
		<img src="img/logo.png" width="47" height="47" class="img header2"></a>
		<h2 class="header2"> Theodorus no Sonzai</h2>
		<a href="logout.php" class="kanan">Logout</a>
	</div>
</head>
<br>
<br>
<body>
	<center>
	<h1>Selamat Datang - ようこそ (Youkoso)</h1>
	<h3>Silahkan Pilih Menu</h3>
	<br>
	<div class="container_beranda">
		<div onclick="location.href='kehadiran.php';" style="cursor: pointer;" class="Mulai-Absen img-anim img-anim--blur">
			<h2>Mulai Absen</h2>
			<h4>しゅっせきのページ</h4>
			<h5>Shusseki no Peeji</h5>
			<img src="img/mulai_absen.jpg" width="400">
		</div>
		<div onclick="location.href='lihat_data.php';" style="cursor: pointer;" class="Lihat-Data img-anim img-anim--blur">
			<h2>Lihat Data</h2>
			<h4>データ</h4>
			<h5>Deeta</h5>
			<img src="img/lihat_data.jpg" width="400">
		</div>
		<div onclick="location.href='kamus.php';" style="cursor: pointer;" class="Kamus img-anim img-anim--blur">
			<h2>Kamus B. Jepang</h2>
			<h4>日本語のじしょ</h4>
			<h5>Nihongo no Jisho</h5>
			<img src="img/kamus.jpg" width="400">
		</div>
		<div onclick="location.href='tentangkami.php';" style="cursor: pointer;" class="Tentang img-anim img-anim--blur">
			<h2>Tentang Kami</h2>
			<h4>私たちについて</h4>
			<h5>Watashitachi ni Tsuite</h5>
			<img src="img/tentangkami_home.jpeg" width="400">
		</div>
	</div>
	</center>
</body>
</html>