<?php 
    include_once '../../config.php';
    include_once '../../controllers/MatkulController.php';
    require '../../index.php';

    $database = new database ();
    $db = $database->getKoneksi();

    if (isset($_POST['submit'])) {
        $kode_matkul = $_POST['kode_matkul'];
        $nama_matkul = $_POST['nama_matkul'];
        $semester = $_POST['semester'];
        $sks = $_POST['sks'];

        $matkulController = new MatkulController($db);
        $result = $matkulController->createMatkul($kode_matkul, $nama_matkul, $semester, $sks);

        if ($result) {
            header("location:matkul");
        } else {
            header("location:tambah_matkul");
        }
    }
?>