<?php 
    class Mahasiswa {
        private $koneksi;

        public function __construct($db) {
            $this->koneksi = $db;
        }

        public function getAllMahasiswa() {
            $query = "SELECT * FROM mahasiswa";
            $result = mysqli_query($this->koneksi,$query);
            return $result;
        }

        public function createMahasiswa($nim, $nama, $jk, $alamat) {
            $query = "INSERT INTO mahasiswa (nim,nama,jk,alamat) VALUES ('$nim','$nama','$jk','$alamat')";
            $result = mysqli_query($this->koneksi,$query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        public function getMahasiswaById($id) {
            $query = "SELECT * FROM mahasiswa WHERE id = '$id'";
            $result = mysqli_query($this->koneksi,$query);
            return mysqli_fetch_assoc($result);
        }

        public function updateMahasiswa($id, $nim, $nama, $jk, $alamat) {
            $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jk='$jk', alamat='$alamat' WHERE id='$id'";
            $result = mysqli_query($this->koneksi,$query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        public function deleteMahasiswa($id) {
            $query = "DELETE FROM mahasiswa WHERE id = '$id'";
            $result = mysqli_query($this->koneksi,$query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
    }
?>