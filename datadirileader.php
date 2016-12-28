<?php session_start(); ?>
<?php
    if(isset($_SESSION['level'] )) {
        if($_SESSION['level'] != 1)
        {
            header('Location:errormessege.php');
        }
    }
     else{
        header('Location:index.php');
    }
    include ("fungsi.php");
    $data = getData($_SESSION['username']); //digunakan sebagai primary key
?>
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
      echo "<div class = 'alert alert-success'>Berhasil Update</div>";
    } else {
      echo "<div class = 'alert alert-danger'>Gagal Update</div>";
    }
    // if(mysqli_num_rows($query) > 0) {
    //     echo "<div class = 'alert alert-danger'>NIM atau Username sudah digunakan</div>";
    // } else {
    //     if($password != $cpass || $captcha != $_SESSION["code"]) {
    //         echo "<div class = 'alert alert-danger'>Password dan Confirm Password tidak Sesuai atau Captcha salah</div>";
    //     } else {
    //         $sql = "INSERT INTO user (nim, username, password, level) VALUES ('$nim', '$username', '$password', '$leveluser')";
    //         $query = mysqli_query($koneksi, $sql);
    //
    //         if($query) {
    //             echo "<div class = 'alert alert-success'>Berhasil daftar</div>";
    //         } else {
    //             echo "<div class = 'alert alert-danger'>Gagal daftar</div>";
    //         }
    //     }
    // }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Find Your Partner</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Bootply" />
		<link rel="Shortcut Icon" type="image/ico" href="img/icon-uns.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Find Your Partner</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><i class="glyphicon glyphicon-user"></i> Hai, <?php echo $_SESSION['username'] ;?>! </a></li>
              <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
            <!-- Left column -->
            <ul class="nav nav-stacked">
                <ul class="nav nav-stacked collapse in" id="userMenu">
                	<li> <a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                  <li class="active"><a href="datadirileader.php"><i class="glyphicon glyphicon-user"></i> Lihat Data Diri</a></li>
                  <li><a href="downgrade.php"><i class="glyphicon glyphicon-circle-arrow-down"></i> Downgrade</a></li>
                  <li><a href="datamember.php"><i class="glyphicon glyphicon-file"></i> Data Member</a></li>
                  <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                </ul>
            </ul>
        </div>
        <!-- /col-2 -->
        <div class="col-sm-10">
            <!-- column 2 -->
            <strong><i class="glyphicon glyphicon-user"></i> Melihat Data Diri</strong>
            <hr>

            <div class="row">
              <div class="col-md-3">
              </div>
              <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <!-- <i class="glyphicon glyphicon-wrench pull-right"></i> -->
                            <h4>Data Diri</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                      <form role="form" action="datadirileader.php" method="post">
                        <div class="control-group">
                            <label>NIM</label>
                            <div class="controls">
                                <input type="text" name="nim" class="form-control" value="<?php echo $data['nim'];?>" placeholder="Masukkan NIM Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Nama</label>
                            <div class="controls">
                                <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" placeholder="Masukkan Nama Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Program Studi</label>
                            <div class="controls">
                                <input type="text" name="prodi" class="form-control" value="<?php echo $data['prodi'];?>" placeholder="Program Studi Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Fakultas</label>
                            <div class="controls">
                                <input type="text" name="fakultas" class="form-control" value="<?php echo $data['fakultas'];?>" placeholder="Fakultas Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Angkatan</label>
                            <div class="controls">
                                <input type="text" name="angkatan" class="form-control" value="<?php echo $data['angkatan'];?>" placeholder="Masukkan Angkatan Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Jenis Kelamin</label>
                            <div class="controls">
                                <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $data['jenis_kelamin'];?>" placeholder="Jenis Kelamin Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Tempat Lahir</label>
                            <div class="controls">
                                <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $data['tempat_lahir'];?>" placeholder="Tempat Lahir Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Tanggal Lahir</label>
                            <div class="controls">
                                <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $data['tanggal_lahir'];?>" placeholder="Tanggal Lahir Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Alamat</label>
                            <div class="controls">
                                <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'];?>" placeholder="Masukkan Alamat Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Telepon</label>
                            <div class="controls">
                                <input type="text" name="telepon" class="form-control" value="<?php echo $data['telepon'];?>" placeholder="Nomor Telepon Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Email</label>
                            <div class="controls">
                                <input type="text" name="email" class="form-control" value="<?php echo $data['email'];?>" placeholder="Masukkan Email Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Sosial Media</label>
                            <div class="controls">
                                <textarea class="form-control" cols="50" rows="10" name="sosmed" placeholder="Sosial Media Anda"><?php echo $data['sosmed'];?></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Agama</label>
                            <div class="controls">
                                <input type="text" name="agama" class="form-control" value="<?php echo $data['agama'];?>" placeholder="Agama Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Kewarganegaraan</label>
                            <div class="controls">
                                <input type="text" name="kewarganegaraan" class="form-control" value="<?php echo $data['kewarganegaraan'];?>" placeholder="Kewarganegaraan Anda">
                            </div>
                        </div>
                        <div class="control-group">
                            <label></label>
                            <div class="controls">
                                <button type="submit" name="ubah" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                      </form>
                    </div>
                    <!--/panel content-->
                </div>
                <!--/panel-->
              </div>
              <div class="col-md-3">
              </div>
            </div>
            <!--/row-->
        </div>
        <!--/col-span-9-->
    </div>
</div>
<!-- /Main -->

<footer class="text-center"><strong>Copyright 2016 - Find Your Partner</strong></footer>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>
