<?php 
    class HomeController {
        public function home() {
            header("location:http://localhost/jobsheet5/index.php");
        }

        // MAHASISWA
        public function mahasiswa() {
            header("location:http://localhost/jobsheet5/views/mahasiswa/index.php");
        }

        public function tambah_mhs() {
            header("location:http://locahost/jobsheet5/views/mahasiswa/tambah.php");
        }

        public function proses_tambah() {
            header("location:http://locahost/jobsheet5/views/mahasiswa/tambah_proses.php");
        }

        public function edit_mhs() {
            header("location:http://locahost/jobsheet5/views/mahasiswa/edit.php");
        }

        public function delete_mhs() {
            header("location:http://locahost/jobsheet5/views/mahasiswa/hapus.php");
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
        
        // DOSEN
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