<?php 
// koneksi database
include '../mahasiswa/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from datadosen where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:indexDosen.php");
 
?>