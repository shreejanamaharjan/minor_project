<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  
</head>
<body>
<button id="openMapButton">Open Map</button>
  <div id="map" style="height: 400px;"></div>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script>
  document.getElementById('openMapButton').addEventListener('click', function () {
    // Create the map if it's not already initialized
    if (!window.map) {
      // Replace 'YOUR_LATITUDE' and 'YOUR_LONGITUDE' with the desired coordinates for the initial center of the map
      const initialLatLng = [27.712021, 85.312950 ];
      
      // Create the map and set its initial view to the specified coordinates
      window.map = L.map('map').setView(initialLatLng, 13);
      
      // Add a tile layer to display the map. You can use other tile layers as well.
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(window.map);
    }
  });
</script>

 
</body>
</html>