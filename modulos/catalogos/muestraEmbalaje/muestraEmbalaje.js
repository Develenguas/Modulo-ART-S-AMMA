// el id del boton puede ser id de usuario y asi sera mas facil hacer la consulta en el servidor
function abrirModalMuestraEmbalaje() {
    abrirModal("modalMuestraEmbalaje");
    mostrarContenidoModal(
      "modulos/catalogos/muestraEmbalaje/muestraEmbalaje.php",
      "Subir Muestra de Embalaje",
      "cuerpoSubirMuestraEmbalaje",
      "footerSubirMuestraEmbalaje",
      "tituloModalMuestraEmbalaje",
      "cuerpoModalMuestraEmbalaje",
      "footerModalMuestraEmbalaje"
    );
    $("#modalMuestraEmbalaje").on("shown.bs.modal", function () {
      document.getElementById("cuerpoSubirEtiqueta").reset();
    });
}
function eliminarMensajesErrorMuestraEmbalaje(idSelect) {
  if (idSelect.id == "aliasMuestraEmbalaje") {
    $("#errorAliasMuestraEmbalaje").hide();
  }
  if (idSelect.id == "tipoMuestraEmbalaje") {
    $("#errorTipoMuestraEmbalaje").hide();
  }
  if (idSelect.id == "archivoPdfMuestraEmbalaje") {
    $("#errorArchivoPdfMuestraEmbalaje").hide();
  }
}

function validarMuestraEmbalaje() {
  var retorno = true;
  if ($("#aliasMuestraEmbalaje").val().trim() == "") {
    $("#aliasMuestraEmbalaje").focus();
    $("#errorAliasMuestraEmbalaje").show();
    retorno = false;
  }
  if ($("#tipoMuestraEmbalaje").val() == null) {
    $("#tipoMuestraEmbalaje").focus();
    $("#errorTipoMuestraEmbalaje").show();
    retorno = false;
  }
  if ($("#archivoPdfMuestraEmbalaje").val() == "") {
    $("#archivoPdfMuestraEmbalaje").focus();
    $("#errorArchivoPdfMuestraEmbalaje").show();
    retorno = false;
  }
  return retorno;
}

function agregarMuestraEmbalaje() {
  if (validarMuestraEmbalaje()) {
    // aqui entra una llamada al servidor y se verifica que le nuevo usuario no exista en caso de ser asi no pemite agregar al nuevo usuario y mandara un swhitAlert
    Swal.fire("Exito", "Muestra agregada exitosamente", "success");
    $("#modalMuestraEmbalaje").modal("hide");
  }
}

function eliminarMuestraEmbalaje(idMuestraEmbalaje) {
  Swal.fire({
    title: "Atención",
    text: "Estas intentando eliminar una Muestra. ¿Estás seguro de realizar esta acción?",
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
