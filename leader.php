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
<!-- navbar -->
<nav class="navbar navbar-static-top" role="navigation">
<div class="navbar-right">
	<ul class="nav navbar-nav">
		<li class="dropdown user user-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<i class="glyphicon glyphicon-user"></i>
			<span><?php echo $_SESSION['username'] ;?> <i class="caret"></i></span>
			</a>
			<ul class="dropdown-menu">
				<!-- User image -->
				<li class="user-header bg-light-blue">
					<img src="images/avatar.png" class="img-circle" alt="User Image"/>
					<p>
						 <?php echo $_SESSION['username'] ;?>
					</p>
				</li>
				<!-- Menu Footer-->
				<li class="user-footer">
					<div class="pull-right">
						<a href="logout.php" class="btn btn-default btn-flat">Logout</a>
					</div>
				</li>
			</ul>
		</li>
	</ul>
</div>
</nav>
<!-- ending navbar -->
<!--Side Content-->
<div class="content-isi ">
	<!--Title Menu-->
	<div class="title-menu">
		<!--Title Direction-->
		<div class="col-lg-3">
			<ol class="breadcrumb">
				<div class="col-lg-6">
					<a href="lihatdatadirileader.php">Lihat Data diri</a>
				</div>
				<div class="col-lg-6">
					<a href="downgrade.php">Downgrade</a>
				</div>
				<div class="col-lg-6">
					<a href="datamember.php">Data Member</a>
				</div>
				<div class="col-lg-1">
					<a href="logout.php">Logout</a>
				</div>
			</div>
			<!--/Title Direction-->
			<div class="clearfix"></div>
			<hr>
    </div>
		<!--Title Menu-->
		<!--Content Page-->
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
		</head>
		<body id="home">
      <div class="wrapper row-offcanvas row-offcanvas-left">
          <!-- Left side column. contains the logo and sidebar -->
          <aside class="left-side sidebar-offcanvas">
              <!-- sidebar: style can be found in sidebar.less -->
              <section class="sidebar">
                  <!-- Sidebar user panel -->
                  <div class="user-panel">
                      <div class="pull-left image">
                          <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                      </div>
                      <div class="pull-left info">
                          <p>Hello, Jane</p>

                          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                      </div>
                  </div>
                  <!-- search form -->
                  <form action="#" method="get" class="sidebar-form">
                      <div class="input-group">
                          <input type="text" name="q" class="form-control" placeholder="Search..."/>
                          <span class="input-group-btn">
                              <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                          </span>
                      </div>
                  </form>
                  <!-- /.search form -->
                  <!-- sidebar menu: : style can be found in sidebar.less -->
                  <ul class="sidebar-menu">
                      <li class="active">
                          <a href="index.html">
                              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                          </a>
                      </li>
                      <li>
                          <a href="pages/widgets.html">
                              <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                          </a>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i class="fa fa-bar-chart-o"></i>
                              <span>Charts</span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                              <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                              <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i class="fa fa-laptop"></i>
                              <span>UI Elements</span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
                              <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                              <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                              <li><a href="pages/UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                              <li><a href="pages/UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i class="fa fa-edit"></i> <span>Forms</span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                              <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                              <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i class="fa fa-table"></i> <span>Tables</span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                              <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href="pages/calendar.html">
                              <i class="fa fa-calendar"></i> <span>Calendar</span>
                              <small class="badge pull-right bg-red">3</small>
                          </a>
                      </li>
                      <li>
                          <a href="pages/mailbox.html">
                              <i class="fa fa-envelope"></i> <span>Mailbox</span>
                              <small class="badge pull-right bg-yellow">12</small>
                          </a>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i class="fa fa-folder"></i> <span>Examples</span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                              <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                              <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                              <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                              <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                              <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                              <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                          </ul>
                      </li>
                  </ul>
              </section>
              <!-- /.sidebar -->
          </aside>

          <!-- Right side column. Contains the navbar and content of the page -->
          <aside class="right-side">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                  <h1>
                      Blank page
                      <small>Control panel</small>
                  </h1>
                  <ol class="breadcrumb">
                      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                      <li class="active">Blank page</li>
                  </ol>
              </section>
              <!-- Main content -->
              <section class="content">
                <?php include_once './map_leader.php'; ?>
              </section><!-- /.content -->
          </aside><!-- /.right-side -->
      </div><!-- ./wrapper -->
  		<section id="order">
  		<div class="wrapper clearfix">
  			<div id="container">
  				<h2>Liat Info KKN yang tersedia</h2>
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
	</div>
	<!--Side Content-->
	<!--footer-->
	<?php include_once './footer.php'; ?>
