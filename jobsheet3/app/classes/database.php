<?php 
    class database {
        public $host = "localhost",
               $username = "root",
               $password = "",
               $db =  "akademik";

        function __construct() {
            $koneksi=mysqli_connect($this->host, $this->username, $this->password, $this->db);
        }

        function tampil_mahasiswa() {
            $data = mysqli_query($this->koneksi, "select * from mahasiswa");
            while ($d = mysqli_fetch_array($data)) {
                $hasil[] = $d;
            }
            return $hasil;
        }
    }
?>