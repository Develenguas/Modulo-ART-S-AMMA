// el id del boton puede ser id de usuario y asi sera mas facil hacer la consulta en el servidor
function abrirModalEtiquetas() {
    abrirModal("modalEtiquetas");
    mostrarContenidoModal(
      "modulos/catalogos/juegosEtiqueta/juegosEtiqueta.php",
      "Subir etiqueta",
      "cuerpoSubirEtiqueta",
      "footerSubirEtiqueta",
      "tituloModalEtiquetas",
      "cuerpoModalEtiquetas",
      "footerModalEtiquetas"
    );
    $("#modalEtiquetas").on("shown.bs.modal", function () {
      document.getElementById("cuerpoSubirEtiqueta").reset();
    });
}
function eliminarMensajesErrorEtiquetas(idSelect) {
  if (idSelect.id == "aliasEtiqueta") {
    $("#errorAliasEtiqueta").hide();
  }
  if (idSelect.id == "tipoEtiqueta") {
    $("#errorTipoEtiqueta").hide();
  }
  if (idSelect.id == "archivoPdfEtiqueta") {
    $("#errorArchivoPdfEtiqueta").hide();
  }
}

function validarEtiqueta() {
  var retorno = true;
  if ($("#aliasEtiqueta").val().trim() == "") {
    $("#aliasEtiqueta").focus();
    $("#errorAliasEtiqueta").show();
    retorno = false;
  }
  if ($("#tipoEtiqueta").val() == null) {
    $("#tipoEtiqueta").focus();
    $("#errorTipoEtiqueta").show();
    retorno = false;
  }
  if ($("#archivoPdfEtiqueta").val() == "") {
    $("#archivoPdfEtiqueta").focus();
    $("#errorArchivoPdfEtiqueta").show();
    retorno = false;
  }
  return retorno;
}

function agregarEtiqueta() {
  if (validarEtiqueta()) {
    // aqui entra una llamada al servidor y se verifica que le nuevo usuario no exista en caso de ser asi no pemite agregar al nuevo usuario y mandara un swhitAlert
    Swal.fire("Exito", "Etiqueta agregada correctamente.", "success");
    $("#modalEtiquetas").modal("hide");
  }
}

function eliminarEtiqueta(idEtiqueta) {
  Swal.fire({
    title: "Atención",
    text: "Estas intentando eliminar una Etiqueta. ¿Estas seguro de realizar esta acción?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "No",
    confirmButtonText: "Sí",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("Eliminado", "La etiqueta ha sido eliminado", "success");
      //   aqui se realiza la peticion al servidor
    }
  });
}
