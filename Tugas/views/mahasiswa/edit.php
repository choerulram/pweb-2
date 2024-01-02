<?php 
    // memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/MahasiswaController.php';
    require '../../index.php';

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
                    header("location:mahasiswa");
                } else {
                    header("location:edit_mhs");
                }
            }
        }
    }
?>
        <div class="container-fluid border p-5 mt-4 bg-light rounded">
            <h3 class="mb-3 mt-1">Edit Data Mahasiswa</h3>
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