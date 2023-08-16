<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <form action="" method="post">
        <div class="container border w-25 p-5 mt-5 bg-light rounded">
            <div class="mb-3">
                <label for="lingkaran" class="form-label"><b>Input Jari-jari</b></label>
                <input type="text" class="form-control" name="lingkaran" id="lingkaran" placeholder="inputkan nilai jari-jari..." required/>
            </div>
            <div class="mb-3"> 
                <label for="persegi" class="form-label"><b>Input Sisi</b></label>
                <input type="text" class="form-control" name="persegi" id="persegi" placeholder="inputkan nilai sisi..." required/>
            </div>
            <div class="button-choice p-0">
                    <input type="submit" class="btn btn-danger">
            </div>
            <?php 
                if (isset($_POST["lingkaran"]) && isset($_POST["persegi"])) {
                    $r = $_POST["lingkaran"];
                    $s = $_POST["persegi"];
                    
                    function LuasLingkaran($r) {
                        $luasL = 3.14 * $r * $r;
                        return $luasL;
                    } // LuasLingkaran

                    function LuasPersegi($s) {
                        $luasP = $s * $s;
                        return $luasP;
                    } // LuasPersegi
    
                    $luasL = LuasLingkaran($r);
                    echo '<div style="font-weight:bold;color:green;text-align:center;padding-top:30px;">' . "Luas lingkaran dari jari-jari " . $r . " adalah = " . $luasL . "<br>" . '</div>';

                    $luasP = LuasPersegi($s);
                    echo '<div style="font-weight:bold;color:blue;text-align:center;padding-top:10px;">' . "Luas persegi jika diketahui sisinya " . $s . " adalah = " . $luasP . '</div>';
                }
            ?>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>