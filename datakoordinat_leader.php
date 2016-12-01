<?php
require 'koneksiall.php';

$sql="SELECT * FROM lokasi";
$result = mysqli_query($koneksi,$sql);

$data = array();

while($row = mysqli_fetch_array($result)) {
    $koordinat = array(
      'id' => $row['id'],
      'latitude' => $row['latitude'],
      'longitude'=> $row['longitude'],
      'kota'=> $row['kota'],
      'ketua'=> $row['ketua'],
      'lokasi'=> $row['lokasi'],
      'proker1'=> $row['proker1'],
      'proker2'=> $row['proker2'],
      'proker3'=> $row['proker3'],
    );
    array_push($data, $koordinat);
}

header("Content-Type: text/json");
echo json_encode($data);

mysqli_close($koneksi);
?>