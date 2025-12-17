<?php 
  include '../mahasiswa/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

  </style>
</head>
<body>

  <?php  
  include '../mahasiswa/koneksi.php';
  $id = $_GET['id'];
  $data = mysqli_query($conn, "select * from datadosen where id = '$id'");
  while($row=mysqli_fetch_array($data)){
?>
<div class="container">
  <div class="row">
    <div class="col col-md-5 mt-5 mx-auto">
<form action="editAksi.php" method = "post" >
  <div class="mb-3 mt-3">
    <label for="nip" class="form-label">Nip</label>
    <input type="text" class="form-control" id="nip" placeholder="Masukkan NIP" name="nip" value = "<?php echo $row['nip']; ?>">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" value = "<?php echo $row['nama']; ?>">
  </div>
  <div class="mb-3">
      <label for="jk" class="form-label">Jenis kelamin</label>
      <select class="form-select" aria-label="Default select example" id="jk" name="jk" >
        <option selected>Pilih Jenis Kelamin</option>
        <option value="L">L</option>
        <option value="P">P</option>
      </select>
    </div>
  <div class="mb-3">
    <label for="Alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="Alamat" placeholder="Masukkan Alamat" name="Alamat" value = "<?php echo $row['Alamat']; ?>">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control" id="email" placeholder="example@gmail.com" name="email" value = "<?php echo $row['email']; ?>">
  </div>
  <button type="submit" class="btn btn-success">Simpan Perubahan</button>
  <a href="index.php"><button type="submit" class="btn btn-danger">Kembali</button></a>
  <input type="hidden" name = 'id' value = "<?php echo$row['id']; ?>" >
</form>
        </div>
    </div>
</div>
<?php 
  }
?>
</body>
</html>