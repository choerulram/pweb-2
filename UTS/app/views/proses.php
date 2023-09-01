<?php 
    include "../classes/database.php";
    $db =  new database();

    // mengambil nilai aksi dari parameter url
    $aksi = $_GET['aksi'];
    if ($aksi=="tambah") {
        $db->tambah($_POST['no_rm'],$_POST['nama_pasien'],$_POST['alamat'],$_POST['usia']);
        header("location:tampil.php?status=success");
    } else if ($aksi=="update") {
        $db->update($_POST['id'],$_POST['no_rm'],$_POST['nama_pasien'],$_POST['alamat'],$_POST['usia']);
        header("location:tampil.php?status_edit=success_edit");
    } else if ($aksi=="hapus") {
        $db->hapus($_GET['id']);
        header("location:tampil.php");
    }
?>