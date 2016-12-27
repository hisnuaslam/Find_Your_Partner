<?php
require 'koneksiall.php';
$lat = isset($_GET["lat"])?$_GET["lat"]:"";
$long = isset($_GET["long"])?$_GET["long"]:"";

if(empty($lat)) {
  $sql = "SELECT * FROM lokasi";
} else {
  $sql="SELECT * FROM lokasi WHERE latitude='$lat' AND longitude='$long'";
}

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
//ubah format array diatas jadi format Json
echo json_encode($data);

mysqli_close($koneksi);
?>
