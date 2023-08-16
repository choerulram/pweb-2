<?php 
    // class
    class mahasiswa {
        // property
        public $nim = "220302049";
        public $nama = "Irul";
        public $alamat = "Jl.Tongkol";

        // method
        public function tampil_nama() {
            return "Nama saya $this->nama";
        } // funtion tampil_nama

        // method
        public function tampil_alamat() {
            return "Alamat saya di $this->alamat";
        } // funtion tampil_alamat
    } // class mahasiswa

    // object
    $nama_mahasiswa = new mahasiswa();
    $alamat_mahasiswa = new mahasiswa();

    // tampil object
    echo $nama_mahasiswa->tampil_nama();
    echo "<br><br>";
    echo $alamat_mahasiswa->tampil_alamat();
?>