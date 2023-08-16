<?php 
    // class
    class dosen {
        // property
        public $nidn = "2202020",
               $nama = "Kevin",
               $prodi = "D3 Teknik Informatika";

        // method
        public function tampil() {
            return "Perkenalkan nama saya $this->nama, nidn saya $this->nidn. 
            Saya mengajar di prodi $this->prodi";
        } // function tampil
    } // class dosen

    // object
    $profile = new dosen();

    // tampil
    echo $profile->tampil();
?>