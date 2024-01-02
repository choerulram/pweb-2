<?php 
    include_once '../../models/Sks.php';

    class SksController{
        private $model;

        public function __construct($db) {
            $this->model = new Sks($db);
        }

        public function getAllSks() {
            return $this->model->getAllSks();
        }

        public function createSks($kode_sks, $jumlah_sks) {
            return $this->model->createSks($kode_sks, $jumlah_sks);
        }

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