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
		<div class="col-lg-9">
			<h1>Hi, <?php echo $_SESSION['username'] ;?>!</h1>
		</div>
		<!--/Title Page-->
		<!--Title Direction-->
		<div class="col-lg-3">
			<ol class="breadcrumb">
				<div class="col-lg-3">
					<h3><a href="logout.php">Logout</a></a>
				</div>
			</div>
			<!--/Title Direction-->
			<div class="clearfix"></div>
			<hr></div>
		<!--Title Menu-->
		<?php include_once './map_member.php'; ?>
		<!--Content Page-->
		<script>
window.onload = loadMarker();
function loadMarker() {
    $.ajax('datakoordinat_member.php', {
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
                addClickListener(marker);
            };
            $('#txtHint').html(tabel);
        });
}
		</script>
		<body id="home">
		<!-- header area -->
		<!-- colored section -->
		<section id="order">
		<div class="wrapper clearfix">
			<div id="container">
				<h2>Liat Info KKN yang Tersedia</h2>
				<select name="cucian" onchange="showUser(this.value)">
					<option value="all">Liat</option>
					<option value="all">All</option>
				</select>
				<br>
				<div id="txtHint">
					<b></b>
				</div>
			</div>
		</div>
		</section>
		<!-- #end colored section -->
		<!-- footer area -->
		<!-- jQuery -->
		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js">\x3C/script>')</script>
		<div class="col-lg-9 ">
			<div class="col-lg-12"></div>
		</div>
		<!--Content Page--></div>
	<!--Side Content-->
	<!--footer-->
	<?php include_once './footer.php'; ?>
