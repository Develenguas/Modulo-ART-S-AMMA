const productosAjusteGrado = [];
const productosMezclaMuestreo = [];

function seleccionarOpcionAjusteMezclaMuestreo(idSelect, botones) {
  eliminarMensajesErrorinformacionSolicitudAjusteMezclaMuestreo();
  fechaPropuestaAjusteMezcalMuestreo();

  if ((productosAjusteGrado.length > 0 || productosMezclaMuestreo.length > 0) && (idSelect.id == "tipoIntalacion" || idSelect.id == "productoSeEncuentra" ||  idSelect.id == "instalacionajusteMezclaMuestreo") &&  botones=='validar') {
    Swal.fire({
      title: 'Advertencia',
      text: "Al cambiar de instalación se eliminaran los lotes agregados previamente.¿Desea iniciar de nuevo con la solicitud?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'No',
      confirmButtonText: 'Sí'
    }).then((result) => {
      if (result.isConfirmed) {
        cargarContenidoMenus('modulos/solicitudes/ajusteMezclaMuestreo/ajusteMezclaMuestreo.php','ajusteMezclaMuestreo', 'NOTIFICACIÓN DE AJUSTE DE GRADO, MEZCLA Y MUESTREO');
      }
    })
  }else{
    if (idSelect.id == "tipoIntalacion") {
      if($("#tipoIntalacion").val() != null){
        $("#productoSeEncuentra").prop("disabled", false);
        $("#instalacionajusteMezclaMuestreo").prop("disabled", true);
        $("#productoSeEncuentra").val(null);
        $("#instalacionajusteMezclaMuestreo").val(null);
      }
    }
    if (idSelect.id == "productoSeEncuentra") {
      if($("#productoSeEncuentra").val() != null){
        $("#instalacionajusteMezclaMuestreo").prop("disabled", false);
      }
    }
  
    if (idSelect.id == "categoriaAgregarLoteAjusteGrado"){
      $("#errorCategoriaAgregarLoteAjusteGrado").hide();
    }
    if (idSelect.id == "claseAgregarLoteAjusteGrado"){
      $("#errorClaseAgregarLoteAjusteGrado").hide();
    }
  }

}

function fechaPropuestaAjusteMezcalMuestreo() {
  var fechaActual = new Date().toISOString().slice(0, 10);
  var fechaCon3DiasSumados = sumarDiasAFecha(fechaActual, 2);
  // Establecer el valor del <input> con la fecha actual en el formato correcto
  $("#fechaAjusteMezclaMuestreo").val(new Date().toISOString().split("T")[0]);
  
  if ($("#normal").prop("checked")) {
    var fechaCon3DiasSumados = sumarDiasAFecha(fechaActual, 2);
    $("#fechaPropuestaAjusteMezclaMuestreo").attr("min", fechaCon3DiasSumados);
    $("#fechaPropuestaAjusteMezclaMuestreo").val(fechaCon3DiasSumados);
  }
  if ($("#exclusivo").prop("checked")) {
    $("#fechaPropuestaAjusteMezclaMuestreo").attr("min", fechaActual);
    $("#fechaPropuestaAjusteMezclaMuestreo").val(fechaActual);
  }
}

function informacionSolicitudAjusteMezclaMuestreo() {
  if ($("#tipoIntalacion").val() == null) {
    $("#tipoIntalacion").focus();
    $("#errorTipoIntalacion").show();
  } else if ($("#productoSeEncuentra").val() == null) {
    $("#productoSeEncuentra").focus();
    $("#errorProductoSeEncuentra").show();
  } else if ($("#instalacionajusteMezclaMuestreo").val() == null) {
    $("#instalacionajusteMezclaMuestreo").focus();
    $("#errorInstalacionajusteMezclaMuestreo").show();
  } else {
    return true;
  }
  return false;
}

function eliminarMensajesErrorinformacionSolicitudAjusteMezclaMuestreo() {
  if ($("#tipoIntalacion").val() != null) {
    $("#errorTipoIntalacion").hide();
  }
  if ($("#productoSeEncuentra").val() != null) {
    $("#errorProductoSeEncuentra").hide();
  }
  if ($("#instalacionajusteMezclaMuestreo").val() != null) {
    $("#errorInstalacionajusteMezclaMuestreo").hide();
  }
}

function buscarAgregarAjusteMezclaMuestreo(accion) {
  if (informacionSolicitudAjusteMezclaMuestreo()) {
    abrirModal("modalAjusteMezclaMuestreo");
    if (accion == "buscarLoteAjusteGrado") {
      mostrarContenidoModal(
        "modulos/solicitudes/ajusteMezclaMuestreo/ajusteMezclaMuestreo.php",
        "Buscar Lotes",
        "cuerpoBuscarLoteAjusteGrado",
        "footerBuscarLoteAjusteGrado",
        "tituloModalAjusteMezclaMuestreo",
        "cuerpoModalAjusteMezclaMuestreo",
        "footerModalAjusteMezclaMuestreo"
      );
    } else if (accion == "agregarLoteAjusteGrado") {
      mostrarContenidoModal(
        "modulos/solicitudes/ajusteMezclaMuestreo/ajusteMezclaMuestreo.php",
        "Agregar Lotes",
        "cuerpoAgregarLoteAjusteGrado",
        "footerAgregarLoteAjusteGrado",
        "tituloModalAjusteMezclaMuestreo",
        "cuerpoModalAjusteMezclaMuestreo",
        "footerModalAjusteMezclaMuestreo"
      );
    } else if (accion == "buscarLoteMezclaMuestreo") {
      mostrarContenidoModal(
        "modulos/solicitudes/ajusteMezclaMuestreo/ajusteMezclaMuestreo.php",
        "Buscar Lotes",
        "cuerpoBuscarLoteMezclaMuestreo",
        "footerBuscarLoteMezclaMuestreo",
        "tituloModalAjusteMezclaMuestreo",
        "cuerpoModalAjusteMezclaMuestreo",
        "footerModalAjusteMezclaMuestreo"
      );
    } else if (accion == "agregarLoteMezclaMuestreo") {
      mostrarContenidoModal(
        "modulos/solicitudes/ajusteMezclaMuestreo/ajusteMezclaMuestreo.php",
        "Agregar Lotes",
        "cuerpoAgregarLoteMezclaMuestreo",
        "footerAgregarLoteMezclaMuestreo",
        "tituloModalAjusteMezclaMuestreo",
        "cuerpoModalAjusteMezclaMuestreo",
        "footerModalAjusteMezclaMuestreo"
      );
    }
  }
}

function existeProductosSolicitudAjusteMezclaMuestreo() {
  console.log(productosMezclaMuestreo);
  if (
    productosAjusteGrado.length > 0 ||
    productosMezclaMuestreo.length > 0
  ) {
    return true;
  } else {
    Swal.fire({
      icon: 'warning',
      title: 'Advertencia',
      text: 'Debe ingresar al menos un producto!',
    })
    return false;
  }
}

function generarSolicitudAjusteMezclaMuestreo() {
  if (informacionSolicitudAjusteMezclaMuestreo() && esDiaDomingoSabado("fechaPropuestaAjusteMezclaMuestreo")) {
    if (existeProductosSolicitudAjusteMezclaMuestreo()) {
      Swal.fire({
        title: 'Atención',
        text: "¿Realmente deseas solicitar el Ajuste de Grado, Mezcla y Muestreo?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'No',
        confirmButtonText: 'Sí'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Exito',
            'Su solicitud se ha recibido exitosamente con folio: FH-1169',
            'success'
          )
          cargarContenidoMenus('modulos/solicitudes/ajusteMezclaMuestreo/ajusteMezclaMuestreo.php','ajusteMezclaMuestreo', 'NOTIFICACIÓN DE AJUSTE DE GRADO, MEZCLA Y MUESTREO');
        }
      })
    }
  }
}

function validarAgregarLoteAjusteGrado(){
  let retorno = true;
  if ($("#categoriaAgregarLoteAjusteGrado").val() == null){
    $("#errorCategoriaAgregarLoteAjusteGrado").show();
    retorno = false;
  }
  if ($("#claseAgregarLoteAjusteGrado").val() == null){
    $("#errorClaseAgregarLoteAjusteGrado").show();
    retorno = false;
  }
  if ($("#volumenAgregarLoteAjusteGrado").val()<1){
    $("#errorVolumenAgregarLoteAjusteGrado").show();
    retorno = false;
  }
  if ($("#alcoholAgregarLoteAjusteGrado").val()<35 || $("#alcoholAgregarLoteAjusteGrado").val()>55){
    $("#errorAlcoholAgregarLoteAjusteGrado").show();
    retorno = false;
  }
  return retorno;
}

function eliminarMensajesErrorAgregarLoteAjusteGrado(){
  if ($("#volumenAgregarLoteAjusteGrado").val()>0){
    $("#errorVolumenAgregarLoteAjusteGrado").hide();
  }else{
    $("#errorVolumenAgregarLoteAjusteGrado").show();
  }
  if ($("#alcoholAgregarLoteAjusteGrado").val()>=35 && $("#alcoholAgregarLoteAjusteGrado").val()<=55){
    $("#errorAlcoholAgregarLoteAjusteGrado").hide();
  }else{
    $("#errorAlcoholAgregarLoteAjusteGrado").show();
  }
}

function agregarNuevoLoteAjusteGrado(){
  if (validarAgregarLoteAjusteGrado()){
    let nuevoProductoAjusteGrado = {
      categoria: $("#categoriaAgregarLoteAjusteGrado").val(),
      clase: $("#claseAgregarLoteAjusteGrado").val(),
      volumen: $("#volumenAgregarLoteAjusteGrado").val(),
      alcohol: $("#alcoholAgregarLoteAjusteGrado").val()
    };
    productosAjusteGrado.push(nuevoProductoAjusteGrado);
    agregarElementosATablaNuevoLoteAjusteGrado(productosAjusteGrado);
    Swal.fire(
      'Mensaje',
      'Producto Agregado Exitosamente',
      'success'
    )
    reiniciarAgregarAjusteGrado();
  }
}

function reiniciarAgregarAjusteGrado(){
  mostrarContenidoModal(
    "modulos/solicitudes/ajusteMezclaMuestreo/ajusteMezclaMuestreo.php",
    "Agregar Lotes",
    "cuerpoAgregarLoteAjusteGrado",
    "footerAgregarLoteAjusteGrado",
    "tituloModalAjusteMezclaMuestreo",
    "cuerpoModalAjusteMezclaMuestreo",
    "footerModalAjusteMezclaMuestreo"
  );
}

function agregarElementosATablaNuevoLoteAjusteGrado(productosAjusteGrado) {
  $("#tablaAjusteGrado tbody").empty();
  const tablaBody = $("#tablaAjusteGrado tbody");
  productosAjusteGrado.forEach(producto => {
    const fila = $("<tr></tr>");
    fila.append(`<td>${producto.categoria}</td>`);
    fila.append(`<td>${producto.clase}</td>`);
    fila.append(`<td>${producto.volumen}</td>`);
    fila.append(`<td>${producto.alcohol}</td>`);
    
    const botonEliminar = $("<button class='btn btn-ligh justify-content-center'><i class='bi bi-trash3'></i></button>");
    botonEliminar.click(function() {
      // Obtener la posición de la fila en la tabla
      const posicionFila = tablaBody.find("tr").index(fila);
      
      // Eliminar el producto de la tabla y el arreglo
      fila.remove();
      productosAjusteGrado.splice(posicionFila,1);
    });
    const columnaEliminar = $("<td></td>");
    columnaEliminar.append(botonEliminar);
    fila.append(columnaEliminar);

    tablaBody.append(fila);
  });
}

function validarAgregarLoteMezclaMuestreo (){
  let retorno = true;
  mensajesErrorAgregarLoteMezclaMuestreo();

  if ($("#numeroDeMezclasMuestreo").val()<2  || $("#numeroDeMezclasMuestreo").val()>5){
    $("#numeroDeMezclasMuestreo").val(2);
    $("#errorNumeroDeMezclasMuestreo").show();
    retorno = false;
  }
  if (!($("#flexCheckMezcla").prop("checked") || $("#flexCheckMuestreo").prop("checked"))) {
    $("#errorflexCheckDeMezclasMuestreo").show();
    $("#flexCheckMezcla").focus();
    retorno = false;
  }
  if ( $("#categoriaAgregarMezclaMuestreo").val() == null ) {
    $("#errorCategoriaAgregarMezclaMuestreo").show();
    $("#categoriaAgregarMezclaMuestreo").focus();
  }
  if ( $("#claseAgregarMezclaMuestreo").val() == null ) {
    $("#errorClaseAgregarMezclaMuestreo").show();
    $("#categoriaAgregarMezclaMuestreo").focus();
    retorno = false;
  }

  var table = document.getElementById("tablaParaAgregarMezclas");
  var rows = table.getElementsByTagName("tr");
  
  var numeroLotes = {}; // Objeto para almacenar números de lote

  for (var i = 1; i < rows.length; i++) {
    var row = rows[i];
  
    var numeroLoteInput = row.querySelector(".numeroLote-input");
    var errorLoteLabel = row.querySelector(".errorLote");
  
    var numeroLote = numeroLoteInput.value.trim();
    if (numeroLote === '') {
      errorLoteLabel.style.display = "block";
      errorLoteLabel.textContent = "Ingresa un numero de lote";
      retorno = false;
    } else if (numeroLotes[numeroLote]) {
      errorLoteLabel.textContent = "Número de lote duplicado";
      errorLoteLabel.style.display = "block";
      retorno = false;
    } else {
      numeroLotes[numeroLote] = true; // Registrar número de lote
      errorLoteLabel.style.display = "none";
    }

    // Aquí verificamos duplicados en el arreglo productoMezclaMuestreo
    for (let j = 0; j < productosMezclaMuestreo.length; j++) {
      let datos = productosMezclaMuestreo[j].datos;
      for (let k = 0; k < datos.length; k++) {
        if (datos[k].lote === numeroLote) {
          errorLoteLabel.textContent = "Número de lote duplicado";
          errorLoteLabel.style.display = "block";
          retorno = false;
          break; // Detenemos la búsqueda si encontramos duplicado
        }
      }
    }
    
    var volumenInput = row.querySelector(".volumen-input");
    var errorVolumenLabel = row.querySelector(".errorVolumen");
    if (volumenInput.value.trim() === '' || parseInt(volumenInput.value) < 1) {
      errorVolumenLabel.style.display = "block";
      retorno = false;
    } else {
      errorVolumenLabel.style.display = "none";
    }
    
    var alcoholInput = row.querySelector(".alcohol-input");
    var errorAlcoholLabel = row.querySelector(".errorAlcohol");
    var alcoholValue = parseInt(alcoholInput.value);
    if (alcoholInput.value.trim() === '' || alcoholValue < 35 || alcoholValue > 55) {
      errorAlcoholLabel.style.display = "block";
      retorno = false;
    } else {
      errorAlcoholLabel.style.display = "none";
    }
  }
  return retorno;

}

function mensajesErrorAgregarLoteMezclaMuestreo(){
  if (($("#flexCheckMezcla").prop("checked") || $("#flexCheckMuestreo").prop("checked"))) {
    $("#errorflexCheckDeMezclasMuestreo").hide();
    $("#flexCheckMezcla").focus();
  }
  if ( $("#categoriaAgregarMezclaMuestreo").val() != null ) {
    $("#errorCategoriaAgregarMezclaMuestreo").hide();
  }
  if ( $("#claseAgregarMezclaMuestreo").val() != null ) {
    $("#errorClaseAgregarMezclaMuestreo").hide();
  }
}

function mostrarInputParaMezcla(){
  if ($("#flexCheckMezcla").prop("checked")) {
    $("#inputParaAgregarCamposDeMezcla").show();
    generarCamposAgregarMezclas(parseInt($("#numeroDeMezclasMuestreo").val()));
  }else{
    $("#inputParaAgregarCamposDeMezcla").hide();
    generarCamposAgregarMezclas(1);
    
  }
  
}

function generarCamposAgregarMezclas(filasAGenerar) {
  // Número de filas a agregar
  let numeroFilas=filasAGenerar;

  if ($("#numeroDeMezclasMuestreo").val()<2  || $("#numeroDeMezclasMuestreo").val()>5){
    $("#errorNumeroDeMezclasMuestreo").show();
    $("#numeroDeMezclasMuestreo").val(2);
    numeroFilas = 2;
  }else{
    $("#errorNumeroDeMezclasMuestreo").hide();
  }

  const miTablaBody = $('#tablaParaAgregarMezclas tbody');
  
  // Obtén el primer elemento <tr>
  const primerFila = miTablaBody.find('tr:first');
  
  // Vacía el cuerpo de la tabla
  miTablaBody.empty();
  
  // Agrega el primer elemento <tr> nuevamente
  miTablaBody.append(primerFila);

  for (let i = 1; i < numeroFilas; i++) {
    const nuevaFila = $('<tr></tr>');
    
    nuevaFila.append('<td></td>');
    nuevaFila.append('<td></td>');
    
    const numeroLoteInput = $('<input type="text" class="form-control numeroLote-input" />');
    const errorLoteLabel = $('<label class="text-start text-danger errorLote" style="display: none">Ingresa un numero de lote</label>');
    
    const volumenInput = $('<input type="number" class="form-control volumen-input" min="1" value="1"/>');
    const errorVolumenLabel = $('<label class="text-start text-danger errorVolumen" style="display: none">Ingresa un volumen valido mayor a 1</label>');

    
    const alcoholInput = $('<input type="number" class="form-control alcohol-input" min="35" max="55" value="35" />');
    const errorAlcoholLabel = $('<label class="text-start text-danger errorAlcohol" style="display: none">Ingresa un % de alcohol valido de 35 a 55</label>');

    nuevaFila.append($('<td></td>').append(numeroLoteInput, errorLoteLabel));
    nuevaFila.append($('<td></td>').append(volumenInput, errorVolumenLabel));
    nuevaFila.append($('<td></td>').append(alcoholInput, errorAlcoholLabel));
    
    miTablaBody.append(nuevaFila);
  }
  
}

function agregarNuevoLoteMezclaMuestreo(){
  if(validarAgregarLoteMezclaMuestreo()){
    const productos = [];

    var table = document.getElementById("tablaParaAgregarMezclas");
    var rows = table.getElementsByTagName("tr");
    
    for (var i = 1; i < rows.length; i++) {
      var row = rows[i];
      var categoria = rows[1].querySelector(".categoria-input").value;
      var clase = rows[1].querySelector(".clase-input").value;
      var lote = row.querySelector(".numeroLote-input").value;
      var volumen = row.querySelector(".volumen-input").value;
      var alcohol = row.querySelector(".alcohol-input").value;
  
      let nuevoProducto = {
        categoria: categoria,
        clase: clase,
        lote: lote,
        volumen: volumen,
        alcohol: alcohol
      };
      productos.push(nuevoProducto);
    }
  
    var mezcla = $("#flexCheckMezcla").prop("checked") ? "SI" : "NO";
    var muestreo = $("#flexCheckMuestreo").prop("checked") ? "SI" : "NO";
    let productoMezclaMuestreo = {
      Mezcla: mezcla,
      Muestreo: muestreo,
      datos:productos,
      observacion:document.getElementById("informacionProductoMezclaMuestreo").value
    };
    productosMezclaMuestreo.push(productoMezclaMuestreo);
    agregarElementosATablaNuevoLoteMezclaMuestreo(productosMezclaMuestreo);
    Swal.fire(
      'Mensaje',
      'Lote agregado Exitosamente',
      'success'
    )
    reiniciarAgregarLoteMezclaMuestreo(); 
  }
}

function reiniciarAgregarLoteMezclaMuestreo(){
  mostrarContenidoModal(
    "modulos/solicitudes/ajusteMezclaMuestreo/ajusteMezclaMuestreo.php",
    "Agregar Lotes",
    "cuerpoAgregarLoteMezclaMuestreo",
    "footerAgregarLoteMezclaMuestreo",
    "tituloModalAjusteMezclaMuestreo",
    "cuerpoModalAjusteMezclaMuestreo",
    "footerModalAjusteMezclaMuestreo"
  );
}

function agregarElementosATablaNuevoLoteMezclaMuestreo(productosMezclaMuestreo){
  $("#lotesMezclaMuestreo").empty();

  var dataBlocks = productosMezclaMuestreo;

  var lotesMezclaMuestreo = document.getElementById("lotesMezclaMuestreo");

  dataBlocks.forEach(function(dataBlock, blockIndex) {
    var nuevoDiv = document.createElement("div");
    nuevoDiv.className = "col-12 p-0 bg-light";

    var divInterno = document.createElement("div");
    divInterno.className = "table-responsive";

    var headerDiv = document.createElement("div");
    headerDiv.className = "text-center p-2 fw-bold border-top";
    headerDiv.innerHTML = `
      (MEZCLA: ${dataBlock.Mezcla},  MUESTREO: ${dataBlock.Muestreo}) - ${blockIndex + 1}
      <br />
      CATEGORIA: ${dataBlock.datos[0].categoria} CLASE:${dataBlock.datos[0].clase}
    `;

    var tabla = document.createElement("table");
    tabla.className = "table";

    var thead = document.createElement("thead");
    var theadContent = `
      <tr>
        <th scope="col">Categoría:</th>
        <th scope="col">Clase:</th>
        <th scope="col">No. de lote:</th>
        <th scope="col">Volumen a ajustar(L):</th>
        <th scope="col">% Alc. Vol., a obtener:</th>
        <th scope="col">Eliminar:</th>
      </tr>
    `;
    thead.innerHTML = theadContent;

    var tbody = document.createElement("tbody");
    dataBlock.datos.forEach(function(mezcla, rowIndex) {
      var row = document.createElement("tr");

      Object.values(mezcla).forEach(function(value) {
        var cell = document.createElement("td");
        cell.textContent = value;
        row.appendChild(cell);
      });

      var eliminarCell = document.createElement("td");
      var eliminarButton = document.createElement("button");
      eliminarButton.type = 'button';
      eliminarButton.classList.add('btn', 'btn-light'); 

      // Crear el ícono
      const iconoEliminar = document.createElement('i');
      iconoEliminar.classList.add('bi', 'bi-trash3'); // Agregar la clase 'bi' para Bootstrap Icons y 'bi-trash3' para el ícono de basura

      // Agregar el ícono al botón
      eliminarButton.appendChild(iconoEliminar);

      eliminarButton.addEventListener("click", function() {

        if (dataBlock.datos.length==2 && dataBlock.Mezcla == "SI"){
          Swal.fire({
            title: 'Atención?',
            text: "Si elimina este lote, eliminara la toda la mezcla ¿Esta seguro?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'No',
            confirmButtonText: 'Si'
          }).then((result) => {
            if (result.isConfirmed) {
              const blockIndex = dataBlocks.findIndex(block => block === dataBlock);
              if (blockIndex !== -1) {
                dataBlocks.splice(blockIndex, 1);
              }
              lotesMezclaMuestreo.removeChild(nuevoDiv); // Eliminar el bloque del DOM
            }
          })
        }else if (dataBlock.datos.length==1 && dataBlock.Mezcla == "NO" && dataBlock.Muestreo == "SI"){
          Swal.fire({
            title: 'Atención?',
            text: "¿Esta seguro de eliminar este lote?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'No',
            confirmButtonText: 'Si'
          }).then((result) => {
            if (result.isConfirmed) {
              const blockIndex = dataBlocks.findIndex(block => block === dataBlock);
              if (blockIndex !== -1) {
                dataBlocks.splice(blockIndex, 1);
              }
              lotesMezclaMuestreo.removeChild(nuevoDiv); // Eliminar el bloque del DOM
            }
          })
        }else{
          tbody.removeChild(row);
          dataBlock.datos.splice(rowIndex, 1);
        }
      });
      eliminarCell.appendChild(eliminarButton);
      row.appendChild(eliminarCell);

      tbody.appendChild(row);
    });

    var observacionDiv = document.createElement("div");
    observacionDiv.className = "p-2 border-bottom";
    observacionDiv.textContent = `
    Observación: ${dataBlock.observacion}
    `;

    tabla.appendChild(thead);
    tabla.appendChild(tbody);
    divInterno.appendChild(headerDiv);
    divInterno.appendChild(tabla);
    divInterno.appendChild(observacionDiv);
    nuevoDiv.appendChild(divInterno);

    lotesMezclaMuestreo.appendChild(nuevoDiv);
  });
}

function cancelarSolicitudMezclaMuestreo(){
  Swal.fire({
    title: 'Atención',
    text: "¿Realmente deseas cancelar la solicitid?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'No',
    confirmButtonText: 'Sí'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Eliminado',
        'Su listado de Ajuste, Mezcla y Muestreo ha sido eliminado',
        'success'
      )
      cargarContenidoMenus('modulos/solicitudes/ajusteMezclaMuestreo/ajusteMezclaMuestreo.php','ajusteMezclaMuestreo', 'NOTIFICACIÓN DE AJUSTE DE GRADO, MEZCLA Y MUESTREO');
    }
  })
}


function abrirModalAgregarLoteAjusteGrado(button){
  var row = button.parentNode.parentNode;
  var categoria = row.cells[3].textContent.toUpperCase();
  var clase = row.cells[4].textContent.toUpperCase();

  mostrarContenidoModal(
    "modulos/solicitudes/ajusteMezclaMuestreo/ajusteMezclaMuestreo.php",
    "Agregar Lotes",
    "cuerpoAgregarLoteAjusteGrado",
    "footerAgregarLoteAjusteGrado",
    "tituloModalAjusteMezclaMuestreo",
    "cuerpoModalAjusteMezclaMuestreo",
    "footerModalAjusteMezclaMuestreo",
    function() {
      var select = $("#categoriaAgregarLoteAjusteGrado");
      var nuevaOpcion = $("<option></option>").val(categoria).text(categoria);
      select.append(nuevaOpcion);
      $("#categoriaAgregarLoteAjusteGrado").val(categoria);
      $("#categoriaAgregarLoteAjusteGrado").prop("disabled", true);
      select = $("#claseAgregarLoteAjusteGrado");
      nuevaOpcion = $("<option></option>").val(clase).text(clase);
      select.append(nuevaOpcion);
      $("#claseAgregarLoteAjusteGrado").val(clase);
      $("#claseAgregarLoteAjusteGrado").prop("disabled", true);
    }
  );
}

function abrirModalAgregarLoteMezclaMuestreo(button){
  var row = button.parentNode.parentNode;
  var categoria = row.cells[3].textContent.toUpperCase();
  var clase = row.cells[4].textContent.toUpperCase();
  var nLote = row.cells[1].textContent.toUpperCase();
  var gradoAlcoholico = row.cells[6].textContent;

  mostrarContenidoModal(
    "modulos/solicitudes/ajusteMezclaMuestreo/ajusteMezclaMuestreo.php",
    "Agregar Lotes",
    "cuerpoAgregarLoteMezclaMuestreo",
    "footerAgregarLoteMezclaMuestreo",
    "tituloModalAjusteMezclaMuestreo",
    "cuerpoModalAjusteMezclaMuestreo",
    "footerModalAjusteMezclaMuestreo",
    function() {
      var select = $("#categoriaAgregarMezclaMuestreo");
      var nuevaOpcion = $("<option></option>").val(categoria).text(categoria);
      select.append(nuevaOpcion);
      $("#categoriaAgregarMezclaMuestreo").val(categoria);
      $("#categoriaAgregarMezclaMuestreo").prop("disabled", true);
      select = $("#claseAgregarMezclaMuestreo");
      nuevaOpcion = $("<option></option>").val(clase).text(clase);
      select.append(nuevaOpcion);
      $("#claseAgregarMezclaMuestreo").val(clase);
      $("#claseAgregarMezclaMuestreo").prop("disabled", true);

      var numeroLoteInput = row.querySelector(".numeroLote-input");
      numeroLoteInput.value = nLote;

      var volumenInput = row.querySelector(".volumen-input");
      volumenInput.value = gradoAlcoholico;
      
    }
  );
}
