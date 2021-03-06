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
    $data = getDataToDowngrade($_SESSION['username']); //digunakan sebagai primary key
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
                  <li><a href="datadirileader.php"><i class="glyphicon glyphicon-user"></i> Lihat Data Diri</a></li>
                  <li class="active"><a href="downgrade.php"><i class="glyphicon glyphicon-circle-arrow-down"></i> Downgrade</a></li>
                  <li><a href="datamember.php"><i class="glyphicon glyphicon-file"></i> Data Member</a></li>
                  <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                </ul>
            </ul>
        </div>
        <!-- /col-2 -->
        <div class="col-sm-10">
            <!-- column 2 -->
            <strong><i class="glyphicon glyphicon-circle-arrow-down"></i> Downgrade</strong>
            <hr>

            <div class="row">
              <div class="table-responsive">
                  <table class="table table-striped">
                      <thead>
                          <tr>
                            <th></th>
                            <th>Keterangan</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><b>NIM</b></td>
                          <td><?php echo $data['nim']; ?></td>
                        </tr>
                        <tr>
                          <td><b>Nama</b></td>
                          <td><?php echo $data['nama']; ?></td>
                        </tr>
                        <tr>
                          <td><b>Program Studi</b></td>
                          <td><?php echo $data['prodi']; ?></td>
                        </tr>
                        <tr>
                          <td><b>Fakultas</b></td>
                          <td><?php echo $data['fakultas']; ?></td>
                        </tr>
                        <tr>
                          <td><b>Level</b></td>
                          <td>
                            <?php
                              if($data['level']==1){
                                echo "Leader";
                              } else {
                                echo "-";
                              }
                             ?>
                          </td>
                        </tr>
                        <tr>
                          <td><b>Kota</b></td>
                          <td><?php echo $data['nama_kota']; ?></td>
                        </tr>
                        <tr>
                          <td><b>Alamat Lokasi</b></td>
                          <td><?php echo $data['alamat_lokasi']; ?></td>
                        </tr>
                        <tr>
                          <td><b>Downgrade Level</b></td>
                          <td>
                            <?php $nim_ubah = $data['nim']; echo "<button onclick = 'ubah_level(\"$nim_ubah\");'  class='btn btn-danger'>Downgrade</button>"; ?>
                            </br>* Ingat! Level tidak bisa diubah kembali!
                          </td>
                        </tr>
                      </tbody>
                  </table>
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
    <script type='text/javascript'>
      function ubah_level(nim_ubah){

          var answer = confirm('Apakah Anda yakin untuk menjadi Member?');
          if (answer){
              // if user clicked ok,
              // pass the id to delete.php and execute the delete query
              window.location = 'dodowngrade.php?nim_ubah=' + nim_ubah;
          }
      }
    </script>
	</body>
</html>
