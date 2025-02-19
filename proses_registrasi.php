<?php
include('koneksi.php');
	$NamaLengkap   = $_POST['NamaLengkap'];
	$Username      = strtolower($_POST['Username']);
	$Password 	   = MD5($_POST['Password']);
	$Email 	       = $_POST['Email'];
	$Alamat 	   = $_POST['Alamat'];

	//cek username sudah ada apa belum
	$result = mysqli_query($koneksi,"SELECT Username FROM user WHERE Username = '$Username'");
	if (mysqli_fetch_assoc($result)){
 	  echo "<script>
			alert('username sudah digunakan');
			</script>";
	  return false;
	}
		
	$sql=mysqli_query($koneksi,"INSERT INTO user (NamaLengkap,Username,Password,Email,Alamat,Level,Konfirmasi) VALUES('$NamaLengkap','$Username','$Password','$Email','$Alamat','pengguna','1')") or die(mysqli_error($Koneksi));
	if($sql) //jika data berhasil ditambahkan,maka halaman yang akan terbuka adalah halaman login
	{
	  echo '<script>alert("Berhasil melakukan registrasi."); document.location="login.php";</script>';
	}
	  else//jika tidak berhasil ditambahkan ke database,maka halaman yang akan terbuka adalah halaman register
	{
	  echo '<script>alert("Gagal melakukan proses registrasi"); document.location="registrasi.php";</script>'; 
	}
  
?>