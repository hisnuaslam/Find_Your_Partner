<?php session_start(); ?>
<?php
    if(isset($_SESSION['level'] )) {
        if($_SESSION['level'] != 3)
        {
            header('Location:errormessege.php');
        }
    }
     else{
        header('Location:index.php');
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
                	<li class="active"> <a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                  <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                </ul>
            </ul>
        </div>
        <!-- /col-2 -->
        <div class="col-sm-10">
            <!-- column 2 -->
            <strong><i class="glyphicon glyphicon-user"></i> Daftar Kelompok KKN Mandiri</strong>
            <hr>

            <div class="row">
              <div class="table-responsive">
                  <table class="table table-striped">
                      <thead>
                          <tr>
                            <th>Kota</th>
                            <th>Ketua</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Tgl Mulai Pendaftaran</th>
                            <th>Tgl Screening</th>
                            <th>Tgl Pengumuman</th>
                            <th>Batas Akhir Pendaftaran</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <?php
                              require 'koneksiall.php';
                              $action = isset($_GET['action']) ? $_GET['action'] : "";
                              if($action=='deleted') {
                                echo "<div class='alert alert-success'>Data telah dihapus.</div>";
                              }
                              $sql="SELECT * FROM lokasi";
                              $result_set=mysqli_query($koneksi,$sql);
                              if($result_set ){
                                while($row=mysqli_fetch_array($result_set))
                                {
                            ?>
                            <tr>
                              <td><?php echo $row['kota']; ?></td>
                              <td><?php echo $row['ketua'] ?></td>
                              <td><?php echo $row['latitude'] ?></td>
                              <td><?php echo $row['longitude'] ?></td>
                              <td><?php echo $row['tglmulai'] ?></td>
                              <td><?php echo $row['tglscreening'] ?></td>
                              <td><?php echo $row['tglpengumuman'] ?></td>
                              <td><?php echo $row['tglakhir'] ?></td>
                              <td><?php $id = $row['id']; echo "<button onclick = 'delete_mapmarker(\"$id\");'  class='btn btn-danger'>Delete</button>"; ?></td>
                            </tr>
                          </tr>
                        <?php
                                }
                              }
                        ?>
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
      function delete_mapmarker(id){

          var answer = confirm('Yakin?');
          if (answer){
              // if user clicked ok,
              // pass the id to delete.php and execute the delete query
              window.location = 'delete.php?id=' + id;
          }
      }
    </script>
	</body>
</html>
