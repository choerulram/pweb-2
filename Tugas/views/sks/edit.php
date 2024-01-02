<?php 
    // memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/SksController.php';
    require '../../index.php';

    // instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sksController = new SksController($db);
        $sksData = $sksController->getSksById($id);

        if ($sksData) {
            if (isset($_POST['submit'])) {
                $kode_sks = $_POST['kode_sks'];
                $jumlah_sks = $_POST['jumlah_sks'];

                $result = $sksController->updateSks($id, $kode_sks, $jumlah_sks);

                if ($result) {
                    header("location:sks");
                } else {
                    header("location:edit_mhs");
                }
            }
        }
    }
?>
        <div class="container-fluid border p-5 mt-4 bg-light rounded">
            <h3 class="mb-3 mt-1">Edit Data SKS</h3>
            <?php 
                if ($sksData) {
            ?>
                <form action="" method="post">
                    <?php
                    // perulangan untuk mengambil data sks yang akan di edit
                    foreach ($sksData as $d => $value) {
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