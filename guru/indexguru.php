
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>Home | Guru</title>

  
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/jumbotron.css" rel="stylesheet">
  </head>

  <body>
  <?php 
	session_start();
      if($_SESSION['status']!="login"){
        header("location:../login.php?pesan=belum_login");
      }
	?>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand fa fa-book" href="#"> DTS University</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="guru_nilai.php">Raport Siswa <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="guru_siswa.php">Managemen Siswa <span class="sr-only"></span></a>
          </li>
      </div>
        <form class="form-inline my-2 my-lg-0">
          <div class="float-right">
          <a href ="guru.php" class="fa fa-user-circle btn btn-primary" aria-hidden="true"> Guru</a>
          <a href ="logout.php" class="fa fa-times btn btn-warning" aria-hidden="true"> Log Out</a>
          </div>
        </form>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
        <?php
        include "../koneksi.php";
        $validUser = mysqli_real_escape_string($db, $_SESSION['username']);
        $sql = "SELECT * FROM guru WHERE username='$validUser' LIMIT 1";
        $hasil = mysqli_query($db, $sql);
        if ($hasil->num_rows > 0) {
          // output data of each row
          while($data = $hasil->fetch_assoc()) {
          ?>
          <h1 class="display-3">Selamat datang, <?php echo $data['nama']; ?>!</h1>
        </div>


      <?php
            }
        }
        ?>
      <div class="container">
        <!-- Example row of columns -->
        <hr>
        <div class="row">
          <div class="col-md-4">
            <h2>RAPORT SISWA</h2>
            <p>Disinilah anda sebagai guru mendata raport para siswa</p>
            <p><a class="btn btn-secondary" href="guru_nilai.php" role="button">Raport Siswa &raquo;</a></p>
          </div>
          <div class="col-md-4">

          </div>
          <div class="col-md-4">
            <h2>Managemen Siswa</h2>
            <p>Disinilah anda sebagai guru mendata siswa, mengganti username dan semacamnya</p>
            <p><a class="btn btn-secondary" href="guru_siswa.php" role="button">Managemen Siswa &raquo;</a></p>
          </div>
        </div>

     

      </div> <!-- /container -->
</div>

    </main>

    <footer class="container">
      <p>&copy; Muhammad Syahril Syahbani & Ryfan Maulana DTS2020</p>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
