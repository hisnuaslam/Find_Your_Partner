<?php session_start(); ?>
<?php
              
  $username= $_SESSION['username'];  
  $nim=$_SESSION['nim'];
  $id=$_GET['id'];

  // include("koneksiall.php");
  // $sql = "INSERT INTO joinlokasi VALUES ('$id', '$nim')";
  // $query = mysqli_query($koneksi, $sql);
?>

<?php 
  include_once 'koneksiall.php';
  
  $tablename = "joinlokasi";
  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
  // exit();


  
   
    $sql = "INSERT INTO $tablename (id, nim, username) VALUES('$id','$nim','$username')";

    
  mysqli_query($koneksi, $sql);   
  
  // header("Location: index.php");
  
?>