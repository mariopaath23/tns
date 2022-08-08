<?php 

require 'config.php';
$id_pengguna = $_GET['id_pengguna'];

if (hapus($id_pengguna)>0)
{
		echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href ='lihat_data.php';
		</script>

		";

}else {
		echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href ='lihat_data.php';
		</script>
		";
}

?>