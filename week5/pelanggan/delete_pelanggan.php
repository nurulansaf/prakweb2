
<?php
require_once('../dbkoneksi.php');
	// untuk Hapus data pelanggan berdasarkan id
	$id = $_GET['id'];
	$sql = "DELETE FROM pelanggan WHERE id= ?";
	$row = $dbh->prepare($sql);
	$row->execute(array($id));
	
	echo '<script>alert("Berhasil Hapus Data");window.location="list_pelanggan.php"</script>';
?>