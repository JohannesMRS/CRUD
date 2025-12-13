<?php 
include '../mahasiswa/koneksi.php';


$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$id = $_POST['id'];

mysqli_query($conn, "update datadosen set nip = '$nip', nama = '$nama', jk = '$jk' where id = '$id'");

header("location: indexDosen.php");
?>