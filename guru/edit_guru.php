<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managemen Guru | Edit</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<?php 
            session_start();
	        if($_SESSION['status']!="login"){
		    header("location:../login.php?pesan=belum_login");
	        }
	    ?>
<div class="container">
        <?php
            include "../koneksi.php";

            // START
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nip     = $_POST["nip"];
                $username = $_POST["username"];
                $nama  = $_POST["nama"];
                $password  = $_POST["password"];

                $sql = "UPDATE guru SET nama='$nama',username='$username',password='$password' WHERE nip=$nip"; 
                
            // START
            $hasil = mysqli_query($db,$sql);
            // END
            
            // START cek hasil eksekusi
            if ($hasil) {
                header("location:guru.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal Diubah. </div>";
            }
            // END cek hasil eksekusi
            }

            // START get data edit
            if (isset($_GET['nip'])) {
                $nip = $_GET['nip'];

                $sql = "SELECT * FROM guru where nip = $nip";
                $hasil = mysqli_query($db, $sql);
                $data = mysqli_fetch_assoc($hasil);
            }
            // END get data edit

        ?>

    <h5>Kelola Siswa</h5>
    <form action="<?php echo($_SERVER['PHP_SELF']) ?>" method="post" id="form">
    <div class="form-group">
                <label for="nip">Nomor Induk Kepegawai</label>
                <input type="text" name="nip" placeholder="Masukan Nip" class="form-control" id="" aria-describedby="emailHelp" readonly required value="<?php echo $data['nip'] ?>">
            </div>
          <div class="form-group">
                <label for="nama">Nama Lengkap Siswa</label>
                <input type="text" name="nama" placeholder="Masukan Nama" class="form-control" id="" aria-describedby="emailHelp" readonly required value="<?php echo $data['nama'] ?>">
            </div>
            <div class="form-group">
                <label for="username">Username Siswa</label>
                <input type="text"  name="username" placeholder="Masukan username baru" class="form-control" id="" required value="<?php echo $data['username'] ?>">
            </div>
            <div class="form-group">
                <label for="password">Password Akses Siswa</label>
                <input type="text" name="password" placeholder="Masukan password" class="form-control" id="" required value="<?php echo $data['password'] ?>">
            </div>
            <a href="guru.php" class="btn btn-warning "> Kembali</a>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
      </div>
</body>
</html>