<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php 
        $teks = "Selamat belajar PHP!";

        // mengubah string mnjd huruf kapital
        $kapital = strtoupper($teks);
        echo $kapital . "<br>";

        // mengubah string mnjd hurud kecil
        $kecil = strtolower($teks);
        echo $kecil . "<br>";

        // memotong string
        $potong = substr($teks, 0, -5);
        echo $potong . "<br>";
    ?>
</body>
</html>