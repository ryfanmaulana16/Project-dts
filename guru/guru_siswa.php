<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Guru</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.22/r-2.2.6/sl-1.3.1/datatables.min.css"/>
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.22/r-2.2.6/sl-1.3.1/datatables.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>List Siswa</h1>
        <a href="create_siswa.php" class="fa fa-user-circle btn btn-primary mb-2"> Input Siswa</a>
        <table class="table data">
            <thead class="thead-dark">
              <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Aksi</th>
              </tr>
          </thead>
        <?php
            include "../koneksi.php";

            // START Get Data From Table Produk
            $sql = "SELECT * FROM siswa order by nama";
            // END Get Data From Table Produk

            // START mengeksekusi data
            $hasil = mysqli_query($db,$sql);
            foreach ($hasil as $key => $data) {
                // END
        ?>
            <tbody>
                <tr>
                    <td><?php echo $data['nis'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['username'] ?></td>
                    <td><?php echo $data['password'] ?></td>
                    <td><a href="edit_siswa.php?nis=<?php echo $data['nis'] ?>" class="btn btn-warning fa fa-pencil-square-o" >Edit</a>
                        <a href="<?php echo $_SERVER['PHP_SELF']?>?nis=<?php echo $data['nis']?>" class="btn btn-danger fa fa-trash">Hapus</a></td>
                </tr>
          </tbody>
          <?php
            }
              // END Eksekusi Data

              // Cek Apakah Ada Method Get di File Ini
              if (isset($_GET['nis'])) {
                # code...
                $nis = $_GET['nis'];
                $sql = "DELETE FROM siswa WHERE nis=$nis";
                $hasil = mysqli_query($db, $sql);

                // kondisi berhasil atau tidak
                if ($hasil) {
                    header("Location:guru_siswa.php");
                } else {
                    echo "<div class='alert alert-danger'> Data gagal dihapus. </div>";
                }
            }
          ?>
        </table>
    </div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
</html>