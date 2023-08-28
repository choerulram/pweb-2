<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
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
                    var $nim = "220302049";
                    var $nama = "Irul";
                    var $alamat = "Jl.Tongkol";

                    // method
                    function tampil_nama() {
                        return "Nama saya $this->nama";
                    } // funtion tampil_nama

                    // method
                    function tampil_alamat() {
                        return "Alamat saya di $this->alamat";
                    } // funtion tampil_alamat
                } // class mahasiswa

                // object
                $nama_mahasiswa = new mahasiswa();
                $alamat_mahasiswa = new mahasiswa();

                // tampil object
                echo $nama_mahasiswa->tampil_nama();
                echo "<br><br>";
                echo $alamat_mahasiswa->tampil_alamat();
            ?>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>