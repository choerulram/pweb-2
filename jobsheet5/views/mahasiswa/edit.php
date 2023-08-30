<?php 
    // memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/MahasiswaController.php';

    // instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $mahasiswaController = new MahasiswaController($db);
        $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

        if ($mahasiswaData) {
            if (isset($_POST['submit'])) {
                $nim = $_POST['nim'];
                $nama = $_POST['nama'];
                $tempat_lahir = $_POST['tempat_lahir'];
                $tanggal_lahir = $_POST['tanggal_lahir'];
                $jenis_kelamin = $_POST['jenis_kelamin'];
                $agama = $_POST['agama'];
                $alamat = $_POST['alamat'];

                $result = $mahasiswaController->updateMahasiswa($id, $nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

                if ($result) {
                    header("location:index.php");
                } else {
                    header("location:edit.php");
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="px-4 py-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">SIAKAD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="index.php">Mahasiswa</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Dosen</a>
                </li>
            </ul>
            </div>
            </div>
        </nav>

        <h1>Edit Data Mahasiswa</h1>
        <?php 
            if ($mahasiswaData) {
        ?>
            <form action="" method="post">
                <?php
                // perulangan untuk mengambil data mahasiswa yang akan di edit
                foreach ($mahasiswaData as $d => $value) {
                ?>

                <table border="0">
                    <tr>
                        <td width="100">
                            <?php 
                                echo $d;
                            ?>
                        </td>
                        <td>
                            <input type="text" name="<?php echo $d; ?>" value="<?php echo $value; ?>">
                        </td>
                        <td></td>
                    </tr>
                </table>

                <?php
                }
                ?>
                <div class="button-choice p-0">
					<input class="btn btn-warning" type="submit" name="submit" value="Simpan">
				</div>
            
            </form>
        <?php
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>