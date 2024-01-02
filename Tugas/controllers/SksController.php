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

        public function getSksById($id) {
            return $this->model->getSksById($id);
        }

        public function updateSks($id, $kode_sks, $jumlah_sks) {
            return $this->model->updateSks($id, $kode_sks, $jumlah_sks);
        }

        public function deleteSks($id) {
            return $this->model->deleteSks($id);
        }
    }
?>