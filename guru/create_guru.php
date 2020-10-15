<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Managemen Guru | Tambah</title>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['status']!="login"){
    header("location:../login.php?pesan=belum_login");
    }
    include "../koneksi.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nip       = $_POST["nip"];
            $nama       = $_POST["nama"];
            $username      = $_POST["username"];
            $password       = $_POST["password"];
            $sql        = "INSERT into guru (nip, nama, username, password) 
                            VALUES  ($nip, '$nama', '$username', '$password')";
            
        // START Eksekusi Data
        $hasil = mysqli_query($db, $sql);
        // END Eksekusi Data

        if ($hasil) {
            header("location:guru.php");
        } else {
            echo "<div class='alert alert-danger'> Data Gagal Disimpan. </div>";
        }
        }

    ?>
    <div class="container">
        <h1>Masukkan Data Siswa Baru</h1>
        <form id="Reset" action="" method="post" id="form">
            <div class="form-group">
                <label for="nip">Nomor Induk Kepegawaian</label>
                <input type="number" name="nip" class="form-control" id="" aria-describedby="" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="" aria-describedby="" required>
            </div>
            <div class="form-group">
                <label for="nama">Username Akun Guru</label>
                <input type="text" name="username" class="form-control" id="" aria-describedby="" required>
            </div>
            <div class="form-group">
                <label for="nama">Password Akun Guru</label>
                <input type="text" name="password" class="form-control" id="" aria-describedby="" required>
            </div>
            <a href="guru.php" class="btn btn-warning"> Kembali</a>
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