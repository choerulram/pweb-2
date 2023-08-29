
<?php 
    // memanggil class database
    include '../classes/database.php';
    $db = new database();
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
    <?php 
        include "nav.php";
    ?>
        <form action="proses_mhs.php?aksi=update" method="post">
            <div class="container border w-50 p-5 mt-25 bg-light rounded">
                <?php 
                    foreach($db->edit($_GET['id']) as $d) {

                        ?>
                <table>
                    <h3>Edit Data Mahasiswa</h3>
                    <tr>
                        <td>NIM</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['id']?>">
                            <input type="text" name="nim" value="<?php echo $d['nim']?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="<?php echo $d['nama']?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat']?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Simpan"></td>
                    </tr>
                </table>
                <?php 
                }
                ?>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>