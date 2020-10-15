<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raport Siswa | Rubah</title>
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
                $nis     = $_POST["nis"];
                $nama  = $_POST["nama"];
                $bindo  = $_POST["bindo"];
                $bing   = $_POST["bing"];
                $mtk = $_POST["mtk"];
                $ipa  = $_POST["ipa"];

                $sql = "UPDATE siswa SET bindo='$bindo',bing='$bing',mtk='$mtk',ipa='$ipa' WHERE nis=$nis"; 
                
            // START
            $hasil = mysqli_query($db,$sql);
            // END
            
            // START cek hasil eksekusi
            if ($hasil) {
                header("location:guru_nilai.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal Diubah. </div>";
            }
            // END cek hasil eksekusi
            }

            // START get data edit
            if (isset($_GET['nis'])) {
                $nis = $_GET['nis'];

                $sql = "SELECT * FROM siswa where nis = $nis";
                $hasil = mysqli_query($db, $sql);
                $data = mysqli_fetch_assoc($hasil);
            }
            // END get data edit

        ?>



    <h5>Kelola Nilai Siswa</h5>
    <form action="<?php echo($_SERVER['PHP_SELF']) ?>" method="post" id="form">
    <div class="form-group">
                <label for="nis">Nis</label>
                <input type="text" class="form-control" readonly name="nis" value="<?php echo $data['nis'] ?>">
            </div>
        
          <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" placeholder="Masukan Nama" class="form-control" id="" aria-describedby="emailHelp" readonly required value="<?php echo $data['nama'] ?>">
            </div>
            <div class="form-group">
                <label for="warna">Nilai Bahasa Indonesia</label>
                <input type="number" min="0" max="100" name="bindo" placeholder="Masukan Nilai Bahasa Indonesia" class="form-control" id="" required value="<?php echo $data['bindo'] ?>">
            </div>
            <div class="form-group">
                <label for="stok">Nilai Bahasa Inggris</label>
                <input type="number" min="0" max="100" name="bing" placeholder="Masukan Bilai Bahasa Inggris" class="form-control" id="" required value="<?php echo $data['bing'] ?>">
            </div>
            <div class="form-group">
                <label for="satuan">Nilai Matematika</label>
                <input type="number" min="0"  max="100" name="mtk" placeholder="Masukan Nilai Matematika" class="form-control" id="" required value="<?php echo $data['mtk'] ?>">
            </div>
            <div class="form-group">
                <label for="harga">Nilai IPA</label>
                <input type="number" min="0"  max="100" name="ipa" placeholder="Masukan Nilai IPA" class="form-control" id="" required value="<?php echo $data['ipa'] ?>">
            </div>
            <a href="guru_nilai.php" class="btn btn-warning "> Kembali</a>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
      </div>
</body>
</html>