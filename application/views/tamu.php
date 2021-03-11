<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Buku Tamu VEDC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url("index.php/main"); ?>">Tamu <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url("index.php/main/kunjungan"); ?>">Kunjungan</a>
            </li>
          </ul>
        </div>
      </nav>

    <div class="container" style="margin-top: 25px;">
      <h3>List Tamu</h3>
      <center><a href="<?php echo base_url("index.php/main/tambah_tamu"); ?>" type="button" class="btn btn-primary">Tambah</a></center>
      <table class="table" style="margin-top: 25px;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Kabupaten</th>
            <th scope="col">Alamat</th>
            <th scope="col">Instansi</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          
            foreach($tamu as $row) {
              ?>
                <tr>
                  <th scope="row"><?php echo $row->id; ?></th>
                  <td><?php echo $row->nama_tamu; ?></td>
                  <td><?php echo $row->prov; ?></td>
                  <td><?php echo $row->kab; ?></td>
                  <td><?php echo $row->alamat_tamu; ?></td>
                  <td><?php echo $row->nama_instansi; ?></td>
                  <td>
                    <button type="button" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-warning">Edit</button>
                  </td>
                </tr>
              <?php
            }

          ?>
        </tbody>
      </table>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>