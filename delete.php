<?php

    include 'koneksiall.php';

    $id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

    $sql = "DELETE FROM lokasi WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);
     
    if($query){
        header('Location: administrator.php?action=deleted');
    }else{
        die('Gagal menghapus $id.');
    }
?>