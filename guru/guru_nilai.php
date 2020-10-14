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
              <th scope="col">Rata-Rata</th>
              <th scope="col">GRADE</th>
              <th scope="col">AKSI</th>
              </tr>
          </thead>
        <?php
            include "../koneksi.php";

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
                    <td><?php echo $data['nis'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['bindo'] ?></td>
                    <td><?php echo $data['bing'] ?></td>
                    <td><?php echo $data['mtk'] ?></td>
                    <td><?php echo $data['ipa'] ?></td>
                        <?php 
                            $sqlgrade = "SELECT avg( bindo + bing + mtk + ipa)/4.0 as gra FROM siswa";
                            $hasil = mysqli_query($db,$sqlgrade);
                            foreach ($hasil as $key => $mata) {
                            ?><td><?php echo round($mata['gra']) ?></td>
                            <?php
                            if($mata['gra'] >85){
                                echo "<td>A</td>";
                            }
                            else if($mata['gra'] >=75  && $mata['gra']<85){
                                echo "<td>B</td>";
                            }
                            else if($mata['gra'] >=65  && $mata['gra']<75){
                                echo "<td>C</td>";
                            }
                            else if($mata['gra'] >=55  && $mata['gra']<65){
                                echo "<td>D</td>";
                            }
                            else if($mata['gra'] >=0  && $mata['gra']<55){
                                echo "<td>E</td>";
                            }
                            }
                            ?>
                            </td>
                    <td><a href="edit_nilai.php?nis=<?php echo $data['nis'] ?>" class="btn btn-warning fa fa-pencil-square-o" >Edit</a>

                </tr>
          </tbody>
          <?php
              
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