
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
    <title>Edit Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <?php 
        include "nav.php";
    ?>
        <form action="proses_dsn.php?aksi=update" method="post">
            <div class="container border w-50 p-5 mt-25 bg-light rounded">
                <div class="pt-2 pb-2 mb-3 text-center">
                    <h1>Edit Data Dosen</h1>
                </div>

                <?php 
                    foreach($db->edit_dsn($_GET['id']) as $d) {

                ?>

                <div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label"><b>NIDN</b></label>
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<input type="text" name="nidn" value="<?php echo $d['nidn']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nidn..." required/>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label"><b>Nama</b></label>
					<input type="text" name="nama" value="<?php echo $d['nama']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama..." required/>
				</div>
                <div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label"><b>Alamat</b></label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Tuliskan alamat lengkap anda..." name="alamat" required><?php echo $d['alamat']; ?></textarea>
				</div>
                <div class="button-choice p-0">
					<input class="btn btn-warning" type="submit" name="submit" value="SIMPAN">
				</div>
                <?php 
                }
                ?>
            </div>
        </form>
    </div>
    <script>
        // mengambil status alert dari session storage saat memuat halaman
        var alertStatus = sessionStorage.getItem('alertStatus');

        // fungsi untuk menampilkan pesan alert jika status true
        function showAlert() {
            var myAlert = document.getElementById('myAlert');
            if (alertStatus === 'true') {
                myAlert.style.display = 'block';
            }
        }

        // memanggil fungsi untuk menampilkan alert saat halaman dimuat
        showAlert();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>