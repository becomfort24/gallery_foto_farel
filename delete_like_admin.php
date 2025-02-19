<?php
	include('koneksi.php');
	$LikeID = $_GET['LikeID'];
	$cek = mysqli_query($koneksi, "SELECT * FROM likefoto WHERE LikeID='$LikeID'") or die(mysqli_error($koneksi));	
	if(mysqli_num_rows($cek) > 0)
	{
		$del = mysqli_query($koneksi, "DELETE FROM likefoto WHERE LikeID='$LikeID'") or die(mysqli_error($koneksi));
		if($del)
		{
			echo '<script>alert("Berhasil menghapus data."); document.location="data_like.php";</script>';
		} else {
			echo '<script>alert("Gagal menghapus data."); document.location="data_like.php";</script>';
		}
	} else {
		echo '<script>alert("LikeID tidak ditemukan di database."); document.location="data_like.php";</script>';
	}
?>