<?php 
    include 'mahasiswa/header.php';
    include 'menuUtama.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        h1{
            margin-top: 200px;
        }
        body{
            height: 775px;
            background-image: radial-gradient(circle at top left, #fafafaff, #00a2ffff);
        }
    </style>
<body>
    <div class="container text-center">
  <div class="row mt-10">
    <div class="col">
        <h1>Selamat Datang</h1>
        <h5>Silahkan klik menu di bawah ini atau klik di bagian navbar</h5>

        <div class="container text-center">
  <div class="row">
    <div class="col">
      <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Mahasiswa</h5>
        <p class="card-text">Halaman ini berisi seputaran mengenai data pribadi mahasiswa</p>
        <a href="mahasiswa/index.php" class="btn btn-primary">Klik Disini</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Dosen</h5>
        <p class="card-text">Halaman ini berisi seputaran mengenai ata pribadi dosen</p>
        <a href="dosen/indexDosen.php" class="btn btn-primary">Klik Disini</a>
      </div>
    </div>
  </div>
</div>
    </div>

  </div>
</div>
    </div>
  </div>
</div>
</body>
</html>
