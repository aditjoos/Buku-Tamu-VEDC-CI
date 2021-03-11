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
        <h3>Tambah Tamu Baru</h3>
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Provinsi</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="1">Jawa Timur</option>
                  <option value="2">Jawa Tengah</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Kabupaten</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="1">Malang</option>
                  <option value="2">Pasuruan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Instansi</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="SK001">SMKN 1 Purwosari</option>
                  <option value="SK002">SMKN 8 Malang</option>
                </select>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>