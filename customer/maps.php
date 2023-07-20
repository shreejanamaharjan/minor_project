<!-- <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<div id="output"></div>
<script>
const options = {
enableHighAccuracy: true, 
// Get high accuracy reading, if available (default false)
timeout: 5000, 
// Time to return a position successfully before error (default infinity)
maximumAge: 2000, 
// Milliseconds for which it is acceptable to use cached position (default 0)
};
navigator.geolocation.watchPosition(success, error, options);
// Fires success function immediately and when user position changes
function success(pos) {
const lat = pos.coords.latitude;
const lng = pos.coords.longitude;
const accuracy = pos.coords.accuracy; // Accuracy in metres
document.getElementById('output').innerText = `
User coordinates: 
Latitude ${lat}.
Longitude ${lng}.
Estimation accurate within ${Math.round(accuracy)} metres.`;
}
function error(err) {
if (err.code === 1) {
alert("Please allow geolocation access");
// Runs if user refuses access
} else {
alert("Cannot get current location");
// Runs if there was a technical problem.
}
}
</script>
  
</body>
</html> -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<div id="output"></div>
<script>
const options = {
  enableHighAccuracy: true, 
  timeout: 5000, 
  maximumAge: 2000, 
};

navigator.geolocation.watchPosition(success, error, options);

function success(pos) {
  const lat = pos.coords.latitude;
  const lng = pos.coords.longitude;
  const accuracy = pos.coords.accuracy;

  // User's current location coordinates
  const userLocation = {
    lat: lat,
    lng: lng
  };

  // Coordinates of another point you want to calculate the distance to (e.g., destination location)
  const destinationLocation = {
    lat: 27.7161438, 
    lng: 85.2632886, 
  };

  // Calculate the distance between two sets of latitude and longitude using the Haversine formula
  const distance = calculateDistance(userLocation, destinationLocation);

  document.getElementById('output').innerText = `
  User coordinates: 
  Latitude ${lat}.
  Longitude ${lng}.
  Estimation accurate within ${Math.round(accuracy)} metres.
  Distance to destination: ${Math.round(distance)} kilometers.`;
}

function error(err) {
  if (err.code === 1) {
    alert("Please allow geolocation access");
  } else {
    alert("Cannot get current location");
  }
}

function calculateDistance(coords1, coords2) {
  const earthRadius = 6371; // Radius of the Earth in kilometers
  const lat1 = toRadians(coords1.lat);
  const lat2 = toRadians(coords2.lat);
  const lon1 = toRadians(coords1.lng);
  const lon2 = toRadians(coords2.lng);

  const dLat = lat2 - lat1;
  const dLon = lon2 - lon1;

  const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(lat1) * Math.cos(lat2) *
            Math.sin(dLon / 2) * Math.sin(dLon / 2);

  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

  const distance = earthRadius * c;

  return distance;
}

function toRadians(degrees) {
  return degrees * Math.PI / 180;
}
</script>
  
</body>
</html> -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<div id="output"></div>
<button id="getLocationBtn">Get Location</button>
<script>
const options = {
  enableHighAccuracy: true, 
  timeout: 5000, 
  maximumAge: 2000, 
};

document.getElementById("getLocationBtn").addEventListener("click", function() {
  navigator.geolocation.getCurrentPosition(success, error, options);
});

function success(pos) {
  const lat = pos.coords.latitude;
  const lng = pos.coords.longitude;
  const accuracy = pos.coords.accuracy;

  document.getElementById('output').innerText = `
  User coordinates: 
  Latitude ${lat}.
  Longitude ${lng}.
  Estimation accurate within ${Math.round(accuracy)} metres.`;
}

function error(err) {
  if (err.code === 1) {
    alert("Please allow geolocation access");
  } else {
    alert("Cannot get current location");
  }
}
</script>
  
</body>
</html>
 -->
 <!-- <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<div id="output"></div>
<button id="getLocationBtn">Get Accurate Location</button>
<script>
const options = {
  enableHighAccuracy: true, // Request high-accuracy reading
  timeout: 5000, 
  maximumAge: 2000, 
};

document.getElementById("getLocationBtn").addEventListener("click", function() {
  navigator.geolocation.getCurrentPosition(success, error, options);
});

function success(pos) {
  const lat = pos.coords.latitude;
  const lng = pos.coords.longitude;
  const accuracy = pos.coords.accuracy;

  const destinationLocation = {
    lat: 27.7161438, 
    lng: 85.2632886, 
  };

  // Perform reverse geocoding using the Nominatim API
  fetch(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`)
    .then(response => response.json())
    .then(data => {
      const placeName = data.display_name;
      document.getElementById('output').innerText = `
        User coordinates: 
        Latitude ${lat}.
        Longitude ${lng}.
        Estimation accurate within ${Math.round(accuracy)} metres.
        Distance to destination: ${Math.round(distance)} kilometers.
        Place Name: ${placeName}.`;
    })
    .catch(error => {
      console.log('Error:', error);
    });
}

function error(err) {
  if (err.code === 1) {
    alert("Please allow geolocation access");
  } else {
    alert("Cannot get current location");
  }
}
unction calculateDistance(coords1, coords2) {
  const earthRadius = 6371; // Radius of the Earth in kilometers
  const lat1 = toRadians(coords1.lat);
  const lat2 = toRadians(coords2.lat);
  const lon1 = toRadians(coords1.lng);
  const lon2 = toRadians(coords2.lng);

  const dLat = lat2 - lat1;
  const dLon = lon2 - lon1;

  const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(lat1) * Math.cos(lat2) *
            Math.sin(dLon / 2) * Math.sin(dLon / 2);

  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

  const distance = earthRadius * c;

  return distance;
</script>
  
</body>
</html>
 -->
 <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<div id="output"></div>
<button id="getLocationBtn">Get Accurate Location</button>
<script>
const options = {
  enableHighAccuracy: true, // Request high-accuracy reading
  timeout: 5000, 
  maximumAge: 2000, 
};

document.getElementById("getLocationBtn").addEventListener("click", function() {
  navigator.geolocation.getCurrentPosition(success, error, options);
});

function success(pos) {
  const lat = pos.coords.latitude;
  const lng = pos.coords.longitude;
  const accuracy = pos.coords.accuracy;

  
  const destinationLocation = {
    lat: 27.716145,
    lng: 85.2813117
  };

  // Perform reverse geocoding using the Nominatim API
  fetch(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`)
    .then(response => response.json())
    .then(data => {
      const placeName = data.display_name;

      // Calculate the distance between the user's location and the destination using Haversine formula
      const distance = calculateDistance(lat, lng, destinationLocation.lat, destinationLocation.lng);

      document.getElementById('output').innerText = `
        User coordinates: 
        Latitude ${lat}.
        Longitude ${lng}.
        Estimation accurate within ${Math.round(accuracy)} metres.
        Place Name: ${placeName}.
        Distance to destination: ${Math.round(distance)} kilometers.`;
    })
    .catch(error => {
      console.log('Error:', error);
    });
}

function error(err) {
  if (err.code === 1) {
    alert("Please allow geolocation access");
  } else {
    alert("Cannot get current location");
  }
}

function calculateDistance(lat1, lng1, lat2, lng2) {
  const earthRadius = 6371; // Radius of the Earth in kilometers
  const dLat = toRadians(lat2 - lat1);
  const dLng = toRadians(lng2 - lng1);

  const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(toRadians(lat1)) * Math.cos(toRadians(lat2)) *
            Math.sin(dLng / 2) * Math.sin(dLng / 2);

  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

  const distance = earthRadius * c;

  return distance;
}

function toRadians(degrees) {
  return degrees * Math.PI / 180;
}
</script>
  
</body>
</html>
