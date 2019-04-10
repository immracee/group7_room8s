var locationSend = document.getElementById('submitLocation');
locationSend.addEventListener("click", getLocation);
var searchLocation = "toronto";
var locations = [];

function getLocation(e){
  searchLocation = document.getElementById('location').value;
  loadLocations();
  setMapCenter();
}

function loadLocations(){
  switch (searchLocation.toLowerCase(searchLocation)){
    case 'kitchener':
      locations = [
        {
          name: "Trio on Belmont",
          bdrms: 2,
          bath: 1.5,
          price: "$1700",
          lat:43.446410,
          lng:-80.513170
        },
        {
          name: "The Regency",
          bdrms: 1,
          bath: 1,
          price: "$1500",
          lat:43.451590,
          lng:-80.487380
        },
        {
          name: "Ironhorse Towers",
          bdrms: 2,
          bath: 1,
          price: "$1860",
          lat:43.443830,
          lng:-80.496060
        }
      ];
      break;
    case 'toronto':
      locations = [];
      break;
    default:
      locations = [];
      break;
  }

  //kitchener
  //get rentals and display below map
  for (i=0; i < locations.length; i++){
    var rental = "<h4>"+  locations[i].name + "</h4>"
    + "Bdrms: " + locations[i].bdrms
    + "<br> Bath: "+ locations[i].bath
    + "<br> Price: " + locations[i].price;

    var displayRentals = document.getElementById("displayRentals");
    var rentals = document.createElement("div");
    rentals.innerHTML = rental;

    displayRentals.appendChild(rentals);
  }
}

// Initialize the platform object:
var platform = new H.service.Platform({
app_id: 'EgttRMYsxwEkogtDpzlQ',
app_code: 'PxKgB0IYXUVfkVklFw-7dA'
});

// Obtain the default map types from the platform object
var defaultLayers = platform.createDefaultLayers();

// Create the parameters for the geocoding request:
var geocodingParams = {
    searchText: searchLocation
};

var map = new H.Map(
    document.getElementById('mapContainer'),
    defaultLayers.normal.map,
    {
        zoom: 12,
        center: { lat: 52.51, lng: 13.4 }
    });

// Create the default UI:
var ui = H.ui.UI.createDefault(map, defaultLayers);
var mapSettings = ui.getControl('mapsettings');
var zoom = ui.getControl('zoom');
var scalebar = ui.getControl('scalebar');
mapSettings.setAlignment('top-left');
zoom.setAlignment('top-left');
scalebar.setAlignment('top-left');

// Define a callback function to process the geocoding response:
var onResult = function(result) {
    var locations = result.Response.View[0].Result,
    position,
    marker;
    map.setCenter({
        lat: locations[0].Location.DisplayPosition.Latitude,
        lng: locations[0].Location.DisplayPosition.Longitude},
        true);
    setDummyLocations();
};

// Get an instance of the geocoding service:
var geocoder = platform.getGeocodingService();
geocoder.geocode(geocodingParams, onResult, function(e) {
    alert(e);
});

function setMapCenter(){
    //get the written address from some field
    geocodingParams = { searchText: searchLocation};
    geocoder.geocode(geocodingParams, onResult, function(e) {
    alert(e);
});
}

// Define a callback function to process the geocoding response:
function setDummyLocations() {
  // Add a marker for each location found
  for (i = 0;  i < locations.length; i++) {
  position = {
    lat: locations[i].lat,
    lng: locations[i].lng
  };
  marker = new H.map.Marker(position);
  map.addObject(marker);
  }
};

//This guide explains how to get stuff from addressess and add them as map markers (just fake some data)
    //https://developer.here.com/documentation/maps/topics/geocoding.html
