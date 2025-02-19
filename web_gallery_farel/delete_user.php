<?php
	include('koneksi.php');
	$id = $_GET['id'];
	$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'") or die(mysqli_error($koneksi));	
	if(mysqli_num_rows($cek) > 0)
	{
		$del = mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'") or die(mysqli_error($koneksi));
		if($del)
		{
			echo '<script>alert("Berhasil menghapus data."); document.location="dashboard_admin.php";</script>';
		} else {
			echo '<script>alert("Gagal menghapus data."); document.location="dashboard_admin.php";</script>';
		}
	} else {
		echo '<script>alert("id tidak ditemukan di database."); document.location="dashboard_admin.php";</script>';
	}
?>