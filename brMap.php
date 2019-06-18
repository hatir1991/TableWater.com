<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
  integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==""crossorigin=""></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="leaflet.css" />
<script src="leaflet.js"></script>
		<meta charset="utf-8">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
		<style>
			body {
    padding: 0;
    margin: 0;
}
html, body, #map {
    height: 100%;
    width: 100%;
}
			body {
    padding: 0;
    margin: 0;
}
html, body, #map {
    height: 100%;
    width: 100%;
}
		</style>
		<title>Карта скважин</title>
	</head>
	<body>
	    	
	<?php require_once('Function.php');     
	$results=getAllMarkers();
	?>
	
	<div  id="map"></div>
	
	
	
	<script>
		
			var elem = document.getElementById('map');
			var map = L.map('map').setView([ 49.988358, 36.232845], 15);
			map.locate({setView: true, maxZoom: 16});
			
			
			
	

   
			function onLocationFound(e) {
    var radius = e.accuracy / 2;

    L.marker(e.latlng).addTo(map)
        .bindPopup("You are within " + radius + " meters from this point").openPopup();

    L.circle(e.latlng, radius).addTo(map);
}

map.on('locationfound', onLocationFound);
function onLocationError(e) {
    alert(e.message);
}

map.on('locationerror', onLocationError);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={pk.eyJ1IjoiaGF0aXIiLCJhIjoiY2p1eHFpa2hzMDhybTN5bzQ5OTJsZzM4ciJ9.Md_QKlt9ahnrbAUClm3bfA}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiaGF0aXIiLCJhIjoiY2p1eHFpa2hzMDhybTN5bzQ5OTJsZzM4ciJ9.Md_QKlt9ahnrbAUClm3bfA'
}).addTo(map);

<?php foreach($results as $res):?>
L.marker([<?php echo $res['lat']; ?>,<?php echo $res['lng']; ?>]).addTo(map).bindPopup('<?php echo $res['name']; ?>');
   	<?php endforeach; ?>
		L.marker([49.9457,36.26129]).addTo(map).bindPopup('65 метров арт обсад 42 в зеленку');
		<?php echo "привет" ; ?>
	</script>
	
		<?php echo "привет"  ?>

		
	</body>
</html>