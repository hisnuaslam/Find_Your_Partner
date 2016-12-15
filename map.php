<style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
            <h3><!-- Find Your Partner Here ^^! --></h3>
    <div id="map"></div>
    <div id="current">Belum ada Kordinat</div>

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script>
$("#myModal").modal('hide');
    var map, whitebox_window, infowindow;
      function initMap() {
        var uluru = {lat: -2.063, lng: 118.044};
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: uluru
        });

        whitebox_window = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h3 id="firstHeading" class="firstHeading">Hi, <?php echo $_SESSION['username'] ;?> !</h3>'+
            '<div id="bodyContent">'+
            '</div>'+
            '</div>';
// // kasih pop up ke marker
        infowindow = new google.maps.InfoWindow({
          content: whitebox_window
        });

//place marker use code below
        google.maps.event.addListener(map, 'click', function(event) {
          var marker = placeMarker(event.latLng);
          map.setCenter(marker.position);
          marker.setMap(map);
          addClickListener(marker);
        });
      }

    function placeMarker(location) {
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
        return marker;
    }

    function addClickListener(marker) {
      google.maps.event.addListener(marker, "click", function (event) {
        document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: '
                                                  + event.latLng.lat().toFixed(3)
                                                  + ' Current Lng: ' + event.latLng.lng().toFixed(3)
                                                  + '</p>';

        infowindow.open(map, marker);
        $("#myModal").modal('show');
        $("#lat").val(event.latLng.lat().toFixed(3));
        $("#long").val(event.latLng.lng().toFixed(3));
      });
    }

    </script>

<?php include_once './formeditdata.php'; ?>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGadGh7BlMHBmouYwl_LdutF4AIe5o2vs&callback=initMap">
    </script>
