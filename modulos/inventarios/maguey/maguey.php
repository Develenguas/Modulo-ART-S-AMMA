<div id="vistaModuloInventariosMaguey">
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button
        class="nav-link active"
        id="pills-home-tab"
        data-bs-toggle="pill"
        data-bs-target="#pills-home"
        type="button"
        role="tab"
        aria-controls="pills-home"
        aria-selected="true"
      >
        Mi Maguey
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button
        class="nav-link"
        id="pills-profile-tab"
        data-bs-toggle="pill"
        data-bs-target="#pills-profile"
        type="button"
        role="tab"
        aria-controls="pills-profile"
        aria-selected="false"
        onclick="mostrarMiMapaInventarioMaguey();"
      >
        Mi Mapa
      </button>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div
      class="tab-pane fade show active"
      id="pills-home"
      role="tabpanel"
      aria-labelledby="pills-home-tab"
      tabindex="0"
    >
      <div class="border-top p-3">
        <div
          class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-3"
        >
          <p class="font-weight-bold">PREDIO O VIVERO:</p>
        </div>
        <div class="mb-3 row">
          <div class="col-sm-3 text-center text-sm-center">
            <label for="inputPassword" class="col-form-label"
              >PREDIO DE MAGUEY:
            </label>
          </div>
          <div class="col-sm-3 text-center text-sm-center">
            <button
              class="btn btn-primary"
              onclick="abrirModalInventariosMaguey('predioMaguey');"
            >
              Consultar mis predios
            </button>
          </div>
          <div class="col-sm-3 text-center text-sm-center">
            <label for="inputPassword" class="col-form-label"
              >VIVERO DE MAGUEY:
            </label>
          </div>
          <div class="col-sm-3 text-center text-sm-center">
            <button
              class="btn btn-primary"
              onclick="abrirModalInventariosMaguey('viveroMaguey');"
            >
              Consultar mis viveros
            </button>
          </div>
        </div>
        <div class="border rounded-4 mb-2 bg-light p-2">
          <div class="row">
            <label for="inputPassword" class="col-sm-12 col-form-label"
              >INFORMACIÓN DEL VIVERO:
            </label>
          </div>
          <div class="mb-3 row" id="datosDeInventariosMaguey">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">No. De Predio:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Nombre del Predio:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Nombre del productor:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Estado productor:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Municipio productor:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Localidad productora:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Usufructo de la tierra:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Tenencia de la tierra:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Superficie (Hectáreas):</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="" disabled>
                </div>
            </div>
          </div>
        </div>

        <div id="map" style="height: 400px; width: 100%; display: none;" ></div>

        <div id="listadoInventariosMagueyPredio" style="display: none">
          <div class="row p-2 border rounded-top bg-light p-3 mt-3">
            <div class="col-12 mt-sm-2 text-center">
              <h4>LISTA DE MAGUEYES REGISTRADOS EN SISTEMA</h4>
            </div>
          </div>
          <div class="row p-2 border rounded-top bg-light p-3">
            <div class="col-12 mt-sm-2">
              <form
                class="form-inline d-flex justify-content-center md-form form-sm"
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
          </div>
          <div class="row">
            <div class="col-12 p-0">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr class="">
                      <th scope="col">Especie:</th>
                      <th scope="col">Existencia de plantas:</th>
                      <th scope="col">Situación de manejo:</th>
                      <th scope="col">Edad (años):</th>
                      <th scope="col">Distancia entre plantas (metros):</th>
                      <th scope="col">Distancia entre surcos (metros):</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Datos Datos</td>
                      <td>Datos Datos</td>
                      <td>Datos Datos</td>
                      <td>Datos Datos</td>
                      <td>Datos Datos</td>
                      <td>Datos Datos</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div id="listadoInventariosMagueyViveros" style="display: none">
          <div class="row p-2 border rounded-top bg-light p-3 mt-3">
            <div class="col-12 mt-sm-2 text-center">
              <h4>LISTA DE MAGUEYES REGISTRADOS EN SISTEMA</h4>
            </div>
          </div>
          <div class="row p-2 border rounded-top bg-light p-3">
            <div class="col-12 mt-sm-2">
              <form
                class="form-inline d-flex justify-content-center md-form form-sm"
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
          </div>
          <div class="row">
            <div class="col-12 p-0">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr class="">
                      <th scope="col">Especie:</th>
                      <th scope="col">Existencia de plantas:</th>
                      <th scope="col">Situación de manejo:</th>
                      <th scope="col">Edad (años):</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Datos Datos</td>
                      <td>Datos Datos</td>
                      <td>Datos Datos</td>
                      <td>Datos Datos</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="tab-pane fade"
      id="pills-profile"
      role="tabpanel"
      aria-labelledby="pills-profile-tab"
      tabindex="0"
    >
      <div class="border-top p-3">
        <div
          class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-3"
        >
          <p class="font-weight-bold">DATOS GENERALES:</p>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="mb-3 row text-center">
                    <label for="inputPassword" class="col-12 col-form-label">PREDIOS</label>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-6 col-form-label">Predios con plantas existentes:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" value="datos datos datos" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-6 col-form-label">Total de plantas existentes:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" value="datos datos datos" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-6 col-form-label"> Superficie (Hectáreas):</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" value="datos datos datos" disabled>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="mb-3 row text-center">
                    <label for="inputPassword" class="col-12 col-form-label">VIVEROS</label>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-6 col-form-label">Viveros con plantas existentes:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" value="datos datos datos" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-6 col-form-label">Total de plantas existentes:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" value="datos datos datos" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-6 col-form-label"> Superficie (Hectáreas):</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" value="datos datos datos" disabled>
                    </div>
                </div>
            </div>
            <div id="mapPrediosViveros" style="height: 400px; width: 100%;" ></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal estandar del modulo -->
  <div
    class="modal fade"
    id="modalInventariosMaguey"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div
      class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable"
    >
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tituloModalInventariosMaguey"></h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body" id="cuerpoModalInventariosMaguey"></div>
        <div class="modal-footer" id="footerModalInventariosMaguey"></div>
      </div>
    </div>
  </div>
</div>
<!-- --------------------------Contenidon modal para buscar predio ------------------------------ -->
<div id="cuerpoConsultarInventarioPredioMaguey">
  <div class="container p-2">
    <div class="row p-2 border bg-light">
      <label
        for="inputPassword"
        class="col-sm-2 col-form-label text-center text-sm-start mt-sm-1"
      >
        Buscar:
      </label>
      <div class="col-sm-10 mt-sm-2">
        <form class="form-inline d-flex justify-content-center md-form form-sm">
          <input
            class="form-control form-control-sm mr-3 w-75"
            type="text"
            placeholder="No.Lote, Especie, Categoría, Clase..."
            aria-label="Search"
          />
          <i class="fas fa-search" aria-hidden="true"></i>
        </form>
      </div>
    </div>

    <div class="row border">
      <div class="col-12 p-0">
        <div
          class="table-responsive"
          style="max-height: 300px; overflow-y: auto"
        >
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Agregar:</th>
                <th scope="col">No.de predio:</th>
                <th scope="col">Nombre del predio:</th>
                <th scope="col">Nombre del productor:</th>
                <th scope="col">Estado productor:</th>
                <th scope="col">Municipio productor:</th>
                <th scope="col">Localidad productora:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">
                  <button
                    class="btn btn-light"
                    onclick="consultarDetallesMagueyPredio(this);"
                  >
                    <i class="bi bi-eye"></i>
                  </button>
                </td>
                <td>P494</td>
                <td>PREDIO MUESTRA LG2</td>
                <td>EMPRESA MUESTRA</td>
                <td>OAXACA</td>
                <td>SANTIAGO MATATLÁN</td>
                <td>SANTIAGO MATATLÁN</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="footerConsultarInventarioPredioMaguey">
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
    <i class="bi bi-x-circle"></i>
    Cerrar
  </button>
</div>
<!-- --------------------------Contenidon modal para buscar vivero ------------------------------ -->
<div id="cuerpoConsultarInventarioViverosMaguey">
  <div class="container p-2">
    <div class="row p-2 border bg-light">
      <label
        for="inputPassword"
        class="col-sm-2 col-form-label text-center text-sm-start mt-sm-1"
      >
        Buscar:
      </label>
      <div class="col-sm-10 mt-sm-2">
        <form class="form-inline d-flex justify-content-center md-form form-sm">
          <input
            class="form-control form-control-sm mr-3 w-75"
            type="text"
            placeholder="No.Lote, Especie, Categoría, Clase..."
            aria-label="Search"
          />
          <i class="fas fa-search" aria-hidden="true"></i>
        </form>
      </div>
    </div>

    <div class="row border">
      <div class="col-12 p-0">
        <div
          class="table-responsive"
          style="max-height: 300px; overflow-y: auto"
        >
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Agregar:</th>
                <th scope="col">No.de vivero:</th>
                <th scope="col">Nombre del vivero:</th>
                <th scope="col">Nombre del productor:</th>
                <th scope="col">Estado productor:</th>
                <th scope="col">Municipio productor:</th>
                <th scope="col">Localidad productora:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">
                  <button
                    class="btn btn-light"
                    onclick="consultarDetallesMagueyVivero(this);"
                  >
                    <i class="bi bi-eye"></i>
                  </button>
                </td>
                <td>P494</td>
                <td>PREDIO MUESTRA LG2</td>
                <td>EMPRESA MUESTRA</td>
                <td>OAXACA</td>
                <td>TEPEXI DE RODRÍGUEZ	</td>
                <td>SAN PABLO AMEYALTEPEC</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="footerConsultarInventarioViverosMaguey">
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
    <i class="bi bi-x-circle"></i>
    Cerrar
  </button>
</div>
