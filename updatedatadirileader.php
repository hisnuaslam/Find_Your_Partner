<?php
if($_POST){
    include("koneksiall.php");

    global $koneksi;
    if(isset($_POST['ubah'])){
      $nim        = $_POST['nim'];
      $nama       = $_POST['nama'];
      $prodi      = $_POST['prodi'];
      $fakultas      = $_POST['fakultas'];
      $angkatan    = $_POST['angkatan'];
      $jenis_kelamin  = $_POST['jenis_kelamin'];
      $tempat_lahir  = $_POST['tempat_lahir'];
      $tanggal_lahir  = $_POST['tanggal_lahir'];
      $alamat  = $_POST['alamat'];
      $telepon  = $_POST['telepon'];
      $email  = $_POST['email'];
      $sosmed  = $_POST['sosmed'];
      $agama  = $_POST['agama'];
      $kewarganegaraan  = $_POST['kewarganegaraan'];
    }
    $sql1 = "UPDATE mahasiswa SET tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat',
        telepon='$telepon', email='$email', sosmed='$sosmed', agama='$agama', kewarganegaraan='$kewarganegaraan'
  			WHERE nim='$nim'";

    // $sql = "SELECT * FROM user WHERE nim = '$nim'OR username = '$username' ";

    $query = mysqli_query($koneksi, $sql1);

    if($query){
      header("Location: datadirileader.php");
      echo "<div class = 'alert alert-success'>Berhasil Update</div>";
    } else {
      header("Location: datadirileader.php");
      echo "<div class = 'alert alert-danger'>Gagal Update</div>";
    }
}
?>
