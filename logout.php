<?php  

    session_start();
    
    include("koneksiall.php");

    $username = $_SESSION['username'];
    $sql = "UPDATE peserta SET soalke = 1 WHERE username = '$username'";
    $query = mysqli_query($koneksi, $sql);

    session_unset();
    
    session_destroy();

    header("Location: index.php");

?>

