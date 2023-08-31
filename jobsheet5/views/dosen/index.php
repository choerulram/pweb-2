<?php
    // memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/DosenController.php';
    require '../../index.php';

    // instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    $dosenController = new DosenController($db);
    $dosen = $dosenController->getAllDosen();
?>

        <form action="" method="post">
            <div class="container-fluid border p-5 mt-4 bg-light rounded">
                <h3>Data Dosen</h3>
                <a class="btn btn-primary mb-3 mt-2" href="tambah_dsn">Tambah Dosen</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>NIDN</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                        <?php 
                        $no = 1; // inisiasi nomor
                        // menampilkan data mahasiswa dari database
                        foreach($dosen as $x) {
                            
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $x['nidn'] ?></td>
                                <td><?php echo $x['nama'] ?></td>
                                <td><?php echo $x['alamat'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="edit?id=<?php echo $x['id']; ?>">Edit</a>
                                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin akan menghapus')">Hapus</a>
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