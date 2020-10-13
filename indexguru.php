<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Guru</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h1>List Nilai</h1>
        <a href="create.php" class="btn btn-primary mb-2">Input Nilai</a>
        <table class="table">
            <thead class="thead-dark">
              <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Bahasa Indonesia</th>
              <th scope="col">Bahasa Inggris</th>
              <th scope="col">Matematika</th>
              <th scope="col">IPA</th>
              <th scope="col">Edit</th>
              </tr>
          </thead>
        <?php
            include "koneksi.php";

            // START Get Data From Table Produk
            $sql = "SELECT * FROM siswa ";
            // END Get Data From Table Produk

            // START mengeksekusi data
            $hasil = mysqli_query($db,$sql);
            foreach ($hasil as $key => $data) {
              // END
        ?>

            <tbody>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['bindo'] ?></td>
                    <td><?php echo $data['bing'] ?></td>
                    <td><?php echo $data['mtk'] ?></td>
                    <td><?php echo $data['ipa'] ?></td>
                </tr>
          </tbody>
          <?php
              }
              // END Eksekusi Data

              // Cek Apakah Ada Method Get di File Ini
              if (isset($_GET['id'])) {
                # code...
                $id = $_GET['id'];
                $sql = "DELETE FROM siswa WHERE id=$id";
                $hasil = mysqli_query($db, $sql);

                // kondisi berhasil atau tidak
                if ($hasil) {
                    header("Location:indexguru.php");
                } else {
                    echo "<div class='alert alert-danger'> Data gagal dihapus. </div>";
                }
            }
          ?>
        </table>
    </div>
</body>
</html>