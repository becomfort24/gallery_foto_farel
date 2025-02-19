<?php
	include 'koneksi.php';
	session_start();

	if(!isset($_SESSION['UserID'])){
		echo '<script>alert("Login terlebih dahulu!"); 
		document.location="login.php";</script>';
	}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <script>
	window.print();
  </script>
  <title>WEB GALERI FOTO</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">
   
    <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>DATA AKUN</h2>
      </div>
	   <div class="row">
        <div class="col-md-12">
		  <table id="example1" class="table table-bordered table-striped" border=1 align="center" width="60%">
		  <thead align="center">
			<tr>
			  <th>UserID</th>
			  <th>Username</th>
			  <th>Password</th>
			  <th>Email</th>
			  <th>Nama Lengkap</th>
			  <th>Alamat</th>
			  <th>Level</th>
			  <th>Status</th>
			</tr>
		  </thead>
		  <tbody  align="center">
			<?php
			include('koneksi.php');
				if(isset($_GET['kata_cari'])) {
					$kata_cari = $_GET['kata_cari'];
					$query = "SELECT * FROM user WHERE NamaLengkap like '%".$kata_cari."%'  ORDER BY UserID ASC";
				} else {
					$query = "SELECT * FROM user ORDER BY UserID ASC";
				}
					
				$result = mysqli_query($koneksi, $query);

				if(!$result) {
					die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
				}
				while ($data = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $data['UserID']; ?></td>
				<td><?php echo $data['Username']; ?></td>
				<td><?php echo $data['Password']; ?></td>
				<td><?php echo $data['Email']; ?></td>
				<td><?php echo $data['NamaLengkap']; ?></td>
				<td><?php echo $data['Alamat']; ?></td>
				<td><?php echo $data['Level']; ?></td>
				<td>
				  <?php
                    if ($data['Konfirmasi'] == 1) { ?>
                    <span class="badge bg-warning">Belum di Konfirmasi</span>
                    <?php } else { ?>
                    <span class="badge bg-success">Sudah di Konfirmasi</span>
                    <?php } ?>
				</td>
			</tr>
			<?php
			  }
			?>
		  </tbody>
		  </table>		  
		</div>
	  </div>
    </div>
  </section>

  <!-- footer section -->
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>