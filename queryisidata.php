<?php
  include_once 'koneksiall.php';


  $tablename = "lokasi";
  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
  // exit();

  $lat = $_POST['flat'];
  $long = $_POST['flong'];
  $nama_kota = $_POST['fkota'];
  $nim_ketua = $_POST['fketua'];
  $alamat_lokasi = $_POST['falamat'];
  // $proker1 = $_POST['fproker1'];
  // $proker2 = $_POST['fproker2'];
  // $proker3 = $_POST['fproker3'];



  $query = $_POST['query'];



  if($query == "Submit"){
    $sql = "INSERT INTO $tablename (latitude, longitude, kota, ketua, lokasi) VALUES('$lat', '$long', '$nama_kota','$nim_ketua','$alamat_lokasi')";
  }

  mysqli_query($koneksi, $sql);

  header("Location: index.php");

?>
