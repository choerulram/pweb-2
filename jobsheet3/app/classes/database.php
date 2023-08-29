<?php 
    class database {
        public $host = "localhost",
               $username = "root",
               $password = "",
               $db =  "akademik",
               $koneksi;

        public function __construct() {
            // membuat koneksi ke database MySQL dan menyimpannya
            $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        }

        function tampil_mahasiswa() {
            // menjalankan query untuk mengambil data mahasiswa dari tabel "mahasiswa"
            $data = mysqli_query($this->koneksi, "select * from mhs");
            while ($d = mysqli_fetch_array($data)) { // mengambil setiap baris query dan menyimpannya dalam array $hasil
                $hasil[] = $d;
            }
            return $hasil;
        }

        function tampil_dosen() {
            $data = mysqli_query($this->koneksi, "select * from dosen");
            while ($d = mysqli_fetch_array($data)) {
                $hasil[] = $d;
            }
            return $hasil;
        }
        
        function tambah_mhs($nim,$nama,$alamat) {
            mysqli_query($this->koneksi, "insert into mhs (nim,nama,alamat) values ('$nim','$nama','$alamat')");
        }

        function tambah_dsn($nidn,$nama,$alamat) {
            mysqli_query($this->koneksi, "insert into dosen (nidn,nama,alamat) values ('$nidn','$nama','$alamat')");
        }

        function edit($id) {
            $data = mysqli_query($this->koneksi, "select * from mhs where id = '$id'");
            while ($d=mysqli_fetch_array($data)) {
                $hasil[] = $d;
            }
            return $hasil;
        }

        function edit_dsn($id) {
            $data = mysqli_query($this->koneksi, "select * from dosen where id = '$id'");
            while ($d=mysqli_fetch_array($data)) {
                $hasil[] = $d;
            }
            return $hasil;
        }

        function update($id, $nim, $nama, $alamat) {
            mysqli_query($this->koneksi, "update mhs set nim='$nim', nama='$nama', alamat='$alamat' where id='$id'");
        }

        function update_dsn($id, $nidn, $nama, $alamat) {
            mysqli_query($this->koneksi, "update dosen set nidn='$nidn', nama='$nama', alamat='$alamat' where id='$id'");
        }

        function hapus($id) {
            mysqli_query($this->koneksi, "delete from mhs where id='$id'");
        }
    }
?>