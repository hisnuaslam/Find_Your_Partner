<!--header-->
<?php include_once './header.php'; ?>
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

<!-- navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Beranda</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<!-- ending navbar -->

<!--Side Content-->
<div class="content-isi ">
	<!--Title Menu-->
	<div class="title-menu">
		<!--Content Page-->
		<div class="col-lg-12">
			<div class="container">
				<!-- <div class="row"> -->
				<?php include_once './map_index.php'; ?>
				<!--Content Page-->
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
                tabel += "<td>" + data[i].kota + "</td>";
                tabel += "<td>" + data[i].ketua + "</td>";
                tabel += "<td>" + data[i].lokasi + "</td>";
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
			<!--Content Page--></div>
		<!--Side Content-->
		<!--footer-->
		<?php include_once './footer.php'; ?>
