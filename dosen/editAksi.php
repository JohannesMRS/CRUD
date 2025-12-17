<?php 
include '../mahasiswa/koneksi.php';


$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$id = $_POST['id'];
$Alamat = $_POST['Alamat'];
$email = $_POST['email'];

mysqli_query($conn, "update datadosen set nip = '$nip', nama = '$nama', jk = '$jk', Alamat = '$Alamat', email = '$email' where id = '$id'");

header("location: indexDosen.php");
?>