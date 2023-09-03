<?php 
    require '../../index.php';
?>

        <form action="proses_tambah_mhs" method="post">
            <div class="container-fluid border p-5 mt-4 bg-light rounded">
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
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label"><b>Jenis Kelamin</b></label><br/>
					<input type="radio" id="laki_laki" name="jk" value="Laki-Laki" required/>
					<label for="laki_laki">Laki-laki</label>
					<input type="radio" id="perempuan" name="jk" value="Perempuan" required/>
					<label for="perempuan">Perempuan</label>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>