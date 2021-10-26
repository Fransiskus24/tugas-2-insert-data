<!DOCTYPE html>
<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Mahasiswa</title>
</head>

<body>
	<?php include('navigasi.php'); ?>
	<div class="container">
		<div class="row  mt-4 justify-content-center">
			<div class="col-md-10">
				<div class="card shadow-sm border-0">
					<div class="card-header">Data Mahasiswa</div>
					<div class="card-body">
						<table class="table table-hover tabel-striped">
							<thead>
								<tr>
									<th>NO</th>
									<th>NAMA</th>
									<th>TANGGAL LAHIR</th>
									<th>JENIS KELAMIN</th>
									<th>ALAMAT</th>
									<th>USERNAME</th>
									<th>JURUSAN</th>
									<th>AKSI</th>
								</tr>

							</thead>
							<tbody>
								<?php
								include "koneksi.php";
								$qry_mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa JOIN jurusan ON `mahasiswa`.`id_jurusan` = `jurusan`.`id_jurusan`");
								while ($data_mahasiswa = mysqli_fetch_array($qry_mahasiswa)) :
									$no = 1; ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $data_mahasiswa['nama'] ?></td>
										<td><?= $data_mahasiswa['tanggal_lahir'] ?></td>
										<td><?= $data_mahasiswa['jenis_kelamin'] ?></td>
										<td><?= $data_mahasiswa['alamat'] ?></td>
										<td><?= $data_mahasiswa['username'] ?></td>
										<td><?= $data_mahasiswa['nama_jurusan'] ?></td>
										<td>
											<a href="ubah_mahasiswa.php?id_mhs=<=$data_mahasiswa['id_mhs']?>" class="btn btn-success btn-sm">ubah</a> |
											<a href="hapus.php?id_siswa=<?= $data_siswa['id'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
										</td>

									</tr>
								<?php
								endwhile;
								?>
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