<style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
    <div id="map"></div>
    <div id="current">Belum ada Kordinat</div>

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script>
      // $("#myModal").modal('hide');
      var map, whitebox_window, infowindow;
      function initMap() {
        var uluru = {lat: -2.063, lng: 118.044};
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: uluru
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
          //kondisi mengklik sebagai tanda
          google.maps.event.addListener(marker, "click", function (event) {
            var lat=event.latLng.lat().toFixed(3);
            var lng = event.latLng.lng().toFixed(3);

            $.ajax("datakoordinat_member.php",{
              type:"GET",
              data:{"lat":lat, "long":lng}
            })
            .done(function(data){
              showInfoWindow(data, marker);
            });

            document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: '
                                                      + event.latLng.lat().toFixed(3)
                                                      + ' Current Lng: ' + event.latLng.lng().toFixed(3)
                                                      + '</p>';
          });
        }

        function showInfoWindow(data, marker) {
          //setelah di-klik, maka menampilkan data di bawah ini
          console.log(data);
          var content = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h1 id="firstHeading" class="firstHeading">' + data[0].nama_kota + '</h1>'+
                '<div id="bodyContent">'+
                '<p><b>Ketua </b>,: ' + data[0].nim_ketua + '</p>'+
                '<p><b>Lokasi </b>,: ' + data[0].alamat_lokasi + '</p>'+
                '<p><b>Tanggal Mulai Pendaftaran </b>,:' + data[0].tgl_awal+'</p>'+
                '<p><b>Batas Akhir Pendaftaran </b>,:' + data[0].tgl_akhir + '</p>'+
                '<p><b>Tanggal Screening </b>,:' + data[0].tgl_screening + '</p>'+
                '<p><b>Pengumuman Pendaftaran</b>,:' + data[0].tgl_pengumuman + '</p>'
                '</div>'+

                '</div>';
            var infowindow = new google.maps.InfoWindow({
              content: content
            });
            infowindow.open(map, marker);
        }

    </script>

<?php include_once './formeditdata.php'; ?>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGadGh7BlMHBmouYwl_LdutF4AIe5o2vs&callback=initMap">
    </script>
