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

        <form action="proses_tambah.php" method="post">
            <div class="container-fluid border p-5 mt-5 bg-light rounded">
                <div class="pt-2 pb-2 mb-3 text-center">
                    <h1>Tambah Data Mahasiswa</h1>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>NIM</b></label>
                    <input type="text" class="form-control" name="nim" id="exampleFormControlInput1" placeholder="Masukkan nim..." required/>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Nama</b></label>
                    <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Masukkan nama..." required/>
                </div>
                <div class="mb-3 w-25">
					<label for="exampleFormControlInput1" class="form-label"><b>Tempat Lahir</b></label>
					<input type="text" name="tempat_lahir" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan tempat lahir..." required/>
				</div>
				<div class="mb-3 w-25">
					<label for="exampleFormControlInput1" class="form-label"><b>Tanggal Lahir</b></label>
					<input type="date" name="tanggal_lahir" class="form-control" id="exampleFormControlInput1" required/>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label"><b>Jenis Kelamin</b></label><br/>
					<input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-Laki" required/>
					<label for="laki_laki">Laki-laki</label>
					<input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required/>
					<label for="perempuan">Perempuan</label>
				</div>
				<div class="mb-3 w-25">
					<label for="exampleInputEmail1" class="form-label"><b>Agama</b></label>
					<select class="form-select w-75" aria-label="Default select example" name="agama" required>
						<option value="" selected disabled>Pilih Agama</option>
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
						<option value="Katolik">Katolik</option>
						<option value="Hindu">Hindu</option>
						<option value="Budha">Budha</option>
						<option value="Konghuchu">Konghuchu</option>
					</select>
				</div>
                <div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label"><b>Alamat</b></label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Tuliskan alamat anda..." name="alamat" required></textarea>
				</div>
                <div class="button-choice p-0">
					<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
				</div>
            </div>
        </form>
    </div>
    <script>
        // mengambil status alert dari session storage saat memuat halaman
        // var alertStatus = sessionStorage.getItem('alertStatus');

        // fungsi untuk menampilkan pesan alert jika status true
        // function showAlert() {
        //     var myAlert = document.getElementById('myAlert');
        //     if (alertStatus === 'true') {
        //         myAlert.style.display = 'block';
        //     }
        // }

        // memanggil fungsi untuk menampilkan alert saat halaman dimuat
        // showAlert();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>