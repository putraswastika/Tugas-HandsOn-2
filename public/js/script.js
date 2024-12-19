 // Event listener untuk form marker
 document.getElementById("markerForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const name = document.getElementById("markerName").value;
    const lat = parseFloat(document.getElementById("markerLat").value);
    const lng = parseFloat(document.getElementById("markerLng").value);

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch("/api/markers", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken, // Tambahkan CSRF token
        },
        body: JSON.stringify({ name, latitude: lat, longitude: lng }),
    })
    .then((res) => {
        if (!res.ok) {
            throw new Error(HTTP error! status: ${res.status});
        }
        return res.json();
    })
    .then((data) => {
        alert("Marker ditambahkan!");
    })
    .catch((err) => {
        console.error("Error menambahkan marker:", err);
        alert("Gagal menambahkan marker.");
    });
});

// Event listener untuk form poligon
document.getElementById("polygonForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const coords = document.getElementById("polygonCoords").value;

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch("/api/polygons", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken, // Tambahkan CSRF token
        },
        body: JSON.stringify({ coordinates: JSON.parse(coords) }),
    })
    .then((res) => {
        if (!res.ok) {
            throw new Error(HTTP error! status: ${res.status});
        }
        return res.json();
    })
    .then((data) => {
        alert("Poligon ditambahkan!");
    })
    .catch((err) => {
        console.error("Error menambahkan poligon:", err);
        alert("Gagal menambahkan poligon.");
    });
});