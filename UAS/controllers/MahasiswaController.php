<?php 
    include_once '../../models/Mahasiswa.php';
    include_once '../../models/Matkul.php';

    class MahasiswaController{
        private $model;

        public function __construct($db) {
            $this->model = new Mahasiswa($db);
        }

        public function getAllMahasiswa() {
            return $this->model->getAllMahasiswa();
        }

        public function createMahasiswa($nim, $nama, $jk, $alamat) {
            return $this->model->createMahasiswa($nim, $nama, $jk, $alamat);
        }

        public function getMahasiswaById($id) {
            return $this->model->getMahasiswaById($id);
        }

        public function updateMahasiswa($id, $nim, $nama, $jk, $alamat) {
            return $this->model->updateMahasiswa($id, $nim, $nama, $jk, $alamat);
        }

        public function deleteMahasiswa($id) {
            return $this->model->deleteMahasiswa($id);
        }
    }
?>