<?php

use Dom\Mysql;

    include '../mahasiswa/koneksi.php';
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $Alamat = $_POST['Alamat'];

    mysqli_query($conn, "insert into datadosen values('$nip', '$nama', '$jk','','$Alamat')");

    header("location: indexDosen.php");

?>