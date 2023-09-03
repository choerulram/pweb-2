<?php 
    // memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/MatkulController.php';

    // instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $matkulController = new MatkulController($db);
        $result =  $matkulController->deleteMatkul($id);

        if ($result) {
            header("location:matkul");
        } else {
            echo "Gagal menghapus data";
        }
    }
?>