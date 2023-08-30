<?php 
    class database {
        public $host = "localhost",
               $username = "root",
               $password = "",
               $db = "akademik",
               $koneksi;
               
        function getKoneksi() {
            $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
            if (!$this->koneksi) {
                die("Koneksi database gagal: " . mysqli_connect_errno());
            }
            return $this->koneksi;
        }
    }
?>