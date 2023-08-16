<?php 
    // class
    class mahasiswa {
        // property
        public $nama; // public = bisa dipanggil dimana saja
        protected $nim; // protected = bisa dipanggil di luar class tetapi di dalam inheritance
        private $jurusan = "Teknik Informatika"; // private = hanya bisa dipanggil di dlm class

        // method public
        public function tampilkan_nama() {
            return "Nama saya Choerul";
        } // function tampilkan_nama

        // method protected
        protected function tampilkan_nim() {
            return "NIM saya 220302049";
        } // function tampilkan_nim

        // method private
        function tampilkan_jurusan() {
            return "Jurusan saya $this->jurusan";
        } // function tampilkan_jurusan
    } // class mahasiswa

    // instansiasi object tampil_nama kedalam variabel mahasiswa
    $tampil_nama = new mahasiswa;
    $tampil_nim = new mahasiswa;
    $tampil_jurusan = new mahasiswa;

    // tampil 
    echo $tampil_nama->tampilkan_nama();
    echo "<br>";
    // echo $tampil_nim->tampilkan_nim();
    echo $tampil_jurusan->tampilkan_jurusan();
?>