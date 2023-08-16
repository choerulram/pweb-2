<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
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
</body>
</html>