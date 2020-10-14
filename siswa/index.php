<html>
<head>
	<title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body> 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
    
     <!--================ Start Home Banner Area =================-->
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <p class="text-uppercase">
                  Best online education service In the world
                </p>
                <h2 class="text-uppercase mt-4 mb-5">
                  One Step Ahead This Season
                </h2>
                <div>
                  <a href="#" class="btn btn-warning mb-3 mb-sm-0">learn more</a>
                  <a href="#" class=" btn btn-primary ml-sm-3 ml-0">see course</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!--================ End Home Banner Area =================-->
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
 
	<br/>
	<br/>
 
	<a href="logout.php">LOGOUT</a>
    
 
</body>
</html>

