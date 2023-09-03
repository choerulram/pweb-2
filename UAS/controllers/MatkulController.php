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

        public function createMatkul($kode_matkul, $nama_matkul, $semester, $sks) {
            return $this->model->createMatkul($kode_matkul, $nama_matkul, $semester, $sks);
        }

        public function getMatkulById($id) {
            return $this->model->getMatkulById($id);
        }

        public function updateMatkul($id, $kode_matkul, $nama_matkul, $semester, $sks) {
            return $this->model->updateMatkul($id, $kode_matkul, $nama_matkul, $semester, $sks);
        }

        public function deleteMatkul($id) {
            return $this->model->deleteMatkul($id);
        }
    }
?>