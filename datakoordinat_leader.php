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
      'kota'=> $row['kota'],
      'ketua'=> $row['ketua'],
      'lokasi'=> $row['lokasi'],
      'tglmulai'=> $row['tglmulai'],
      'tglscreening'=> $row['tglscreening'],
      'tglpengumuman'=> $row['tglpengumuman'],
      'tglakhir'=> $row['tglakhir']
    );
    array_push($data, $koordinat);
}

header("Content-Type: text/json");
echo json_encode($data);

mysqli_close($koneksi);
?>