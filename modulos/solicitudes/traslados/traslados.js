var responsablePago = document.getElementsByName("responsablePago");
var tipoServicio = document.getElementsByName("tipoServicio");
var loteAgregadoTraslado = false;

fechaPropuestaTraslados();

function eventoRadio(radio) {
    if (radio.value == "TSS") {
        for (const elementos of responsablePago) {
            elementos.style.display = 'block';
        }
        for (const elementos of tipoServicio) {
            elementos.disabled = false;
        }
    } else {
        for (const elementos of responsablePago) {
            elementos.style.display = 'none';
        }
        for (const elementos of tipoServicio) {
            elementos.disabled = true;
        }
    }
}

function solicitarServicio(radio) {
    let numeroControl = document.getElementById('numeroControl');
    let divDestinoProducto = document.getElementById('destinoProducto');
    let divTrasladoExterno = document.getElementById('trasladoExterno');
    let botonRegistrarLote = document.getElementById('botonRegistrarLote');


    divDestinoProducto.style.display = 'block';
    divTrasladoExterno.style.display = 'none';
    if (radio.value == "misma") {
        numeroControl.disabled = true;
        botonRegistrarLote.style.display = 'block';
    } else if (radio.value == "otra") {
        numeroControl.disabled = false;
        botonRegistrarLote.style.display = 'block';
    } else {
        divDestinoProducto.style.display = 'none';
        divTrasladoExterno.style.display = 'block';
        botonRegistrarLote.style.display = 'none';
        formularioDestinoProducto = document.getElementById('formularioDestinoProducto').reset();
    }
}

function eventoSelect(select) {
    let selectInstalacion = document.getElementById('selectInstalacionSalida');
    let selectTipoInstalacionDestino = document.getElementById('selectTipoInstalacionDestino');
    let selectInstalacionDestino = document.getElementById('selectInstalacionDestino');


    selectInstalacion.disabled = false;
    selectTipoInstalacionDestino.disabled = false;
    quitarMensajeError(select.id);
    selectInstalacion.selectedIndex = 0;
    var SPinformacionInstalacion = document.getElementsByName('SPinformacionInstalacion');
    for (const elementos of SPinformacionInstalacion) {
        elementos.value = "";
    }
    selectTipoInstalacionDestino.selectedIndex = 0;
    selectInstalacionDestino.selectedIndex = 0;
    var SPinformacionInstalacion = document.getElementsByName('DPinformacionInstalacion');
    for (const elementos of SPinformacionInstalacion) {         
        elementos.value = "";
    }
}

function eventoDPtipoInstalacion(elemento) {
    let componenteSelect = document.getElementById('selectInstalacionDestino');
    componenteSelect.selectedIndex = 0;
    let SPinformacionInstalacion = document.getElementsByName('DPinformacionInstalacion');
    for (const elementos of SPinformacionInstalacion) {
        elementos.value = "";
    }
    habilitarSelect('selectInstalacionDestino', elemento);
}

function eventoDPinstalacion(id) {
    quitarMensajeError(id);
    let SPinformacionInstalacion = document.getElementsByName('DPinformacionInstalacion');
    for (const elementos of SPinformacionInstalacion) {
        elementos.value = "1";
    }
}

function habilitarSelect(select, elemento) {
    var componenteSelect = document.getElementById(select);

    componenteSelect.disabled = false;
    quitarMensajeError(elemento.id);
}

function agregarContenidoModal(ruta, contenido, titulo) {
    $.ajax({
        url: ruta,
        success: function (datos) {
            let divContenido = $("<div>").html(datos).find("#" + contenido);
            $("#cuerpoModal").html(divContenido);
            $("#tituloModal").html(titulo);
        }
    });
}

function mostrarModalNoInstalacion() {
    let contenido = document.getElementById('noInstalacion').innerHTML;

    Swal.fire({
        title: '¿No aparece tu instalación?',
        html: contenido,
        showCloseButton: true,
        showCancelButton: false,
        focusConfirm: true,
        confirmButtonText: 'Aceptar',
        width: '700px',
        allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
        allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
    })
}
/**
 * 
 * @param {*} elemento select que fue selccionado
 */
function elegirClaseRegistrarLoteTraslados(elemento){
    let divIngredientesRegistrarLoteTraslados = document.getElementById('divIngredientesRegistrarLoteTraslados');
    if(elemento.value == 4 || elemento.value == 5){
        divIngredientesRegistrarLoteTraslados.style.display = 'block';
    }else{
        divIngredientesRegistrarLoteTraslados.style.display = 'none';
    }
}
/**
 * 
 * @param {*} modal id del modal que se va abrir 
 */
function agregarLote(modal) {
    let selectTipoInstalacionSalida = document.getElementById('selectTipoInstalacionSalida');
    let selectInstalacionSalida = document.getElementById('selectInstalacionSalida');
    let selectTipoInstalacionDestino = document.getElementById('selectTipoInstalacionDestino');
    let selectInstalacionDestino = document.getElementById('selectInstalacionDestino');
    let errorselectInstalacionDestino = document.getElementById('errorselectInstalacionDestino');
    let errorselectTipoInstalacionDestino = document.getElementById('errorselectTipoInstalacionDestino');
    let errorselectInstalacionSalida = document.getElementById('errorselectInstalacionSalida');
    let errorselectTipoInstalacionSalida = document.getElementById('errorselectTipoInstalacionSalida');
    let inputBuscar = document.getElementById('buscar');
    let radioTrasladoExterno = document.getElementById('radioTrasladoExterno');
    let nombreEmpresa = document.getElementById('nombreEmpresa');
    let domicilioInstalacion = document.getElementById('domicilioInstalacion');

    if(selectInstalacionSalida.value != '0'){
        if(selectInstalacionDestino.value != '0' || (nombreEmpresa.value.trim() != '' && domicilioInstalacion.value.trim() != '')){
            inputBuscar.focus();
            if(modal == 'myModal'){
                abrirModal(modal);
            }else{
                abrirRegistrarLote();         
            }
        }else{
            if(!radioTrasladoExterno.checked){
                if(selectTipoInstalacionDestino.value == '0'){
                    selectTipoInstalacionDestino.focus();
                    errorselectTipoInstalacionDestino.style.display = 'block';  
                }else{
                    selectInstalacionDestino.focus();
                    errorselectInstalacionDestino.style.display = 'block';
                }
                Swal.fire({
                    title: 'Selecciona una instalación',
                    text: 'Para continuar selecciona la instalacción a donde llegará el producto',
                    confirmButtonText: 'Aceptar',
                    showCloseButton: true,
                    allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
                    allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
                });
            }else{
                if(nombreEmpresa.value.trim() == ''){
                    nombreEmpresa.focus();
                    quitarMensajeValidacion(nombreEmpresa);
                }else if(domicilioInstalacion.value.trim() == ''){
                    domicilioInstalacion.focus();
                    quitarMensajeValidacion(domicilioInstalacion);
                }
                Swal.fire({
                    title: 'Indica la instalación destino',
                    text: 'Para continuar ingresa el nombre o razon social de la empresa a la que le trasladaras el producto',
                    confirmButtonText: 'Aceptar',
                    showCloseButton: true,
                    allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
                    allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
                });
            }
        }  
    }else{
        
        if(selectTipoInstalacionSalida.value == '0'){
            selectTipoInstalacionSalida.focus();
            errorselectTipoInstalacionSalida.style.display = 'block';
        } else{
            selectInstalacionSalida.focus();
            errorselectInstalacionSalida.style.display = 'block';
        }
        Swal.fire({
            title: 'Selecciona una instalación',
            text: 'Para continuar selecciona la instalacción de donde saldrá el producto',
            confirmButtonText: 'Aceptar',
            showCloseButton: true,
            allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
            allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
        }); 
    }
}

function registrarLote() {
    let contenido = document.getElementById('resgistrarLote').innerHTML;

    Swal.fire({
        title: '¿No aparece tu instalación?',
        html: contenido,
        showCloseButton: true,
        showCancelButton: false,
        focusConfirm: true,
        confirmButtonText: 'Aceptar',
        width: '700px',
        allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
        allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
    })
}

function abrirRegistrarLote() {
    let cerrarAgregarLote = document.getElementById('cerrarAgregarLote')
    let cerrarRegistrarLote = document.getElementById('cerrarRegistrarLote');
    let aceptarAgregarLote = document.getElementById('aceptarAgregarLote')
    let aceptarRegistrarLote = document.getElementById('aceptarRegistrarLote');

    aceptarAgregarLote.setAttribute('hidden', true);
    aceptarRegistrarLote.removeAttribute('hidden');
    cerrarAgregarLote.setAttribute('hidden', true);
    cerrarRegistrarLote.removeAttribute('hidden');
    Swal.close();
    $("#myModal").modal("hide");
    abrirModal('modalMediano');
    agregarContenidoModal('modulos/solicitudes/traslados/traslados.php', 'contenidoResgistrarLote', 'Registra tu lote')
    document.getElementById('nombreLoteRegistrarLote').focus();
}

function eventoSPinstalacion(id) {
    quitarMensajeError(id);
    let SPinformacionInstalacion = document.getElementsByName('SPinformacionInstalacion');

    Swal.fire({
        title: 'Sin información',
        text: 'No se encontraron lotes disponibles para esta instalación',
        confirmButtonText: 'Aceptar',
        showCloseButton: true,
        allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
        allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
    });
    for (const elementos of SPinformacionInstalacion) {
        elementos.value = "1";
    }
}

function quitarMensajeError(id) {
    let elemento = document.getElementById('error' + id);
    elemento.style.display = 'none';
}

function procesoValidacion() {
    let cerrarAgregarLote = document.getElementById('cerrarAgregarLote')
    let cerrarRegistrarLote = document.getElementById('cerrarRegistrarLote');
    let aceptarAgregarLote = document.getElementById('aceptarAgregarLote')
    let aceptarRegistrarLote = document.getElementById('aceptarRegistrarLote');

    aceptarAgregarLote.removeAttribute('hidden');
    aceptarRegistrarLote.setAttribute('hidden', true);
    cerrarAgregarLote.removeAttribute('hidden');
    cerrarRegistrarLote.setAttribute('hidden', true);
    agregarContenidoModal('modulos/solicitudes/traslados/traslados.php', 'contenidoProcesoValidacion', 'Proceso de validación')
}

function mostrarModalLoteAgregado() {
    mostrarLoteAgregado();
    Swal.fire({
        title: '¡Lote agregado!',
        text: "¿Deseas seguir agregando mas lotes?",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No',
        allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
        allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
    }).then((result) => {
        if (result.isConfirmed) {
            abrirModal('myModal');
            agregarContenidoModal('modulos/solicitudes/traslados/traslados.php', 'contenidoProcesoValidacion', 'Proceso de validación');
        }
    })
}

function mostrarLoteAgregado(){
    loteAgregadoTraslado = true;
    const lotesAgregados = document.getElementById('lotesAgregados');
    const nuevoContenido = document.createElement('div');
    let id = "miNuevoDivId";
    nuevoContenido.innerHTML = `
    <div class="card">
    <div class="row">
    <button type="button" class="btn btn-link col-sm-1" id="${id}" onclick ="eliminarLoteAgregado(this.id);"><i class="bi bi-trash"></i></button>
    </div>
    <h5 class="text-center mb-3"><strong><i class="bi bi-archive"></i>Nombre</strong></h5>
    <h6 class="card-subtitle text-body-secondary text-center">Características del lote</h6>
    <div class="card-body">
      <div class="row card-text">
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>Categoría:</label>
        <label class="col-sm-6 fw-normal small"></label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>Clase:</label>
        <label class="col-sm-6 fw-normal small"></label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>%Alc. Vol.:</label>
        <label class="col-sm-6 fw-normal small"></label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>Volumen:</label>
        <label class="col-sm-6 fw-normal small"></label>
        <label class="col-sm-6 fw-normal small"> <i class="bi bi-caret-right-fill"></i>Contenedor:</label>
        <label class="col-sm-6 fw-normal small"></label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>Capacidad:</label>
        <label class="col-sm-6 fw-normal small"></label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>Materiales:</label>
        <label class="col-sm-6 fw-normal small"></label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>Especie(s):</label>
        <label class="col-sm-6 fw-normal small"></label>
      </div>
    </div>
  </div>
  `;
    nuevoContenido.classList.add('col-sm-3', 'mb-3', 'mb-sm-0', 'col-12'); 
    nuevoContenido.setAttribute('id', 'miNuevoDivId');
    lotesAgregados.appendChild(nuevoContenido);
}

function eliminarLoteAgregado(id){
  let divEliminar = document.getElementById(id);
  let divPrincipal = document.getElementById('lotesAgregados');

  divPrincipal.removeChild(divEliminar);
}

function mostrarModalSeguirAgregandoLote(){
    mostrarLoteAgregado();
    Swal.fire({
        title: '¡Lote agregado!',
        text: "¿Deseas seguir agregando mas lotes?",
        showCancelButton: false,
        showDenyButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Si',
        denyButtonText: 'No',
        allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
        allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('formularioRegistrarLote').reset();
        }else{
            $("#modalMediano").modal("hide");
        }
    })
}

function verificarFormularioRegistrarLote(){
    let formulario = document.getElementById("formularioRegistrarLote");
    let elementosFormulario = formulario.querySelectorAll("input, select");
    let todosCompletos = true;
    let primerElementoVacio = null;
    elementosFormulario.forEach(elemento => {
        const mensajeError = elemento.nextElementSibling;
        if (elemento.type === "text" || elemento.type === "number") {
            if (elemento.value.trim() === "") {
            todosCompletos = false;
            mensajeError.style.display = "block";
            if (!primerElementoVacio) 
                primerElementoVacio = document.getElementById(elemento.id);
            }else 
                mensajeError.style.display = "none"; // Ocultar el mensaje de error si el campo no está vacío
        }else if(elemento.tagName === "SELECT"){
            if(elemento.value == 0){
                todosCompletos = false;
                mensajeError.style.display = "block";
                if (!primerElementoVacio) 
                    primerElementoVacio = document.getElementById(elemento.id);
            }
            else 
                mensajeError.style.display = "none"; 
        }
    });
    if (primerElementoVacio) {
        primerElementoVacio.focus();
    }
    if(todosCompletos){
        mostrarModalSeguirAgregandoLote();
        mostrarLoteAgregado();
    }
}

function quitarMensajeValidacion(elemento){
    if(elemento.value.trim() != ''){
        let mensajeError = elemento.nextElementSibling;
        mensajeError.style.display = "none"; // Ocultar el mensaje de error si el campo no está vacío
        elemento.value = elemento.value.trim();
    }else{
        let mensajeError = elemento.nextElementSibling;
        mensajeError.style.display = "block";
    }
}

function verificarFormularioProcesoValidacion(){
    let contenedoresProcesoValidacion = document.getElementById('contenedoresProcesoValidacion');
    let capacidadProcesoValidacion = document.getElementById('capacidadProcesoValidacion');
    let materialProcesoValidacion = document.getElementById('materialProcesoValidacion');
    let todosCompletos = true;

    if(materialProcesoValidacion.value == 0){
        todosCompletos = mostrarMensajeCampoVacio(materialProcesoValidacion);
    }
    if(capacidadProcesoValidacion.value.trim() == ''){
        todosCompletos = mostrarMensajeCampoVacio(capacidadProcesoValidacion);
    }
    if(contenedoresProcesoValidacion.value.trim() == ''){
        todosCompletos = mostrarMensajeCampoVacio(contenedoresProcesoValidacion);
    }
    if(todosCompletos){
        $("#modalMediano").modal("hide");
        mostrarModalLoteAgregado();
    }
}

function agregarLitrosMinimos(elemento){
    if(elemento.id == 'litrosProcesoValidacion' && elemento.value < 6){
        elemento.value = 6;
    }else{
        if(elemento.value <= 0){
            elemento.value = 1;
        }
    }
}

function verificarTrasladosProductos(){
    let radioTSD = document.getElementById('radioTSD');
    let fechaPropuestaTraslado = document.getElementById('fechaPropuestaTraslado');
    let radioTrasladoExterno = document.getElementById('radioTrasladoExterno');
    let nombreEmpresa = document.getElementById('nombreEmpresa');
    let domicilioInstalacion = document.getElementById('domicilioInstalacion');
    let tipoTransporte = document.getElementById('tipoTransporte');
    let actividadesPosteriores = document.getElementById('actividadesPosteriores');
    let todosCompletos = true;
    let tituloModalGrande = document.getElementById('tituloModalGrande');
    let cuerpoModalGrande = document.getElementById('cuerpoModalGrande');

    if(!loteAgregadoTraslado){
        Swal.fire({
            title: '¡Importante!',
            text: 'Para poder continuar es necesario agregar lotes a la solicitud',
            confirmButtonText: 'Aceptar',
            showCloseButton: true,
            allowOutsideClick: false,
            allowEscapeKey: false
        });
        todosCompletos = false;            
    }else{
        if(fechaPropuestaTraslado.value != ''){
            todosCompletos = esDiaDomingoSabado('fechaPropuestaTraslado');       
        }
        if(actividadesPosteriores.value.trim() == ''){
            todosCompletos = mostrarMensajeCampoVacio(actividadesPosteriores);
        }
        if(tipoTransporte.value.trim() == ''){
            todosCompletos = mostrarMensajeCampoVacio(tipoTransporte);
        }
        if(radioTrasladoExterno.checked){
            if(domicilioInstalacion.value.trim() == ''){
                todosCompletos = mostrarMensajeCampoVacio(domicilioInstalacion);
            }
            if(nombreEmpresa.value.trim() == ''){
                todosCompletos = mostrarMensajeCampoVacio(nombreEmpresa);
            }
        }
        if(fechaPropuestaTraslado.value == ''){
            todosCompletos = mostrarMensajeCampoVacio(fechaPropuestaTraslado);
        }
    } 
    if(todosCompletos){
        abrirModal('modalGrande');
        tituloModalGrande.textContent = 'Confirma la información';
        cuerpoModalGrande.innerHTML = document.getElementById('contenidoConfirmarInformacion').innerHTML;
    }
}

function mostrarMensajeCampoVacio(elemento){
    let mensajeError = elemento.nextElementSibling;
    mensajeError.style.display = "block";
    elemento.focus();
    return false;
}

function confirmarSolicitud(){
    $("#modalGrande").modal("hide");
    Swal.fire({
        title: '¡Solicitud de traslado registrada exitosamente!',
        text: "La solicitud con folio FA-01211/23 fue registrada correctamente. Actualmente su solicitud se encuentra en proceso de validación por la unidad de inspección de AMMA, el tiempo de respuesta para este tipo de solicitudes es de 48 horas hábiles como máximo. Le recordamos que puede monitorear el estatus de su solicitud dando clic en la parte superior de la pagina en Traslados Recibidos y Traslados Enviados",
        showCancelButton: false,
        showDenyButton: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Entendido',
        allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
        allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
    })
}

function mostrarModalInformacionTraslado(){
    let tituloModalGrande = document.getElementById('tituloModalGrande');
    let cuerpoModalGrande = document.getElementById('cuerpoModalGrande');
    document.getElementById('confirmarSolicitud').setAttribute('hidden', true);
    document.getElementById('cancelarSolicitud').setAttribute('hidden', true);
    document.getElementById('cerrar').removeAttribute('hidden');

    abrirModal('modalGrande');
    tituloModalGrande.textContent = 'Informacion de traslado';
    cuerpoModalGrande.innerHTML = document.getElementById('contenidoInformacionTraslado').innerHTML;
}

function mostrarInformacionTrasladosRecibidos(){
    mostrarModalInformacionTraslado();
    document.getElementById('cancelarTraslado').setAttribute('hidden', true);
}

function mostrarInformacionTrasladosEnviados(){
    mostrarModalInformacionTraslado();
    document.getElementById('cancelarTraslado').removeAttribute('hidden');
}

function fechaPropuestaTraslados() {
    let fechaActual = new Date().toISOString().slice(0, 10);
    var fechaCon3DiasSumados = sumarDiasAFecha(fechaActual, 2);
    
    if ($("#servicioNormalTraslados").prop("checked")) {
      var fechaCon3DiasSumados = sumarDiasAFecha(fechaActual, 2);
      $("#fechaPropuestaTraslado").attr("min", fechaCon3DiasSumados);
      $("#fechaPropuestaTraslado").val(fechaCon3DiasSumados);
    }
    if ($("#servicioExclusivoTraslados").prop("checked")) {
      $("#fechaPropuestaTraslado").attr("min", fechaActual);
      $("#fechaPropuestaTraslado").val(fechaActual);
    }
}



