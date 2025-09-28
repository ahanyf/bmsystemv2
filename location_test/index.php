<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Location Tracker</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

  <style>
    #map {
      height: 500px;
      width: 100%;
    }
  </style>
</head>
<body>

  <h2>Employee Location Tracker</h2>
  <div id="map"></div>

  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

  <script>
    // Initialize the map centered on India
    var map = L.map('map').setView([20.5937, 78.9629], 5);

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Fetch employee locations from PHP
    fetch("get_locations.php")
      .then(res => res.json())
      .then(data => {
        data.forEach(loc => {
          L.marker([loc.latitude, loc.longitude]).addTo(map)
            .bindPopup(`Employee ID: ${loc.employee_id}`);
        });
      })
      .catch(error => console.error("Error fetching location data:", error));
  </script>

  <script>
    // Capture current location and send to server
    navigator.geolocation.getCurrentPosition(function(position) {
      const lat = position.coords.latitude;
      const lon = position.coords.longitude;

      fetch("save_location.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `lat=${lat}&lon=${lon}&employee_id=1`
      });
    });
  </script>

</body>
</html>
