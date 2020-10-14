<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Input Nilai</title>
</head>
<body>
    <?php
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
    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>Selamat Datang</h1>
        <p>Perfect, Social, Interest</p> 
    </div>
    <div class="container">
        <h1>Masukkan Data Siswa Baru</h1>
        <form action="" method="post" id="form">
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
            <a href="indexguru.php" class="btn btn-warning"> Kembali</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>

</body>
</html>