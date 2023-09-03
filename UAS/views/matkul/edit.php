<?php 
    // memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/MatkulController.php';
    require '../../index.php';

    // instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $matkulController = new MatkulController($db);
        $matkulData = $matkulController->getMatkulById($id);

        if ($matkulData) {
            if (isset($_POST['submit'])) {
                $kode_matkul = $_POST['kode_matkul'];
                $nama_matkul = $_POST['nama_matkul'];
                $semester = $_POST['semester'];
                $sks = $_POST['sks'];

                $result = $matkulController->updateMatkul($id, $kode_matkul, $nama_matkul, $semester, $sks);

                if ($result) {
                    header("location:matkul");
                } else {
                    header("location:edit_matkul");
                }
            }
        }
    }
?>

        <div class="container-fluid border p-5 mt-4 bg-light rounded">
            <h3 class="mb-3 mt-1">Edit Data Mata Kuliah</h3>
            <?php 
                if ($matkulData) {
            ?>
                <form action="" method="post">
                    <?php
                    // perulangan untuk mengambil data matkul yang akan di edit
                    foreach ($matkulData as $d => $value) {
                    ?>

                    <table border="0">
                        <tr>
                            <td width="100">
                                <?php 
                                    echo $d;
                                ?>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="<?php echo $d; ?>" value="<?php echo $value; ?>">
                            </td>
                            <td></td>
                        </tr>
                    </table>

                    <?php
                    }
                    ?>
                    <div class="button-choice p-0 pt-3">
                        <input class="btn btn-warning" type="submit" name="submit" value="Simpan">
                    </div>
                
                </form>
            <?php
                }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>