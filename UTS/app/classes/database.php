<?php 
class database
{
    // property
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $db =  "rumah_sakit";
    public $koneksi;

    public function __construct()
    {
        // membuat koneksi ke database MySQL dan menyimpannya
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    // mengambil dan mengembalikan data mahasiswa dari tabel "mhs"
    function tampilkan_pasien() {
        $data = mysqli_query($this->koneksi, "SELECT * FROM pasien");
        while ($d = mysqli_fetch_array($data)) { // mengambil setiap baris query dan menyimpannya dalam array asosoatif
            $hasil[] = $d;
        }
        return $hasil;
    }

    // menambahkan data mahasiswa ke tabel "mhs"
    function tambah($no_rm,$nama_pasien,$alamat,$usia) {
        mysqli_query($this->koneksi, "INSERT INTO pasien (no_rm, nama_pasien, alamat, usia) VALUES ('$no_rm','$nama_pasien','$alamat', '$usia')");
    }

    // mengambil data mahasiswa berdasarkan id dan mengeditnya
    function edit($id) {
        $data = mysqli_query($this->koneksi, "SELECT * FROM pasien WHERE id = '$id'");
        while ($d=mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id, $no_rm, $nama_pasien, $alamat, $usia) {
        mysqli_query($this->koneksi, "UPDATE pasien SET no_rm='$no_rm', nama_pasien='$nama_pasien', alamat='$alamat', usia='$usia' WHERE id='$id'");
    }

    // hapus data mahasiswa berdasarkan id
    function hapus($id) {
        mysqli_query($this->koneksi, "DELETE FROM pasien WHERE id='$id'");
    }
}
?>