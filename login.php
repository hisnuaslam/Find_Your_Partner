<?php session_start(); ?>
<?php
    if(isset($_SESSION['level'] )) {
        if($_SESSION['level'] == 1 )
        {
            header('Location:leader.php');
        }
        elseif($_SESSION['level'] == 2)
        {
            header('Location:member.php');
        }
        elseif($_SESSION['level'] == 3)
        {
            header('Location:administrator.php');
        }
    }
?>
<?php
                if(isset($_POST['login'])){
                    include("koneksiall.php");
                    $username   = $_POST['username'];
                    $password   = $_POST['password'];
                    $level      = $_POST['level'];
                    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
                    if(mysqli_num_rows($query) == 0){
                        echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
                    }else{
                        $row = mysqli_fetch_assoc($query);
                        if($row['level'] == 1 && $level == 1){
                            $_SESSION['username']=$username;
                            $_SESSION['nim']=$row['nim'];
                            $_SESSION['level']='1';
                            header("Location: leader.php");
                        }else if($row['level'] == 2 && $level == 2){
                            $_SESSION['username']=$username;
                            $_SESSION['nim']=$row['nim'];
                            $_SESSION['level']='2';
                            header("Location: member.php");
                        }else if($row['level'] == 3 && $level == 3){
                            $_SESSION['username']=$username;
                            $_SESSION['level']='3';
                            header("Location: administrator.php");
                        }else{
                            echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
                        }
                    }
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
                <li><a href="login.php"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
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
                  <li><a href="login.php"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
                </ul>
            </ul>
        </div>
        <!-- /col-2 -->
        <div class="col-sm-10">
            <!-- column 2 -->
            <strong><i class="glyphicon glyphicon-log-in"></i> Login</strong>
            <hr>

            <div class="row">
              <div class="col-md-3">
              </div>
              <div class = "col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <!-- <i class="glyphicon glyphicon-wrench pull-right"></i> -->
                            <h4>Login</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                      <form role="form" action="" method="post">
                          <div class="form-group">
                              <input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
                          </div>
                          <div class="form-group">
                              <input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
                          </div>
                          <div class="form-group">
                              <select name="level" class="form-control" required>
                                  <option value="">Pilih Level User</option>
                                  <option value="3">Administrator</option>
                                  <option value="1">Leader</option>
                                  <option value="2">Member</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <input type="submit" name="login" class="btn btn-primary btn-block" value="Log me in" />
                          </div>
                          <a href="daftar.php">Klik Disini untuk mendaftar!</a>
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
