<?php 
include 'koneksi.php';


$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$id = $_POST['id'];

mysqli_query($conn, "update datamahasiswa set nim = '$nim', nama = '$nama', jk = '$jk' where id = '$id'");

header("location: index.php");
?>