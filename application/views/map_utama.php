
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBU4ozT2gwSNOibrQsc6zSCE9157kpFzyk&callback=initMap"
  type="text/javascript"></script>
<style>
         
          #map {
               width: 100%;
               height: 600px;
           
          }
</style>
 
<script type="text/javascript">
 
     //Mendefinisikan alamat icons yang akan digunakan
    var customIcons = {
      1: {
        icon: 'assets/icons/fasion.png'
      }
    };
 
    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(-6.911717, 107.608060),
        zoom: 12,
        mapTypeId: 'hybrid'
      });
      var infoWindow = new google.maps.InfoWindow;
 
      // Bagian ini digunakan untuk mendapatkan data format XML yang dibentuk dalam datalokasimapsbdg.php
      downloadUrl("<?php echo base_url(); ?>welcome/tampilXML", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var id = markers[i].getAttribute("id");
          var name = markers[i].getAttribute("name");
          var deskrip = markers[i].getAttribute("deskrip");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b><br/>" + deskrip + "<br/> <br/>"  + "<a href='<?php echo base_url(); ?>welcome/detailCFD/"+ id +"'>Detail</a>";
          var icon = customIcons[1] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
 
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }
 
    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }
 
    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;
 
      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };
 
      request.open('GET', url, true);
      request.send(null);
    }
 
    function doNothing() {}
 
</script> 
</head>
 <body onLoad="load()"> 
<center> 
<div id="map"></div> 
</center>
