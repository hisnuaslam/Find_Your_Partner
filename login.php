<?php include_once './header.php'; ?>
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
<title>Find Your Partner</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color:#eee;
        }
        .row {
            margin:100px auto;
            width:300px;
            text-align:center;
        }
        .login {
            background-color:#fff;
            padding:20px;
            /*margin-top:20px;*/
        }
    </style>
    <!-- navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li>
                  <a href="login.php">
                    <span class="glyphicon glyphicon-log-in"></span>
                    Login
                  </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ending navbar -->

<!--Side Content-->
<div class="content-isi ">
    <!--Title Menu-->
    <!--Content Page-->
    <div class="col-lg-12">
        <div class="container">
        <div class="row">
             <div class="login">
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
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </div>
    <!--Content Page-->
</div><!--Side Content-->
<!--footer-->
<?php include_once './footer.php'; ?>
