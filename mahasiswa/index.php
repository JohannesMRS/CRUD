<?php
    include 'menu.php';
?>


    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h3>Data Mahasiswa</h3>
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Tambah Data Mahasiswa
  </button>
 <a href="../index.php"> <button type="button" class="btn btn-secondary">
    Kembali
  </button></a>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header mt-3" >
        <h4 class="modal-title">Tambah Mahasiswa</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
    <div class = "container mt-3">
    <form action = "tambah.php" method="post">
    <div class="mb-3">
        <label for="nim" class="form-label">Nim</label>
        <input type="text" class="form-control" id="nim" name = "nim" required placeholder="Masukkan NIM">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name = "nama" required placeholder="Masukkan Nama Anda">
    </div>
    <div class="mb-3">
        <label for="jk" class="form-label">Jenis kelamin</label>
        <select class="form-select" aria-label="Default select example" id="jk" name="jk" >
          <option selected>Pilih Jenis Kelamin</option>
          <option value="L">L</option>
          <option value="P">P</option>
        </select>
    </div>
  
    
  </div>
  <!-- Modal footer -->
  <div class="modal-footer">
    <button type="submit" class="btn btn-success">Tambah</button>
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
  </div>
</form>

    </div>
  </div>
</div>

    <div class="container mt-3">
  <table class="table table-hover">
    <thead>
      <tr>
          <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from datamahasiswa");
		while($row = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nim']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['jk']; ?></td>
				
                <td>
<div class="container mt-3">

<button  type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit<?php echo $no?>">-Edit-</button>
 <a href="hapus.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">-Hapus-</button></a>
</div>
                </td>
			</tr>
<!-- Modal EDit AWal -->
<div class="modal" id="modalEdit<?php echo $no?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header mt-3" >
        <h4 class="modal-title">Edit Data Mahasiswa</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
    <div class = "container mt-3">
    <form action = "editAksi.php" method="post">
    <div class="mb-3">
        <label for="nim" class="form-label">Nim</label>
        <input type="text" class="form-control" id="nim" name = "nim" value="<?php echo $row['nim']?>" placeholder="Masukkan NIM">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name = "nama" value="<?php echo $row['nama']?>" required placeholder="Masukkan Nama Anda">
    </div>
    <input type="hidden"id="nama" name = "id" value="<?php echo $row['id']?>" >
    <div class="mb-3">
      <label for="jk" class="form-label">Jenis kelamin</label>
      <select class="form-select" aria-label="Default select example" id="jk" name="jk" >
        <option value="<?php echo $row['jk']?>" selected>value="<?php echo $row['jk']?>"</option>
        <option value="L">L</option>
        <option value="P">P</option>
      </select>
    </div>
  
    
  </div>
  <!-- Modal footer -->
  <div class="modal-footer">
    <button type="submit" class="btn btn-success" name="edit">Edit Data</button>
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
  </div>
</form>

    </div>
  </div>
</div>
<!-- Modal EDit Akhir -->
			<?php 
		}
		?>
      </tr>
      
      
    </tbody>
  </table>
</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>