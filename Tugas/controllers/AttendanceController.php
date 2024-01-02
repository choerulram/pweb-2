<?php 
    include_once '../../models/Attendance.php';

    class AttendanceController{
        private $model;

        public function __construct($db) {
            $this->model = new Attendance($db);
        }

        public function getAllAttendance() {
            return $this->model->getAllAttendance();
        }

        // public function createAttendace($id_absensi, $tanggal, $waktu, $status_absensi, $catatan, $nim, $nama) {
        //     return $this->model->createAttendace($id_absensi, $tanggal, $waktu, $status_absensi, $catatan, $nim, $nama);
        // }

        // public function getMahasiswaById($id) {
        //     return $this->model->getMahasiswaById($id);
        // }

        // public function updateMahasiswa($id, $nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat) {
        //     return $this->model->updateMahasiswa($id, $nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
        // }

        // public function deleteMahasiswa($id) {
        //     return $this->model->deleteMahasiswa($id);
        // }
    }
?>