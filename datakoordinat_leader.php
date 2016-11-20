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
    );
    array_push($data, $koordinat);
}

header("Content-Type: text/json");
echo json_encode($data);

mysqli_close($koneksi);
?>