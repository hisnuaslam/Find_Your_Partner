<?php 
  include_once 'koneksiall.php';

  
  $tablename = "lokasi";
  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
  // exit();

  $lat = $_POST['flat'];
  $long = $_POST['flong'];
  $kota = $_POST['fkota'];
  $ketua = $_POST['fketua'];
  $alamat = $_POST['falamat'];
 
  
  
  $query = $_POST['query'];
  
  
  
  if($query == "Submit"){
    $sql = "INSERT INTO $tablename (latitude, longitude, kota, ketua, lokasi) VALUES('$lat', '$long', '$kota','$ketua','$alamat')";
  }
    
  mysqli_query($koneksi, $sql);   
  
  header("Location: index.php");
  
?>