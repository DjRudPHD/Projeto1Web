<html>
<head>
<title>Pontos Culturais da Cidade de Hortolandia</title>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.0-rc.3/dist/leaflet.css" />
<script>
function mapaloc(lt,lg){
		mymap.setView([lt, lg], 15);
	}
</script>	
</head>
<style>
#mapid { height: 180px; }
</style>
<body>
<div class="menu">
<?php include 'header.php';?><br>
<h2>Encontre abaixo os ponto cultutais de nossa cidade</h2/><br>
<div id="mapid" style="width: 750px; height: 500px"></div>
	<script src="https://unpkg.com/leaflet@1.0.0-rc.3/dist/leaflet.js"></script>
	<script>
	
		var mymap = L.map('mapid').setView([-22.866270,-47.206627], 13);
		

		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw', {
			maxZoom: 18,
			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
				'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="http://mapbox.com">Mapbox</a>',
			id: 'mapbox.streets'
		}).addTo(mymap);
		
	
		var LeafIcon = L.Icon.extend({
			options: {
				shadowUrl: 'img/iconesh.png',
				iconSize:     [50, 50],
				shadowSize:   [51, 51],
				iconAnchor:   [4, 62],
				shadowAnchor: [4, 62],
				popupAnchor:  [-3, -76]
			}
		});

		var tangeIcon = new LeafIcon({iconUrl: 'img/iconetange.png'}),
			azulIcon = new LeafIcon({iconUrl: 'img/iconeazul.png'}),
			roxoIcon = new LeafIcon({iconUrl: 'img/iconeroxo.png'});
			cianoIcon = new LeafIcon({iconUrl: 'img/icone.png'});

		L.marker([-22.896439, -47.169500], {icon: tangeIcon}).bindPopup("Parque Socioambiental Dorothy Stang").addTo(mymap);
		L.marker([-22.890485, -47.199333], {icon: azulIcon}).bindPopup("Parque Santa Clara (CREAPE)").addTo(mymap);
		L.marker([-22.868042, -47.218688], {icon: roxoIcon}).bindPopup("Parque Linear Chico Mendes").addTo(mymap);
		L.marker([-22.860132, -47.219354], {icon: cianoIcon}).bindPopup("Antiga Estação Ferroviária de Hortolândia").addTo(mymap);

	</script>
<p>
<table>
<tr><td>Parque Socioambiental Dorothy Stang</td><td><button onclick="mapaloc(-22.896439, -47.169500);">Visitar</button></td></tr>
<tr><td>Parque Santa Clara (CREAPE)</td><td><button onclick="mapaloc(-22.890485, -47.199333);">Visitar</button></td></tr>
<tr><td>Parque Linear Chico Mendes</td><td><button onclick="mapaloc(-22.868042, -47.218688);">Visitar</button></td></tr>
<tr><td>Antiga Estação Ferroviária de Hortolândia</td><td><button onclick="mapaloc(-22.860132, -47.219354);">Visitar</button></td></tr>
</table>
<p>
<?php include 'footer.php';?>
</body>
</html>