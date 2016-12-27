<?php session_start(); ?>
<?php
    if(isset($_SESSION['level'] )) {
      //memilih session apakah leader, member, atau administrator
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
            <strong><i class="glyphicon glyphicon-map-marker"></i> Melihat Peta Lokasi</strong>
            <hr>

            <div class="row">
                <?php include_once './map_index.php'; ?>
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
		<script>
			window.onload = loadMarker();
			function loadMarker() {
			  //fungsi untuk menampilkan loadMarker
			    $.ajax('datakoordinat_index.php', {
			            'type':'GET'
			        })
			        .done(function(data) {
			            var tabel = "<div class='table-responsive'><table cellpadding='2' cellspacing='2' class='data_table'>"+
			                        "<tr id='tr'>" +
			                        "<td>ID</td>" +
			                        "<td>Latitude</td>" +
			                        "<td>Longitude</td>" +
			                        "<td>Kota</td>" +
			                        "<td>Ketua</td>" +
			                        "<td>Lokasi</td>" +
			                        "</tr>";
			            for (var i = 0; i < data.length; i++) {
			                tabel += "<tr id='tr2'>";
			                tabel += "<td>" + data[i].id + "</td>";
			                tabel += "<td>" + data[i].latitude + "</td>";
			                tabel += "<td>" + data[i].longitude + "</td>";
			                tabel += "<td>" + data[i].nama_kota + "</td>";
			                tabel += "<td>" + data[i].nim_ketua + "</td>";
			                tabel += "<td>" + data[i].alamat_lokasi + "</td>";
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
	</body>
</html>
