var map, infoWindow, pos, marker

if ( navigator.geolocation ) {
  
  navigator.geolocation.getCurrentPosition(function (position) {
    pos = {
      lat: position.coords.latitude,
      lng: position.coords.longitude
    }
    initMap()
  })
} else {
  alert('Tu Navegador no soporta la Geolocalización')
}

function initMap() {
  if(screen.width>992){
    var mapContainer = document.getElementById('map-desktop');
    var longitud = document.getElementById('longitud-desktop').value;
    var latitud = document.getElementById('latitud-desktop').value;
  }else{
    var mapContainer = document.getElementById('map');
    var longitud = document.getElementById('longitud').value;
    var latitud = document.getElementById('latitud').value;
  }
  var config = {
    center: {lat: parseFloat(latitud), lng: parseFloat(longitud)},
    zoom: 15
  }
  map = new google.maps.Map(mapContainer, config)

  var markerOpts = {
    position: {
      lat: parseFloat(latitud),
      lng: parseFloat(longitud)
    },
    map:map
  }

  infoWindow = new google.maps.InfoWindow({ map: map })
  var newMarker = new google.maps.Marker(markerOpts)

}
