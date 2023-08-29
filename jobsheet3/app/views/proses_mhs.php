<?php 
    include "../classes/database.php";
    $db =  new database();

    // mengambil nilai aksi dari parameter url
    $aksi = $_GET['aksi'];
    if ($aksi=="tambah") {
        $db->tambah_mhs($_POST['nim'],$_POST['nama'],$_POST['alamat']);
        header("location:tampil_mhs.php?status=success");
    } else if ($aksi=="update") {
        $db->update($_POST['id'],$_POST['nim'],$_POST['nama'],$_POST['alamat']);
        header("location:tampil_mhs.php?status_edit=success_edit");
    } else if ($aksi=="hapus") {
        $db->hapus($_GET['id']);
        header("location:tampil_mhs.php");
    }
?>