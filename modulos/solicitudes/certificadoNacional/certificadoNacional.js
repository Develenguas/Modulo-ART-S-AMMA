var loteAgregadoCN = false;

fechaPropuestaCN();
obtenerFechaActualCN();

function seleccionarMarcaMaquilaCN(){
    let divConvenioMaquilaCN = document.getElementById('divConvenioMaquilaCN');
    
    divConvenioMaquilaCN.style.display = 'block';
    realizarCambioLoteCN();
}

function realizarCambioLoteCN(){
    let lotesAgregadosCN = document.getElementById('lotesAgregadosCN');

    if(loteAgregadoCN){
        Swal.fire({
            title: '¡Cambio solicitado!',
            text: "Si realiza el cambio se eliminarán los lotes agregados previamente ¿está seguro?",
            showCancelButton: false,
            showDenyButton: true,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Si',
            denyButtonText: 'No',
            allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
            allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                '¡Correcto!',
                'Ya puedes comenzar a capturar los datos de la solicitud.',
                'success'
              )
            }
          }) 
    }
    lotesAgregadosCN.innerHTML = "";
}

function seleccionarMarcaPropiaCN(){
    let divConvenioMaquilaCN = document.getElementById('divConvenioMaquilaCN');
    
    divConvenioMaquilaCN.style.display = 'none';
    realizarCambioLoteCN();
}

function seleccionarTipoInstalacionCN(elemento){
    let instalacionProductoCN = document.getElementById('instalacionProductoCN');
    let divInstalacionEnvasarProductoCN = document.getElementById('divInstalacionEnvasarProductoCN');
    let divGranelFabricaCN = document.getElementById('divGranelFabricaCN');
    let siHologramaCN = document.getElementById('siHologramaCN');
    let noHologramaCN = document.getElementById('noHologramaCN');
    let divSolicitarHologramaCN = document.getElementById('divSolicitarHologramaCN');

    instalacionProductoCN.disabled = false;
    instalacionProductoCN.selectedIndex = 0;
    if(elemento.value == 1){
        divInstalacionEnvasarProductoCN.style.display = 'block';
        divGranelFabricaCN.style.display = 'block';
        siHologramaCN.checked = true;
        divSolicitarHologramaCN.style.display = 'none';
    }else if(elemento.value == 4 || elemento.value == 5){
        noHologramaCN.checked = true;
    }else{
        divInstalacionEnvasarProductoCN.style.display = 'none';
        divGranelFabricaCN.style.display = 'none';
        siHologramaCN.checked = true;
        divSolicitarHologramaCN.style.display = 'none';
    }
    quitarMensajeValidacionCN(elemento);
    realizarCambioLoteCN();
}

function seleccionarInstalacionEncuentraProducto(elemento){
    /*poner lo que se hará */
    quitarMensajeValidacionCN(elemento)
}

function seleccionarInstalacionEnvasarProducto(elemento){
    /*poner lo que se hará */
    quitarMensajeValidacionCN(elemento)
}

function obtenerFechaActualCN(){
    let fechaSolicitudCN = document.getElementById('fechaSolicitudCN');

    fechaSolicitudCN.value = new Date().toISOString().split("T")[0];
}

function solicitarHologramasCN(){
    let tipoInstalacionCN = document.getElementById('tipoInstalacionCN');
    let siHologramaCN = document.getElementById('siHologramaCN');
    let divSolicitarHologramaCN = document.getElementById('divSolicitarHologramaCN');
    let mensajeSolicitarHologramaCN = document.getElementById('mensajeSolicitarHologramaCN');


    if(tipoInstalacionCN.value == 4 || tipoInstalacionCN.value == 5){
        if(siHologramaCN.checked){
            divSolicitarHologramaCN.style.display = 'block';
        }else{
            divSolicitarHologramaCN.style.display = 'none';
            mensajeSolicitarHologramaCN.style.display = 'none';
        }
    }
}

function fechaPropuestaCN() {
    let fechaActual = new Date().toISOString().slice(0, 10);
    var fechaCon3DiasSumados = sumarDiasAFecha(fechaActual, 2);
    
    if ($("#servicioNormalCN").prop("checked")) {
      var fechaCon3DiasSumados = sumarDiasAFecha(fechaActual, 2);
      $("#fechaPropuestaCN").attr("min", fechaCon3DiasSumados);
      $("#fechaPropuestaCN").val(fechaCon3DiasSumados);
    }
    if ($("#servicioExclusivoCN").prop("checked")) {
      $("#fechaPropuestaCN").attr("min", fechaActual);
      $("#fechaPropuestaCN").val(fechaActual);
    }
}

function agregarLoteCN(){
    let tipoInstalacionCN = document.getElementById('tipoInstalacionCN');
    let instalacionProductoCN = document.getElementById('instalacionProductoCN');
    let instalacionEnvasarProductoCN = document.getElementById('instalacionEnvasarProductoCN');
    let marcaMaquilaCN = document.getElementById('marcaMaquilaCN');
    let convenioMaquilaCN = document.getElementById('convenioMaquilaCN');

    if(tipoInstalacionCN.value != 0){
        if(tipoInstalacionCN.value != 1){
            if(instalacionProductoCN.value != 0){
                if(marcaMaquilaCN.checked ){
                    convenioMaquilaCN.focus();
                    convenioMaquilaCN.nextElementSibling.style.display = "block";
                    Swal.fire({
                        title: 'Número maquila',
                        text: 'Para poder continuar es necesario seleccione el número de control a maquilar.',
                        confirmButtonText: 'Aceptar',
                        showCloseButton: true,
                        allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
                        allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
                    });
                }else{
                    abrirModal('modalLotesREgistradosCN');
                }
            }else{
                instalacionProductoCN.focus();
                instalacionProductoCN.nextElementSibling.style.display = "block";
                Swal.fire({
                    title: 'Selecciona una instalación',
                    text: 'Para poder continuar es necesario seleccionar la instalación donde se encuentra el producto.',
                    confirmButtonText: 'Aceptar',
                    showCloseButton: true,
                    allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
                    allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
                });
            }
        }else{
            if(instalacionProductoCN.value != 0){
                if(instalacionEnvasarProductoCN.value != 0){
                    if(marcaMaquilaCN.checked && convenioMaquilaCN.value.trim() == ''){
                        convenioMaquilaCN.focus();
                        convenioMaquilaCN.nextElementSibling.style.display = "block";
                        Swal.fire({
                            title: 'Número maquila',
                            text: 'Para poder continuar es necesario seleccione el número de control a maquilar.',
                            confirmButtonText: 'Aceptar',
                            showCloseButton: true,
                            allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
                            allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
                        });
                    }else{
                        abrirModal('modalLotesREgistradosCN');
                    }
                }else{
                    instalacionEnvasarProductoCN.focus();
                    instalacionEnvasarProductoCN.nextElementSibling.style.display = "block";
                    Swal.fire({
                    title: 'Selecciona una instalación',
                    text: 'Para poder continuar es necesario seleccionar la instalación donde se envasará el producto.',
                    confirmButtonText: 'Aceptar',
                    showCloseButton: true,
                    allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
                    allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
                    });
                }
            }else{
                instalacionProductoCN.focus();
                instalacionProductoCN.nextElementSibling.style.display = "block";
                Swal.fire({
                    title: 'Selecciona una instalación',
                    text: 'Para poder continuar es necesario seleccionar la instalación donde se encuentra el producto.',
                    confirmButtonText: 'Aceptar',
                    showCloseButton: true,
                    allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
                    allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
                });
            }
        }
    }else{
        tipoInstalacionCN.focus();
        tipoInstalacionCN.nextElementSibling.style.display = "block";
        Swal.fire({
            title: 'Selecciona una instalación',
            text: 'Para poder continuar es necesario seleccionar el tipo de instalación.',
            confirmButtonText: 'Aceptar',
            showCloseButton: true,
            allowOutsideClick: false, // Evita cerrar al hacer clic fuera del modal
            allowEscapeKey: false // Evita cerrar al presionar la tecla "Escape"
        });
    }
}

function quitarMensajeValidacionCN(elemento){
    if(elemento.value.trim() != ''){
        elemento.nextElementSibling.style.display = "none";
        elemento.value = elemento.value.trim();
    }
}

function mostrarInformacionLoteCN(){
    $("#modalLotesREgistradosCN").modal("hide");
}

function mostrarLoteAgregadoCN(){
    const lotesAgregados = document.getElementById('lotesAgregadosCN');
    const nuevoContenido = document.createElement('div');
    let id = "miNuevoDivId";
    nuevoContenido.innerHTML = `
    <div class="card">
    <div class="row">
    <button type="button" class="btn btn-link col-sm-1" id="${id}" onclick ="eliminarLoteAgregadoMaduracion(this.id,lotesAgregadosCN);"><i class="bi bi-trash"></i></button>
    </div>
    <h5 class="text-center mb-3"><strong><i class="bi bi-archive"></i>Nombre</strong></h5>
    <h6 class="card-subtitle text-body-secondary text-center">Características del lote</h6>
    <div class="card-body">
      <div class="row card-text">
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>Categoría:</label>
        <label class="col-sm-6 fw-normal small">dato dato</label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>Clase:</label>
        <label class="col-sm-6 fw-normal small">dato dato</label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>Contenido alcohólico:</label>
        <label class="col-sm-6 fw-normal small">dato dato</label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>No. de análisis:</label>
        <label class="col-sm-6 fw-normal small">dato dato</label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>Marca:</label>
        <label class="col-sm-6 fw-normal small">dato dato</label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>No. de lote a Granel:</label>
        <label class="col-sm-6 fw-normal small">dato dato</label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>No. de lote de Envasado:</label>
        <label class="col-sm-6 fw-normal small">dato dato</label>
        <h6 class="text-center mb-3"><strong>Presentaciones</strong></h6>          
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>Contenido neto por botella:</label>
        <label class="col-sm-6 fw-normal small">dato dato</label>
        <label class="col-sm-6 fw-normal small"><i class="bi bi-caret-right-fill"></i>No. de botellas:</label>
        <label class="col-sm-6 fw-normal small">dato dato</label>
      </div>
    </div>
  </div>
  `;
    nuevoContenido.classList.add('col-sm-3', 'mb-3', 'mb-sm-0', 'col-12'); 
    nuevoContenido.setAttribute('id', 'miNuevoDivId');
    lotesAgregados.appendChild(nuevoContenido);
    loteAgregadoCN = true;
}

function mostrarMensajesConfirmacionCN(){
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
            $("#modalProcesoValidacionCN").modal("hide");
            mostrarLoteAgregadoCN();
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
                   abrirModal('modalLotesREgistradosCN');
                }
            })
        }
    })
}

function generarSolicitudCN(){
    let siHologramaCN = document.getElementById('siHologramaCN');
    let solicitarHologramaCN = document.getElementById('solicitarHologramaCN');
    let fechaPropuestaCN = document.getElementById('fechaPropuestaCN');
    let todosCompletos = true;

    if(!loteAgregadoCN){
        Swal.fire({
            title: '¡Importante!',
            text: 'Debe seleccionar al menos un lote para poder continuar.',
            confirmButtonText: 'Aceptar',
            showCloseButton: true,
            allowOutsideClick: false,
            allowEscapeKey: false
        });
        todosCompletos = false;            
    }else{
        if(fechaPropuestaCN.value != ''){
            todosCompletos = esDiaDomingoSabado('fechaPropuestaCN');;            
        }
        if(fechaPropuestaCN.value == ''){
            todosCompletos = mostrarMensajeCampoVacioMaduracion(fechaPropuestaCN);
        }
        if((tipoInstalacionCN.value == 4 || tipoInstalacionCN.value == 5) && siHologramaCN.checked){
            if(solicitarHologramaCN.value.trim() == ''){
                todosCompletos = mostrarMensajeCampoVacioMaduracion(solicitarHologramaCN);
            }
        }
    }
    if(todosCompletos){
        abrirModal('modalConfirmarSolicitudCN');
    } 
}

function confirmarSolicitudCN(){
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
                text: 'La solicitud con folio FA-01356/23 fue registrada correctamente. Actualmente su solicitud se encuentra en proceso de validación por la unidad de inspección de AMMA. Le recordamos que puede monitorear el estatus de su solicitud dando clic en la parte superior de la pagina en Solicitudes Recibidas y Solicitudes Enviadas.',
                confirmButtonText: 'Aceptar',
                showCloseButton: true,
                allowOutsideClick: false,
                allowEscapeKey: false
            });
            loteAgregadoCN = true;
            cargarContenidoMenus('modulos/solicitudes/certificadoNacional/certificadoNacional.php','certificadoNacional', 'NOTIFICACIÓN DE ENTREGA DE HOLOGRAMAS, INSPECCIÓN DEL ENVASADO');
        }
    })
}


