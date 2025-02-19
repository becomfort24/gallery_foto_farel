<?php
include "koneksi.php";
session_start();

$Username = $_POST["Username"];
$Password = MD5($_POST["Password"]);

$sql=mysqli_query($koneksi,"select * from user where Username = '$Username' AND Password = '$Password'");
$cek=mysqli_num_rows($sql);

		
if($cek>0){
	$data = mysqli_fetch_assoc($sql);
	if($data['Level']=="admin"){
		$_SESSION['Username']= $Username;
		$_SESSION['Level']= "admin";
		$_SESSION['UserID']=$data['UserID'];
		header("location:dashboard_admin.php");
	}else if($data['Level']=="pengguna"){
		$_SESSION['Username']= $Username;
		$_SESSION['Level']= "pengguna";
		$_SESSION['UserID']=$data['UserID'];
		header("location:dashboard_pengguna.php");
	}else{
		header("location:login.php?pesan==gagal");
	}
}else{
	header("location:login.php?pesan==gagal");
}
?>