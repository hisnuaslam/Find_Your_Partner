<!--header-->
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


<title>FIND YOUR PARTNER</title>

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
        <div class="col-lg-9"><h1>ERROR PAGE</h1></div><!--/Title Page-->
        <!--Title Direction-->
        <div class="col-lg-3">
            </div><!--/Title Direction-->
        <div class="clearfix"></div>
        <hr>
    </div><!--Title Menu-->
    <!--Content Page-->
    <div class="col-lg-12">
        <div class="container">
        <div class="row">
             
			<strong>ERROR FOUND... </strong>


        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </div>
    <!--Content Page-->
</div><!--Side Content-->
<!--footer-->
<?php include_once './footer.php'; ?>
