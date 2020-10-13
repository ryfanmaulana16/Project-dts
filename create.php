<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Input Nilai</title>
</head>
<body>
    <?php
    include "koneksi.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama       = $_POST["nama"];
        $bindo      = $_POST["bindo"];
        $bing       = $_POST["bing"];
        $mtk        = $_POST["mtk"];
        $ipa        = $_POST["ipa"];
        $sql        = "INSERT into siswa (nama, bindo, bing, mtk, ipa) 
            VALUES  ('$nama', '$bindo', '$bing', '$mtk', $ipa)";
        
    // START Eksekusi Data
    $hasil = mysqli_query($db,$sql);
    // END Eksekusi Data

    if ($hasil) {
        header("location:indexguru.php");
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
        <h1>Input Nilai</h1>
        <form action="indexguru.php" method="post" id="form">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="bindo">Bahasa Indonesia</label>
                <input type="number" name="bindo" class="form-control" id="" required>
            </div>
            <div class="form-group">
                <label for="bing">Bahasa Inggris</label>
                <input type="number" name="bing" class="form-control" id="" required>
            </div>
            <div class="form-group">
                <label for="mtk">Matematika</label>
                <input type="number" name="mtk" class="form-control" id="" required>
            </div>
            <div class="form-group">
                <label for="ipa">IPA</label>
                <input type="number" name="ipa" class="form-control" id="" required>
            </div>
            <a href="indexguru.php" class="btn btn-warning"> Kembali</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>

</body>
</html>