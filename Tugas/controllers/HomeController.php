<?php 
    class HomeController {
        public function home() {
            header("location:http://localhost/tugas/index.php");
        }

        // ABSENSI
        public function sks() {
            header("location:http://localhost/tugas/views/sks/index.php");
        }

        // public function add_sks() {
        //     header("location:http://locahost/tugas/views/sks/tambah.php");
        // }

        // public function proses_tambah() {
        //     header("location:http://locahost/tugas/views/sks/tambah_proses.php");
        // }

        // public function edit_mhs() {
        //     header("location:http://locahost/tugas/views/sks/edit.php");
        // }

        // public function delete_mhs() {
        //     header("location:http://locahost/tugas/views/sks/hapus.php");
        // }

        // ABSENSI
        public function attendance() {
            header("location:http://localhost/tugas/views/attendance/index.php");
        }

        public function add_attendance() {
            header("location:http://locahost/tugas/views/attendance/tambah.php");
        }

        public function proses_tambah() {
            header("location:http://locahost/tugas/views/attendance/tambah_proses.php");
        }

        public function edit_mhs() {
            header("location:http://locahost/tugas/views/attendance/edit.php");
        }

        public function delete_mhs() {
            header("location:http://locahost/tugas/views/attendance/hapus.php");
        }


        // DOSEN
        public function dosen() {
            header("location:http://localhost/jobsheet5/views/dosen/index.php");
        }
        
        public function tambah_dsn() {
            header("location:http://locahost/jobsheet5/views/dosen/tambah.php");
        }

        public function proses_tambah_dsn() {
            header("location:http://locahost/jobsheet5/views/dosen/tambah_proses.php");
        }

        public function edit_dsn() {
            header("location:http://locahost/jobsheet5/views/dosen/edit.php");
        }

        public function delete_dsn() {
            header("location:http://locahost/jobsheet5/views/dosen/hapus.php");
        }
        
        // MATKUL
        public function matkul() {
            header("location:http://localhost/jobsheet5/views/matkul/index.php");
        }
        
        // public function tambah_matkul() {
        //     header("location:http://locahost/jobsheet5/views/matkul/tambah.php");
        // }

        // public function proses_tambah_matkul() {
        //     header("location:http://locahost/jobsheet5/views/matkul/tambah_proses.php");
        // }

        // public function edit_matkul() {
        //     header("location:http://locahost/jobsheet5/views/matkul/edit.php");
        // }

        // public function delete_matkul() {
        //     header("location:http://locahost/jobsheet5/views/matkul/hapus.php");
        // }
    }
?>