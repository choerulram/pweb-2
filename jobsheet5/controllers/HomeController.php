<?php 
    class HomeController {
        public function home() {
            header("location:http://localhost/jobsheet5/index.php");
        }

        public function mahasiswa() {
            header("location:http://localhost/jobsheet5/views/mahasiswa/index.php");
        }

        public function tambah() {
            header("location:http://locahost/jobsheet5/views/mahasiswa/tambah.php");
        }

        public function proses_tambah() {
            header("location:http://locahost/jobsheet5/views/mahasiswa/tambah_proses.php");
        }
    }
?>