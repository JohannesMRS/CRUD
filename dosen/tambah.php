<?php

use Dom\Mysql;

    include '../mahasiswa/koneksi.php';
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $Alamat = $_POST['Alamat'];
    $email = $_POST['email'];

    mysqli_query($conn, "insert into datadosen values('$nip', '$nama', '$jk','','$Alamat', '$email')");

    header("location: indexDosen.php");

?>