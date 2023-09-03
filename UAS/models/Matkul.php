<?php 
    class Matkul {
        private $koneksi;

        public function __construct($db) {
            $this->koneksi = $db;
        }

        public function getAllMatkul() {
            $query = "SELECT * FROM matkul";
            $result = mysqli_query($this->koneksi,$query);
            return $result;
        }

        public function createMatkul($kode_matkul, $nama_matkul, $semester, $sks) {
            $query = "INSERT INTO matkul (kode_matkul,nama_matkul,semester,sks) VALUES ('$kode_matkul','$nama_matkul','$semester','$sks')";
            $result = mysqli_query($this->koneksi,$query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        public function getMatkulById($id) {
            $query = "SELECT * FROM matkul WHERE id = '$id'";
            $result = mysqli_query($this->koneksi,$query);
            return mysqli_fetch_assoc($result);
        }

        public function updateMatkul($id, $kode_matkul, $nama_matkul, $semester, $sks) {
            $query = "UPDATE matkul SET kode_matkul='$kode_matkul', nama_matkul='$nama_matkul', semester='$semester', sks='$sks' WHERE id='$id'";
            $result = mysqli_query($this->koneksi,$query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        public function deleteMatkul($id) {
            $query = "DELETE FROM matkul WHERE id = '$id'";
            $result = mysqli_query($this->koneksi,$query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
    }
?>