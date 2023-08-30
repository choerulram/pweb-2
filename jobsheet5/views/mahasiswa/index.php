<?php
    // memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/MahasiswaController.php';

    // instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswa = $mahasiswaController->getAllMahasiswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
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
                <a class="nav-link" href="tampil_mhs.php">Mahasiswa</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="tampil_dsn.php">Dosen</a>
                </li>
            </ul>
            </div>
            </div>
        </nav>

        <form action="" method="post">
            <div class="container-fluid border p-5 mt-5 bg-light rounded">
                <?php 
                    // memanggil class database
                    // include '../classes/database.php';
                    // $db = new database();
                ?>
                <h3>Data Mahasiswa</h3>
                <?php
                    // memeriksa apakah ada status 'success' dari URL 
                    // if (isset($_GET['status']) && $_GET['status'] === 'success') {
                    ?>
                        <!-- <div class="alert alert-success" id="success-alert" role="alert">
                            Berhasil menambahkan data
                        </div> -->
                    <?php
                    // }
                    // memeriksa apakah ada status 'success_edit' dari URL
                    // if (isset($_GET['status_edit']) && $_GET['status_edit'] === 'success_edit') {
                        ?>
                            <!-- <div class="alert alert-success" id="success-alert" role="alert">
                                Berhasil edit data
                            </div> -->
                        <?php
                        // }
                ?>
                <a class="btn btn-primary mb-3 mt-2" href="input_mhs.php">Tambah Mahasiswa</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                        <?php 
                        $no = 1; // inisiasi nomor
                        // menampilkan data mahasiswa dari database
                        foreach($mahasiswa as $x) {
                            
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $x['nim'] ?></td>
                                <td><?php echo $x['nama'] ?></td>
                                <td><?php echo $x['tempat_lahir'] ?></td>
                                <td><?php echo $x['tanggal_lahir'] ?></td>
                                <td><?php echo $x['jenis_kelamin'] ?></td>
                                <td><?php echo $x['agama'] ?></td>
                                <td><?php echo $x['alamat'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                                    <a class="btn btn-danger" href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
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
    <!-- <script src="../../public/assets/js/delAlert.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>