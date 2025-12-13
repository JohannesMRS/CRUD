<?php

use Dom\Mysql;

    include 'koneksi.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $id = $_POST['id'];

    mysqli_query($conn, "insert into datamahasiswa values('$nim', '$nama', '$jk', '')");

    header("location: index.php");

?>