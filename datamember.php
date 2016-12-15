<?php include_once './header.php'; ?>

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
?>
<!--Side Content-->
<div class="content-isi ">
    <!--Title Menu-->
    <div class="title-menu">
        <!--Title Page-->
        <div class="col-lg-9"><h1>Hi, <?php echo $_SESSION['username'] ;?> !</h1></div><!--/Title Page-->
        <!--Title Direction-->
        <div class="clearfix"></div>
        <hr>
    </div><!--Title Menu-->

    <!--Content Page-->

    <!--content-menu-->
<div class="col-lg-3 content-menu">
    <ul class="nav nav-pills nav-stacked collapsed">
        <!--Transaksi-->
        <li role="presentation" class="active" >
            <a href="#" ><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>Have Fun !</a>
            <ul class="nav nav-stacked">
                <li class="second-nav "><a href="datamember.php">Data Member</a></li>
                <li class="second-nav "><a href="logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</div>
<div class="col-lg-9 ">

    <div class="col-lg-12">
            <style>
                table {
                    width:100%;
                }
                table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 5px;
                    text-align: left;
                }
                table#t01 tr:nth-child(even) {
                    background-color: #eee;
                }
                table#t01 tr:nth-child(odd) {
                    background-color:#fff;
                }
                table#t01 th {
                    background-color: black;
                    color: white;
                }
            </style>


            <table id="t01">
            <tr>
            <!-- <th>Id</th> -->
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
    ?></table>
        </div>

    </div>
    <!--Content Page-->
</div><!--Side Content-->

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

<!--footer-->
<?php include_once './footer.php'; ?>
