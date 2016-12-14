<!--header-->
<?php include_once './header.php'; ?>

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
            margin-top:20px;
        }
    </style>


<!--Side Content-->
<div class="content-isi ">
    <!--Title Menu-->
    <div class="title-menu">
        <!--Title Page-->
        <div class="col-lg-9"><h1>Pendaftaran Find Your Partner</h1></div><!--/Title Page-->

       

        <hr>
    </div><!--Title Menu-->
    <!--Content Page-->
    <div class="col-lg-12">
        <div class="container">
        <div class="row">
             <div class="login">
                
                <?php
                if($_POST){
                    include("koneksiall.php");
                    
                    $nim        = $_POST['nim'];
                    $username   = $_POST['username'];
                    $password   = $_POST['password'];
                    $cpass      = $_POST['passwordconfirm'];
                    $captcha    = $_POST['captcha'];
                    $leveluser  = $_POST['leveluser'];

                    $sql = "SELECT * FROM user WHERE nim = '$nim'OR username = '$username' ";

                    $query = mysqli_query($koneksi, $sql);

                    if(mysqli_num_rows($query) > 0) {
                        echo "<div class = 'alert alert-danger'>NIM atau Username sudah digunakan</div>";
                    } else {
                        if($password != $cpass || $captcha != $_SESSION["code"]) {
                            echo "<div class = 'alert alert-danger'>Password dan Confirm Password tidak Sesuai atau Captcha salah</div>";
                        } else {
                            $sql = "INSERT INTO user VALUES ('$nim', '$username', '$password', '$leveluser')";
                            $query = mysqli_query($koneksi, $sql);

                            if($query) {
                                echo "<div class = 'alert alert-success'>Berhasil daftar</div>";
                            } else {
                                echo "<div class = 'alert alert-danger'>Gagal daftar</div>";
                            }
                        }
                    }
                }
                ?>
                
                <form role="form" action="daftar.php" method="post">
                    <div class="form-group">
                        <input type="text" name="nim" class="form-control" placeholder="NIM" required autofocus />
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username (min 8 chars)" pattern = ".{8,}" required autofocus />
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password (min 8 chars)" pattern = ".{8,}" required autofocus />
                    </div>
                    <div class="form-group">
                        <input type="password" name="passwordconfirm" class="form-control" placeholder="Confirm Password" required autofocus />
                    </div>
                    <div class="form-group">
                        <select name="leveluser" class="form-control" required>
                            <option value="">Pilih Sebagai...</option>
                            <option value="1">Leader</option>
                            <option value="2">Member</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="captcha">Input Captcha <img src="captcha.php" /> </label>
                      <div>
                      <input type="text" class="form-control" name="captcha" required>
                      </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="daftar" class="btn btn-primary btn-block" value="Daftar" />
                    </div>
<br><br>




                    <!-- <div class="section"><b>Upload Foto</b></div>
    <div class="inner-wrap">
        <form action="uploadfoto.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" /><br>
        <button type="submit" name="btn-upload">upload</button>
        </form>
    </div> -->
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
