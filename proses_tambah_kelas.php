<?php
if ($_POST) {
	$nama_jurusan = $_POST['nama_jurusan'];
	$angkatan = $_POST['angkatan'];
	if (empty($nama_jurusan)) {
		echo "<script>alert('nama jurusan tidak boleh kosong');location.href='./tambah_kelas.php';</script>";
	} elseif (empty($angkatan)) {
		echo "<script>alert('Angkatan tidak boleh kosong');location.href='./tambah_kelas.php';</script>";
	} else {
		include "koneksi.php";
		$insert = mysqli_query($conn, "INSERT INTO jurusan (nama_jurusan, angkatan) VALUE ('" . $nama_jurusan . "','" . $angkatan . "')");
		if ($insert) {
			echo "<script>alert(' Sukses menambah data jurusan');location.href='tambah_kelas.php';</script>";
		} else {
			echo "<script>alert(' Gagal menambah data jurusan');location.href='tambah_kelas.php';</script>";
		}
	}
}
