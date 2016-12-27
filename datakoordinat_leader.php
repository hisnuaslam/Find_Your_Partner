<?php
require 'koneksiall.php';

$sql="SELECT * FROM lokasi";
$result = mysqli_query($koneksi,$sql);

$data = array();

while($row = mysqli_fetch_array($result)) {
    $koordinat = array(
      'id_map' => $row['id'],
      'latitude' => $row['latitude'],
      'longitude'=> $row['longitude'],
      'nama_kota'=> $row['nama_kota'],
      'nim_ketua'=> $row['nim_ketua'],
      'alamat_lokasi'=> $row['alamat_lokasi'],
      'tgl_awal'=> $row['tgl_awal'],
      'tgl_screening'=> $row['tgl_screening'],
      'tgl_pengumuman'=> $row['tgl_pengumuman'],
      'tgl_akhir'=> $row['tgl_akhir']
    );
    array_push($data, $koordinat);
}

header("Content-Type: text/json");
echo json_encode($data);

mysqli_close($koneksi);
?>
