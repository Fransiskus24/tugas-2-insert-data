<!DOCTYPE html>
<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Tambah Kelas</title>
</head>

<body>
	<?php include('navigasi.php'); ?>

	<div class="container">
		<div class="row mt-4 justify-content-center">
			<div class="col-md-8">
				<div class="card shadow-sm border-0">
					<div class="card-header">
						Form Tambah Kelas
					</div>
					<div class="card-body">
						<form action="proses_tambah_kelas.php" method="post">
							<div class="mb-3">
								<label for="nama" class="form-label">Nama Jurusan</label>
								<input type="text" name="nama_jurusan" class="form-control">
							</div>
							<div class="mb-3">
								<label for="angkatan" class="form-label">Angkatan</label>
								<input type="text" name="angkatan" value="" class="form-control">
							</div>

							<button type="submit" class="btn btn-primary">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>