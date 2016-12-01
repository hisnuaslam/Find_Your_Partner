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
  $proker1 = $_POST['fproker1'];
  $proker2 = $_POST['fproker2'];
  $proker3 = $_POST['fproker3'];
 
  
  
  $query = $_POST['query'];
  
  
  
  if($query == "Submit"){
    $sql = "INSERT INTO $tablename (latitude, longitude, kota, ketua, lokasi, proker1, proker2, proker3) VALUES('$lat', '$long', '$kota','$ketua','$alamat', '$proker1', '$proker2', '$proker3')";
  }
    
  mysqli_query($koneksi, $sql);   
  
  header("Location: index.php");
  
?>