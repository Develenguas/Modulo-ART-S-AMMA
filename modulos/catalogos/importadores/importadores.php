<div id="vistaModuloImportadores">
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
            placeholder="Alias, Nombre, Domicilio, Pais"
            aria-label="Search"
          />
          <i class="fas fa-search" aria-hidden="true"></i>
        </form>
      </div>
      <div
        class="col-12 col-sm-4 col-md-2 mt-2 mt-sm-0 text-center text-sm-end w-100"
      >
        <button class="btn btn-light shadow-sm rounded" onclick="abrirModalImportadores('agregar');">
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
                <th scope="col">Alias:</th>
                <th scope="col">Nombre:</th>
                <th scope="col">Domicilio:</th>
                <th scope="col">Pais:</th>
                <th scope="col" class="text-center">Acciones:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Cercializadora</td>
                <td>Nombre de prueba</td>
                <td>Oaxaca, san sebastian tutla</td>
                <td>Espana</td>
                <td>
                  <div class="row text-center">
                    <div class="col-6">
                      <button class="btn btn-light shadow-sm rounded" onclick="abrirModalImportadores('editar',this);" id="idImportador">
                        <i class="bi bi-pencil-square"></i>
                      </button>
                    </div>
                    <div class="col-6">
                      <button class="btn btn-light shadow-sm rounded" onclick="eliminarImportador(this);" id="idImportador">
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
    id="modalImportadores"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div
      class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
    >
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tituloModalImportadores"></h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body" id="cuerpoModalImportadores"></div>
        <div class="modal-footer d-flex justify-content-center" id="footerModalImportadores"></div>
      </div>
    </div>
  </div>
</div>
<!-- --------------------------Contenidon modal Agregar Importador ------------------------------ -->
<form class="" id="cuerpoAgregarImportador">
    <div class="container p-2">
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="aliasImportador" placeholder="name@example.com" oninput="eliminarMensajesErrorImportadores(this);">
            <label for="floatingInput">Alias</label>
        </div>
        <label
        class="text-start text-danger"
        id="errorAliasImportador"
        style="display: none">
            Debes ingresar un Alias
        </label>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="nombreImportador" placeholder="name@example.com" oninput="eliminarMensajesErrorImportadores(this);">
            <label for="floatingInput">Nombre Importador</label>
        </div>
        <label
        class="text-start text-danger"
        id="errorNombreImportador"
        style="display: none">
            Debes ingresar un nombre
        </label>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="domicilioImportador" placeholder="name@example.com" oninput="eliminarMensajesErrorImportadores(this);">
            <label for="floatingInput">Domicilio Importador</label>
        </div>
        <label
        class="text-start text-danger"
        id="errorDomicilioImportador"
        style="display: none">
            Debes ingresar un domicilio
        </label>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="paisDestinoImportador" placeholder="name@example.com" oninput="eliminarMensajesErrorImportadores(this);">
            <label for="floatingInput">Pais destino</label>
        </div>
        <label
        class="text-start text-danger"
        id="errorPaisDestinoImportador"
        style="display: none">
            Debes ingresar un pais destino
        </label>
    </div>
</form>
<div class="" id="footerAgregarImportador">
    <button type="button" class="btn btn-primary" onclick="agregarImportador(); ">
        <i class="bi bi-plus-circle"></i>
        Agregar
    </button>
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
        <i class="bi bi-x-circle"></i>
        Cerrar
    </button>
</div>

<div class="" id="footerEditarImportador">
    <button type="button" class="btn btn-primary" onclick="editarImportador(this.id);" id="idTemporal">
        <i class="bi bi-pencil-square"></i>
        Editar
    </button>
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
        <i class="bi bi-x-circle"></i>
        Cerrar
    </button>
</div>
