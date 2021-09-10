<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin = "anonymous">
    <title></title>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
    <img src="monyet.jpg" alt="logo" style="width:40px;">
    </a>
  
    <!-- Links -->
    <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tampil_siswa.php">Data Siswa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tampil_kelas.php">Data Kelas</a>
    </li>
    </ul>
    </nav>
        <h3>Tampil Kelas<a href="tambah_kelas.php" type="button" class="btn btn-success">Tambah Kelas</a></h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th><th>NAMA KELAS</th><th>KELOMPOK</th>
                </tr>   
            </thead> 
            <tbody>
                <?php
                include "koneksi.php";
                $qry_siswa=mysqli_query($conn,"select *from kelas");
                $no=0;
                while($data_siswa=mysqli_fetch_array($qry_siswa)){
                    $no++;?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_siswa['nama_kelas']?></td>
                        <td><?=$data_siswa['kelompok']?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>   
            </table>
            <script src="ttps://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"crossorigin="anonymous"></script>
            </body>
            </html>