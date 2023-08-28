<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <form action="" method="post">
        <div class="container border w-25 p-5 mt-25 bg-light rounded">
            <?php 
                // looping dengan for bil genap
                echo "Perulangan FOR bilangan genap dari 1 hingga 10 : <br>";
                for ($i = 2; $i <= 10; $i+=2) {
                    echo '<span style="font-weight:bold;color:green;">' . $i . " " . '</span>' ;
                }
                echo "<br><br>";

                // looping dengan while bil ganjil
                echo "Perulangan WHILE bilangan ganjil dari 1 hingga 10 : <br>";
                $j = 1;
                while ($j <= 10) {
                    echo '<span style="font-weight:bold;color:blue;">' . $j . " " . '</span>';
                    $j+=2;
                }
                echo "<br><br>";

                // looping dengan do while bil prima
                echo "Perulangan DO..WHILE bilangan prima dari 1 hingga 20 : <br>";
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
                        echo '<span style="font-weight:bold;color:purple;">' . $bil . " " . '</span>';
                    }

                    $bil++;
                } while ($bil <= 20);
            ?>    
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>