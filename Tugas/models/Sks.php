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

        // public function getMahasiswaById($id) {
        //     $query = "SELECT * FROM mhs WHERE id = $id";
        //     $result = mysqli_query($this->koneksi,$query);
        //     return mysqli_fetch_assoc($result);
        // }

        // public function updateMahasiswa($id, $nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat) {
        //     $query = "UPDATE mhs SET nim='$nim', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', 
        //     jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat' WHERE id='$id'";
        //     $result = mysqli_query($this->koneksi,$query);
        //     if ($result) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }

        // public function deleteMahasiswa($id) {
        //     $query = "DELETE FROM mhs WHERE id = $id";
        //     $result = mysqli_query($this->koneksi,$query);
        //     if ($result) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }
    }
?>