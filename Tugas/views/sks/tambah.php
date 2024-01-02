<?php 
    require '../../index.php';
?>

        <form action="proses_tambah_sks" method="post" autocomplete="off">
            <div class="container-fluid border p-5 mt-4 bg-light rounded w-50">
                <div class="pt-2 pb-2 mb-3 text-center">
                    <h1>Tambah Data SKS</h1>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Kode SKS</b></label>
                    <input type="text" class="form-control" name="kode_sks" id="exampleFormControlInput1" placeholder="Masukkan kode sks..." required/>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Jumlah SKS</b></label>
                    <input type="text" class="form-control" name="jumlah_sks" id="exampleFormControlInput1" placeholder="Masukkan jumlah sks..." required/>
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