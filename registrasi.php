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

  <title>REGISTRASI</title>


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

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>WEB gallery FOTO </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          SILAKAN REGISTRASI
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
          <div class="form_container">
		   <form action="proses_registrasi.php" method="post">
			
			<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="NamaLengkap" name="NamaLengkap">
			<div class="input-group-append">
			<div class="input-group-text">
				<span class=""></span>
			</div>
			 </div>
			 </div>
			 
			<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="Username" name="Username">
			<div class="input-group-append">
			<div class="input-group-text">
				<span class=""></span>
			</div>
			 </div>
			 </div>
			 
			 <div class="input-group mb-3">
			 <input type="password" class="form-control" placeholder="Password" name="Password">
			 <div class="input-group-append">
			 <div class="input-group-text">
			 <span class=""></span>
			 </div>
			 </div>
			 </div>
			 
			 <div class="input-group mb-3">
			 <input type="Email" class="form-control" placeholder="Email" name="Email">
			 <div class="input-group-append">
			 <div class="input-group-text">
			 <span class=""></span>
			 </div>
			 </div>
			 </div>
			 
			 <div class="input-group mb-3">
			 <textarea class="form-control" rows="3" placeholder="Alamat" name="Alamat"></textarea>
			 <div class="input-group-append">
			 <div class="input-group-text">
			 <span class=""></span>
			 </div>
			 </div>
			 </div>
			 
			<div class="input-group mb-3">
			 <button type="submit" class="btn btn-block btn-primary">
			 <i class=""><i>regristrasi
			 </button>
			 </div>
			 </form>
		

			</div>
		  </div>
		  </form> 
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->

  

  <!-- end info section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">MuhammadFarel</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>

