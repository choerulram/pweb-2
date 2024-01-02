<?php 
    // memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/DosenController.php';
    require '../../index.php';

    // instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $dosenController = new DosenController($db);
        $dosenData = $dosenController->getDosenById($id);

        if ($dosenData) {
            if (isset($_POST['submit'])) {
                $nidn = $_POST['nidn'];
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];

                $result = $dosenController->updateDosen($id, $nidn, $nama, $alamat);

                if ($result) {
                    header("location:dosen");
                } else {
                    header("location:edit_mhs");
                }
            }
        }
    }
?>
        <div class="container-fluid border p-5 mt-4 bg-light rounded">
            <h3 class="mb-3 mt-1">Edit Data Dosen</h3>
            <?php 
                if ($dosenData) {
            ?>
                <form action="" method="post">
                    <?php
                    // perulangan untuk mengambil data mahasiswa yang akan di edit
                    foreach ($dosenData as $d => $value) {
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