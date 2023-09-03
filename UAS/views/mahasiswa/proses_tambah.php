<?php 
    include_once '../../config.php';
    include_once '../../controllers/MahasiswaController.php';
    require '../../index.php';

    $database = new database ();
    $db = $database->getKoneksi();

    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];

        $mahasiswaController = new MahasiswaController($db);
        $result = $mahasiswaController->createMahasiswa($nim, $nama, $jk, $alamat);

        if ($result) {
            header("location:mahasiswa");
        } else {
            header("location:tambah_mhs");
        }
    }
?>