<?php 
    require '../../index.php';
?>

        <form action="proses_tambah_matkul" method="post">
            <div class="container-fluid border p-5 mt-4 bg-light rounded">
                <div class="pt-2 pb-2 mb-3 text-center">
                    <h1>Tambah Data Mata Kuliah</h1>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Kode Mata Kuliah</b></label>
                    <input type="text" class="form-control" name="kode_matkul" id="exampleFormControlInput1" placeholder="Masukkan kode mata kuliah..." required/>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Nama Mata Kuliah</b></label>
                    <input type="text" class="form-control" name="nama_matkul" id="exampleFormControlInput1" placeholder="Masukkan nama mata kuliah..." required/>
                </div>
				<div class="mb-3 w-25">
					<label for="exampleInputEmail1" class="form-label"><b>Semester</b></label>
					<select class="form-select w-75" aria-label="Default select example" name="semester" required>
						<option value="" selected disabled>Pilih Semester</option>
						<option value="1 (Satu)">1 (Satu)</option>
						<option value="2 (Dua)">2 (Dua)</option>
						<option value="3 (Tiga)">3 (Tiga)</option>
						<option value="4 (Empat)">4 (Empat)</option>
						<option value="5 (Lima)">5 (Lima)</option>
						<option value="6 (Enam)">6 (Enam)</option>
					</select>
				</div>
                <div class="mb-3 w-25">
                    <label for="exampleFormControlInput1" class="form-label"><b>Jumlah SKS</b></label>
                    <input type="text" class="form-control" name="sks" id="exampleFormControlInput1" placeholder="Masukkan jumlah sks..." required/>
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