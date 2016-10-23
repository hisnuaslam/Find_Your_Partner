<!--header-->
<?php include_once './header.php'; ?>
<?php 
    if(isset($_SESSION['level'] )) {
        if($_SESSION['level'] == 1 )
        {
            header('Location:administrator.php');

        }
        elseif($_SESSION['level'] == 2)
        {
            header('Location:peserta.php');
        }
        
    } 

   
?>


<title>Wisuda Online UNS</title>

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
        <div class="col-lg-9"><h1>Hi, Aslam !</h1></div><!--/Title Page-->
        <!--Title Direction-->
        
       

    </div><!--Title Menu-->
    <!--Content Page-->
    <div class="col-lg-12">
        <div class="container">
        <!-- <div class="row"> -->
             <div class="login">
                
<select id="selectid" name="selectname" onchange="jsfunc1()">
    <option value="val1" id="valid1"> Val1 </option>
    <option value="val2" id="valid2"> Val2 </option>
    <option value="val3" id="valid3"> Val3 </option>
</select>
                <script> if(document.getElementById('selectid').value == "val1") {
     
}               </script>
                <?php
                if(isset($_POST['login'])){
                    include("koneksiall.php");
                    
                    $username   = $_POST['username'];
                    $password   = $_POST['password'];
                    $level      = $_POST['level'];
    
                    
                    $query = mysqli_query($koneksi, "SELECT * FROM peserta WHERE username='$username' AND password='$password'");
                    if(mysqli_num_rows($query) == 0){
                        echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
                    }else{
                        $row = mysqli_fetch_assoc($query);
                        
                        if($row['level'] == 1 && $level == 1){
                            $_SESSION['username']=$username;
                            $_SESSION['level']='1';
                            header("Location: administrator.php");
                        }else if($row['level'] == 2 && $level == 2){
                            $_SESSION['username']=$username;
                            $_SESSION['level']='2';
                            $_SESSION['status'] = "";

                            if($row['checkpoint'] > 30) {
                                header("Location: gzyoualreadycompletethis.php");
                            } else {
                                header("Location: peserta.php");
                            }
                            
                        }else{
                            echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
                        }
                    }
                }
                ?>
                
                <!-- <form role="form" action="" method="post">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
                    </div>
                    <div class="form-group">
                        <select name="level" class="form-control" required>
                            <option value="">Pilih Level User</option>
                            <option value="1">Administrator</option>
                            <option value="2">Peserta</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" class="btn btn-primary btn-block" value="Log me in" />
                    </div>
                    <a href="daftar.php">Klik Disini untuk mendaftar!</a>
                </form>
            </div> -->
<style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
            <h3>Find Your Partner Here ^^!</h3>
    <div id="map"></div>
    <div id="current">Belum ada Kordinat</div>
    <script>

      function initMap() {
        var uluru = {lat: -2.063, lng: 118.044};
        // var pati = {lat: -6.7486733, lng: 111.0379232};
        // var solo = {lat: -7.5755, lng: 110.8243};
        // var sukabumi = {lat: -6.9277, lng: 106.9300};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: uluru
        });
        // var marker1 = new google.maps.Marker({
        //   position: pati,
        //   map: map,
        //   title : 'Aku mau KKN Disini!'
       
//place marker use code below
        google.maps.event.addListener(map, 'click', function(event) {
        placeMarker(event.latLng);
        });

        function placeMarker(location) {
          var marker = new google.maps.Marker({
          position: location, 
          map: map
       });

          //make everytime you add marker to center maps
          map.setCenter(marker.position);
          marker.setMap(map);
          marker.setTitle('Tempat ini udah di booking ^^');



 var deskripsiSurakarta = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Surakarta</h1>'+
            '<div id="bodyContent">'+
            '<p><b>Ketua </b>,: Hisnuaslam</p>'+
            '<p><b>Lokasi </b>,: Ds Ngoresan Kec. Jebres</p>'+
            '<p><b>Proker </b>,:</p>'+
            '<p>- Pertanian : Irigasi sawah</p>'+
            '<p>- Kesehatan : Penyuluhan kesehatan tentang bahaya penyakit malaria</p>'+
            '<p>- Teknologi : Pembuatan sistem pengadaan barang di kantor kecamatan</p>'+
            '</div>'+
            '<button type="button">Join Now!</button>'+' '+' '+
            '<button type="button">Lihat Partner mu!</button>'
            '</div>';

// kasih pop up ke marker
var infowindow = new google.maps.InfoWindow({
          content: deskripsiSurakarta
        });



//creating lat and longitude everytime you click the marker
google.maps.event.addListener(marker, "click", function (event) {
    document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: '
    + event.latLng.lat().toFixed(3) + 
     ' Current Lng: ' + event.latLng.lng().toFixed(3) 
     + '</p>';
     infowindow.open(map, marker);


}); 
      }
    }

    </script>


    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGadGh7BlMHBmouYwl_LdutF4AIe5o2vs&callback=initMap">
    </script>

    
        </div>
   <!--  </div> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </div>
    <!--Content Page-->
</div><!--Side Content-->
<!--footer-->
<?php include_once './footer.php'; ?>
