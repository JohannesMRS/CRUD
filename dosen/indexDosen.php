<?php
    include '../mahasiswa/koneksi.php';
    include 'menuDosen.php';
?>


    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Dosen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h3>Data Dosen</h3>
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Tambah Data Dosen
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
      <select class="form-select" aria-label="Default select example" id="jk" name="jk" >
        <option selected>Pilih Jenis Kelamin</option>
        <option value="L">L</option>
        <option value="P">P</option>
      </select>
    </div>
    <div class="mb-3">
        <label for="Alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="Alamat" name = "Alamat" required placeholder="Masukkan Nama">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="text" class="form-control" id="email" name = "email" required placeholder="example@gmail.com">
    </div>
  </div>
  <!-- Modal footer -->
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Simpan</button>
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
        <th>Nip</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>E-mail</th>
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
				<td><?php echo $row['Alamat']; ?></td>
				<td><?php echo $row['email']; ?></td>
				
                <td>
                  <button type="button" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#modalEdit<?php echo $no?>">-Edit-</button>
                  <a href="hapus.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">-Hapus-</button></a>
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
        <label for="nip" class="form-label">NIP</label>
        <input type="text" class="form-control" id="nip" name = "nip" value="<?php echo $row['nip']?>" placeholder="Masukkan NIP">
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
    <div class="mb-3">
        <label for="Alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="Alamat" name = "Alamat" value="<?php echo $row['Alamat']?>" required placeholder="Masukkan Alamat Anda">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Nama</label>
        <input type="text" class="form-control" id="email" name = "email" value="<?php echo $row['email']?>" required placeholder="example@gmail.com">
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