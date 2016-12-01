<!--header-->
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
        <div class="col-lg-3">
            <ol class="breadcrumb">
                <div class="col-lg-3"><a href="logout.php">Logout</a></div>
        </div><!--/Title Direction-->
        <div class="clearfix"></div>
        <hr>
    </div><!--Title Menu-->

<?php include_once './map_leader.php'; ?>
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


<script>
window.onload = loadMarker();

function loadMarker() {
    $.ajax('datakoordinat_leader.php', {
            'type':'GET'
        })
        .done(function(data) {
            var tabel = "<div class='table-responsive'><table cellpadding='2' cellspacing='2' class='data_table'>"+
                        "<tr id='tr'>" +
                        "<td>ID</td>" +
                        "<td> Latitude</td>" +
                        "<td>Longitude</td>" +
                        "<td>Kota</td>" +
                        "<td>Ketua</td>" +
                        "<td>Lokasi</td>" +
                        "<td>Proker1</td>" +
                        "<td>Proker2</td>" +
                        "<td>Proker3</td>" +

                        "</tr>";
            for (var i = 0; i < data.length; i++) {
                tabel += "<tr id='tr2'>";
                tabel += "<td>" + data[i].id + "</td>";
                tabel += "<td>" + data[i].latitude + "</td>";
                tabel += "<td>" + data[i].longitude + "</td>";
                tabel += "<td>" + data[i].kota + "</td>";
                tabel += "<td>" + data[i].ketua + "</td>";
                tabel += "<td>" + data[i].lokasi + "</td>";
                tabel += "<td>" + data[i].proker1 + "</td>";
                tabel += "<td>" + data[i].proker2 + "</td>";
                tabel += "<td>" + data[i].proker3 + "</td>";
                tabel += "</tr>";
                var marker = placeMarker({lat: parseFloat(data[i].latitude), lng: parseFloat(data[i].longitude)});
                // console.log(marker);
                addClickListener(marker);
            };
            // podo wae
            // document.getElementById('txtHint').innerHTML = tabel;
            $('#txtHint').html(tabel);
        });
}

</script>
</head>

<body id="home">

  
<!-- header area -->

<!-- colored section -->
<section id="order">
    <div class="wrapper clearfix">
    
<div id="container">
 <h2>Liat Latitude Longitude</h2>

<select name="cucian" onchange="showUser(this.value)">
  <option value="all">Liat</option>
  <option value="all">All</option>
<!--   <option value="Finish">Finish</option>
  <option value="OnProcess">On Process</option>
  <option value="OnWay">On Way</option> -->
</select>

<br>
<div id="txtHint"><b></b></div>
 </div>

</div>

</section><!-- #end colored section -->

<!-- footer area -->    

<!-- jQuery -->

<script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js">\x3C/script>')</script>







<div class="col-lg-9 ">

    <div class="col-lg-12">
        
        </div>
        
    </div>
    <!--Content Page-->
</div><!--Side Content-->
<!--footer-->
<?php include_once './footer.php'; ?>

