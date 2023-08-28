<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkapsulasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <form action="" method="post">
        <div class="container border w-25 p-5 mt-25 bg-light rounded">
            <?php 
                // class
                class mahasiswa {
                    // property
                    public $nama; // public = bisa dipanggil dimana saja
                    protected $nim; // protected = bisa dipanggil di luar class tetapi harus di dalam inheritance
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

                // instansiasi object berikut kedalam variabel mahasiswa
                $tampil_nama = new mahasiswa;
                $tampil_nim = new mahasiswa;
                $tampil_jurusan = new mahasiswa;

                // tampil 
                echo $tampil_nama->tampilkan_nama();
                echo "<br>";
                // echo $tampil_nim->tampilkan_nim();
                echo $tampil_jurusan->tampilkan_jurusan();
            ?>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>