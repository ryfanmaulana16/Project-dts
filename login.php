
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>DTS University</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Favicons -->

<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
        


          <!--Form Login-->
            <form class="form-signin" action="ceklogin.php" method="post">
  <!--Gambar disini <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
            <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="username" class="form-control" placeholder="Email atau Username" type="text" required>
                    </div> <!-- input-group.// -->
                </div> <!-- form-group// -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                    <input name="password" class="form-control" placeholder="******" type="password" required>
                    </div> <!-- input-group.// -->
                </div> <!-- form-group// -->
                <button class="btn btn-success btn-block rad" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
                
             <hr>
                <!-- <p>Don't have an account!</p>  -->
                <!-- <button class="btn btn-primary btn-block rad" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button> -->
            <!--cek apakah ada kesalahan saat sign in -->
          <?php 
          if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
              echo "<div class='alert alert-danger'>Login Gagal! <br> Username Atau Password Salah</div>";
              echo '<script>alert("Login Gagal !!! Username atau Password Salah")</script>';
            }else if($_GET['pesan'] == "logout"){
              echo "<div class='alert alert-danger'>Anda Telah Log Out</div>";
            }else if($_GET['pesan'] == "belum_login"){
              echo "<div class='alert alert-danger'>Anda Harus Login Sebelum mengakses halaman tersebut";
              echo '<script>alert("Anda Harus Login Sebelum Dapat mengakses halaman tersebut")</script>';
            }
          }
            ?>
        </form>
</body>
</html>
