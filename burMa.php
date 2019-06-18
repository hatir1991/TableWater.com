<!DOCTYPE html>
<html>
	<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
   integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
   crossorigin=""></script>
		<meta charset="utf-8">
	
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
			
			
			
			  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', { attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors' }).addTo(map);

   
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

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
<?php foreach($results as $res):?>
L.marker([<?php echo $res['lat']; ?>,<?php echo $res['lng']; ?>]).addTo(map).bindPopup('<?php echo $res['name']; ?>');
   	<?php endforeach; ?>
		L.marker([49.9457,36.26129]).addTo(map).bindPopup('65 метров арт обсад 42 в зеленку');
	</script>
	
	
	
		
	</body>
</html>