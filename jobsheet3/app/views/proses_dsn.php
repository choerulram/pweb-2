<?php 
    include "../classes/database.php";
    $db =  new database();

    $aksi = $_GET['aksi'];
    if ($aksi=="tambah") {
        $db->tambah_dsn($_POST['nidn'],$_POST['nama'],$_POST['alamat']);
        header("location:tampil_dsn.php");
    } 
?>