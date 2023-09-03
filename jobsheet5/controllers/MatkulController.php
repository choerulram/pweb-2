<?php 
    include_once '../../models/Matkul.php';

    class MatkulController{
        private $model;

        public function __construct($db) {
            $this->model = new Matkul($db);
        }

        public function getAllMatkul() {
            return $this->model->getAllMatkul();
        }

        // public function createMatkul($kode_matkul, $nama_matkul, $nama_mhs, $nama_dsn) {
        //     return $this->model->createMatkul($kode_matkul, $nama_matkul, $nama_mhs, $nama_dsn);
        // }

        // public function getMahasiswaById($id) {
        //     return $this->model->getMahasiswaById($id);
        // }

        // public function updateMahasiswa($id, $nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat) {
        //     return $this->model->updateMahasiswa($id, $nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
        // }

        // public function deleteMahasiswa($id) {
        //     return $this->model->deleteMahasiswa($id);
        // }
    }
?>