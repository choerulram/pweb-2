<?php
    // memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/SksController.php';
    require '../../index.php';

    // instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    $sksController = new SksController($db);
    $sks = $sksController->getAllSks();
?>

        <form action="" method="post">
            <div class="container-fluid border p-5 mt-4 bg-light rounded">
                <h3>Tabel Data SKS</h3>
                <a class="btn btn-primary mb-3 mt-2" href="add_sks">Tambah SKS</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Kode SKS</th>
                            <th>Jumlah SKS</th>
                            <th>Aksi</th>
                        </tr>
                        <?php 
                        $no = 1; // inisiasi nomor
                        // menampilkan data mahasiswa dari database
                        foreach($sks as $x) {
                            
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $x['kode_sks'] ?></td>
                                <td><?php echo $x['jumlah_sks'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="edit_sks?id=<?php echo $x['id']; ?>">Edit</a>
                                    <a class="btn btn-danger" href="delete_sks?id=<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin akan menghapus')">Hapus</a>
                                </td>
                            </tr>
                        <?php 
                        }
                        ?> 
                    </table>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>