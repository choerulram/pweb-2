<?php 
    include_once '../../config.php';
    include_once '../../controllers/DosenController.php';
    require '../../index.php';

    $database = new database ();
    $db = $database->getKoneksi();

    if (isset($_POST['submit'])) {
        $nidn = $_POST['nidn'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        $dosenController = new DosenController($db);
        $result = $dosenController->createDosen($nidn, $nama, $alamat);

        if ($result) {
            header("location:dosen");
        } else {
            header("location:tambah_dsn");
        }
    }
?>