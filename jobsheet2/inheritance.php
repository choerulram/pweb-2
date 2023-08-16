<?php 
    class manusia {
        public $nama_saya;
        protected $nama_dosen;
    
        public function panggil_nama($saya) {
            $this->nama_saya = $saya;
        } // function panggil_nama

        protected function panggil_nama_dosen($dosen) {
            $this->nama_dosen = $dosen;
        } // function panggil_nama_dosen
    } // class manusia

    // last turunan / sub last dari manusia
    class mahasiswa extends manusia {
        public $nama_mahasiswa;

        public function panggil_mahasiswa($mahasiswa) {
            $this->nama_mahasiswa = $mahasiswa;
        }
    }

    // last turunan / sub last dari manusia
    class Dosen extends manusia {
        protected $gelar;

        protected function panggil_dosen($dsn) {
            $this->gelar = $dsn;
        }

        protected function tampilkan_info_dosen() {
            echo "Nama dosen: " . $this->nama_dosen . "<br>";
            echo "Gelar: " . $this->gelar;
        }
    } 

    // instansiasi class mahasiswa
    $mhs = new mahasiswa;
    $Dsn = new Dosen;

    $mhs->panggil_nama("Achmad");
    $mhs->panggil_mahasiswa("Choerul");

    $Dsn->panggil_nama_dosen("Kevin Ji", "S.Kom");

    // tampilkan sis property
    echo "Nama depan : " . $mhs->nama_saya . "<br>";
    echo "Nama belakang : " . $mhs->nama_mahasiswa;
    
    $Dsn->tampilkan_info_dosen();
?>