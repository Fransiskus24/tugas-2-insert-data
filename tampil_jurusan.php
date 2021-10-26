<?php
include "koneksi.php";
$qry_jurusan = mysqli_query($conn, "SELECT * FROM jurusan"); ?>
<!DOCTYPE html>
<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Jurusan</title>
</head>

<body>
	<?php include('navigasi.php'); ?>
	<div class="container">
		<div class="row mt-4 justify-content-center">
			<div class="col-md-10">
				<div class="card shadow-sm border-0">
					<div class="card-header">
						<!-- Data Jurusan -->
						<a href="./tambah_kelas.php" class="btn btn-primary">Tambah Kelas</a>
					</div>
					<div class="card-body">
						<table class="table table-hover tabel-striped">
							<thead>
								<tr>
									<th>NO</th>
									<th>JURUSAN</th>
									<th>ANGKATAN</th>
									<th>AKSI</th>
								</tr>
							</thead>
							<?php
							while ($data_jurusan = mysqli_fetch_array($qry_jurusan)) :
								$no = 1; ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $data_jurusan['nama_jurusan'] ?></td>
									<td><?= $data_jurusan['angkatan'] ?></td>
									<td><a href="hapus.php?id_siswa=<?= $data_siswa['id'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</a></td>

								</tr>
							<?php endwhile ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>