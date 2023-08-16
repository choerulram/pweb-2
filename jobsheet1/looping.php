<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php 
        // looping dengan for bil genap
        for ($i = 2; $i <= 10; $i+=2) {
            echo $i . " ";
        }
        echo "<br><br>";

        // looping dengan while bil ganjil
        $j = 1;
        while ($j <= 10) {
            echo $j . " ";
            $j+=2;
        }
        echo "<br><br>";

        // looping dengan do while bil prima
        $bil = 1;
        do {
            $prima = $bil > 1; // set bisa dikatakan prima jika bil lebih dari 1
            
            $pembagi = 2;
            while ($pembagi <= sqrt($bil)) { // cek pembagi dari 2 hingga akar kuadrat dari bilangan
                if ($bil % $pembagi == 0) {
                    $prima = false; // jika ditemukan pembagi selain 1 dan bilangan itu sendiri bukan bil prima
                    break; 
                }
                $pembagi++; // pindah ke pembagi berikutnya
            }

            if ($prima) {
                echo $bil . " ";
            }

            $bil++;
        } while ($bil <= 20);
    ?>
</body>
</html>