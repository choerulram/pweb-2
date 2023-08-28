<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <form action="" method="post">
        <div class="container border w-25 p-5 mt-25 bg-light rounded">
            <?php 
                $umur = 18; // integer
                $nama = "Irul"; // string
                $jurusan = true; // boolean
                
                // boolean dg penggabungan string
                $output = "Perkenalkan nama saya " . $nama . ", umur saya " . $umur . " tahun. Saya dari jurusan " 
                . ($jurusan ? "D3 Teknik Informatika" : "D3 Teknik Mesin" ) . ".<br>"; 
                echo $output; // tampilkan isi variabel output
                
                // boolean dg kondisi
                if ($jurusan) {
                    echo "D3 Teknik Informatika";
                } else {
                    echo "D3 Teknik Mesin";
                }

            ?>
        </div>
    </form>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>