window.onload = function() {
    cargarContenidoMenus('modulos/inicio/inicio.php','inicio', 'PLATAFORMA DE CERTIFICACIÓN', 'inicio');
  };
function cargarContenidoMenus(ruta,contenido, titulo, inicio) {
    if(typeof inicio === 'undefined'){
        if (window.innerWidth <= 960){
            $("#botonHamburguesa").click();
        }
    }
    productosAjusteGrado.splice(0);
    productosMezclaMuestreo.splice(0);
    lotesProductos.splice(0);
    productos.splice(0);
    productosDeSolicitudDeHologramas.splice(0);
    $.ajax({
        url: ruta,
        success: function(datos){ 
            let divContenido = $("<div>").html(datos).find("#" + contenido);   
            $("#contenido").html(divContenido);
            $("#tituloDeModulo").html(titulo);
        }
    });
}
function cambiarTituloModulo(titulo) {
    $("#tituloDeModulo").html(titulo);
}
