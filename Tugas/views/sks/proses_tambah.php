<?php 
    include_once '../../config.php';
    include_once '../../controllers/SksController.php';
    require '../../index.php';

    $database = new database ();
    $db = $database->getKoneksi();

    if (isset($_POST['submit'])) {
        $kode_sks = $_POST['kode_sks'];
        $jumlah_sks = $_POST['jumlah_sks'];

        $sksController = new SksController($db);
        $result = $sksController->createSks($kode_sks, $jumlah_sks);

        if ($result) {
            header("location:sks");
        } else {
            header("location:tambah");
        }
    }
?>