<?php 
    class database {
        public $host = "localhost",
               $username = "root",
               $password = "",
               $db =  "akademik";

        function __construct() {
            mysqli_connect($this->host, $this->username, $this->password, $this->db)
        }
    }
?>