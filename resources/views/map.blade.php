<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Investment Map</title>
  <style>
    #map{
      height:400px;
      width:100%;
    }
  </style>
</head>
<body>
  <div id="map"></div>
  <script>
    function initMap(){
      // Map options
      var options = {
        zoom:8,
        center:{lat:30.05611,lng:31.23944}
      }

      // New map
      var map = new google.maps.Map(document.getElementById('map'), options);

      /*
      // Add marker
      var marker = new google.maps.Marker({
        position:{lat:42.4668,lng:-70.9495},
        map:map,
        icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
      });

      var infoWindow = new google.maps.InfoWindow({
        content:'<h1>Lynn MA</h1>'
      });

      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });
      */

      // Array of markers
      var markers = [
        {
          coords:{lat:31.205753,lng:29.924526},
          content: '<h1>العقارات</h1>'
        },
        {
          coords:{lat:31.062520,lng:30.562699},
          content:'<h1>مصنع منتجات الالبان</h1>'
        },
        {
          coords:{lat:31.444353,lng:31.774139},
		  content:'<h1>الصناعات الخشبية و الاثاث</h1>'
        },
		{
          coords:{lat:31.233426,lng:32.300727},
		  content:'<h1>الصناعات الغذائية</h1>'
        },
		{
          coords:{lat:30.454334,lng:31.185283},
		  content:'<h1>العقارت و الصناعات الغذائية</h1>'
        },
		{
          coords:{lat:30.176926,lng:31.443737},
		  content:'<h1>العقارات و تصنيع المعادن</h1>'
        },
		{
          coords:{lat:30.034362,lng:31.251560},
		  content:'<h1>الصناعات الهندسية و الالكترونية و العقارات</h1>'
        },
		{
          coords:{lat:30.783285,lng:29.359667},
		  content:'<h1>الصناعات الهندسية و الالكترونية</h1>'
        },
		{
          coords:{lat:29.636478,lng:32.314285},
		  content:'<h1>التعليم و الصناعات الكيماوية</h1>'
        }
      ];

      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });

        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
    }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOZq0oRgrJ5cU66TkVvgyweGA2UsnzAw8&callback=initMap">
    </script>
</body>
</html>
