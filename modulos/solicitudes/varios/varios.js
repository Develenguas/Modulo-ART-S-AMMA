let arregloDeArchivos = []; // Arreglo para almacenar los archivos seleccionados

function abrirVentanaArchivosVarios() {
  $("#archivosDocumentosVarios").click();
}

function validarExtensionDeVarios(fileName) {
  const allowedExtensions = [".jpg", ".png", ".pdf"];
  const fileExtension = fileName.slice(fileName.lastIndexOf(".")).toLowerCase();
  return allowedExtensions.includes(fileExtension);
}

function seleccionarArchivosVarios() {
  const files = $("#archivosDocumentosVarios")[0].files;

  if (arregloDeArchivos.length + files.length > 10) {
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Únicamente se permite adjuntar un máximo de 10 archivos por solicitud!",
    });
    return;
  }

  for (const file of files) {
    if (!validarExtensionDeVarios(file.name)) {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Únicamente se permite subir archivos con extensión jpg, png, y pdf!",
      });
      return;
    }

    if (file.size > 10 * 1024 * 1024) {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "El peso máximo permitido por archivo es de 10 MB.!",
      });
      return;
    }
  }

  arregloDeArchivos = arregloDeArchivos.concat(Array.from(files)); // Agregar nuevos archivos al arreglo
  console.log(arregloDeArchivos);

  // Mostrar nombres de archivos
  const cuerpoDondeSeMuestranLosArchivos = $(
    "#cuerpoDondeSeMuestranLosArchivos"
  );
  cuerpoDondeSeMuestranLosArchivos.empty(); // Limpiar contenido previo

  for (let i = 0; i < arregloDeArchivos.length; i++) {
    const fileName = arregloDeArchivos[i].name;
    const divInput = $("<div>", {
      class: "col-sm-10",
    });
    const fileNameInput = $("<input>", {
      type: "text",
      value: fileName,
      disabled: true,
      name: "fileName",
      class: "form-control",
    });
    divInput.append(fileNameInput);

    const divBoton = $("<div>", {
      class: "col-sm-2",
    });
    const deleteButton = $("<button>", {
      text: "",
      class: "btn btn-light border col-6 mt-2 mt-md-0 ",
      click: function () {
        fileNameInput.parent().remove(); // Remueve el contenedor completo
        divBoton.parent().remove();
        // Elimina el archivo del arreglo por su índice
        arregloDeArchivos.splice(i, 1);

        console.log(arregloDeArchivos); // Los archivos restantes en el nuevo campo de archivo
      },
    });
    const iconoEliminar = $("<i>", {
      class: "bi bi-trash3",
    });

    deleteButton.append(iconoEliminar);

    divBoton.append(deleteButton);

    const container = $("<div>", {
      class: "row justify-content-center text-center mt-1 mt-2",
    });

    container.append(divInput, divBoton);
    cuerpoDondeSeMuestranLosArchivos.append(container);
  }
}

function seleccionarOpcionVarios(idSelect) {
  // Establecer el valor del <input> con la fecha actual en el formato correcto
  $("#fechaVarios").val(new Date().toISOString().split("T")[0]);
  fechaPropuestaVarios();

  if (idSelect.id == "tipoIntalacionVarios") {
    $("#productoSeEncuentraVarios").prop("disabled", false);
    $("#instalacionVarios").prop("disabled", true);
    $("#productoSeEncuentraVarios").val(null);
    $("#instalacionVarios").val(null);
  }
  if (idSelect.id == "productoSeEncuentraVarios") {
    $("#instalacionVarios").prop("disabled", false);
  }

}
function envasadorasMaquilasVarios() {
  if ($("#siEnvasadorasMaquila").prop("checked")) {
    $("#tipoIntalacionVarios").prop("disabled", true);
    $("#productoSeEncuentraVarios").prop("disabled", true);
    $("#instalacionVarios").prop("disabled", true);
    
    $("#tipoIntalacionVarios option[value='']").text("ENVASADORA")
    $("#tipoIntalacionVarios").val("");
    $("#productoSeEncuentraVarios option[value='']").text("GRANEL")
    $("#productoSeEncuentraVarios").val("");
    $("#instalacionVarios").val("");

    $("#cuerpoConvenioMaquila").show();

    $("#errorTipoIntalacion").hide();
    $("#errorProductoSeEncuentraVarios").hide();
    $("#errorInstalacionVarios").hide();
  }else{
    $("#tipoIntalacionVarios").prop("disabled", false);
    $("#tipoIntalacionVarios option[value='']").text("Seleccionar")
    $("#productoSeEncuentraVarios option[value='']").text("Seleccionar")
    $("#tipoIntalacionVarios").val("");
    $("#productoSeEncuentraVarios").val("");
    $("#instalacionVarios").val("");

    $("#cuerpoConvenioMaquila").hide();
    $("#errorConvenioMaquilaCon").hide();
  }
}

function fechaPropuestaVarios() {
  var fechaActual = new Date().toISOString().slice(0, 10);
  var fechaCon3DiasSumados = sumarDiasAFecha(fechaActual, 2);
  // Establecer el valor del <input> con la fecha actual en el formato correcto
  $("#fechaVarios").val(new Date().toISOString().split("T")[0]);
  
  if ($("#normalVarios").prop("checked")) {
    var fechaCon3DiasSumados = sumarDiasAFecha(fechaActual, 2);
    $("#fechaPropuestaVarios").attr("min", fechaCon3DiasSumados);
    $("#fechaPropuestaVarios").val(fechaCon3DiasSumados);
  }
  if ($("#exclusivoVarios").prop("checked")) {
    $("#fechaPropuestaVarios").attr("min", fechaActual);
    $("#fechaPropuestaVarios").val(fechaActual);
  }
}

function validarInformacionVarios(){
  if ($("#siEnvasadorasMaquila").prop("checked")) {
    if ($("#convenioMaquilaCon").val() == null) {
      $("#convenioMaquilaCon").focus();
      $("#errorConvenioMaquilaCon").show();
    } if ($("#descripcionVarios").val().trim() === "") {
    $("#descripcionVarios").focus();
    $("#errorDescripcionVarios").show();
  } else if ($("#descripcionVarios").val().trim() === "") {
    $("#descripcionVarios").focus();
    $("#errorDescripcionVarios").show();
  } else {
    return true;
  }
  }else{
    if ($("#tipoIntalacionVarios").val() == null) {
      $("#tipoIntalacionVarios").focus();
      $("#errorTipoIntalacion").show();
    } else if ($("#productoSeEncuentraVarios").val() == null) {
      $("#productoSeEncuentraVarios").focus();
      $("#errorProductoSeEncuentraVarios").show();
    } else if ($("#instalacionVarios").val() == null) {
      $("#instalacionVarios").focus();
      $("#errorInstalacionVarios").show();
    } else if ($("#descripcionVarios").val().trim() === "") {
      $("#descripcionVarios").focus();
      $("#errorDescripcionVarios").show();
    } else {
      return true;
    }
  }
  return false;
}

function generarSolicitudVarios(){
  if (esDiaDomingoSabado("fechaPropuestaVarios") && validarInformacionVarios()){
    Swal.fire({
      title: 'Atención',
      text: "¿Realmente deseas solicitar la Notificación de servicios (varios)?",
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
        cargarContenidoMenus('modulos/solicitudes/varios/varios.php','vistaModuloVarios', 'NOTIFICACIÓN DE SERVICIOS (VARIOS)');
      }
    })
  }
}

function cancelarSolicitudVarios(){
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
        'Sus datos ingresados han sido eliminados',
        'success'
      )
      cargarContenidoMenus('modulos/solicitudes/varios/varios.php','vistaModuloVarios', 'NOTIFICACIÓN DE SERVICIOS (VARIOS)');
    }
  })
}

function eliminarMensajesErrorVarios(idSelect){
  if (idSelect.id == "convenioMaquilaCon"){
    $("#errorConvenioMaquilaCon").hide();
  }
  if (idSelect.id == "tipoIntalacionVarios"){
    $("#errorTipoIntalacion").hide();
  }
  if (idSelect.id == "productoSeEncuentraVarios"){
    $("#errorProductoSeEncuentraVarios").hide();
  }
  if (idSelect.id == "instalacionVarios"){
    $("#errorInstalacionVarios").hide();
  }
  if (idSelect.id == "descripcionVarios"){
    $("#errorDescripcionVarios").hide();
  }
}