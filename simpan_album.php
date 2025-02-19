<?php
	include('koneksi.php');
	$NamaAlbum		=	$_POST['NamaAlbum'];
	$Deskripsi		=	$_POST['Deskripsi'];
	$TanggalDibuat	=	$_POST['TanggalDibuat'];
	$UserID			=	$_POST['UserID'];
	
	$sql = mysqli_query($koneksi, "INSERT INTO album (AlbumID, NamaAlbum, Deskripsi, TanggalDibuat, UserID, Konfirmasi) VALUES('', '$NamaAlbum', '$Deskripsi', '$TanggalDibuat', '$UserID', '1')") or die(mysqli_error($koneksi));
       //ganti
		if($sql) //jika data berhasil ditambahkan
			{
			echo '<script>alert("Berhasil menambahkan data."); 
			document.location="album.php";</script>';
			}
			else //jika data tidak berhasil ditambahkan ke database
			{
			echo '<script>alert("Gagal melakukan proses tambah data"); 
			document.location="tambah_album.php";</script>';
			}
?>