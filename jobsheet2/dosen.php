<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <form action="" method="post">
        <div class="container border w-25 p-5 mt-25 bg-light rounded">
            <?php 
                // class
                class dosen {
                    // property
                    var $nidn = "2202020",
                        $nama = "Kevin",
                        $prodi = "D3 Teknik Informatika";

                    // method
                    function tampil() {
                        return "Perkenalkan nama saya $this->nama, nidn saya $this->nidn. 
                        Saya mengajar di prodi $this->prodi";
                    } // function tampil
                } // class dosen

                // object
                $profile = new dosen();

                // tampil
                echo $profile->tampil();
            ?>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>