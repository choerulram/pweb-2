<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <?php 
        include "nav.php";
    ?>
    
        <form action="" method="post">
            <div class="container-fluid border p-5 mt-5 bg-light rounded">
                <?php 
                    // memanggil class database
                    include '../classes/database.php';
                    $db = new database(); // buat object $db
                ?>
                <h3>Data Dosen</h3>
                <?php
                    // memeriksa apakah ada status 'success' dari URL
                    if (isset($_GET['status']) && $_GET['status'] === 'success') {
                    ?>
                        <div class="alert alert-success" id="success-alert" role="alert">
                            Berhasil menambahkan data
                        </div>
                    <?php
                    }
                    // memeriksa apakah ada status 'success_edit' dari URL
                    if (isset($_GET['status_edit']) && $_GET['status_edit'] === 'success_edit') {
                    ?>
                        <div class="alert alert-success" id="success-alert" role="alert">
                            Berhasil edit data
                        </div>
                    <?php
                    }
                ?>
                <a class="btn btn-primary mb-3 mt-2" href="input_dsn.php">Tambah Dosen</a>
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
                        foreach($db->tampil_dosen() as $x) {
                            
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $x['nidn'] ?></td>
                                <td><?php echo $x['nama'] ?></td>
                                <td><?php echo $x['alamat'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="edit_dsn.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                                    <a class="btn btn-danger" href="proses_dsn.php?id=<?php echo $x['id']; ?>&aksi=hapus" onclick="return confirm('Apakah yakin akan menghapus data ini?')">Hapus</a>
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
    <script src="../../public/assets/js/delAlert.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>