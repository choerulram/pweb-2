<?php 
    class database {
        // property
        public $host = "localhost",
               $username = "root",
               $password = "",
               $db =  "akademik",
               $koneksi;

        public function __construct() {
            // membuat koneksi ke database MySQL dan menyimpannya
            $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        }

        // mengambil dan mengembalikan data mahasiswa dari tabel "mhs"
        function tampil_mahasiswa() {
            $data = mysqli_query($this->koneksi, "SELECT * FROM mhs");
            while ($d = mysqli_fetch_array($data)) { // mengambil setiap baris query dan menyimpannya dalam array asosoatif
                $hasil[] = $d;
            }
            return $hasil;
        }

        // mengambil dan mengembalikan data dosen dari tabel "dosen"
        function tampil_dosen() {
            $data = mysqli_query($this->koneksi, "SELECT * FROM dosen");
            while ($d = mysqli_fetch_array($data)) {
                $hasil[] = $d;
            }
            return $hasil;
        }
        
        // menambahkan data mahasiswa ke tabel "mhs"
        function tambah_mhs($nim,$nama,$alamat) {
            mysqli_query($this->koneksi, "INSERT INTO mhs (nim,nama,alamat) VALUES ('$nim','$nama','$alamat')");
        }

        // menambahkan data mahasiswa ke tabel "dosen"
        function tambah_dsn($nidn,$nama,$alamat) {
            mysqli_query($this->koneksi, "INSERT INTO dosen (nidn,nama,alamat) VALUES ('$nidn','$nama','$alamat')");
        }

        // mengambil data mahasiswa berdasarkan id dan mengeditnya
        function edit($id) {
            $data = mysqli_query($this->koneksi, "SELECT * FROM mhs WHERE id = '$id'");
            while ($d=mysqli_fetch_array($data)) {
                $hasil[] = $d;
            }
            return $hasil;
        }

        // megambil data dosen berdasarkan id dan mengambilnya
        function edit_dsn($id) {
            $data = mysqli_query($this->koneksi, "SELECT * FROM dosen WHERE id = '$id'");
            while ($d=mysqli_fetch_array($data)) {
                $hasil[] = $d;
            }
            return $hasil;
        }

        // update data mahasiswa berdasarkan id
        function update($id, $nim, $nama, $alamat) {
            mysqli_query($this->koneksi, "UPDATE mhs SET nim='$nim', nama='$nama', alamat='$alamat' WHERE id='$id'");
        }

        // update data dosen berdasarkan id
        function update_dsn($id, $nidn, $nama, $alamat) {
            mysqli_query($this->koneksi, "UPDATE dosen SET nidn='$nidn', nama='$nama', alamat='$alamat' WHERE id='$id'");
        }

        // hapus data mahasiswa berdasarkan id
        function hapus($id) {
            mysqli_query($this->koneksi, "DELETE FROM mhs WHERE id='$id'");
        }

        // hapus data dosen berdasarkan id
        function hapus_dsn($id) {
            mysqli_query($this->koneksi, "DELETE FROM dosen WHERE id='$id'");
        }
    }
?>