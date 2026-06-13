function seleccionarOpcionInventariosGranelEnvasados(idSelect){
    if (idSelect.id == "tipoIntalacionInventariosGranelEnvasado"){
        $("#productoSeEncuentraInventariosGranelEnvasado").prop("disabled", false);
        $("#productoSeEncuentraInventariosGranelEnvasado").val('');
        $("#tablaInventarioExistenciaGranelEnvasado").hide();
        $("#instalacionInventariosGranelEnvasado").prop("disabled", true);
    }
    if (idSelect.id == "productoSeEncuentraInventariosGranelEnvasado"){
        $("#instalacionInventariosGranelEnvasado").prop("disabled", false);
    }
    if (idSelect.id == "instalacionInventariosGranelEnvasado"){
        // aqui se realiza el proceso de rellenar las tablas de acuerdo al valor de los 3 select del formulario
        $("#tablaInventarioExistenciaGranelEnvasado").show();
    }
}