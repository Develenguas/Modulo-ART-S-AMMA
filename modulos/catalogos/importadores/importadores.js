// el id del boton puede ser id de usuario y asi sera mas facil hacer la consulta en el servidor
function abrirModalImportadores(accion, boton) {
  abrirModal("modalImportadores");
  if ((accion == "agregar")) {
    mostrarContenidoModal(
      "modulos/catalogos/importadores/importadores.php",
      "Agregar Importador",
      "cuerpoAgregarImportador",
      "footerAgregarImportador",
      "tituloModalImportadores",
      "cuerpoModalImportadores",
      "footerModalImportadores"
    );
    $("#modalImportadores").on("shown.bs.modal", function () {
        document.getElementById("cuerpoAgregarImportador").reset();
    });
  }else if ((accion == "editar")) {
    mostrarContenidoModal(
      "modulos/catalogos/importadores/importadores.php",
      "Editar Importador",
      "cuerpoAgregarImportador",
      "footerEditarImportador",
      "tituloModalImportadores",
      "cuerpoModalImportadores",
      "footerModalImportadores"
    );
    $("#modalImportadores").on("shown.bs.modal", function () {
      mostrarDatosEditarImportador(boton);
    });
  }
}
function eliminarMensajesErrorImportadores(idSelect) {
  if (idSelect.id == "paisDestinoImportador") {
    $("#errorPaisDestinoImportador").hide();
  }
  if (idSelect.id == "domicilioImportador") {
    $("#errorDomicilioImportador").hide();
  }
  if (idSelect.id == "nombreImportador") {
    $("#errorNombreImportador").hide();
  }
  if (idSelect.id == "aliasImportador") {
    $("#errorAliasImportador").hide();
  }
}

function validarImportador() {
  var retorno = true;
  if ($("#paisDestinoImportador").val().trim() == "") {
    $("#paisDestinoImportador").focus();
    $("#errorPaisDestinoImportador").show();
    retorno = false;
  }
  if ($("#domicilioImportador").val().trim() == "") {
    $("#domicilioImportador").focus();
    $("#errorDomicilioImportador").show();
    retorno = false;
  }
  if ($("#nombreImportador").val().trim() == "") {
    $("#nombreImportador").focus();
    $("#errorNombreImportador").show();
    retorno = false;
  }
  if ($("#aliasImportador").val().trim() == "") {
    $("#aliasImportador").focus();
    $("#errorAliasImportador").show();
    retorno = false;
  }
  return retorno;
}

function agregarImportador() {
  if (validarImportador()) {
    // aqui entra una llamada al servidor y se verifica que le nuevo usuario no exista en caso de ser asi no pemite agregar al nuevo usuario y mandara un swhitAlert
    Swal.fire("Exito", "Importador agregado correctamente.", "success");
    $("#modalImportadores").modal("hide");
  }
}
function mostrarDatosEditarImportador(boton) {
  var fila = $(boton).closest("tr");
  var datosFila = {
    alias: fila.find("td:eq(0)").text(),
    nombre: fila.find("td:eq(1)").text(),
    domicilio: fila.find("td:eq(2)").text(),
    pais: fila.find("td:eq(3)").text(),
  };
  $("#domicilioImportador").val(datosFila.domicilio);
  $("#nombreImportador").val(datosFila.nombre);
  $("#aliasImportador").val(datosFila.alias);
  $("#paisDestinoImportador").val(datosFila.pais);

  $("#idTemporal").attr("id", boton.id);
}
// idImportador es para hacer referencia a la consulta en el servidor
function editarImportador(idImportador) {
  if (validarImportador()) {
    // aqui entra una llamada al servidor y se verifica que el cambio de usuario no exista en caso de ser asi no pemite editar al usuario y mandara un swhitAlert de error
    Swal.fire("Exito", "Importador actualizado correctamente.", "success");
    $("#modalImportadores").modal("hide");
  }
}

function eliminarImportador(idImportador) {
  Swal.fire({
    title: "Atención",
    text: "Estas intentando eliminar un Importador. ¿Estas seguro de realizar esta acción?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "No",
    confirmButtonText: "Sí",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("Eliminado", "El importador ha sido eliminado", "success");
      //   aqui se realiza la peticion al servidor
    }
  });
}


