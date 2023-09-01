<?php 
    // memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/MahasiswaController.php';

    // instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $mahasiswaController = new MahasiswaController($db);
        $result =  $mahasiswaController->deleteMahasiswa($id);

        if ($result) {
            header("location:mahasiswa");
        } else {
            echo "Gagal menghapus data";
        }
    }
?>