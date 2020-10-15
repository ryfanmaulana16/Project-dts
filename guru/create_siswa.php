!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Managemen Siswa | Tambah</title>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['status']!="login"){
    header("location:../login.php?pesan=belum_login");
    }
    include "../koneksi.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama       = $_POST["nama"];
            $username      = $_POST["username"];
            $password       = $_POST["password"];
            $sql        = "INSERT into siswa (nama, username, password, bindo, bing, mtk, ipa) 
                            VALUES  ('$nama', '$username', '$password', '0', '0', '0','0')";
            
        // START Eksekusi Data
        $hasil = mysqli_query($db, $sql);
        // END Eksekusi Data

        if ($hasil) {
            header("location:guru_siswa.php");
        } else {
            echo "<div class='alert alert-danger'> Data Gagal Disimpan. </div>";
        }
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
            <a class="nav-link" href="indexguru.php">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="guru_nilai.php">Raport Siswa <span class="sr-only">(current)</span></a>
          </li>
      </div>
        <form class="form-inline my-2 my-lg-0">
          <div class="float-right">
          <a href ="logout.php" class="fa fa-times btn btn-warning" aria-hidden="true"> Log Out</a>
          </div>
        </form>
      </div>
    </nav>
        <p>&nbsp
    <div class="container">
        <h1>Masukkan Data Siswa Baru</h1>
        <form id="Reset" action="" method="post" id="form">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="" aria-describedby="" required>
            </div>
            <div class="form-group">
                <label for="bindo">Username</label>
                <input type="text" name="username" class="form-control" id="" required>
            </div>
            <div class="form-group">
                <label for="bing">Password</label>
                <input type="text" name="password" class="form-control" id="" required>
            </div>
            <a href="guru_siswa.php" class="btn btn-warning"> Kembali</a>
            <input type="button" onclick="newFunction()" class="btn btn-danger" value="Reset">
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
    <script>
         function newFunction() {
            document.getElementById("Reset").reset();
         }
      </script>
</body>
</html>