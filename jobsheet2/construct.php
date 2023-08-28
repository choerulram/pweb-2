<?php 
    // class
    class mahasiswa {
        // property
        var $nim, 
            $nama, 
            $alamat;

        // method
        function __construct() {
            echo "Saya Mahasiswa Teknik Informatika ";
        } // constuct

        // method
        function __destruct() {
            echo "Politeknik Negeri Cilacap";
        } // destruct

        // method
        function tampil_mahasiswa() {
            return "tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah ";
        } // funtion tampil_mahasiswa
    } // class mahasiswa

    // object
    $nama_mahasiswa = new mahasiswa();

    // tampil object
    echo $nama_mahasiswa->tampil_mahasiswa();
?>