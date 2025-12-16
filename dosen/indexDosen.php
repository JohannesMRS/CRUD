<?php
    include '../mahasiswa/koneksi.php';
    include 'menuDosen.php';
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
  <h3>Data Dosen</h3>
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Tambah
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
        <h4 class="modal-title">Tambah Dosen</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
    <div class = "container mt-3">
    <form action = "tambah.php" method="post">
    <div class="mb-3">
        <label for="nip" class="form-label">Nip</label>
        <input type="text" class="form-control" id="nip" name = "nip" required placeholder="Masukkan NIP">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name = "nama" required placeholder="Masukkan Nama">
    </div>
    <div class="mb-3">
        <label for="jk" class="form-label">Jenis kelamin</label>
        <input type="text" class="form-control" id="jk" name = "jk" required placeholder="Pilih antara L/P">
    </div>
  
    
  </div>
  <!-- Modal footer -->
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
        <th>Nip</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php 
		include '../mahasiswa/koneksi.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from datadosen");
		while($row = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nip']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['jk']; ?></td>
				
                <td>
                  <a href="edit.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-warning" onclick="return confirm('Apakah anda yakin ingin mengedit data ini?')">-Edit-</button></a>
                  <a href="hapus.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger">-Hapus-</button></a>
                </td>
			</tr>
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