<?php session_start(); ?>
<?php

  $username= $_SESSION['username'];
  $nim=$_SESSION['nim'];
  $id=$_GET['id'];
?>

<?php
  include_once 'koneksiall.php';

  $tablename = "joinlokasi";
    $sql = "INSERT INTO $tablename (id, nim, username) VALUES('$id','$nim','$username')";


  mysqli_query($koneksi, $sql);
?>
