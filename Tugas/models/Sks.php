<?php 
    class Sks {
        private $koneksi;

        public function __construct($db) {
            $this->koneksi = $db;
        }

        public function getAllSks() {
            $query = "SELECT * FROM sks";
            $result = mysqli_query($this->koneksi,$query);
            return $result;
        }

        public function createSks($kode_sks, $jumlah_sks) {
            $query = "INSERT INTO sks (kode_sks, jumlah_sks) VALUES ('$kode_sks','$jumlah_sks')";
            $result = mysqli_query($this->koneksi,$query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        public function getSksById($id) {
            $query = "SELECT * FROM sks WHERE id = $id";
            $result = mysqli_query($this->koneksi,$query);
            return mysqli_fetch_assoc($result);
        }

        public function updateSks($id, $kode_sks, $jumlah_sks) {
            $query = "UPDATE sks SET kode_sks='$kode_sks', jumlah_sks='$jumlah_sks' WHERE id='$id'";
            $result = mysqli_query($this->koneksi,$query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        public function deleteSks($id) {
            $query = "DELETE FROM sks WHERE id = $id";
            $result = mysqli_query($this->koneksi,$query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }                                                                                                                                                                                        
    }
?>