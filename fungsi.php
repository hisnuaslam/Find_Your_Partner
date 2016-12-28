<?php
	include("koneksiall.php");

	function getData($username){
		global $koneksi;
		$sql = "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.prodi, mahasiswa.fakultas, mahasiswa.angkatan, mahasiswa.jenis_kelamin,
                   mahasiswa.tempat_lahir, mahasiswa.tanggal_lahir, mahasiswa.alamat, mahasiswa.telepon, mahasiswa.email, mahasiswa.sosmed,
                   mahasiswa.agama, mahasiswa.kewarganegaraan
            FROM mahasiswa
            INNER JOIN user
            ON mahasiswa.nim = user.nim AND user.username = '$username'";
    // $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $sql);

		if (mysqli_num_rows($result) > 0) { //melihat ada berapa baris yang berhasil diambil
			$row = mysqli_fetch_assoc($result); //mengambil data dalam bentuk array
			return $row;
		}
		return null;
	}

 ?>
