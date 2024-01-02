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

        // public function createMahasiswa($nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat) {
        //     $query = "INSERT INTO mhs (nim,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat) VALUES ('$nim','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat')";
        //     $result = mysqli_query($this->koneksi,$query);
        //     if ($result) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }

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