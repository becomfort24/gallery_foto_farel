<?php
include 'koneksi.php';
$FotoID 			= $_POST['FotoID'];
$UserID 			= $_POST['UserID'];
$IsiKomentar 		= $_POST['IsiKomentar'];
$TanggalKomentar 	= date ('Y-m-d');

$sql = mysqli_query($koneksi, "insert into komentarfoto value ('', '$FotoID', '$UserID', '$IsiKomentar', '$TanggalKomentar')");

		if($sql) //berhasil simpan
			{
			echo '<script>alert("Berhasil menambahkan data."); 
			document.location="index.php";</script>';
			}
			else //tidak berhasil simpan
			{
			echo '<script>alert("Gagal melakukan proses tambah data"); 
			document.location="index.php";</script>';
			}

?>