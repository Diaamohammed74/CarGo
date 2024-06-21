document.addEventListener('DOMContentLoaded', function () {
    // Initialize the map
    var map = L.map('map').setView([51.505, -0.09], 13);

    // Add the OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Initialize the geocoding control
    var geocoder = L.Control.Geocoder.nominatim();

    // Add the geocoding control to the map
    var control = L.Control.geocoder({
        geocoder: geocoder
    }).addTo(map);

    // Initialize marker as null
    var marker = null;

    // Function to create or update marker
    function createOrUpdateMarker(lat, lng) {
        // Check if marker exists, if not create a new one
        if (!marker) {
            marker = L.marker([lat, lng], { draggable: true }).addTo(map);

            // Handle marker dragend event
            marker.on('dragend', function (e) {
                var lat = marker.getLatLng().lat;
                var lng = marker.getLatLng().lng;

                updateMarker(lat, lng);
            });
        } else {
            // Update marker position
            marker.setLatLng([lat, lng]);
        }

        // Set the form inputs
        document.getElementById('latitude').value = lat;
        document.getElementById('longitude').value = lng;

        // Log latitude and longitude
        console.log('Marker updated to:', lat, lng);
    }

    // Function to update marker position from form inputs
    function updateMarker(lat, lng) {
        if (!marker) {
            marker = L.marker([lat, lng], { draggable: true }).addTo(map);

            // Handle marker dragend event
            marker.on('dragend', function (e) {
                var lat = marker.getLatLng().lat;
                var lng = marker.getLatLng().lng;

                updateMarker(lat, lng);
            });
        } else {
            // Update marker position
            marker.setLatLng([lat, lng]);
        }

        // Set the form inputs
        document.getElementById('latitude').value = lat;
        document.getElementById('longitude').value = lng;

        // Log latitude and longitude
        console.log('Marker updated to:', lat, lng);
    }

    // Geolocation API to get the user's current location
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;

            // Update the map view to the user's location
            map.setView([lat, lng], 13);

            // Create or update marker
            createOrUpdateMarker(lat, lng);

            // Log latitude and longitude
            console.log('Current location:', lat, lng);
        });
    }

    // Handle map click event
    map.on('click', function (e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;

        // Create or update marker
        createOrUpdateMarker(lat, lng);

        // Log latitude and longitude
        console.log('Marker moved to:', lat, lng);
    });

    // Handle search button click
    document.getElementById('searchButton').addEventListener('click', function () {
        var address = document.getElementById('addressInput').value;

        // Perform geocoding
        geocoder.geocode(address, function (results) {
            if (results.length > 0) {
                var latlng = results[0].center;
                var lat = latlng.lat;
                var lng = latlng.lng;

                // Update map view
                map.setView([lat, lng], 13);

                // Create or update marker
                createOrUpdateMarker(lat, lng);

                // Log latitude and longitude
                console.log('Address found at:', lat, lng);
            } else {
                alert('Address not found.');
            }
        });
    });
});
