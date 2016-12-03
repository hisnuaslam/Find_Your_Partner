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
            margin-top:20px;
        }
    </style>


<!--Side Content-->
<div class="content-isi ">
    <!--Title Menu-->
    <div class="title-menu">
        <!--Title Page-->
        <div class="col-lg-9"><h1>Selamat Datang !</h1></div><!--/Title Page-->
        <!--Title Direction-->
        <div class="col-lg-3">
            
                <div class="col-lg-3"><a href="login.php"><h3>Login</h3></a></div>
        </div><!--/Title Direction-->
    <!--Content Page-->
    <div class="col-lg-12">
        <div class="container">
        <!-- <div class="row"> -->
              


              <?php include_once './map_index.php'; ?>
    <!--Content Page-->
<script>
window.onload = loadMarker();

function loadMarker() {
    $.ajax('datakoordinat_index.php', {
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
                        "<td>Proker 1</td>" +
                        "<td>Proker 2</td>" +
                        "<td>Proker 3</td>" +
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
    <!-- </div> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </div>
    <!--Content Page-->
</div><!--Side Content-->
<!--footer-->
<?php include_once './footer.php'; ?>
