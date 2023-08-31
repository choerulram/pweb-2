<?php 
    class HomeController {
        public function home() {
            header("location:http://localhost/jobsheet5/index.php");
        }

        // MAHASISWA
        public function mahasiswa() {
            header("location:http://localhost/jobsheet5/views/mahasiswa/index.php");
        }

        public function tambah() {
            header("location:http://locahost/jobsheet5/views/mahasiswa/tambah.php");
        }

        public function proses_tambah() {
            header("location:http://locahost/jobsheet5/views/mahasiswa/tambah_proses.php");
        }

        public function edit() {
            header("location:http://locahost/jobsheet5/views/mahasiswa/edit.php");
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

        public function delete_dsn() {
            header("location:http://locahost/jobsheet5/views/dosen/hapus.php");
        }
    }
?>