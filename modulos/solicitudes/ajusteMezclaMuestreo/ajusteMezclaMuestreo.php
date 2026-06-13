<div id="ajusteMezclaMuestreo">
  <div class="row mb-3 text-center">
    <div class="col-sm-12">
      <h1 class="m-0">C9998 - PRUEBAS AMMA SA DE CV</h1>
    </div>
  </div>
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
        Solicitud
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
      >
        Seguimiento
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
          <p class="font-weight-bold">INFORMACIÓN DE LA SOLICITUD:</p>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label"
            >Tipo de instalación:</label
          >
          <div class="col-sm-4">
            <select
              class="form-select"
              aria-label="Default select example"
              id="tipoIntalacion"
              onclick="seleccionarOpcionAjusteMezclaMuestreo(this, 'validar'); "
            >
              <option selected disabled value="">Seleccionar</option>
              <option value="PRUEBAS">PRUEBAS</option>
              <option value="PRUEBAS2">PRUEBAS2</option>
            </select>
            <label
              class="text-start text-danger"
              id="errorTipoIntalacion"
              style="display: none"
              >Debes seleccionar una opción</label
            >
          </div>
          <label for="inputPassword" class="col-sm-2 col-form-label"
            >El producto se encuentra:</label
          >
          <div class="col-sm-4">
            <select
              class="form-select"
              aria-label="Default select example"
              id="productoSeEncuentra"
              onclick="seleccionarOpcionAjusteMezclaMuestreo(this, 'validar'); "
              disabled
            >
              <option selected disabled value="">Seleccionar</option>
              <option value="PRUEBAS">PRUEBAS</option>
              <option value="PRUEBAS2">PRUEBAS2</option>
            </select>
            <label
              class="text-start text-danger"
              id="errorProductoSeEncuentra"
              style="display: none"
              >Debes seleccionar una opción</label
            >
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label"
            >Instalación:</label
          >
          <div class="col-sm-10">
            <select
              class="form-select"
              aria-label="Default select example"
              id="instalacionajusteMezclaMuestreo"
              onclick="seleccionarOpcionAjusteMezclaMuestreo(this, 'validar'); "
              disabled
            >
              <option selected disabled value="">Seleccionar</option>
              <option value="PRUEBAS">PRUEBAS</option>
              <option value="PRUEBAS2">PRUEBAS2</option>
            </select>
            <label
              class="text-start text-danger"
              id="errorInstalacionajusteMezclaMuestreo"
              style="display: none"
              >Debes seleccionar una opción</label
            >
          </div>
        </div>
        <div class="border rounded-4 mb-2 bg-light p-2">
          <div class="row">
            <label for="inputPassword" class="col-sm-12 col-form-label"
              >DOMICILIO DE LA INSTALACIÓN:</label
            >
          </div>
          <div class="mb-3 row">

            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-3 col-form-label">Correo electrónico:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="datos datos datos" disabled>
              </div>
            </div>

            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-3 col-form-label">Teléfono:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="datos datos datos" disabled>
              </div>
            </div>

            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-3 col-form-label">Responsable de las instalaciones:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="datos datos datos" disabled>
              </div>
            </div>

            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-3 col-form-label">Dirección:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="datos datos datos" disabled>
              </div>
            </div>

          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Tipo de Servicio:</label>
          <div class="form-check col-sm-2">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              checked
              id="normal"
              value="normal"
              onClick="fechaPropuestaAjusteMezcalMuestreo();"
            />
            <label class="form-check-label" for="normal"> Normal </label>
          </div>
          <div class="form-check col-sm-2">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              id="exclusivo"
              value="exclusivo"
              onClick="fechaPropuestaAjusteMezcalMuestreo();"
            />
            <label class="form-check-label" for="exclusivo"> Exclusivo </label>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="fechaAjusteMezclaMuestreo" class="col-sm-2"
            >Fecha Solicitud:</label
          >
          <input
            class="form-control col-sm-4"
            type="date"
            id="fechaAjusteMezclaMuestreo"
            disabled
          />
          <label for="dateUltFechaInsp" class="col-sm-2"
            >Fecha Propuesta:</label
          >
          <input
            id="fechaPropuestaAjusteMezclaMuestreo"
            class="form-control col-sm-4"
            type="date"
          />
        </div>
        <div class="row">
          <p
            class="small p-0 bg-warning-subtle border rounded-3 mb-3 p-2 text-center"
          >
            Para servicios exclusivos, deberá realizar su pago para que se le
            pueda asignar un inspector
          </p>
        </div>
      </div>
      <div class="border-top p-3 mt-1">
        <div
          class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-3"
        >
          <p class="font-weight-bold">
            LA EMPRESA A TRAVÉS DE SU REPRESENTANTE LEGAL Y AUTORIZADO SOLICITA
            EL SERVICIO DE:
          </p>
        </div>
        <div class="container border rounded-3">
          <div class="col-12 p-1 border-bottom text-center">
            <label class="font-weight-bold">Ajuste de grado </label>
          </div>
          <div class="row">
            <div class="col-12 bg-light p-3 border-bottom">
              <div class="row">
                <div class="col-6 text-start">
                  <button
                    type="button"
                    class="btn btn-info"
                    onclick="buscarAgregarAjusteMezclaMuestreo ('buscarLoteAjusteGrado');"
                  >
                    Buscar Lote
                  </button>
                </div>
                <div class="col-6 text-end">
                  <button
                    type="button"
                    class="btn btn-success"
                    onclick="buscarAgregarAjusteMezclaMuestreo ('agregarLoteAjusteGrado');"
                  >
                    Agregar Lote
                  </button>
                </div>
              </div>
            </div>

            <div class="col-12 p-0">
              <div class="table-responsive">
                <table class="table" id="tablaAjusteGrado">
                  <thead>
                    <tr>
                      <th scope="col">Categoría:</th>
                      <th scope="col">Clase:</th>
                      <th scope="col">Volumen a ajustar(L):</th>
                      <th scope="col">% Alc. Vol., a obtener:</th>
                      <th scope="col">Eliminar:</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </div>
            <div class="col-12 p-3">
              <textarea
                class="form-control"
                placeholder="Información Adicional"
                id="floatingTextarea"
              ></textarea>
            </div>
          </div>
        </div>
        <div class="container border mt-3 rounded-3">
          <div class="col-12 p-1 border-bottom text-center">
            <label class="font-weight-bold">Mezcla y Muestreo </label>
          </div>
          <div class="col-12 bg-light p-3">
            <div class="row">
              <div class="col-6 text-start">
                <button
                  type="button"
                  class="btn btn-info"
                  onclick="buscarAgregarAjusteMezclaMuestreo ('buscarLoteMezclaMuestreo');"
                >
                  Buscar Lote
                </button>
              </div>
              <div class="col-6 text-end">
                <button
                  type="button"
                  class="btn btn-success"
                  onclick="buscarAgregarAjusteMezclaMuestreo ('agregarLoteMezclaMuestreo');"
                >
                  Agregar Lote
                </button>
              </div>
            </div>
          </div>
          <div class="row" id="lotesMezclaMuestreo"></div>
          <div class="col-12 p-3">
            <textarea
              class="form-control"
              placeholder="Información Adicional"
              id="floatingTextarea"
            ></textarea>
          </div>
        </div>
        <div class="mb-3 row mt-3 justify-content-center">
          <div class="text-center col-sm-6" id="generarSolicitud">
            <button
              type="button"
              class="btn btn-success me-md-3"
              onClick="generarSolicitudAjusteMezclaMuestreo();"
            >
              <i class="bi bi-box-arrow-up"></i> Generar Solicitud
            </button>
          </div>
          <div class="text-center col-6" id="cancelarSolicitud">
            <button
              type="button"
              class="btn btn-danger ms-md-3 mt-2 mt-md-0"
              onClick="cancelarSolicitudMezclaMuestreo(); "
            >
              <i class="bi bi-x-circle"></i> Cancelar Solicitud
            </button>
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
      <div class="container p-2">
        <div class="row p-2 border rounded-top bg-light">
          <label
            for="inputPassword"
            class="col-sm-2 col-form-label text-center text-sm-start mt-sm-1"
          >
            Buscar:
          </label>
          <div class="col-sm-10 mt-sm-2">
            <form
              class="form-inline d-flex justify-content-center md-form form-sm"
            >
              <input
                class="form-control form-control-sm mr-3 w-75"
                type="text"
                placeholder="Folio, Fecha, Tipo, Estado..."
                aria-label="Search"
              />
              <i class="fas fa-search" aria-hidden="true"></i>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-12 bg-light p-2 border text-center">
            <h4>Historial de solicitudes realizadas</h4>
          </div>

          <div class="col-12 p-0">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Folio:</th>
                    <th scope="col">Solicitud:</th>
                    <th scope="col">Fecha:</th>
                    <th scope="col">Tipo:</th>
                    <th scope="col">Estado:</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ---------------------------------------------------------------------------------------------------------------------------------- -->
  <!-- Modal estandar del modulo -->
  <div
    class="modal fade"
    id="modalAjusteMezclaMuestreo"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div
      class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable"
    >
      <div class="modal-content">
        <div class="modal-header">
          <h1
            class="modal-title fs-5"
            id="tituloModalAjusteMezclaMuestreo"
          ></h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body" id="cuerpoModalAjusteMezclaMuestreo"></div>
        <div class="modal-footer d-flex justify-content-center" id="footerModalAjusteMezclaMuestreo">

        </div>
      </div>
    </div>
  </div>
</div>

<!-- --------------------------Contenidon modal para buscar Lote Ajuste de grado ------------------------------ -->
<div class="" id="cuerpoBuscarLoteAjusteGrado">
  <div class="container p-2">
    <div class="row bg-light p-2 border text-center rounded-top">
      <h4>SERVICIO</h4>
    </div>
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
                <th scope="col">No.Lote:</th>
                <th scope="col">Especie:</th>
                <th scope="col">Categoría:</th>
                <th scope="col">Clase:</th>
                <th scope="col">L.Existentes:</th>
                <th scope="col">Grado alchólico:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">
                  <button class="btn btn-light" onclick="abrirModalAgregarLoteAjusteGrado(this);"><i class="bi bi-plus-circle"></i></button>
                </td>
                <td>EPAMM14</td>
                <td>MAGUEY ESPADÍN</td>
                <td>Mezcal Artesanal</td>
                <td>Blanco o Joven</td>
                <td>500</td>
                <td>41.9</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="" id="footerBuscarLoteAjusteGrado">
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
    <i class="bi bi-x-circle"></i>
    Cerrar
  </button>
</div>
<!-- --------------------------Contenidon modal para Agregar Lote Ajuste de grado ------------------------------ -->
<div class="" id="cuerpoAgregarLoteAjusteGrado">
  <div class="container p-1s">
    <div class="row bg-light p-2 border text-center rounded-top">
      <h4>AJUSTE DE GRADO</h4>
    </div>

    <div class="row p-2 border bg-light justify-content-center">
      <button
        type="button"
        class="btn btn-warning w-25"
        onclick="reiniciarAgregarAjusteGrado();"
      >
        Reiniciar
      </button>
    </div>

    <div class="row border">
      <div class="col-12 p-0">
        <div
          class="table-responsive"
          style="max-height: 300px; overflow-y: auto"
        >
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Categoría:</th>
                <th scope="col">Clase:</th>
                <th scope="col">Volumen a ajustar(L):</th>
                <th scope="col">% Alc. Vol., a obtener:</th>
              </tr>
            </thead>
            <tbody>
              <form>
                <tr>
                  <td>
                    <select
                      class="form-select"
                      id="categoriaAgregarLoteAjusteGrado"
                      onchange="seleccionarOpcionAjusteMezclaMuestreo(this)"
                    >
                      <option selected disabled value="">Seleccionar</option>
                      <option value="ARTESANAL">ARTESANAL</option>
                      <option value="ANCESTRAL">ANCESTRAL</option>
                      <option value="MEZCAL">MEZCAL</option>
                    </select>
                    <label
                      class="text-start text-danger text-center"
                      id="errorCategoriaAgregarLoteAjusteGrado"
                      style="display: none"
                      >Debes seleccionar una opción
                    </label>
                  </td>
                  <td>
                    <select
                      class="form-select"
                      id="claseAgregarLoteAjusteGrado"
                      onchange="seleccionarOpcionAjusteMezclaMuestreo(this)"
                    >
                      <option selected disabled value="">Seleccionar</option>
                      <option value="BLANCO/JOVEN">BLANCO/JOVEN</option>
                      <option value="REPOSADO">REPOSADO</option>
                      <option value="AÑEJO">AÑEJO</option>
                      <option value="MADURADO EN VIDRIO">
                        MADURADO EN VIDRIO
                      </option>
                      <option value="ABOCADO CON">ABOCADO CON</option>
                      <option value="DESTILADO CON">DESTILADO CON</option>
                    </select>
                    <label
                      class="text-start text-danger text-center"
                      id="errorClaseAgregarLoteAjusteGrado"
                      style="display: none"
                      >Debes seleccionar una opción
                    </label>
                  </td>
                  <td>
                    <input
                      type="number"
                      class="form-control"
                      min="1"
                      value="1"
                      id="volumenAgregarLoteAjusteGrado"
                      onclick="eliminarMensajesErrorAgregarLoteAjusteGrado();"
                      onkeypress="eliminarMensajesErrorAgregarLoteAjusteGrado();"
                    />
                    <label
                      class="text-start text-danger text-center"
                      id="errorVolumenAgregarLoteAjusteGrado"
                      style="display: none"
                      >El número ingresado debe ser mayor a 1
                    </label>
                  </td>
                  <td>
                    <input
                      type="number"
                      class="form-control"
                      min="35"
                      max="55"
                      value="35"
                      id="alcoholAgregarLoteAjusteGrado"
                      onclick="eliminarMensajesErrorAgregarLoteAjusteGrado();"
                      onkeypress="eliminarMensajesErrorAgregarLoteAjusteGrado();"
                    />
                    <label
                      class="text-start text-danger text-center"
                      id="errorAlcoholAgregarLoteAjusteGrado"
                      style="display: none"
                      >El número ingresado debe mayor o igual a 35 y menor o
                      igual a 55
                    </label>
                  </td>
                </tr>
              </form>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="" id="footerAgregarLoteAjusteGrado">
  <button
    type="button"
    class="btn btn-primary"
    onClick="agregarNuevoLoteAjusteGrado(); "
  >
    <i class="bi bi-box-arrow-up"></i> Agregar
  </button>
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
    <i class="bi bi-x-circle"></i>
    Cerrar
  </button>
</div>
<!-- --------------------------Contenidon modal para Buscar Lote Mezcla y Muestreo ------------------------------ -->
<div class="" id="cuerpoBuscarLoteMezclaMuestreo">
  <div class="container p-2">
    <div class="row bg-light p-2 border text-center rounded-top">
      <h4>SERVICIO</h4>
    </div>
    <!-- <div class="row p-2 border bg-light justify-content-center">
      <div class="col-sm-6 mt-sm-2 text-center">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="flexCheckDefault"
        />
        <label class="form-check-label" for="flexCheckDefault"> MEZCLA </label>
      </div>
      <div class="col-sm-6 mt-sm-2 text-center">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="flexCheckDefault"
        />
        <label class="form-check-label" for="flexCheckDefault">
          MUESTREO
        </label>
      </div>
    </div> -->
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
              <th scope="col">No.Lote:</th>
              <th scope="col">Especie:</th>
              <th scope="col">Categoría:</th>
              <th scope="col">Clase:</th>
              <th scope="col">L.Existentes:</th>
              <th scope="col">Grado alchólico:</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">
                <button class="btn btn-light" onclick="abrirModalAgregarLoteMezclaMuestreo(this);"><i class="bi bi-plus-circle"></i></button>
              </td>
              <td>EPAMM14</td>
              <td>MAGUEY ESPADÍN</td>
              <td>Mezcal Artesanal</td>
              <td>Blanco o Joven</td>
              <td>500</td>
              <td>41.9</td>
            </tr>
            <tr>
              <td class="text-center">
                <button class="btn btn-light" onclick="abrirModalAgregarLoteMezclaMuestreo(this);"><i class="bi bi-plus-circle"></i></button>
              </td>
              <td>EPAMM14</td>
              <td>MAGUEY ESPADÍN</td>
              <td>Mezcal Artesanal</td>
              <td>Blanco o Joven</td>
              <td>500</td>
              <td>42.9</td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="" id="footerBuscarLoteMezclaMuestreo">
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
    <i class="bi bi-x-circle"></i>
    Cerrar
  </button>
</div>
<!-- --------------------------Contenidon modal para Agregar Lote Mezcla y Muestreo ------------------------------ -->
<form class="" id="cuerpoAgregarLoteMezclaMuestreo">
  <div class="container p-1s">
    <div class="row bg-light p-2 border text-center rounded-top">
      <h4>AJUSTE DE GRADO</h4>
    </div>

    <div class="row p-2 border bg-light justify-content-center">
      <div class="col-6 mt-sm-2 text-center">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="flexCheckMezcla"
          onclick="mensajesErrorAgregarLoteMezclaMuestreo(); mostrarInputParaMezcla();"
        />
        <label class="form-check-label" for="flexCheckMezcla"> MEZCLA </label>
      </div>
      <div class="col-6 mt-sm-2 text-center">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="flexCheckMuestreo"
          onclick="mensajesErrorAgregarLoteMezclaMuestreo();"
        />
        <label class="form-check-label" for="flexCheckMuestreo">
          MUESTREO
        </label>
      </div>
      <div class="col-12 mt-sm-2 text-center">
        <label
          class="text-start text-danger"
          id="errorflexCheckDeMezclasMuestreo"
          style="display: none"
          >Selecciona al menos un servicio
        </label>
      </div>

      <div
        class="col-12 col-md-4 text-center"
        style="display: none"
        id="inputParaAgregarCamposDeMezcla"
      >
        <label class="justify-content-center col-form-label"
          >Numero de Lotes a Mezclar:
        </label>
        <input
          type="number"
          class="form-control"
          value="2"
          min="2"
          max="5"
          onchange="generarCamposAgregarMezclas(this.value);"
          id="numeroDeMezclasMuestreo"
        />
        <label
          class="text-start text-danger"
          id="errorNumeroDeMezclasMuestreo"
          style="display: none"
          >Valores permitidos 2-5
        </label>
      </div>
    </div>
    <div class="row p-2 border bg-light justify-content-center">
      <button
        type="button"
        class="btn btn-warning w-25"
        onclick="reiniciarAgregarLoteMezclaMuestreo();"
      >
        Reiniciar
      </button>
    </div>

    <div class="row border">
      <div class="col-12 p-0">
        <div
          class="table-responsive"
          style="max-height: 300px; overflow-y: auto"
        >
          <form>
            <table class="table table-bordered" id="tablaParaAgregarMezclas">
              <thead>
                <tr>
                  <th scope="col">Categoría:</th>
                  <th scope="col">Clase:</th>
                  <th scope="col">No. de lote:</th>
                  <th scope="col">Volumen a ajustar(L):</th>
                  <th scope="col">% Alc. Vol., a obtener:</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <select
                      class="form-select categoria-input"
                      id="categoriaAgregarMezclaMuestreo"
                      onchange="mensajesErrorAgregarLoteMezclaMuestreo();"
                    >
                      <option selected disabled value="">Seleccionar</option>
                      <option value="ARTESANAL">ARTESANAL</option>
                      <option value="ANCESTRAL">ANCESTRAL</option>
                      <option value="MEZCAL">MEZCAL</option>
                    </select>
                    <label
                      class="text-start text-danger"
                      id="errorCategoriaAgregarMezclaMuestreo"
                      style="display: none"
                      >Debes seleccionar una opción
                    </label>
                  </td>
                  <td>
                    <select
                      class="form-select clase-input"
                      id="claseAgregarMezclaMuestreo"
                      onchange="mensajesErrorAgregarLoteMezclaMuestreo();"
                    >
                      <option selected disabled value="">Seleccionar</option>
                      <option value="BLANCO/JOVEN">BLANCO/JOVEN</option>
                      <option value="REPOSADO">REPOSADO</option>
                      <option value="AÑEJO">AÑEJO</option>
                      <option value="MADURADO EN VIDRIO">
                        MADURADO EN VIDRIO
                      </option>
                      <option value="ABOCADO CON">ABOCADO CON</option>
                      <option value="DESTILADO CON">DESTILADO CON</option>
                    </select>
                    <label
                      class="text-start text-danger"
                      id="errorClaseAgregarMezclaMuestreo"
                      style="display: none"
                      >Debes seleccionar una opción
                    </label>
                  </td>
                  <td>
                    <input type="text" class="form-control numeroLote-input" />
                    <label
                      class="text-start text-danger errorLote"
                      style="display: none"
                      id="errorAlcoholAgregarLoteMezclaMuestreo"
                      >Ingresa un numero de lote</label
                    >
                  </td>
                  <td>
                    <input
                      type="number"
                      class="form-control volumen-input"
                      min="1"
                      value="1"
                    />
                    <label
                      class="text-start text-danger errorVolumen"
                      style="display: none"
                      id="errorLotelAgregarLoteMezclaMuestreo"
                    >
                      Ingresa un volumen valido mayor a 1
                    </label>
                  </td>
                  <td>
                    <input
                      type="number"
                      class="form-control alcohol-input"
                      min="35"
                      max="55"
                      value="35"
                    />
                    <label
                      class="text-start text-danger errorAlcohol"
                      style="display: none"
                      id="errorAlcoholAgregarLoteMezclaMuestreo"
                      >Ingresa un % de alcohol valido de 35 a 55</label
                    >
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="col-12 p-1">
              <textarea
                class="form-control"
                placeholder="Información Adicional"
                id="informacionProductoMezclaMuestreo"
              ></textarea>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="" id="footerAgregarLoteMezclaMuestreo">
  <button
    type="button"
    class="btn btn-primary"
    onclick="agregarNuevoLoteMezclaMuestreo();"
  >
    <i class="bi bi-box-arrow-up"></i> Agregar
  </button>
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
    <i class="bi bi-x-circle"></i>
    Cerrar
  </button>
</div>
