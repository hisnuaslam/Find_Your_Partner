<?php session_start(); ?>
<?php

    include 'koneksiall.php';

    $id = isset($_GET['nim_ubah']) ? $_GET['nim_ubah'] : die('ERROR: Record ID not found.');

    $sql = "UPDATE user SET level=2 WHERE user.nim='$id'";
    // $sql = "DELETE FROM lokasi WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    if($query){
      $_SESSION['level']='2';
      header("Location: index.php");
    }else{
      die('Gagal mendowngrade Leader $nim_ubah.');
    }
?>
