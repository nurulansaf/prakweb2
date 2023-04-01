
<?php
require_once('../dbkoneksi.php');
	// untuk Hapus data pelanggan berdasarkan id
	$id = $_GET['id'];
	// $dbh->query("DELETE FROM pelanggan WHERE id=" . $_GET['id']);
	// header('location:list_pelanggan.php');

	// $sql = "DELETE FROM pelanggan WHERE id=?";
	// $row = $dbh->prepare($sql);
	// $row->execute(array($id));
	
	// echo '<script>alert("Berhasil Hapus Data");window.location="list_pelanggan.php"</script>';

	$sql="DELETE FROM pelanggan WHERE id=:id";
		$stmt=$dbh->prepare($sql);
		$stmt->execute(array("id"=>$id));
		return true;
	
?>