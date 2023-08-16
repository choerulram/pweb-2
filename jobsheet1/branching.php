<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <form action="" method="post">
        <div class="container border w-25 p-5 bg-light rounded">
            <div class="mb-3">
                <label for="nilai" class="form-label"><b>Input Nilai</b></label>
                <input type="text" class="form-control" name="nilai" id="nilai" placeholder="inputkan nilai yang anda inginkan..." required/>
            </div>
            <div class="button-choice p-0">
                    <input type="submit" class="btn btn-danger">
            </div>
            <?php 
                if (isset($_POST["nilai"])) {
                    $bil = $_POST["nilai"];

                    if (is_numeric($bil)) { // is_numerik untk cek variabel angka / bukan
                        if ($bil > 0) {
                            echo '<div style="font-weight:bold;color:green;text-align:center;padding-top:10px;">' . $bil . ' adalah bilangan positif.</div>';
                        } else if ($bil < 0) {
                            echo '<div style="font-weight:bold;color:red;text-align:center;padding-top:10px;">' . $bil . ' adalah bilangan negatif.</div>';
                        } else if ($bil == 0) {
                            echo '<div style="font-weight:bold;color:blue;text-align:center;padding-top:10px;">' . $bil . ' adalah bilangan nol.</div>';
                        }
                    } else {
                        echo '<div style="font-weight:bold;color:purple;text-align:center;padding-top:10px;">' . $bil . ' itu bukan bilangan.</div>';
                    }
                }
            ?>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>