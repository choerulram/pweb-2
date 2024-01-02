<?php
    // memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/AttendanceController.php';
    require '../../index.php';

    // instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    $attendanceController = new AttendanceController($db);
    $attendance = $attendanceController->getAllAttendance();
?>

        <form action="" method="post">
            <div class="container-fluid border p-5 mt-4 bg-light rounded">
                <h3>Tabel Data Absensi</h3>
                <a class="btn btn-primary mb-3 mt-2" href="add_attendance">Tambah Absensi</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>ID Absensi</th>
                            <th>Taggal</th>
                            <th>Waktu</th>
                            <th>Status Absensi</th>
                            <th>Catatan</th>
                        </tr>
                        <?php 
                        $no = 1; // inisiasi nomor
                        // menampilkan data absensi dari database
                        foreach($attendance as $x) {
                            
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $x['nim'] ?></td>
                                <td><?php echo $x['nama'] ?></td>
                                <td><?php echo $x['id_absensi'] ?></td>
                                <td><?php echo $x['tanggal'] ?></td>
                                <td><?php echo $x['waktu'] ?></td>
                                <td><?php echo $x['status_absensi'] ?></td>
                                <td><?php echo $x['catatan'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="edit_mhs?id=<?php echo $x['id']; ?>">Edit</a>
                                    <a class="btn btn-danger" href="delete_mhs?id=<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin akan menghapus')">Hapus</a>
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