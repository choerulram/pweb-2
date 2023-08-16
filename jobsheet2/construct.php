<?php 
    // class
    class mahasiswa {
        // property
        public $nim, 
               $nama, 
               $alamat;

        // method
        public function __construct() {
            echo "Saya Mahasiswa Teknik Informatika ";
        } // constuct

        // method
        public function __destruct() {
            echo "Politeknik Negeri Cilacap";
        } // destruct

        // method
        public function tampil_mahasiswa() {
            return "tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah ";
        } // funtion tampil_nama
    } // class mahasiswa

    // object
    $nama_mahasiswa = new mahasiswa();

    // tampil object
    echo $nama_mahasiswa->tampil_mahasiswa();
?>