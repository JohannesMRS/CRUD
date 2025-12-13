<?php 
  include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php  
  include 'koneksi.php';
  $id = $_GET['id'];
  $data = mysqli_query($conn, "select * from datamahasiswa where id = '$id'");
  while($row=mysqli_fetch_array($data)){
?>
<form action="editAksi.php" method = "post" >
  <div class="mb-3 mt-3">
    <label for="nim" class="form-label">Nim</label>
    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" value = "<?php echo $row['nim']; ?>">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" value = "<?php echo $row['nama']; ?>">
  </div>
  <div class="mb-3">
    <label for="jk" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control" id="jk" placeholder="Masukkan nama" name="jk" value = "<?php echo $row['jk']; ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="index.php"><button type="submit" class="btn btn-primary">Kembali</button></a>
  <input type="hidden" name = 'id' value = "<?php echo$row['id']; ?>" >
</form>

<?php 
  }
?>
</body>
</html>
