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
//ubah format array diatas jadi format Json
echo json_encode($data);

mysqli_close($koneksi);
?>