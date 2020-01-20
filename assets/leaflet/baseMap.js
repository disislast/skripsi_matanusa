//OSM tiles attribution and URL
var osmLink = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
var osmURL = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
var osmAttrib = '&copy; ' + osmLink;

//Google map tiles Satelite 
var gmapsURL = 'http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}'

//Carto tiles attribution and URL
var cartoLink = '<a href="http://cartodb.com/attributions">CartoDB</a>';
var cartoURL = 'http://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}.png';
var cartoAttrib = '&copy; ' + osmLink + ' &copy; ' + cartoLink;

//Creation of map tiles
var gMaps = L.tileLayer(gmapsURL, {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});
var osmMap = L.tileLayer(osmURL, {
    maxZoom: 20,
    attribution: osmAttrib
});
var cartoMap = L.tileLayer(cartoURL, {
    maxZoom: 20,
    attribution: cartoAttrib
});

//Map creation
var map = L.map('mapid', {
    layers: [gMaps],
    minZoom: 15,
    maxZoom: 20,
    twoFingerZoom: true
}).setView([-6.472, 107.029], 16);

//Base layers definition and addition
var baseLayers = {
    "Google Maps": gMaps,
    "OSM Mapnik": osmMap,
    "Carto DarkMatter": cartoMap,
};

//Add baseLayers to map as control layers
L.control.layers(baseLayers).addTo(map);

//Coordinates
L.control.mouseCoordinate({ gpsLong: true, utm: true, utmref: true, gps: true }).addTo(map);