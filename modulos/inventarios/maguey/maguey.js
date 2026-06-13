function abrirModalInventariosMaguey(accion) {
    abrirModal("modalInventariosMaguey");
  if (accion == "predioMaguey") {
    mostrarContenidoModal(
      "modulos/inventarios/maguey/maguey.php",
      "LISTA DE PREDIOS REGISTRADOS EN SISTEMA",
      "cuerpoConsultarInventarioPredioMaguey",
      "footerConsultarInventarioPredioMaguey",
      "tituloModalInventariosMaguey",
      "cuerpoModalInventariosMaguey",
      "footerModalInventariosMaguey"
    );
  } else if (accion == "viveroMaguey") {
    mostrarContenidoModal(
      "modulos/inventarios/maguey/maguey.php",
      "LISTA DE VIVEROS REGISTRADOS EN SISTEMA",
      "cuerpoConsultarInventarioViverosMaguey",
      "footerConsultarInventarioViverosMaguey",
      "tituloModalInventariosMaguey",
      "cuerpoModalInventariosMaguey",
      "footerModalInventariosMaguey"
    );
  }
}

function consultarDetallesMagueyPredio(boton){
  $("#modalInventariosMaguey").modal("hide");
  $("#listadoInventariosMagueyPredio").show();
  $("#listadoInventariosMagueyViveros").hide();

  var row = boton.parentNode.parentNode;
  // Obtén el div que contiene los elementos <p>
  var div = document.getElementById('datosDeInventariosMaguey');
  // Obtén todos los elementos <p> dentro del div
  var parrafos = div.getElementsByTagName('input');
  parrafos[0].value = row.cells[1].textContent.toUpperCase();
  parrafos[1].value = row.cells[2].textContent.toUpperCase();
  parrafos[2].value = row.cells[3].textContent.toUpperCase();
  parrafos[3].value = row.cells[4].textContent.toUpperCase();
  parrafos[4].value = row.cells[5].textContent.toUpperCase();
  parrafos[5].value = row.cells[6].textContent.toUpperCase();
  parrafos[6].value = 'valor null';
  parrafos[7].value = 'valor null';
  parrafos[8].value = 'valor null';

  $("#map").show();
  initMap('map', [row.cells[5].textContent.toUpperCase()+ ", "+ row.cells[6].textContent.toUpperCase()]);
}
function consultarDetallesMagueyVivero(boton){
  $("#modalInventariosMaguey").modal("hide");
  $("#listadoInventariosMagueyViveros").show();
  $("#listadoInventariosMagueyPredio").hide();

  var row = boton.parentNode.parentNode;
  // Obtén el div que contiene los elementos <p>
  var div = document.getElementById('datosDeInventariosMaguey');
  // Obtén todos los elementos <p> dentro del div
  var parrafos = div.getElementsByTagName('input');
  parrafos[0].value = row.cells[1].textContent.toUpperCase();
  parrafos[1].value = row.cells[2].textContent.toUpperCase();
  parrafos[2].value = row.cells[3].textContent.toUpperCase();
  parrafos[3].value = row.cells[4].textContent.toUpperCase();
  parrafos[4].value = row.cells[5].textContent.toUpperCase();
  parrafos[5].value = row.cells[6].textContent.toUpperCase();
  parrafos[6].value = 'valor null';
  parrafos[7].value = 'valor null';
  parrafos[8].value = 'valor null';

  $("#map").show();
  initMap('map', [row.cells[5].textContent.toUpperCase()+ ", "+ row.cells[6].textContent.toUpperCase()]);
}


// Initialize and add the map
let map;

async function initMap(idmap, direcciones) {
  // Request needed libraries.
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerView } = await google.maps.importLibrary("marker");

  // Create a geocoder instance
  const geocoder = new google.maps.Geocoder();

  var zoom =14;
  if (direcciones.length > 1) zoom = 6;

  // The map, centered at the address
  map = new Map(document.getElementById(idmap), {
    zoom: zoom,
    mapId: "DEMO_MAP_ID",
  });


  direcciones.forEach(function(direccion) {
    
    geocoder.geocode({ address: direccion }, (results, status) => {
      if (status === google.maps.GeocoderStatus.OK) {
        const location = results[0].geometry.location;
  
        // Center the map on the geocoded location
        map.setCenter(location);
  
        const customIconUrl = 'dist/img/favicon.png';
        // The marker, positioned at the geocoded location
        const marker = new google.maps.Marker({
          position: location,
          map: map,
          title: 'Mi Marcador',
          icon: {
            url: customIconUrl,
            scaledSize: new google.maps.Size(40, 40),
          },
        });
      } else {
        console.error('Geocodificación fallida debido a: ' + status);
      }
    });
  });
}

function mostrarMiMapaInventarioMaguey(){
  initMap('mapPrediosViveros', ['SANTIAGO MATATLÁN', 'Oaxaca de juarez']);
}
