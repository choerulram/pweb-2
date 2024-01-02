<?php 
    class Matkul {
        private $koneksi;

        public function __construct($db) {
            $this->koneksi = $db;
        }

        public function getAllMatkul() {
            $query = "SELECT matkul.kode_matkul, matkul.nama_matkul, mhs.nama AS nama_mhs, dosen.nama AS nama_dsn FROM matkul JOIN mhs, dosen WHERE matkul.id_mhs = mhs.id AND matkul.id_dsn = dosen.id";
            $result = mysqli_query($this->koneksi,$query);
            return $result;
        }

        // public function createDosen($kode_matkul, $nama_matkul, $nama_mhs, $nama_dsn) {
        //     $query = "INSERT INTO matkul (kode_matkul,nama_matkul,id_mhs,id_dsn) VALUES ('$kode_matkul','$nama_matkul','$nama_mhs','$nama_dsn')";
        //     $result = mysqli_query($this->koneksi,$query);
        //     if ($result) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }

        // public function getMatkulById($id) {
        //     $query = "SELECT matkul.kode_matkul, matkul.nama_matkul, mhs.nama AS nama_mhs, dosen.nama AS nama_dsn FROM matkul JOIN mhs, dosen WHERE matkul.id_mhs = mhs.id AND matkul.id_dsn = dosen.id WHERE id = $id";
        //     $result = mysqli_query($this->koneksi,$query);
        //     return mysqli_fetch_assoc($result);
        // }

        // public function updateMatkul($id, $nidn, $nama, $alamat) {
        //     $query = "UPDATE matkul SET nidn='$nidn', nama='$nama', alamat='$alamat' WHERE id='$id'";
        //     $result = mysqli_query($this->koneksi,$query);
        //     if ($result) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }

        // public function deleteDosen($id) {
        //     $query = "DELETE FROM dosen WHERE id = '$id'";
        //     $result = mysqli_query($this->koneksi,$query);
        //     if ($result) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }
    }
?>