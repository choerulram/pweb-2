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
    <form action="" method="post">
        <div class="container border w-50 p-5 mt-25 bg-light rounded">
            <?php 
                // memanggil class database
                include '../classes/database.php';
                $db = new database();
            ?>
            <h3>Data Dosen</h3>
            <a href="input_dsn.php">Tambah Dosen</a>
            <table>
                <tr>
                    <th>No</th>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php 
                $no = 1;
                foreach($db->tampil_dosen() as $x) {
                    
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['nidn'] ?></td>
                        <td><?php echo $x['nama'] ?></td>
                        <td><?php echo $x['alamat'] ?></td>
                        <td>
                            <!-- orange -->
                            <a href="edit_dsn.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                            <!-- merah -->
                            <a href="proses_dsn.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
                        </td>
                    </tr>
                <?php 
                }
                ?> 
            </table>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>