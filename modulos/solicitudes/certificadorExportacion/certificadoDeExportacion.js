const lotesProductos = [];
let productos = [];
let archivosLotes = [];
let posProductoNuevo = 0;
let posProductoEditar = 0;
let posTabCertificadoExp = 'datosGenerales';

function agregarImportadorCertificadoExport() {
  let inputAliasImportador = document.getElementById('inputAliasImportador');
  let inputNombreImportador = document.getElementById('inputNombreImportador');
  let inputDomicilioImportador = document.getElementById('inputDomicilioImportador');
  let inputPaisDestinoImportador = document.getElementById('inputPaisDestinoImportador');
  
  if (inputAliasImportador.value != '' && 
      inputNombreImportador.value != '' &&
      inputDomicilioImportador.value != '' &&
      inputPaisDestinoImportador.value != '')
  {
     //ajax
     document.getElementById('formAgregarImportadorCertificadoExport').reset();
     Swal.fire(
       'Importador agregado correctamente',
       '',
       'success'
     )
     $("#exampleModalAgregarImportador").modal("hide");
  } else {
    if (inputAliasImportador.value == '') {
      document.getElementById('labelErrorAliasImportador').classList.remove('d-none');
    }
    if (inputNombreImportador.value == '') {
      document.getElementById('labelErrorNombreImportador').classList.remove('d-none');
    }
    if (inputDomicilioImportador.value == '') {
      document.getElementById('labelErrorDomicilioImportador').classList.remove('d-none');
    }
    if (inputPaisDestinoImportador.value == '') {
      document.getElementById('labelErrorPaisDestinoImportador').classList.remove('d-none');
    }
  }
}

function validarImportadorCertificadoExport(input) {
  if (input.id == 'inputAliasImportador') {
    if (input.value != '') {
      document.getElementById('labelErrorAliasImportador').classList.add('d-none');
    } else {
      document.getElementById('labelErrorAliasImportador').classList.remove('d-none');
    }
  }
  if (input.id == 'inputNombreImportador') {
    if (input.value != '') {
      document.getElementById('labelErrorNombreImportador').classList.add('d-none');
    } else {
      document.getElementById('labelErrorNombreImportador').classList.remove('d-none');
    }
  }
  if (input.id == 'inputDomicilioImportador') {
    if (input.value != '') {
      document.getElementById('labelErrorDomicilioImportador').classList.add('d-none');
    } else {
      document.getElementById('labelErrorDomicilioImportador').classList.remove('d-none');
    }
  }
  if (input.id == 'inputPaisDestinoImportador') {
    if (input.value != '') {
      document.getElementById('labelErrorPaisDestinoImportador').classList.add('d-none');
    } else {
      document.getElementById('labelErrorPaisDestinoImportador').classList.remove('d-none');
    }
  }
}

function eventoRadioCertificadoExp(radio) {
  if (radio.name == "opcionesRadioSupervicion") {
    if (radio.value == "no") {
      document.getElementById("divDateUltInsp").classList.add("d-none");
    } else {
      document.getElementById("divDateUltInsp").classList.remove("d-none");
    }
  }
  if (radio.name == "opcionesRadioEnvasadoras") {
    if (radio.value == "no") {
      document.getElementById("divConvenioMaquila").classList.add("d-none");
    } else {
      document.getElementById("divConvenioMaquila").classList.remove("d-none");
    }
  }
}

function eventoSelectCertificadoExp(select) {
  if (select.name == "selectInstalacionCertExp") {
    if (select.value != "0") {
      document.getElementById("divDatosInstalacion").classList.remove("d-none");
    } else {
      document.getElementById("divDatosInstalacion").classList.add("d-none");
    }
  }
  if (select.name == "selectPresentacionProducto") {
    let selectContenidoNeto  = document.getElementById('selectContenidoNeto');
    while (selectContenidoNeto.options.length > 1) {
      selectContenidoNeto.remove(1);
    }
    if (select.value == "Mililitros") {
      while (selectContenidoNeto.options.length > 1) {
        selectContenidoNeto.remove(1);
      }
      //con un ciclo añadir los datos
      var option = document.createElement("option");
      option.text = "100";
      document.getElementById("selectContenidoNeto").add(option);
    } else if (select.value == "Litros") {
      while (selectContenidoNeto.options.length > 1) {
        selectContenidoNeto.remove(1);
      }
      var option = document.createElement("option");
      option.text = "1";
      document.getElementById("selectContenidoNeto").add(option);
    } else if (select.value == "Centilitros") {
      while (selectContenidoNeto.options.length > 1) {
        selectContenidoNeto.remove(1);
      }
      var option = document.createElement("option");
      option.text = "3";
      document.getElementById("selectContenidoNeto").add(option);
    }
  }
  if (select.name == "selectMarcaProcesoVal") {
    if (select.value != "") {
    }
  }
}

function agregarPresentacion(op, id) {
  let selectPresentacionProducto = document.getElementById("selectPresentacionProducto");
  let selectContenidoNeto = document.getElementById("selectContenidoNeto");
  let inputNumBotellas = document.getElementById("inputNumNumBotellas");
  let inputNumBotellasCaja = document.getElementById("inputNumBotellasCaja");
  if (document.getElementById("btnAgregarEditarPresentacion").innerHTML == "Modificar") {
    productos[posProductoEditar]["presentacionProducto"] = selectPresentacionProducto.value;
    productos[posProductoEditar]["contenidoNeto"] = selectContenidoNeto.value;
    productos[posProductoEditar]["numeroBotellas"] = inputNumBotellas.value;
    productos[posProductoEditar]["numeroBotellasCaja"] = inputNumBotellasCaja.value;
    cancelarEditarPresentacion();
    //funcion para eliminar la tabla de productos en el modal
    let tablaProductosModal = document.getElementById("tablaProductos");
    while (tablaProductosModal.rows.length > 1) {
      tablaProductosModal.deleteRow(1);
    }
    //repinta la tabla de productos
    for (let j = 0; j < productos.length; j++) {
      document.getElementById("tablaProductos").insertRow(-1).innerHTML = `<tr>
      <td>${productos[j]["contenidoNeto"]}</td>
      <td>${productos[j]["presentacionProducto"]}</td>
      <td>${productos[j]["numeroBotellas"]}</td>
      <td>${productos[j]["numeroBotellasCaja"]}</td>
      <td><button class="btn btn-danger me-2" onclick="eliminarProducto('${op}',${j},'${id}')">Eliminar</button><button class="btn btn-warning" onclick="editarProducto('${op}',${j},'${id}')">Modificar</button><td>
      </tr>`;
    }
    document.getElementById("formPresentacionProducto").reset();
  } else {
    if (
      selectContenidoNeto.value != "" &&
      selectPresentacionProducto.value != "" &&
      inputNumBotellas.value != "" &&
      inputNumBotellasCaja.value != ""
    ) {
      document.getElementById("tablaProductos").insertRow(-1).innerHTML = `<tr>
        <td>${selectContenidoNeto.value}</td>
        <td>${selectPresentacionProducto.value}</td>
        <td>${inputNumBotellas.value}</td>
        <td>${inputNumBotellasCaja.value}</td>
        <td><button class="btn btn-danger me-2" onclick="eliminarProducto('${op}',${posProductoNuevo},'${id}')">Eliminar</button><button class="btn btn-warning" onclick="editarProducto('${op}',${posProductoNuevo},'${id}')">Modificar</button><td>
        </tr>`;
  
      productos.push({
        contenidoNeto: selectContenidoNeto.value,
        presentacionProducto: selectPresentacionProducto.value,
        numeroBotellas: inputNumBotellas.value,
        numeroBotellasCaja: inputNumBotellasCaja.value
      });
      posProductoNuevo++;
      if (op == "nuevo") {
        document.getElementById('labelErrorAgregarProd').classList.add('d-none');
      }
      document.getElementById("formPresentacionProducto").reset();
    } else {
      if (inputNumBotellasCaja.value == '') {
        document.getElementById('labelErrorBotellasCaja').classList.remove('d-none');
        inputNumBotellasCaja.focus();
      }
      if (inputNumBotellas.value == '') {
        document.getElementById('labelErrorNoBotellas').classList.remove('d-none');
        inputNumBotellas.focus();
      }
      if (selectContenidoNeto.value == '') {
        document.getElementById('labelErrorContNeto').classList.remove('d-none');
        selectContenidoNeto.focus();
      }
      if (selectPresentacionProducto.value == '') {
        document.getElementById('labelErrorUnidad').classList.remove('d-none');
        selectPresentacionProducto.focus();
      }
    }
  }
}

function validarCamposPresentacion (input) {
  if (input.name == 'selectPresentacionProducto') {
    if (input.value != '') {
      document.getElementById('labelErrorUnidad').classList.add('d-none');
    } else {
      document.getElementById('labelErrorUnidad').classList.remove('d-none');
    }
  }
  if (input.name == 'selectContenidoNeto') {
    if (input.value != '') {
      document.getElementById('labelErrorContNeto').classList.add('d-none');
    } else {
      document.getElementById('labelErrorContNeto').classList.remove('d-none');
    }
  }
  if (input.name == 'inputNumNumBotellas') {
    if (input.value != '') {
      document.getElementById('labelErrorNoBotellas').classList.add('d-none');
    } else {
      document.getElementById('labelErrorNoBotellas').classList.remove('d-none');
    }
  }
  if (input.name == 'inputNumBotellasCaja') {
    if (input.value != '') {
      document.getElementById('labelErrorBotellasCaja').classList.add('d-none');
    } else {
      document.getElementById('labelErrorBotellasCaja').classList.remove('d-none');
    }
  }
}

function editarProducto(op,pos,id) {
  posProductoEditar = pos;
  document.getElementById("btnAgregarEditarPresentacion").innerHTML = "Modificar";
  document.getElementById("btnCancelarEdicionPresentacion").classList.remove("d-none");
  let selectPresentacionProducto = document.getElementById("selectPresentacionProducto");
  let selectContenidoNeto = document.getElementById("selectContenidoNeto");
  let inputNumBotellas = document.getElementById("inputNumNumBotellas");
  let inputNumBotellasCaja = document.getElementById("inputNumBotellasCaja");
  if (op == "nuevo") {
    selectPresentacionProducto.value = productos[pos]["presentacionProducto"];
    selectContenidoNeto.value = productos[pos]["contenidoNeto"];
    inputNumBotellas.value = productos[pos]["numeroBotellas"];
    inputNumBotellasCaja.value = productos[pos]["numeroBotellasCaja"];
  } else {
    for (let i = 0; i < lotesProductos.length ;i++) {
      if (lotesProductos[i]["numLoteGranel"]+"-"+lotesProductos[i]["numLoteEnvasado"] == id) {
        selectContenidoNeto.value = lotesProductos[i]["productos"][pos]["contenidoNeto"];
        selectPresentacionProducto.value = lotesProductos[i]["productos"][pos]["presentacionProducto"];
        inputNumBotellas.value = lotesProductos[i]["productos"][pos]["numeroBotellas"];
        inputNumBotellasCaja.value = lotesProductos[i]["productos"][pos]["numeroBotellasCaja"];
        break;
      }
    }
  }
}

//renombrar funcion para reutilizar
function cancelarEditarPresentacion() {
  document.getElementById("formPresentacionProducto").reset();
  document.getElementById("btnCancelarEdicionPresentacion").classList.add("d-none");
  document.getElementById("btnAgregarEditarPresentacion").innerHTML = "Agregar presentación";

}

function agregarLoteProductos(op, id) {
  let inputNumLoteGranel = document.getElementById("inputNumLoteGranel");
  let inputNumLoteEnvasado = document.getElementById("inputNumLoteEnvasado");
  let selectMarcaProcesoVal = document.getElementById("selectMarcaProcesoVal");
  let selectEstadoProcesoVal = document.getElementById("selectEstadoProcesoVal");
  let selectCategoriaProcesoVal = document.getElementById("selectCategoriaProcesoVal");
  let selectClaseProcesoVal = document.getElementById("selectClaseProcesoVal");
  let inputContAlcoholico = document.getElementById("inputContAlcoholico");
  let inputNumAnalisisLab = document.getElementById("inputNumAnalisisLab");
  let inputNumCertNomMezcalGranel = document.getElementById("inputNumCertNomMezcalGranel");
  let inputAbocantesIngredientes = document.getElementById("inputAbocantesIngredientes");
  if (
    inputNumLoteGranel.value != "" &&
    inputNumLoteEnvasado.value != "" &&
    selectMarcaProcesoVal.value != "" &&
    selectEstadoProcesoVal.value != "" &&
    selectCategoriaProcesoVal.value != "" &&
    selectClaseProcesoVal.value != "" &&
    inputContAlcoholico.value != ""
  ) {
      if (op == "nuevo") {
        if (productos.length != 0) {
          lotesProductos.push({
            numLoteGranel: inputNumLoteGranel.value,
            numLoteEnvasado: inputNumLoteEnvasado.value,
            marca: selectMarcaProcesoVal.value,
            estado: selectEstadoProcesoVal.value,
            categoria: selectCategoriaProcesoVal.value,
            clase: selectClaseProcesoVal.value,
            contenidoAlcoholico: inputContAlcoholico.value,
            numAnalisisLab: inputNumAnalisisLab.value,
            numCertificadoNomMezcalGranel: inputNumCertNomMezcalGranel.value,
            abocantesIngredientes: inputAbocantesIngredientes.value,
            productos: productos
          });
          $("#exampleModalProcesoVal").modal("hide");
            
          mostrarLotesProductos();

          document.getElementById("formProcesoValidacion").reset();
          let tablaProductosModal = document.getElementById("tablaProductos");
          while (tablaProductosModal.rows.length > 1) {
            tablaProductosModal.deleteRow(1);
          }
          productos = [];
          posProductoNuevo = 0;
        } else {
          document.getElementById('labelErrorAgregarProd').classList.remove('d-none');
        }
      } 
      else {
        for (let i = 0; i < lotesProductos.length ;i++) {
          if (lotesProductos[i]["numLoteGranel"]+"-"+lotesProductos[i]["numLoteEnvasado"] == id) {
            lotesProductos[i]["numLoteGranel"] = inputNumLoteGranel.value;
            lotesProductos[i]["numLoteEnvasado"] = inputNumLoteEnvasado.value;
            lotesProductos[i]["marca"] = selectMarcaProcesoVal.value;
            lotesProductos[i]["estado"] = selectEstadoProcesoVal.value;
            lotesProductos[i]["categoria"] = selectCategoriaProcesoVal.value;
            lotesProductos[i]["clase"] = selectClaseProcesoVal.value;
            lotesProductos[i]["contenidoAlcoholico"] = inputContAlcoholico.value;
            lotesProductos[i]["numAnalisisLab"] = inputNumAnalisisLab.value;
            lotesProductos[i]["numCertificadoNomMezcalGranel"] = inputNumCertNomMezcalGranel.value;
            lotesProductos[i]["abocantesIngredientes"] = inputAbocantesIngredientes.value;
            lotesProductos[i]["productos"] = productos;
            break;
          }
        }
        $("#exampleModalProcesoVal").modal("hide");
            
        mostrarLotesProductos();
        document.getElementById("formProcesoValidacion").reset();
          let tablaProductosModal = document.getElementById("tablaProductos");
          while (tablaProductosModal.rows.length > 1) {
            tablaProductosModal.deleteRow(1);
          }
          productos = [];
      }
  } else {
    if (inputContAlcoholico.value == "") {
      document.getElementById('labelErrorContAlc').classList.remove('d-none');
      inputContAlcoholico.focus();
    }
    if (selectClaseProcesoVal.value == "") {
      document.getElementById('labelErrorClase').classList.remove('d-none');
      selectClaseProcesoVal.focus();
    }
    if (selectCategoriaProcesoVal.value == "") {
      document.getElementById('labelErrorCategoria').classList.remove('d-none');
      selectCategoriaProcesoVal.focus();
    }
    if (selectEstadoProcesoVal.value == "") {
      document.getElementById('labelErrorEstado').classList.remove('d-none');
      selectEstadoProcesoVal.focus();
    }
    if (selectMarcaProcesoVal.value == "" ) {
      document.getElementById('labelErrorMarca').classList.remove('d-none');
      selectMarcaProcesoVal.focus();
    }
    if (inputNumLoteEnvasado.value == "") {
      document.getElementById('labelErrorLoteEnvasado').classList.remove('d-none');
      inputNumLoteEnvasado.focus();
    }
    if (inputNumLoteGranel.value == "") {
      document.getElementById('labelErrorLoteGranel').classList.remove('d-none');
      inputNumLoteGranel.focus();
    }
  }
}

function validarCamposModalProcesoVal (campo) {
  if (campo.id == 'inputNumLoteGranel') {
    if (campo.value != '') {
      document.getElementById('labelErrorLoteGranel').classList.add('d-none');
    } else {
      document.getElementById('labelErrorLoteGranel').classList.remove('d-none');
    }
  }
  if (campo.id == 'inputNumLoteEnvasado') {
    if (campo.value != '') {
      document.getElementById('labelErrorLoteEnvasado').classList.add('d-none');
    } else {
      document.getElementById('labelErrorLoteEnvasado').classList.remove('d-none');
    }
  }
  if (campo.id == 'selectMarcaProcesoVal') {
    if (campo.value != '') {
      document.getElementById('labelErrorMarca').classList.add('d-none');
    } else {
      document.getElementById('labelErrorMarca').classList.remove('d-none');
    }
  }
  if (campo.id == 'selectEstadoProcesoVal') {
    if (campo.value != '') {
      document.getElementById('labelErrorEstado').classList.add('d-none');
    } else {
      document.getElementById('labelErrorEstado').classList.remove('d-none');
    }
  }
  if (campo.id == 'selectCategoriaProcesoVal') {
    if (campo.value != '') {
      document.getElementById('labelErrorCategoria').classList.add('d-none');
    } else {
      document.getElementById('labelErrorCategoria').classList.remove('d-none');
    }
  }
  if (campo.id == 'selectClaseProcesoVal') {
    if (campo.value != '') {
      document.getElementById('labelErrorClase').classList.add('d-none');
    } else {
      document.getElementById('labelErrorClase').classList.remove('d-none');
    }
  }
  if (campo.id == 'inputContAlcoholico') {
    if (campo.value != '') {
      document.getElementById('labelErrorContAlc').classList.add('d-none');
    } else {
      document.getElementById('labelErrorContAlc').classList.remove('d-none');
    }
  }
}

function eliminarLote(pos) {
  lotesProductos.splice(pos, 1);
  mostrarLotesProductos();
}

function eliminarProducto(op,pos,id) {
  productos.splice(pos, 1);
  let tablaProductosModal = document.getElementById("tablaProductos");
    while (tablaProductosModal.rows.length > 1) {
      tablaProductosModal.deleteRow(1);
    }
    //repinta la tabla de productos
    for (let j = 0; j < productos.length; j++) {
      document.getElementById("tablaProductos").insertRow(-1).innerHTML = `<tr>
      <td>${productos[j]["contenidoNeto"]}</td>
      <td>${productos[j]["presentacionProducto"]}</td>
      <td>${productos[j]["numeroBotellas"]}</td>
      <td>${productos[j]["numeroBotellasCaja"]}</td>
      <td><button class="btn btn-danger me-2" onclick="eliminarProducto('${op}',${j},'${id}')">Eliminar</button><button class="btn btn-warning" onclick="editarProducto('${op}',${j},'${id}')">Modificar</button><td>
      </tr>`;
    }
    posProductoNuevo--;
}

function mostrarLotesProductos() {
  let contenedorLotes = document.getElementById("contenedorLotes");
  contenedorLotes.innerHTML = '';
  for (let i = 0; i < lotesProductos.length ;i++) {
    let lotep = document.createElement("lote");
    //agregar cadrhtml y demas componentes, leer todo el arreglo y mostrarlo para que al hacer cambios igualmente se refleje
    let cardHTML = "";
      cardHTML += `<div class="card">
      <div class="card-header row">
      <div class="col-sm-6">
      <h5>Marca: ${lotesProductos[i]["marca"]}</h5>
      <h5>Lote: ${lotesProductos[i]["numLoteGranel"]}</h5>
      </div>
      <div class="col-sm-6 text-end">
      <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalProcesoVal" onclick="mostrarModalCertificado('editar', '${lotesProductos[i]["numLoteGranel"]}-${lotesProductos[i]["numLoteEnvasado"]}')"><i class="bi bi-pencil-square"></i></button>
      <button class="btn btn-danger me-2" onclick="eliminarLote('${i}')"><i class="bi bi-x"></i></button>
      </div>
      
      </div>
      <div class="card-body">
      <div>
      <p class="mb-2"><strong>Estado:</strong> ${lotesProductos[i]["estado"]}</p>
      <p class="mb-2"><strong>Categoria:</strong> ${lotesProductos[i]["categoria"]}</p>
      <p class="mb-2"><strong>Clase:</strong> ${lotesProductos[i]["clase"]}</p>
      <p class="mb-2"><strong>Abocante y/o ingredientes:</strong> ${lotesProductos[i]["abocantesIngredientes"]}</p>
      <p class="mb-2"><strong>Contenido alcohólico:</strong> ${lotesProductos[i]["contenidoAlcoholico"]}</p>
      <p class="mb-2"><strong>No. de analisis:</strong> ${lotesProductos[i]["numAnalisisLab"]}</p>
      <p class="mb-2"><strong>No. de certificado NOM de mezcal a granel vigente:</strong> ${lotesProductos[i]["numCertificadoNomMezcalGranel"]}</p>
      <p class="mb-2"><strong>No. de lote envasado:</strong> ${lotesProductos[i]["numLoteEnvasado"]}</p>
      </div>
      <div class="table-responsive">
      <table class="table table-sm text-center">
        <thead>
          <tr>
            <th scope="col" style="white-space: nowrap;">Cont. Net. por botella:</th>
            <th scope="col">Unidad</th>
            <th scope="col">No.Botellas</th>
            <th scope="col" style="white-space: nowrap;">Botellas por caja</th>
            <th scope="col"></th>
          </tr>
        </thead>
    <tbody>`;
    for (let j = 0; j < lotesProductos[i]["productos"].length; j++) {
      cardHTML += `<tr>
        <td>${lotesProductos[i]["productos"][j]["contenidoNeto"]}</td>
        <td>${lotesProductos[i]["productos"][j]["presentacionProducto"]}</td>
        <td>${lotesProductos[i]["productos"][j]["numeroBotellas"]}</td>
        <td>${lotesProductos[i]["productos"][j]["numeroBotellasCaja"]}</td>
      </tr>`;
    }
    cardHTML += "</tbody></table></div></div></div>";
  
    lotep.innerHTML = cardHTML;  
    contenedorLotes.append(lotep);
  }
  
}

function mostrarModalCertificado(op, id) {
  document.getElementById("btnAceptarFooterModal").innerHTML = '';
  document.getElementById('btnAgregarPresentacion').innerHTML = '';
  document.getElementById('labelErrorLoteGranel').classList.add('d-none');
  document.getElementById('labelErrorLoteEnvasado').classList.add('d-none');
  document.getElementById('labelErrorMarca').classList.add('d-none');
  document.getElementById('labelErrorEstado').classList.add('d-none');
  document.getElementById('labelErrorCategoria').classList.add('d-none');
  document.getElementById('labelErrorClase').classList.add('d-none');
  document.getElementById('labelErrorContAlc').classList.add('d-none');
  //document.getElementById("btnAgregarEditarPresentacion").innerHTML = "Agregar presentación";
  document.getElementById("btnCancelarEdicionPresentacion").classList.add("d-none");
  document.getElementById("formPresentacionProducto").reset();
  document.getElementById('labelErrorUnidad').classList.add('d-none');
  document.getElementById('labelErrorContNeto').classList.add('d-none');
  document.getElementById('labelErrorNoBotellas').classList.add('d-none');
  document.getElementById('labelErrorBotellasCaja').classList.add('d-none');
  posProductoNuevo = 0;
  //productos = [];
  if (op == "editar") {
    let tablaProductosModal = document.getElementById("tablaProductos");
    while (tablaProductosModal.rows.length > 1) {
      tablaProductosModal.deleteRow(1);
    }
    productos = [];
    let inputNumLoteGranel = document.getElementById("inputNumLoteGranel");
    let inputNumLoteEnvasado = document.getElementById("inputNumLoteEnvasado");
    let selectMarcaProcesoVal = document.getElementById("selectMarcaProcesoVal");
    let selectEstadoProcesoVal = document.getElementById("selectEstadoProcesoVal");
    let selectCategoriaProcesoVal = document.getElementById("selectCategoriaProcesoVal");
    let selectClaseProcesoVal = document.getElementById("selectClaseProcesoVal");
    let inputContAlcoholico = document.getElementById("inputContAlcoholico");
    let inputNumAnalisisLab = document.getElementById("inputNumAnalisisLab");
    let inputNumCertNomMezcalGranel = document.getElementById("inputNumCertNomMezcalGranel");
    let inputAbocantesIngredientes = document.getElementById("inputAbocantesIngredientes");
    //posible mejora al momento de buscar, por for o pasar directamente la posición
    for (let i = 0; i < lotesProductos.length ;i++) {
      if (lotesProductos[i]["numLoteGranel"]+"-"+lotesProductos[i]["numLoteEnvasado"] == id) {
        //productos = lotesProductos[i]["productos"];
        productos = JSON.parse(JSON.stringify(lotesProductos[i]["productos"]));
        posProductoNuevo = productos.length;
        inputNumLoteGranel.value = lotesProductos[i]["numLoteGranel"];
        inputNumLoteEnvasado.value = lotesProductos[i]["numLoteEnvasado"];
        selectMarcaProcesoVal.value = lotesProductos[i]["marca"];
        selectEstadoProcesoVal.value = lotesProductos[i]["estado"];
        selectCategoriaProcesoVal.value = lotesProductos[i]["categoria"];
        selectClaseProcesoVal.value = lotesProductos[i]["clase"];
        inputContAlcoholico.value = lotesProductos[i]["contenidoAlcoholico"];
        inputNumAnalisisLab.value = lotesProductos[i]["numAnalisisLab"];
        inputNumCertNomMezcalGranel.value = lotesProductos[i]["numCertificadoNomMezcalGranel"];
        inputAbocantesIngredientes.value = lotesProductos[i]["abocantesIngredientes"];
        for (let j = 0; j < lotesProductos[i]["productos"].length; j++) {
          document.getElementById("tablaProductos").insertRow(-1).innerHTML = `<tr>
          <td>${lotesProductos[i]["productos"][j]["contenidoNeto"]}</td>
          <td>${lotesProductos[i]["productos"][j]["presentacionProducto"]}</td>
          <td>${lotesProductos[i]["productos"][j]["numeroBotellas"]}</td>
          <td>${lotesProductos[i]["productos"][j]["numeroBotellasCaja"]}</td>
          <td><button class="btn btn-danger me-2" onclick="eliminarProducto('${op}',${j},'${id}')">Eliminar</button><button class="btn btn-warning" onclick="editarProducto('${op}',${j},'${id}')">Modificar</button><td>
          </tr>`;
        }
        break;
      }
      
    }
    document.getElementById("btnAceptarFooterModal").innerHTML += `<button
    type="button"
    class="btn btn-primary"
    onclick="agregarLoteProductos('${op}','${id}')">
    <i class="bi bi-pencil-square"></i>
    Modificar
    </button>`;
    //agregarLoteProductos(op, id);  
    document.getElementById('btnAgregarPresentacion').innerHTML += `<button
    type="button"
    class="btn btn-primary"
    style="width: 500px"
    id="btnAgregarEditarPresentacion"
    onclick="agregarPresentacion('${op}','${id}')"
    >
    Agregar presentación
    </button>`;  
    
  } else {
    document.getElementById("formProcesoValidacion").reset();
    let tablaProductosModal = document.getElementById("tablaProductos");
    while (tablaProductosModal.rows.length > 1) {
      tablaProductosModal.deleteRow(1);
    }
    productos = [];
    //
    document.getElementById("btnAceptarFooterModal").innerHTML += `<button
    type="button"
    class="btn btn-primary"
    onclick="agregarLoteProductos('nuevo','-')">
    <i class="bi bi-plus-circle"></i>
    Agregar
    </button>`;
    //
    document.getElementById('btnAgregarPresentacion').innerHTML += `<button
    type="button"
    class="btn btn-primary"
    style="width: 500px"
    id="btnAgregarEditarPresentacion"
    onclick="agregarPresentacion('nuevo','-')"
    >
    Agregar presentación
    </button>`;  
  }
}

function validarInfoArchivo(seccion, id) {
  const inputFile = document.getElementById("inputFile" + seccion + id);
  const infoArchivo = document.getElementById("infoArchivo" + seccion + id);
  console.log("inputFile" + seccion + id);
  if (inputFile.files.length > 0) {
    if (inputFile.files[0].type == "application/pdf") {
      if ((inputFile.files[0].size/1024)/1024 < 40) {
        infoArchivo.value = inputFile.files[0].name;
        archivosLotes.push({
          id: id,
          seccion: seccion,
          archivo: inputFile.files[0]
        });
      } else {
        infoArchivo.value = "";
        inputFile.value = "";
        Swal.fire(
          '',
          'Debe seleccionar un archivo con un tamaño maximo de 40 MB.',
          'warning'
         )
      }   
    } else {
      infoArchivo.value = "";
      inputFile.value = "";
      Swal.fire(
        '',
        'Debe seleccionar un archivo PDF',
        'warning'
      )
    }
  }
}

function seleccionarArchivo(seccion){
  const inputFile = document.getElementById("inputFile" + seccion);
  inputFile.click();
}

function limpiarArchivoOrdenCompra (seccion, id) {
  const inputFile = document.getElementById("inputFile" + seccion + id);
  const infoArchivo = document.getElementById("infoArchivo" + seccion + id);
  inputFile.value = "";
  infoArchivo.value = "";
  for (let i = 0; i < archivosLotes.length; i++) {
    if (archivosLotes[i][id] == id) {
      archivosLotes.splice(i, 1);
      break;
    }
  }
}

function mostrarLotesDocumentacion() {
  document.getElementById('contenedorLotesDoc').innerHTML = '';
  let contenedorLotes = document.getElementById("contenedorLotesDoc");
  for (let i = 0; i < lotesProductos.length ;i++) {
    let lotep = document.createElement("lote");
    //agregar carhtml y demas componentes, leer todo el arreglo y mostrarlo para que al hacer cambios igualmente se refleje
    let titulo = `PRODUCTO: ${lotesProductos[i]["marca"]} ${lotesProductos[i]["categoria"]} ${lotesProductos[i]["clase"]} %ALC. VOL. ${lotesProductos[i]["contenidoAlcoholico"]}`;
    let cardHTML = "";
      cardHTML += `<div class="card">
      <h5 class="card-header text-center">${titulo.toUpperCase()}</h5>
      <div class="card-body">
      <div class="row mb-sm-3 mb-5 text-center">
            <div class="col-sm-3">
              <label for="" class="form-label"
                >Copia del análisis de laboratorio:</label
              >
            </div>
            <div class="col-sm-3 mb-sm-0 mb-2">
              <input class="form-control d-none" type="file" accept=".pdf" id="inputFileAnalisisLab${lotesProductos[i]["numLoteGranel"]}" onchange="validarInfoArchivo('AnalisisLab','${lotesProductos[i]["numLoteGranel"]}')"/>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Adjuntar archivo
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" onclick="seleccionarArchivo('AnalisisLab${lotesProductos[i]["numLoteGranel"]}')">Desde mi equipo</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 mb-sm-0 mb-2">
              <input type="text" class="form-control" name="infoArchivoAnalisisLab${lotesProductos[i]["numLoteGranel"]}" id="infoArchivoAnalisisLab${lotesProductos[i]["numLoteGranel"]}" disabled>
            </div>
            <div class="col-sm-2">
              <button type="button" class="btn btn-primary" onclick="limpiarArchivoOrdenCompra('AnalisisLab','${lotesProductos[i]["numLoteGranel"]}')">Limpiar</button>
            </div>
            <div>
              <label class="text-warning-emphasis" for="">Campo requerido</label>
            </div>
          </div>

          <div class="row mb-sm-3 mb-5 text-center">
            <div class="col-sm-3">
              <label for="" class="form-label"
                >Juego de Etiquetas:</label
              >
            </div>
            <div class="col-sm-3 mb-sm-0 mb-2">
              <input
                class="form-control d-none"
                type="file"
                accept=".pdf"
                id="inputFileJuegoEtiquetas${lotesProductos[i]["numLoteGranel"]}"
                onchange="validarInfoArchivo('JuegoEtiquetas','${lotesProductos[i]["numLoteGranel"]}')"
              />
              <div class="dropdown">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Adjuntar archivo
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <a
                      class="dropdown-item"
                      onclick="seleccionarArchivo('JuegoEtiquetas${lotesProductos[i]["numLoteGranel"]}')"
                      >Desde mi equipo</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      data-bs-toggle="modal"
                      data-bs-target="#modalCatalogoJuegoEtiquetasSeguimientoCertExp"
                      >Desde mi catalogo</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 mb-sm-0 mb-2">
              <input
                type="text"
                class="form-control"
                name="infoArchivoJuegoEtiquetas${lotesProductos[i]["numLoteGranel"]}"
                id="infoArchivoJuegoEtiquetas${lotesProductos[i]["numLoteGranel"]}"
                disabled
              />
            </div>
            <div class="col-sm-2">
              <button
                type="button"
                class="btn btn-primary"
                onclick="limpiarArchivoOrdenCompra('JuegoEtiquetas','${lotesProductos[i]["numLoteGranel"]}')"
              >
                Limpiar
              </button>
            </div>
            <div>
              <label class="text-warning-emphasis ms-5" for="">Campo requerido</label>
            </div>
          </div>

          <div class="row mb-sm-3 mb-5 text-center">
            <div class="col-sm-3">
              <label for="" class="form-label"
                >Muestra de Embalaje:</label
              >
            </div>
            <div class="col-sm-3 mb-sm-0 mb-2">
              <input
                class="form-control d-none"
                type="file"
                accept=".pdf"
                id="inputFileMuestraEmbalaje${lotesProductos[i]["numLoteGranel"]}"
                onchange="validarInfoArchivo('MuestraEmbalaje', '${lotesProductos[i]["numLoteGranel"]}')"
              />
              <div class="dropdown">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Adjuntar archivo
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <a
                      class="dropdown-item"
                      onclick="seleccionarArchivo('MuestraEmbalaje${lotesProductos[i]["numLoteGranel"]}')"
                      >Desde mi equipo</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      data-bs-toggle="modal"
                      data-bs-target="#modalCatalogoMuestrasEmbalajeSeguimientoCertExp"
                      >Desde mi catalogo</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 mb-sm-0 mb-2">
              <input
                type="text"
                class="form-control"
                name="infoArchivoMuestraEmbalaje${lotesProductos[i]["numLoteGranel"]}"
                id="infoArchivoMuestraEmbalaje${lotesProductos[i]["numLoteGranel"]}"
                disabled
              />
            </div>
            <div class="col-sm-2">
              <button
                type="button"
                class="btn btn-primary"
                onclick="limpiarArchivoOrdenCompra('MuestraEmbalaje','${lotesProductos[i]["numLoteGranel"]}')"
              >
                Limpiar
              </button>
            </div>
          </div>

          <div class="row mb-sm-3 mb-5 text-center">
            <div class="col-sm-3">
              <label for="" class="form-label"
                >Certificado Granel:</label
              >
            </div>
            <div class="col-sm-3 mb-sm-0 mb-2">
              <input
                class="form-control d-none"
                type="file"
                accept=".pdf"
                id="inputFileCertificadoGranel${lotesProductos[i]["numLoteGranel"]}"
                onchange="validarInfoArchivo('CertificadoGranel','${lotesProductos[i]["numLoteGranel"]}')"
              />
              <div class="dropdown">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Adjuntar archivo
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <a
                      class="dropdown-item"
                      onclick="seleccionarArchivo('CertificadoGranel${lotesProductos[i]["numLoteGranel"]}')"
                      >Desde mi equipo</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 mb-sm-0 mb-2">
              <input
                type="text"
                class="form-control"
                name="infoArchivoCertificadoGranel${lotesProductos[i]["numLoteGranel"]}"
                id="infoArchivoCertificadoGranel${lotesProductos[i]["numLoteGranel"]}"
                disabled
              />
            </div>
            <div class="col-sm-2">
              <button
                type="button"
                class="btn btn-primary"
                onclick="limpiarArchivoOrdenCompra('CertificadoGranel','${lotesProductos[i]["numLoteGranel"]}')"
              >
                Limpiar
              </button>
            </div>
          </div>

      </div>
      </div>`;
  
    lotep.innerHTML = cardHTML;  
    contenedorLotes.append(lotep);
}
}

function navegarTabs(tab) {
  //saber donde estoy posicionado, validar cada campo
  /*
  if (tab.name != posTabCertificadoExp) {
    let dateVisitaInsp = document.getElementById('dateVisitaInsp');
    let selectInstalacionCertExp = document.getElementById('selectInstalacionCertExp');
    if (dateVisitaInsp.value == '') {
      console.log("campo requerido - date");
    }
    if (selectInstalacionCertExp.value == '') {
      console.log("campo requerido - select");
    }
  }
  //posTabCertificadoExp = tab.name;*/
}

//funcion para enviar mi solicitud de exportacion, juntar todos los campos, validarlos, aceptar los terminos y condiciones y enviar al server
function enviarSolicitudCertificadoExport() {
  let dateVisitaInsp = document.getElementById('dateVisitaInsp');
  let selectInstalacionCertExp = document.getElementById('selectInstalacionCertExp');
  let aliasImportador = document.getElementById('aliasImportador');
  let aduanaSalida = document.getElementById('aduanaSalida');
  let inputFileOrdenCompra = document.getElementById('inputFileOrdenCompra');
  let checkValidacionSolicitud = document.getElementById('checkValidacionSolicitud');
  let contadorArchivosFaltantes = 0;
  //inputFile.files.length
  //verificar que existan productos y recorrer el arreglo para sacar los id
  if (dateVisitaInsp.value != '' && 
  selectInstalacionCertExp.value != '' &&
  aliasImportador.value != '' &&
  aduanaSalida.value != '') {
    if (lotesProductos.length > 0) {
      if (archivosLotes.length > 0) {
        console.log(archivosLotes);
        if (checkValidacionSolicitud.checked) {
        //---------> ajax <----------
          alert("enviar solicitud");
        //---------> ajax <----------
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Campos requeridos',
            text: 'Antes de continuar debe leer y aceptar las politicas establecidas por AMMA aplicables a los Certificados de Exportación'
          })
        }      
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Campos requeridos',
          text: 'Adjunte los archivos requeridos correspondientes'
        })
      }
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Campos requeridos',
        text: 'Agregue al menos 1 producto'
      })
    }
  } else {
    Swal.fire({
      icon: 'error',
      title: 'Campos requeridos',
      text: 'Llene los campos requeridos de los formularios.'
    })
  }
}

/**
 * carga los datos de la db al abrir el modal seguimiento de emisión del certificado NOM para exportación.
 */
function mostrarModalSeguimientoExport() {
  let campoDatosModalDetalleSolicitud = document.getElementById('campoDatosModalDetalleSolicitud');
  let campoProductosModalDetalleSolicitud = document.getElementById('campoProductosModalDetalleSolicitud');
  let campoDatosExportModalDetalleSolicitud = document.getElementById('campoDatosExportModalDetalleSolicitud');
  let campoDocsModalDetalleSolicitud = document.getElementById('campoDocsModalDetalleSolicitud');

  //ajax, cargará los datos obtenidos dentro de cada array usando ${}

  let datosDetalleSolicitudDatosGenerales = `
  <p><strong>Folio: </strong></p>
  <p><strong>Número de Solicitud: </strong></p>
  <p><strong>Número de Solicitud: </strong></p>
  <p><strong>Tipo de Solicitud: </strong></p>
  <h5 class='mt-3 mb-3'>Empresa</h5>
  <p><strong>El producto se encuentra en: </strong></p>
  <p><strong>Responsable Instalación: </strong></p>
  <p><strong>Información Adicional: </strong></p>
  <p><strong></strong></p>
  <p><strong>Observaciones de AMMA: </strong></p>
  `;

  let datosDetalleSolicitudProductos = `
  <h5>Producto</h5>
  <p><strong>No. de Lote Granel: </strong></p>
  <p><strong>Número de Solicitud: </strong></p>
  <p><strong>No. Lote Envasado: </strong></p>
  <p><strong>Categoria: </strong></p>
  <p><strong>Clase: </strong></p>
  <p><strong>Cont. Alcoholico: </strong></p>
  <p><strong>Abocantes/Ingredientes: </strong></p>
  <p><strong>No. Analisis FQ: </strong></p>
  <p><strong>No. CERT NOM GRANEL de Mezcal vigente: </strong></p>
  <div class="row mt-5">
  <div class="table-responsive col-sm-12">
  <table class="table" id="tablaProductosDetalleSolicitud">
  <thead>
  <tr>
  <th scope="col">Cont. Net. por botella</th>
  <th scope="col">Unidad</th>
  <th scope="col">No. Botellas</th>
  <th scope="col">Botellas por caja</th>
  <th scope="col"></th>
  </tr>
  </thead>
  <tbody id="cuerpoProductosDetalleSolicitud"></tbody>
  </table>
  </div>
  </div>
  `;

  datosDetalleSolicitudDatosExport = `
  <p><strong>Nombre: </strong></p>
  <p><strong>Domicilio: </strong></p>
  <p><strong>Pais destino: </strong></p>
  <p><strong>Aduana Salida: </strong></p>
  <p><strong>Fraccion Arancelaria: </strong></p>
  `;

  datosDetalleSolicitudDocs = `
  <div class="card">
  <h5 class="card-header text-center">Datos generales</h5>
  <div class="card-body">
  <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-file-earmark-pdf"></i> Invitación</a>
  <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-file-earmark-pdf"></i> Factura</a>
  </div>
  </div>
  </div>

  <div class="card mt-5">
  <h5 class="card-header text-center">Empresa</h5>
  <div class="card-body">
  <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-file-earmark-pdf"></i> Juego de etiqueta</a>
  <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-file-earmark-pdf"></i> Análisis de laboratorio</a>
  </div>
  </div>
  </div>
  `;

  campoDatosModalDetalleSolicitud.innerHTML = datosDetalleSolicitudDatosGenerales;
  campoProductosModalDetalleSolicitud.innerHTML = datosDetalleSolicitudProductos;
  campoDatosExportModalDetalleSolicitud.innerHTML = datosDetalleSolicitudDatosExport;
  campoDocsModalDetalleSolicitud.innerHTML = datosDetalleSolicitudDocs;
}

//mejorar, al tener rutas enviarla a catalogos.
function catalogoJuegoEtiquetas() {
  window.open("index.html", '_blank');
  $("#modalCatalogoJuegoEtiquetasSeguimientoCertExp").modal("hide");
}

function agregarArchivoCatalogo() {
  
}