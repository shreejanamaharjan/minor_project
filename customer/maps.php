<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get User Location and Calculate Distance Example</title>
</head>
<body>
  <div>
    <input type="text" id="addressInput" placeholder="Address">
    <button onclick="getUserLocation()">Get My Location</button>
  </div>

  <div>
    <h3>Destination</h3>
    <input type="text" id="destinationInput" placeholder="Destination Address">
    <button onclick="calculateDistance()">Calculate Distance</button>
    <p id="distanceResult"></p>
  </div>

  <script>
    let userLatitude = null;
    let userLongitude = null;

    function getUserLocation() {
      if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(showUserLocation);
      } else {
        console.log("Geolocation is not supported by this browser.");
      }
    }

    function showUserLocation(position) {
      userLatitude = position.coords.latitude;
      userLongitude = position.coords.longitude;

      const url = `https://nominatim.openstreetmap.org/reverse?lat=${userLatitude}&lon=${userLongitude}&format=json`;

      fetch(url)
        .then(response => response.json())
        .then(data => {
          const address = data.display_name;
          const addressInput = document.getElementById('addressInput');
          addressInput.value = address;
        })
        .catch(error => {
          console.log('Error:', error);
        });
    }

    function calculateDistance() {
      const destinationInput = document.getElementById('destinationInput');
      const destinationAddress = destinationInput.value;

      if (userLatitude === null || userLongitude === null) {
        console.log("User location not available.");
        return;
      }

      if (destinationAddress.trim() === "") {
        console.log("Please enter a destination address.");
        return;
      }

      const url = `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(destinationAddress)}`;

      fetch(url)
        .then(response => response.json())
        .then(data => {
          if (data.length > 0) {
            const destinationLatitude = parseFloat(data[0].lat);
            const destinationLongitude = parseFloat(data[0].lon);

            const distance = calculateDistanceBetweenPoints(userLatitude, userLongitude, destinationLatitude, destinationLongitude);
            const distanceResult = document.getElementById('distanceResult');
            distanceResult.textContent = `Distance: ${distance.toFixed(2)} kilometers`;
          } else {
            console.log("No results found for the destination address.");
          }
        })
        .catch(error => {
          console.log('Error:', error);
        });
    }

    function calculateDistanceBetweenPoints(lat1, lon1, lat2, lon2) {
      const earthRadius = 6371; // Radius of the Earth in kilometers
      const dLat = degToRad(lat2 - lat1);
      const dLon = degToRad(lon2 - lon1);

      const a =
        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        Math.cos(degToRad(lat1)) * Math.cos(degToRad(lat2)) *
        Math.sin(dLon / 2) * Math.sin(dLon / 2);

      const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
      const distance = earthRadius * c;
      return distance;
    }

    function degToRad(degrees) {
      return degrees * (Math.PI / 180);
    }
  </script>
</body>
</html>
