<style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
            <h3>Find Your Partner Here ^^!</h3>
    <div id="map"></div>
    <div id="current">Belum ada Kordinat</div>

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script>
$("#myModal").modal('hide');
      function initMap() {
        var uluru = {lat: -2.063, lng: 118.044};
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

        // console.log(event.latLng);
        });

        function placeMarker(location) {
          var marker = new google.maps.Marker({
          position: location, 
          map: map
       });

          //make everytime you add marker to center maps
          map.setCenter(marker.position);
          marker.setMap(map);
          // marker.setTitle('Tempat ini udah di booking ^^');


// var deskripsiSurakarta = '<div id="content">'+
//             '<div id="siteNotice">'+
//             '</div>'+
//             '<h1 id="firstHeading" class="firstHeading">Surakarta</h1>'+
//             '<div id="bodyContent">'+
//             '<p><b>Ketua </b>,: Hisnuaslam</p>'+
//             '<p><b>Lokasi </b>,: Ds Ngoresan Kec. Jebres</p>'+
//             '<p><b>Proker </b>,:</p>'+
//             '<p>- Pertanian : Irigasi sawah</p>'+
//             '<p>- Kesehatan : Penyuluhan kesehatan tentang bahaya penyakit malaria</p>'+
//             '<p>- Teknologi : Pembuatan sistem pengadaan barang di kantor kecamatan</p>'+
//             '</div>'+
//             '<button type="button"><a href="join.php">Join Now!</a></button>'+' '+' '+
//             '<button type="button">Lihat Partner mu!</button>'
//             '</div>';

var whitebox_window = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h3 id="firstHeading" class="firstHeading">Hi, <?php echo $_SESSION['username'] ;?> !</h3>'+
            '<div id="bodyContent">'+
            '</div>'+
            '</div>';

// // kasih pop up ke marker
var infowindow = new google.maps.InfoWindow({
          content: whitebox_window
        });



//creating lat and longitude everytime you click the marker
google.maps.event.addListener(marker, "click", function (event) {
    document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: '
    + event.latLng.lat().toFixed(3) + 
     ' Current Lng: ' + event.latLng.lng().toFixed(3) 
     + '</p>';
     infowindow.open(map, marker);
$("#myModal").modal('show');
$("#lat").val(event.latLng.lat().toFixed(3));
$("#long").val(event.latLng.lng().toFixed(3));
}); 
      }
    }

    </script>

<?php include_once './formeditdata.php'; ?>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGadGh7BlMHBmouYwl_LdutF4AIe5o2vs&callback=initMap">
    </script>
