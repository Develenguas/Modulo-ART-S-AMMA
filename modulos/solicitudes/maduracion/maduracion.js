var loteAgregadoIngresoMaduracion = false;
var loteAgregadoLiberacionMaduracion = false;
fechaPropuestaMaduracion();
/**
 * 
 * @param {*} elemento - componenete(select) que se ha seleccionado
 */
function elegirTipoInstalacionMaduracion(elemento){
    let instalacionMaduracion = document.getElementById('instalacionMaduracion');
    let informacionInstalacionMaduracion = document.getElementsByName('informacionInstalacionMaduracion');

    instalacionMaduracion.selectedIndex = 0;
    instalacionMaduracion.disabled = false;
    quitarMensajeValidacion(elemento);
    for (const elementos of informacionInstalacionMaduracion) {
        elementos.value = "";
    }
}

/**
 * 
 * @param {*} elemento - componenete(select) que se ha seleccionado
 */
function elegirInstalacionMaduracion(elemento){
    let informacionInstalacionMaduracion = document.getElementsByName('informacionInstalacionMaduracion');
    let lotesAgregadosIngresoMaduracion = document.getElementsByName('lotesAgregadosIngresoMaduracion');
    let lotesAgregadosLiberacionMaduracion = document.getElementsByName('lotesAgregadosLiberacionMaduracion');

    for (const elementos of informacionInstalacionMaduracion) {
        elementos.value = "1";
    }
    quitarMensajeValidacion(elemento);
    lotesAgregadosIngresoMaduracion.innerHTML = "";
    lotesAgregadosLiberacionMaduracion.innerHTML = "";
}

function fechaPropuestaMaduracion() {
    let fechaActual = new Date().toISOString().slice(0, 10);
    var fechaCon3DiasSumados = sumarDiasAFecha(fechaActual, 2);
    
    if ($("#servicioNormalMaduracion").prop("checked")) {
      var fechaCon3DiasSumados = sumarDiasAFecha(fechaActual, 2);
      $("#fechaPropuestaMaduracion").attr("min", fechaCon3DiasSumados);
      $("#fechaPropuestaMaduracion").val(fechaCon3DiasSumados);
    }
    if ($("#servicioExclusivoMaduracion").prop("checked")) {
      $("#fechaPropuestaMaduracion").attr("min", fechaActual);
      $("#fechaPropuestaMaduracion").val(fechaActual);
    }
}

/**
 * 
 * @param {*} modal - id del modal que se quiere abrir 
 */
function buscarLoteMaduracion(modal){
    let tipoInstalacionMaduracion = document.getElementById('tipoInstalacionMaduracion');
    let instalacionMaduracion = document.getElementById('instalacionMaduracion');

    if(tipoInstalacionMaduracion.value != 0){
        if(instalacionMaduracion.value != 0){
            if(modal == 'lotesRegistradosMaduracion' || modal == 'lotesRegistradosLiberacionMaduracion'){
                abrirModal(modal);
            }else{
                mostrarModalNoApareceLoteMaduracion(modal);
            }
        }else{
            instalacionMaduracion.focus();
            instalacionMaduracion.nextElementSibling.style.display = "block";
            Swal.fire({
                title: 'Selecciona una instalación',
                text: 'Para continuar seleccione la instalación donde se encuentra físicamente el producto',
                confirmButtonText: 'Aceptar',
                showCloseButton: true,
                allowOutsideClick: false,
                allowEscapeKey: false
            });        
        }  
    }else{
        tipoInstalacionMaduracion.focus();
        tipoInstalacionMaduracion.nextElementSibling.style.display = "block";
        Swal.fire({
            title: 'Selecciona una instalación',
            text: 'Para continuar seleccione el tipo de instalación donde se encuentra físicamente el producto',
            confirmButtonText: 'Aceptar',
            showCloseButton: true,
            allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
            allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
        });
    }
}

function agregarLitrosMinimosMaduracion(elemento){
    if(elemento.id == 'litrosProcesoValidacionMaduracion' && elemento.value < 6){
        elemento.value = 6;
    }else{
        if(elemento.value <= 0){
            elemento.value = 1;
        }
    }
}

/**
 * 
 * @param {*} elemento - componente(input) al que se le quiere quitar el mensjae de campo vacío 
 */
function quitarMensajeValidacion(elemento){
    if(elemento.value.trim() != ''){
        elemento.nextElementSibling.style.display = "none";
        elemento.value = elemento.value.trim();
    }
}

function mostrarModalProcesoValidacion(){
    let cerrarAgregarLote = document.getElementById('cerrarAgregarLoteMaduracion')
    let cerrarRegistrarLote = document.getElementById('cerrarRegistrarLoteMaduracion');
    let aceptarAgregarLote = document.getElementById('aceptarAgregarLoteMaduracion')
    let aceptarRegistrarLote = document.getElementById('aceptarRegistrarLoteMaduracion');
    let tituloModalpequeñoMaduracion = document.getElementById('tituloModalpequeñoMaduracion');
    let cuerpoModalPequeñoMaduracion = document.getElementById('cuerpoModalPequeñoMaduracion');
    let divTipoMaderaProcesoValidacionMaduracion = document.getElementById('divTipoMaderaProcesoValidacionMaduracion');
    let divMaderaProcesoValidacionMaduracion = document.getElementById('divMaderaProcesoValidacionMaduracion');

    divTipoMaderaProcesoValidacionMaduracion.style.display = 'none';
    divMaderaProcesoValidacionMaduracion.style.display = 'none';
    aceptarAgregarLote.removeAttribute('hidden');
    aceptarRegistrarLote.setAttribute('hidden', true);
    cerrarAgregarLote.removeAttribute('hidden');
    cerrarRegistrarLote.setAttribute('hidden', true);
    tituloModalpequeñoMaduracion.textContent = 'Proceso de validación';
    cuerpoModalPequeñoMaduracion.innerHTML = document.getElementById('contenidoProcesoValidacionMaduracion').innerHTML;
}

function cambiarNombreLote(){
    document.getElementById('cambiarNombreLote').style.display = 'block';
}

function verificarFormularioProcesoValidacionMaduracion(){
    let contenedoresProcesoValidacion = document.getElementById('contenedoresProcesoValidacionMaduracion');
    let capacidadProcesoValidacion = document.getElementById('capacidadProcesoValidacionMaduracion');
    let materialProcesoValidacion = document.getElementById('materialProcesoValidacionMaduracion');
    let tipoMaderaProcesoValidacionMaduracion = document.getElementById('tipoMaderaProcesoValidacionMaduracion');
    let maderaProcesoValidacionMaduracion = document.getElementById('maderaProcesoValidacionMaduracion');

    let todosCompletos = true;
    if(materialProcesoValidacion.options[materialProcesoValidacion.selectedIndex].text === 'Madera' ){
        if(tipoMaderaProcesoValidacionMaduracion.value == 0){
            todosCompletos = mostrarMensajeCampoVacioMaduracion(tipoMaderaProcesoValidacionMaduracion);
        }else if(tipoMaderaProcesoValidacionMaduracion.options[tipoMaderaProcesoValidacionMaduracion.selectedIndex].text === 'Otro'){
            if(maderaProcesoValidacionMaduracion.value.trim() == ''){
                todosCompletos = mostrarMensajeCampoVacioMaduracion(maderaProcesoValidacionMaduracion);
            }
        }
    }
    if(materialProcesoValidacion.value == 0){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(materialProcesoValidacion);
    }
    if(capacidadProcesoValidacion.value.trim() == ''){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(capacidadProcesoValidacion);
    }
    if(contenedoresProcesoValidacion.value.trim() == ''){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(contenedoresProcesoValidacion);
    }
    return todosCompletos;
}

function mostrarTipoMaderaMaduracion(elemento){
    let divTipoMaderaProcesoValidacionMaduracion = document.getElementById('divTipoMaderaProcesoValidacionMaduracion');
    if(elemento.options[elemento.selectedIndex].text === 'Madera'){
        divTipoMaderaProcesoValidacionMaduracion.style.display = 'block';
    }else{
        divTipoMaderaProcesoValidacionMaduracion.style.display = 'none';
    }
}

function mostrarEspecificacionMaderaMaduracion(elemento){
    let divMaderaProcesoValidacionMaduracion = document.getElementById('divMaderaProcesoValidacionMaduracion');
    if(elemento.options[elemento.selectedIndex].text === 'Otro'){
        divMaderaProcesoValidacionMaduracion.style.display = 'block';
    }else{
        divMaderaProcesoValidacionMaduracion.style.display = 'none';
    }
}

function verificarFormularioRegistrarLoteMaduracion(){
    let loteRegistrarLoteMaduracion = document.getElementById('loteRegistrarLoteMaduracion');
    let especieRegistrarLoteMaduracion = document.getElementById('especieRegistrarLoteMaduracion');
    let categoriaRegistrarLoteMaduracion = document.getElementById('categoriaRegistrarLoteMaduracion');
    let claseRegistrarLoteMaduracion = document.getElementById('claseRegistrarLoteMaduracion');
    // let analisisRegistrarLoteMaduracion = document.getElementById('analisisRegistrarLoteMaduracion');
    let gradoAlcoholicoRegistrarLoteMaduracion = document.getElementById('gradoAlcoholicoRegistrarLoteMaduracion');
    let todosCompletos = true;

    todosCompletos = verificarFormularioProcesoValidacionMaduracion();
    if(gradoAlcoholicoRegistrarLoteMaduracion.value == '' || gradoAlcoholicoRegistrarLoteMaduracion.value < 35 || gradoAlcoholicoRegistrarLoteMaduracion.value > 55){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(gradoAlcoholicoRegistrarLoteMaduracion);
    }
    if(claseRegistrarLoteMaduracion.value == 0){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(claseRegistrarLoteMaduracion);
    }
    if(categoriaRegistrarLoteMaduracion.value == 0){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(categoriaRegistrarLoteMaduracion);
    }
    if(especieRegistrarLoteMaduracion.value == 0){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(especieRegistrarLoteMaduracion);
    }
    if(loteRegistrarLoteMaduracion.value.trim() == ''){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(loteRegistrarLoteMaduracion);
    }
    return todosCompletos;
}

function mostrarMensajeCampoVacioMaduracion(elemento){
    let mensajeError = elemento.nextElementSibling;
    mensajeError.style.display = "block";
    elemento.focus();
    return false;
}

function registrarLoteIngresoMaduracion(){
    if(verificarFormularioRegistrarLoteMaduracion()){
        mostrarModalesAgregarLoteProcesoValidacion('lotesAgregadosIngresoMaduracion','registrarLote','ingreso');
    }
}

function agregarLoteIngresoMaduracion(){
    if(verificarFormularioProcesoValidacionMaduracion()){
        mostrarModalesAgregarLoteProcesoValidacion('lotesAgregadosIngresoMaduracion','agregarLote', 'ingreso');
    }
}

function verificarFormularioRegistrarLoteLiberacionMaduracion(){
    let loteRegistrarLoteLiberacionMaduracion = document.getElementById('loteRegistrarLoteLiberacionMaduracion');
    let especieRegistrarLoteLiberacionMaduracion = document.getElementById('especieRegistrarLoteLiberacionMaduracion');
    let folioRegistrarLoteLiberacionMaduracion = document.getElementById('folioRegistrarLoteLiberacionMaduracion');
    let volumenRegistrarLoteLiberacionMaduracion = document.getElementById('volumenRegistrarLoteLiberacionMaduracion');
    let gradoRegistrarLoteLiberacionMaduracion = document.getElementById('gradoRegistrarLoteLiberacionMaduracion');
    let fechaRegistrarLoteLiberacionMaduracion = document.getElementById('fechaRegistrarLoteLiberacionMaduracion');
    let litrosRegistrarLoteLiberacionMaduracion = document.getElementById('litrosRegistrarLoteLiberacionMaduracion');
    let todosCompletos = true;

    if(litrosRegistrarLoteLiberacionMaduracion.value == ''){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(litrosRegistrarLoteLiberacionMaduracion);
    }
    if(fechaRegistrarLoteLiberacionMaduracion.value == ''){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(fechaRegistrarLoteLiberacionMaduracion);
    }
    if(gradoRegistrarLoteLiberacionMaduracion.value == '' || gradoRegistrarLoteLiberacionMaduracion.value < 35 || gradoRegistrarLoteLiberacionMaduracion.value > 55){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(gradoRegistrarLoteLiberacionMaduracion);
    }
    if(volumenRegistrarLoteLiberacionMaduracion.value == ''){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(volumenRegistrarLoteLiberacionMaduracion);
    }
    if(folioRegistrarLoteLiberacionMaduracion.value.trim() == ''){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(folioRegistrarLoteLiberacionMaduracion);
    }
    if(especieRegistrarLoteLiberacionMaduracion.value == 0){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(especieRegistrarLoteLiberacionMaduracion);
    }
    if(loteRegistrarLoteLiberacionMaduracion.value.trim() == ''){
        todosCompletos = mostrarMensajeCampoVacioMaduracion(loteRegistrarLoteLiberacionMaduracion);
    }
    return todosCompletos;
}

function registrarLoteLiberacionMaduracion(){
    if(verificarFormularioRegistrarLoteLiberacionMaduracion()){
        mostrarModalesAgregarLoteProcesoValidacion('lotesAgregadosLiberacionMaduracion','registrarLote', 'liberacion');
    }
}

/**
 * 
 * @param {*} contenedor - id del div donde se van a agregar los lotes
 * @param {*} funcion - solo tiene 2 valores, agregarLote o registrarLote 
 * @param {*} servicio - solo tiene 2 valores, ingreso o liberacion
 * 
 */
function mostrarModalesAgregarLoteProcesoValidacion(contenedor,funcion,servicio){
    Swal.fire({
        title: '¿Agregar lote a la solicitud?',
        text: '¿Estas seguro(a) de agregar este lote a la solicitud?, para evitar retrasos revisa que la información registrada sea correcta',
        showCancelButton: false,
        showDenyButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Si',
        denyButtonText: 'No',
        allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
        allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
    }).then((result) => {
        if (result.isConfirmed) {
            if(servicio == 'ingreso'){
                mostrarLoteAgregadoMaduracion(contenedor);
            }else{
                mostrarLoteAgregadoLiberacionMaduracion(contenedor);
            }
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
                    if(funcion == 'agregarLote'){
                        $("#modalPequeñoMaduracion").modal("hide");
                        abrirModal('lotesRegistradosMaduracion');
                    }
                    document.getElementById('formularioProcesoValidacionMaduracion').reset();
                    document.getElementById('formularioRegistrarLoteMaduracion').reset();
                    document.getElementById('formularioRegistrarLoteLiberacionMaduracion').reset();
                }else{
                    $("#modalPequeñoMaduracion").modal("hide");
                    $("#modalLiberacionMaduracion").modal("hide");
                }
            })
        }
    })
}
/**
 * 
 * @param {*} contenedor - id del div donde se van a agregar los lotes
 */
function mostrarLoteAgregadoMaduracion(contenedor){
    loteAgregadoIngresoMaduracion = true;
    const lotesAgregados = document.getElementById(contenedor);
    const nuevoContenido = document.createElement('div');
    let id = "miNuevoDivId";
    nuevoContenido.innerHTML = `
    <div class="card">
    <div class="row">
    <button type="button" class="btn btn-link col-sm-1" id="${id}" onclick ="eliminarLoteAgregadoMaduracion(this.id,${contenedor});"><i class="bi bi-trash"></i></button>
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
/**
 * 
 * @param {*} contenedor - id del div donde se van a agregar los lotes
 */
function mostrarLoteAgregadoLiberacionMaduracion(contenedor){
    const lotesAgregados = document.getElementById(contenedor);
    const nuevoContenido = document.createElement('div');
    let id = "miNuevoDivId";
    loteAgregadoLiberacionMaduracion = true;
    nuevoContenido.innerHTML = `
    <div class="card">
    <div class="row">
    <button type="button" class="btn btn-link col-sm-1" id="${id}" onclick ="eliminarLoteAgregadoMaduracion(this.id,${contenedor});"><i class="bi bi-trash"></i></button>
    </div>
    <h5 class="text-center mb-3"><strong><i class="bi bi-archive"></i>Nombre</strong></h5>
    <h6 class="card-subtitle text-body-secondary text-center">Características del lote</h6>
    <div class="card-body">
      <div class="row card-text">
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>Folio:</label>
        <label class="col-sm-6 fw-normal small"></label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>Ingresó:</label>
        <label class="col-sm-6 fw-normal small"></label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>Volumen solicitado:</label>
        <label class="col-sm-6 fw-normal small"></label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>%Alc. Vol.:</label>
        <label class="col-sm-6 fw-normal small"></label>
        <label class="col-sm-6 fw-normal small"> <i class="bi bi-caret-right-fill"></i>Contenedor:</label>
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

/**
 * 
 * @param {*} idLote - id del div que se va a eliminar 
 * @param {*} contenedorLote id del div principal donde pertenece el lote que se va a eliminar
 */
function eliminarLoteAgregadoMaduracion(idLote,contenedorLote){
    let divEliminar = document.getElementById(idLote);
    let divPrincipal = document.getElementById(contenedorLote);
  
    divPrincipal.removeChild(divEliminar);
}

/**
 * 
 * @param {*} contenidoModal id del contenido que se va a mostrar en el modal
 */
function mostrarModalRegistrarLoteMaduracion(contenidoModal){
    let cerrarAgregarLote = document.getElementById('cerrarAgregarLoteMaduracion')
    let cerrarRegistrarLote = document.getElementById('cerrarRegistrarLoteMaduracion');
    let aceptarAgregarLote = document.getElementById('aceptarAgregarLoteMaduracion')
    let aceptarRegistrarLote = document.getElementById('aceptarRegistrarLoteMaduracion');
    let tituloModalpequeñoMaduracion = document.getElementById('tituloModalpequeñoMaduracion');
    let cuerpoModalPequeñoMaduracion = document.getElementById('cuerpoModalPequeñoMaduracion');
    let agregarInformacionIngresoMaduracion = document.getElementById('agregarInformacionIngresoMaduracion');
    let registrarInformacionIngresoMaduracion = document.getElementById('registrarInformacionIngresoMaduracion');
    let divTipoMaderaProcesoValidacionMaduracion = document.getElementById('divTipoMaderaProcesoValidacionMaduracion');
    let divMaderaProcesoValidacionMaduracion = document.getElementById('divMaderaProcesoValidacionMaduracion');

    divTipoMaderaProcesoValidacionMaduracion.style.display = 'none';
    divMaderaProcesoValidacionMaduracion.style.display = 'none';
    aceptarAgregarLote.setAttribute('hidden', true);
    aceptarRegistrarLote.removeAttribute('hidden');
    cerrarAgregarLote.setAttribute('hidden', true);
    cerrarRegistrarLote.removeAttribute('hidden');
    Swal.close();

    abrirModal('modalPequeñoMaduracion');
    registrarInformacionIngresoMaduracion.innerHTML = agregarInformacionIngresoMaduracion.innerHTML;
    tituloModalpequeñoMaduracion.textContent = 'Registra tu lote';
    cuerpoModalPequeñoMaduracion.innerHTML = document.getElementById(contenidoModal).innerHTML;
}

/**
 * 
 * @param {*} contenidoModal id del contenido que se va a mostrar en el modal
 */
function mostrarModalRegistrarLoteLiberacionMaduracion(contenidoModal){
    let tituloLiberacionMaduracion = document.getElementById('tituloLiberacionMaduracion');
    let cuerpoLiberacionMaduracion = document.getElementById('cuerpoLiberacionMaduracion');

    Swal.close();
    abrirModal('modalLiberacionMaduracion');
    tituloLiberacionMaduracion.textContent = 'Registra tu lote';
    cuerpoLiberacionMaduracion.innerHTML = document.getElementById(contenidoModal).innerHTML;
}

/**
 * 
 * @param {*} contenidoModalRegistrarLote Es el contenido del modal que se va a mostrar al agregar un nuevo lote dependiendo del servicio de ingreso o maduracionya sea para ingreso o liberacion
 */
function mostrarModalNoApareceLoteMaduracion(contenidoModal){
    let noApareceLoteMaduracion = document.getElementById(contenidoModal).innerHTML;

    Swal.fire({
        title: '¿No aparece tu lote?',
        html: noApareceLoteMaduracion,
        showCloseButton: true,
        showCancelButton: false,
        focusConfirm: true,
        confirmButtonText: 'Aceptar',
        width: '700px',
        allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
        allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
    })
}

function generarSolicitudMaduracion(){
    let fechaPropuestaMaduracion = document.getElementById('fechaPropuestaMaduracion');
    let tipoInstalacionMaduracion = document.getElementById('tipoInstalacionMaduracion');
    let instalacionMaduracion = document.getElementById('instalacionMaduracion');
    let todosCompletos = true;

    if(!loteAgregadoIngresoMaduracion && !loteAgregadoLiberacionMaduracion){
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
        if(fechaPropuestaMaduracion.value != ''){
            todosCompletos = esDiaDomingoSabado('fechaPropuestaMaduracion');      
        }
        if(fechaPropuestaMaduracion.value == ''){
            todosCompletos = mostrarMensajeCampoVacioMaduracion(fechaPropuestaMaduracion);
        }
    } 
    if (todosCompletos) {
        Swal.fire({
            title: '¿Registrar Solicitud?',
            text: "¿Estas seguro(a) de registrar esta solicitud?",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'No',
            allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
            allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: '¡Solicitud registrada exitosamente!',
                    text: 'La solicitud con folio FA-01284/23 fue registrada correctamente. Actualmente su solicitud se encuentra en proceso de validación por la unidad de inspección de AMMA, Le recordamos que puede monitorear el estatus de su solicitud en la sección de seguimiento de solicitudes',
                    confirmButtonText: 'Aceptar',
                    showCloseButton: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });
                loteAgregadoIngresoMaduracion = false;
                loteAgregadoLiberacionMaduracion = false;
                cargarContenidoMenus('modulos/solicitudes/maduracion/maduracion.php','maduracion', 'INGRESO Y/O LIBERACIÓN DE PRODUCTO A MADURACIÓN');
            }
        })
    }
    
}

function mostrarModalInformacionSeguimientoMaduracion(){
    abrirModal('modalSeguimientoInformacionMaduracion');
}