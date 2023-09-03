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

        public function proses_tambah_mhs() {
            header("location:http://locahost/jobsheet5/views/mahasiswa/proses_tambah.php");
        }

        public function edit_mhs() {
            header("location:http://locahost/jobsheet5/views/mahasiswa/edit.php");
        }

        public function delete_mhs() {
            header("location:http://locahost/jobsheet5/views/mahasiswa/hapus.php");
        }


        // MATA KULIAH
        public function matkul() {
            header("location:http://localhost/jobsheet5/views/matkul/index.php");
        }
        
        public function tambah_matkul() {
            header("location:http://locahost/jobsheet5/views/matkul/tambah.php");
        }

        public function proses_tambah_matkul() {
            header("location:http://locahost/jobsheet5/views/matkul/tambah_proses.php");
        }

        public function edit_matkul() {
            header("location:http://locahost/jobsheet5/views/matkul/edit.php");
        }

        public function delete_matkul($id) {
            include 'MatkulController.php';
            $db = new database;
            $matkulController = new MatkulController($db->koneksi); 
            $result = $matkulController->deleteMatkul($id);
            if ($result) {    
                header("location:http://locahost/jobsheet5/views/matkul/hapus.php");
            } else {
                return "Gagal menghapus data";
            }
        }
    }
?>