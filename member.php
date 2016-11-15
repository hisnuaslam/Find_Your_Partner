<!--header-->
<?php include_once './header.php'; ?>

<?php 
    if(isset($_SESSION['level'] )) {
        if($_SESSION['level'] != 2)
        {
            header('Location:errormessege.php');

        }
    } 
     else{

        header('Location:index.php');
    }
?>
<!--Side Content-->
<div class="content-isi ">
    <!--Title Menu-->
    <div class="title-menu">
        <!--Title Page-->
        <div class="col-lg-9"><h1>Hi, <?php echo $_SESSION['username'] ;?> !</h1></div><!--/Title Page-->
        <!--Title Direction-->
        <div class="col-lg-3">
            <ol class="breadcrumb">
                <div class="col-lg-3"><a href="logout.php">Logout</a></div>
        </div><!--/Title Direction-->
        <div class="clearfix"></div>
        <hr>
    </div><!--Title Menu-->

<?php include_once './map_member.php'; ?>
    <!--Content Page-->

    <!--content-menu-->
<!-- <div class="col-lg-3 content-menu">
    <ul class="nav nav-pills nav-stacked collapsed">
       
        <li role="presentation" class="active" >
            <a href="#" ><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>Mahasiswa</a>
            <ul class="nav nav-stacked">
                <li class="second-nav "><a href="verifikasidokumen.php">Verifikasi Dokumen</a></li>
                <li class="second-nav"><a href="dokumenlolosverifikasi.php">Daftar Dokumen Lolos Verifikasi</a></li>
                <li class="second-nav"><a href="logout.php">Logout</a></li>
            </ul>
        </li> 
    </ul>
</div> -->
<div class="col-lg-9 ">

    <div class="col-lg-12">
        
        </div>
        
    </div>
    <!--Content Page-->
</div><!--Side Content-->
<!--footer-->
<?php include_once './footer.php'; ?>

