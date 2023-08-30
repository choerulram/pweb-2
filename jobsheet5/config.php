<?php 
    class database {
        public $host = "location",
               $username = "root",
               $password = "",
               $db = "akademik",
               $koneksi;
               
        function grtKoneksi() {
            $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
            if (!$this->koneksi) {
                die("Koneksi database gagal: " . mysqli_connect_errno());
            }
            return $this->koneksi;
        }
    }
?>