<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raport Siswa</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.22/r-2.2.6/sl-1.3.1/datatables.min.css"/>
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.22/r-2.2.6/sl-1.3.1/datatables.min.js"></script>

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
              <a class="nav-link" href="indexguru.php">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Raport Siswa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="guru_siswa.php">Managemen Siswa <span class="sr-only"></span></a>
            </li>
        </div>
          <form class="form-inline my-2 my-lg-0">
            <div class="float-right"><a href ="logout.php" class="fa fa-times btn btn-warning" aria-hidden="true"> Log Out</a></div>
          </form>
        </div>
      </nav>
    <p>
    <div class="container">
        <h1>List Nilai Siswa</h1>
        <table class="table data">
            <thead class="thead-dark">
              <tr>
              <th scope="col">NIS</th>
              <th scope="col">Nama</th>
              <th scope="col">Bahasa Indonesia</th>
              <th scope="col">Bahasa Inggris</th>
              <th scope="col">Matematika</th>
              <th scope="col">IPA</th>
              <th scope="col">AKSI</th>
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
                    <td><?php echo $data['bindo'] ?></td>
                    <td><?php echo $data['bing'] ?></td>
                    <td><?php echo $data['mtk'] ?></td>
                    <td><?php echo $data['ipa'] ?></td>
                        
                            </td>
                    <td><a href="edit_nilai.php?nis=<?php echo $data['nis'] ?>" class="btn btn-warning fa fa-pencil-square-o" >Edit</a>

                </tr>
          </tbody>
          <?php
              
            }
          ?>
        </table>
        <hr>
    </div>

    <footer class="container">
      <p>&copy; Muhammad Syahril Syahbani & Ryfan Maulana DTS2020</p>
    </footer>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
</html>