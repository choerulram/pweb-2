<?php 
    class Mahasiswa {
        private $koneksi;

        public function __construct($db) {
            $this->koneksi = $db;
        }

        public function getAllMahasiswa() {
            $query = "SELECT * FROM mhs";
            $result = mysqli_query($this->koneksi,$query);
            return $result;
        }
    }
?>