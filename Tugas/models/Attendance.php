<?php 
    class Attendance {
        private $koneksi;

        public function __construct($db) {
            $this->koneksi = $db;
        }

        public function getAllAttendance() {
            $query = "SELECT * FROM attendances";
            $result = mysqli_query($this->koneksi,$query);
            return $result;
        }

        public function createAttendance($id_absensi, $tanggal, $waktu, $status_absensi, $catatan, $nim, $nama) {
            $query = "INSERT INTO attendances (id_absensi, tanggal, waktu, status_absensi, catatan, nim, nama) VALUES ('$id_absensi', '$tanggal', '$waktu', '$status_absensi', '$catatan','$nim','$nama')";
            $result = mysqli_query($this->koneksi,$query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        // public function getAttendanceById($id) {
        //     $query = "SELECT * FROM attendances WHERE id = $id";
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