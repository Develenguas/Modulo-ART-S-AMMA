<div id="vistaModuloJuegosEtiqueta">
  <div class="row mb-3 text-center">
    <div class="col-sm-12">
      <h1 class="m-0">C9998 - PRUEBAS AMMA SA DE CV</h1>
    </div>
  </div>
  <div class="container p-2">
    <div class="row p-2 border rounded-top bg-light p-3">
      <div class="col-12 col-sm-8 col-md-10 mt-sm-2">
        <form
          class="form-inline d-flex justify-content-center justify-content-sm-start md-form form-sm"
        >
          <input
            class="form-control form-control-sm mr-3 w-75"
            type="text"
            placeholder="Alias, tipo"
            aria-label="Search"
          />
          <i class="fas fa-search" aria-hidden="true"></i>
        </form>
      </div>
      <div
        class="col-12 col-sm-4 col-md-2 mt-2 mt-sm-0 text-center text-sm-end w-100"
      >
        <button class="btn btn-light shadow-sm rounded" onclick="abrirModalEtiquetas('agregar');">
          <i class="bi bi-plus-circle"></i> Agregar
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col-12 p-0">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="text-center">Pdf:</th>
                <th scope="col">Alias:</th>
                <th scope="col">Tipo:</th>
                <th scope="col" class="text-center">Acciones:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                    <div class="row text-center">
                        <div class="col-12">
                          <a target="_blank" href="modulos/formatos/FOL_1.pdf" class="btn btn-light shadow-sm rounded" id="idEtiqueta">
                            <i class="bi bi-file-earmark-pdf"></i>
                          </a>
                        </div>
                    </div>
                </td>
                <td>Oaxaca, san sebastian tutla</td>
                <td>Espana</td>
                <td>
                  <div class="row text-center">
                    <div class="col-12">
                      <button class="btn btn-light shadow-sm rounded" onclick="eliminarEtiqueta(this);" id="idEtiqueta">
                        <i class="bi bi-trash3"></i>
                      </button>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal estandar del modulo -->
  <div
    class="modal fade"
    id="modalEtiquetas"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div
      class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
    >
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tituloModalEtiquetas"></h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body" id="cuerpoModalEtiquetas"></div>
        <div class="modal-footer d-flex justify-content-center" id="footerModalEtiquetas"></div>
      </div>
    </div>
  </div>
</div>
<!-- --------------------------Contenidon modal Agregar Importador ------------------------------ -->
<form class="" id="cuerpoSubirEtiqueta">
    <div class="container p-2">
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="aliasEtiqueta" placeholder="name@example.com" oninput="eliminarMensajesErrorEtiquetas(this);">
            <label for="floatingInput">Alias</label>
        </div>
        <label
        class="text-start text-danger"
        id="errorAliasEtiqueta"
        style="display: none">
            Debes ingresar un Alias
        </label>
        <div class="form-floating mb-2">
            <select class="form-select" id="tipoEtiqueta" aria-label="Floating label select example" onchange="eliminarMensajesErrorEtiquetas(this);">
              <option value="" disabled  selected>Seleccionar</option>
              <option value="Exportación">Exportación</option>
              <option value="Nacional">Nacional</option>
            </select>
            <label for="tipoEtiqueta">Tipo</label>
        </div>
        <label
        class="text-start text-danger"
        id="errorTipoEtiqueta"
        style="display: none">
            Debes ingresar un nombre
        </label>
        <p class="small text-center bg-warning-subtle border rounded-3 mb-2">NOTA: Los documentos aceptados deben ser menores a 40mb.</p>
        <div class="mb-2">
            <input class="form-control" type="file" id="archivoPdfEtiqueta" accept=".pdf" onchange="eliminarMensajesErrorEtiquetas(this);">
        </div>
        <label
        class="text-start text-danger"
        id="errorArchivoPdfEtiqueta"
        style="display: none">
            Debes ingresar un nombre
        </label>
    </div>
</form>
<div class="" id="footerSubirEtiqueta">
    <button type="button" class="btn btn-primary" onclick="agregarEtiqueta();">
        <i class="bi bi-plus-circle"></i>
        Agregar
    </button>
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
        <i class="bi bi-x-circle"></i>
        Cerrar
    </button>
</div>

