<?php 
    // memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/SksController.php';

    // instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sksController = new SksController($db);
        $result =  $sksController->deleteSks($id);

        if ($result) {
            header("location:sks");
        } else {
            echo "Gagal menghapus data";
        }
    }
?>