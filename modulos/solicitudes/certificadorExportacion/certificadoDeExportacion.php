<div id="prueba">
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
      <ul
        class="nav nav-tabs d-flex justify-content-evenly"
        id="myTabCertificadoExport"
        class="myTabCertificadoExport"
        role="tablist"
      >
        <li class="nav-item" role="presentation">
          <button
            class="nav-link active btnsTabCertificadoExp"
            id="home-tab"
            data-bs-toggle="tab"
            data-bs-target="#home-tab-pane"
            type="button"
            role="tab"
            aria-controls="home-tab-pane"
            aria-selected="true"
            title="Datos generales"
            name="datosGenerales"
            onclick="navegarTabs(this)"
          >
            <i
              class="bi bi-database-add"
              style="font-size: calc(1em + 2vw)"
            ></i>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button
            class="nav-link btnsTabCertificadoExp"
            id="profile-tab"
            data-bs-toggle="tab"
            data-bs-target="#profile-tab-pane"
            type="button"
            role="tab"
            aria-controls="profile-tab-pane"
            title="Datos del importador"
            name="datosImportador"
            onclick="navegarTabs(this)"
          >
            <i class="bi bi-airplane" style="font-size: calc(1em + 2vw)"></i>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button
            class="nav-link btnsTabCertificadoExp"
            id="contact-tab"
            data-bs-toggle="tab"
            data-bs-target="#contact-tab-pane"
            type="button"
            role="tab"
            aria-controls="contact-tab-pane"
            aria-selected="false"
            title="Productos"
            name="productos"
            onclick="navegarTabs(this)"
          >
            <i class="bi bi-cart3" style="font-size: calc(1em + 2vw)"></i>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button
            class="nav-link btnsTabCertificadoExp"
            id="contact2-tab"
            data-bs-toggle="tab"
            data-bs-target="#contact2-tab-pane"
            type="button"
            role="tab"
            aria-controls="contact2-tab-pane"
            aria-selected="false"
            onclick="mostrarLotesDocumentacion(); navegarTabs(this)"
            title="Documentación"
            name="documentacion"
          >
            <i
              class="bi bi-file-earmark-text"
              style="font-size: calc(1em + 2vw)"
            ></i>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button
            class="nav-link btnsTabCertificadoExp"
            id="contact3-tab"
            data-bs-toggle="tab"
            data-bs-target="#contact3-tab-pane"
            type="button"
            role="tab"
            aria-controls="contact3-tab-pane"
            aria-selected="false"
            title="Validación"
            name="validacion"
            onclick="navegarTabs(this)"
          >
            <i class="bi bi-check2" style="font-size: calc(1.5em + 2vw)"></i>
          </button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div
          class="tab-pane fade show active"
          id="home-tab-pane"
          role="tabpanel"
          aria-labelledby="home-tab"
          tabindex="0"
        >
          <div class="mb-3 mt-3 row">
            <label for="tipoSolicitud" class="col-sm-3"
              >Tipo de solicitud:</label
            >
            <select
              id="tipoSolicitud"
              class="form-select col-sm-4"
              aria-label="Default select example"
            >
              <option value="1">Exportación venta</option>
              <option value="2">Exportación promoción</option>
            </select>
          </div>
          <div class="d-flex align-items-center row mb-3">
            <label for="" class="form-label col-sm-3">Tipo de servicio:</label>
            <div class="col-sm-4">
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="opcionesRadioServicios"
                  id="radioServicioNormal"
                  value="normal"
                />
                <label class="form-check-label" for="radioServicioNormal"
                  >Normal</label
                >
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="opcionesRadioServicios"
                  id="radioServicioExclusivo"
                  value="exclusivo"
                />
                <label class="form-check-label" for="radioServicioExclusivo"
                  >Exclusivo</label
                >
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="p-1 bg-warning-subtle border rounded-3">
              <p class="small text-start">
                Para los SERVICIOS EXCLUSIVOS se deberá realizar el pago
                anticipadamente.<br />Si selecciona SERVICIO EXCLUSIVO, en la
                solicitud ya no se podrá cambiar el tipo de servicio y se le
                cobrara la visita como Exclusiva.
              </p>
            </div>
          </div>
          <div class="mb-3 d-flex align-items-center row">
            <label for="" class="form-label col-sm-3"
              >El producto está envasado bajo supervisión de AMMA:</label
            >
            <div class="col-sm-4">
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="opcionesRadioSupervicion"
                  id="radioSupervicionSi"
                  value="si"
                  checked
                  onclick="eventoRadioCertificadoExp(this)"
                />
                <label class="form-check-label" for="radioSupervicionSi"
                  >Sí</label
                >
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="opcionesRadioSupervicion"
                  id="radioSupervicionNo"
                  value="no"
                  onclick="eventoRadioCertificadoExp(this)"
                />
                <label class="form-check-label" for="radioSupervicionNo"
                  >No</label
                >
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center row mb-3">
            <label for="" class="form-label col-sm-3"
              >Requiere HOLOGRAMAS:</label
            >
            <div class="col-sm-4">
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="opcionesRadioHologramas"
                  id="radioHologramaSi"
                  value="si"
                />
                <label class="form-check-label" for="radioHologramaSi"
                  >Sí</label
                >
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="opcionesRadioHologramas"
                  id="radioHologramaNo"
                  value="no"
                />
                <label class="form-check-label" for="radioHologramaNo"
                  >No</label
                >
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="p-1 bg-warning-subtle border rounded-3">
              <p class="small text-start">
                SI SOLICITA HOLOGRAMAS:<br />* Debe contar con hologramas
                suficientes para esta solicitud o un pedido de hologramas en
                proceso.<br />* La fecha de programación de la actividad de
                inspección se realizará posterior a que su empresa reciba los
                hologramas de certificación, independientemente de la fecha
                propuesta.<br />* En la fecha programada debe de contar con el
                producto envasado terminado. <br />Nota: Los hologramas se
                entregarán después de 24 horas de aceptación de la solicitud,
                previa constatación del cumplimiento del producto con el
                apartado 4.3 de la NOM-070, en vigor.
              </p>
            </div>
          </div>
          <div class="mb-3 row" id="divDateUltInsp">
            <label for="dateUltFechaInsp" class="col-sm-3"
              >Última fecha en que se realizó la inspección del producto:</label
            >
            <input
              id="dateUltFechaInsp"
              class="form-control col-sm-4"
              type="date"
            />
          </div>
          <div class="mb-3 row">
            <label for="dateVisitaInsp" class="col-sm-3"
              >Fecha Propuesta para la visita del inspector:</label
            >
            <input
              id="dateVisitaInsp"
              class="form-control col-sm-4"
              type="date"
            />
            <label class="ms-sm-2 col-sm-3 text-warning-emphasis" for="">Campo requerido</label>
          </div>
          <div class="row mb-3">
            <div class="p-1 bg-warning-subtle border rounded-3">
              <p class="small text-start">
                NOTA: Indique una fecha estimada en que el producto envasado ya
                se encuentre terminado, ya que el cobro es por visitas
                realizadas.
              </p>
            </div>
          </div>
          <div class="mb-3 d-flex align-items-center row">
            <label for="" class="form-label col-sm-3"
              >Envasadoras de Maquila:</label
            >
            <div class="col-sm-4">
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="opcionesRadioEnvasadoras"
                  id="radioEnvasadorasSi"
                  value="si"
                  onclick="eventoRadioCertificadoExp(this)"
                />
                <label class="form-check-label" for="radioEnvasadorasSi"
                  >Sí</label
                >
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="opcionesRadioEnvasadoras"
                  id="radioEnvasadorasNo"
                  value="no"
                  checked
                  onclick="eventoRadioCertificadoExp(this)"
                />
                <label class="form-check-label" for="radioEnvasadorasNo"
                  >No</label
                >
              </div>
            </div>
          </div>
          <div class="mb-3 row d-none" id="divConvenioMaquila">
            <label for="tipoConvenioMaquila" class="col-sm-3"
              >Convenio de Maquila con:</label
            >
            <select
              id="tipoConvenioMaquila"
              class="form-select col-sm-4"
              aria-label="Default select example"
            >
              <option value="0" selected disabled>
                Seleccione nombre o razón social
              </option>
              <option value="1">Amma S.A de C.V</option>
            </select>
          </div>
          <div class="mb-3 row">
            <label for="selectInstalacionCertExp" class="col-sm-3"
              >Instalación</label
            >
            <select
              id="selectInstalacionCertExp"
              class="form-select col-sm-4"
              aria-label="Default select example"
              onchange="eventoSelectCertificadoExp(this)"
              name="selectInstalacionCertExp"
            >
              <option value="" selected>
                Seleccione instalación para ver detalles
              </option>
              <option value="Envasadora 1">Envasadora 1</option>
            </select>
            <label class="ms-sm-2 col-sm-3 text-warning-emphasis" for="">Campo requerido</label>
          </div>
          <div class="mb-3 row d-none" id="divDatosInstalacion">
            <div class="card text-center">
              <div class="card-header">
                <h5>Datos de instalación</h5>
              </div>
              <div class="card-body mb-1">
                <p class="card-text mb-0">ENVASADORA:</p>
                <p class="card-text mb-0">DOMICILIO:</p>
                <p class="card-text mb-0">COLONIA/LOCALIDAD:</p>
                <p class="card-text mb-0">MUNICIPIO:</p>
                <p class="card-text mb-0">ESTADO:</p>
                <p class="card-text mb-0">CÓDIGO POSTAL:</p>
                <p class="card-text">RESPONSABLE DE LAS INSTALACIONES:</p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="profile-tab-pane"
          role="tabpanel"
          aria-labelledby="profile-tab"
          tabindex="0"
        >
          <div class="mb-3 mt-3 row">
            <label for="aliasImportador" class="col-sm-3">Alias:</label>
            <select
              id="aliasImportador"
              class="form-select col-sm-4"
              aria-label="Default select example"
            >
              <option value="" selected>
                Seleccione el alias de su importador
              </option>
              <option value="2">Importador</option>
            </select>
            <div
              class="col-md-5 d-flex justify-content-center justify-content-sm-end mt-2 mt-md-0"
            >
              <button
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#exampleModalAgregarImportador"
              >
                Agregar importador
              </button>
            </div>
            <label class="text-warning-emphasis" for="">Campo requerido</label>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label"
              >Nombre del importador:</label
            >
            <input
              class="form-control col-sm-4"
              type="text"
              aria-label="default input example"
              disabled
            />
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label"
              >Domicilio del importador:</label
            >
            <input
              class="form-control col-sm-4"
              type="text"
              aria-label="default input example"
              disabled
            />
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label"
              >Nombre del importador:</label
            >
            <input
              class="form-control col-sm-4"
              type="text"
              aria-label="default input example"
              disabled
            />
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Pais destino:</label>
            <input
              class="form-control col-sm-4"
              type="text"
              aria-label="default input example"
              disabled
            />
          </div>
          <div class="mb-3 row">
            <label for="aduanaSalida" class="col-sm-3">Aduana de salida:</label>
            <select
              id="aduanaSalida"
              class="form-select col-sm-4"
              aria-label="Default select example"
            >
              <option value="">Seleccione la aduana</option>
              <option value="2">Aeropuerto 2</option>
            </select>
            <label class="ms-sm-2 col-sm-3 text-warning-emphasis" for="">Campo requerido</label>
          </div>
          <div class="mb-3 row">
            <label for="infacionAdicional" class="col-sm-3"
              >Informació adicional:</label
            >
            <textarea
              class="form-control col-sm-9"
              placeholder="Si es necesario agregue observaciones"
              id="infacionAdicional"
            ></textarea>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="contact-tab-pane"
          role="tabpanel"
          aria-labelledby="contact-tab"
          tabindex="0"
        >
          <div class="row mt-3 mb-5">
            <label for="" class="me-2 col-sm-4"
              >Caracteristicas del producto:</label
            >
            <button
              class="btn btn-primary col-sm-4"
              type="button"
              data-bs-toggle="modal"
              data-bs-target="#exampleModalProcesoVal"
              onclick="mostrarModalCertificado('nuevo')"
            >
              Agregar producto
            </button>
          </div>
          <!-- contenedor de lotes -->
          <div class="row">
            <div id="contenedorLotes"></div>
          </div>
          <!-- Modal -->
          <div
            class="modal fade"
            id="exampleModalProcesoVal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Proceso de validación
                  </h1>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <form id="formProcesoValidacion">
                    <div class="row text-center">
                      <h4>Información.</h4>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-6">
                        <div class="row">
                          <label
                            class="col-form-label col-sm-6"
                            for="inputNumLoteGranel"
                            >No. de lote a granel:</label
                          >
                          <input
                            class="form-control col-sm-6"
                            type="text"
                            aria-label="default input example"
                            id="inputNumLoteGranel"
                            name="inputNumLoteGranel"
                            onkeyup="validarCamposModalProcesoVal(this)"
                          />
                          <label
                            class="text-start text-danger col-sm-12 d-none"
                            id="labelErrorLoteGranel"
                            >Debe seleccionar una opción</label
                          >
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="row">
                          <label
                            class="col-form-label col-sm-6"
                            for="inputNumLoteEnvasado"
                            >No. de lote envasado:</label
                          >
                          <input
                            class="form-control col-sm-6"
                            type="text"
                            aria-label="default input example"
                            id="inputNumLoteEnvasado"
                            name="inputNumLoteEnvasado"
                            onkeyup="validarCamposModalProcesoVal(this)"
                          />
                          <label
                            class="text-start text-danger col-sm-12 d-none"
                            id="labelErrorLoteEnvasado"
                            >Debe agregar una opción</label
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="p-1 bg-warning-subtle border rounded-3">
                        <!--p: style="line-height: 15px; font-size: 11px"-->
                        <p class="small text-start">
                          NOTA: Si su marca no se muestra:
                          <br />*Verificar el estatus de sus marcas con AMMA.
                          <br />*Si usted requiere hologramas, verifique que
                          tenga existencia de hologramas o un pedido.
                        </p>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-6">
                        <div class="row">
                          <label
                            for="selectMarcaProcesoVal"
                            class="col-form-label col-sm-6"
                            >Marca:</label
                          >
                          <select
                            id="selectMarcaProcesoVal"
                            class="form-select col-sm-6"
                            aria-label="Default select example"
                            name="selectMarcaProcesoVal"
                            onchange="eventoSelectCertificadoExp(this); validarCamposModalProcesoVal(this);"
                          >
                            <option value="">Seleccione marca</option>
                            <option value="AMMA">AMMA</option>
                          </select>
                          <label
                            class="text-start text-danger col-sm-12 d-none"
                            id="labelErrorMarca"
                            >Debe seleccionar una opción</label
                          >
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="row">
                          <label
                            for="selectEstadoProcesoVal"
                            class="col-form-label col-sm-6"
                            >Estado:</label
                          >
                          <select
                            id="selectEstadoProcesoVal"
                            class="form-select col-sm-6"
                            aria-label="Default select example"
                            name="selectMarcaProcesoVal"
                            onchange="eventoSelectCertificadoExp(this); validarCamposModalProcesoVal(this);"
                          >
                            <option value="">Seleccione estado</option>
                            <option value="Oaxaca">Oaxaca</option>
                          </select>
                          <label
                            class="text-start text-danger col-sm-12 d-none"
                            id="labelErrorEstado"
                            >Debe seleccionar una opción</label
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-6">
                        <div class="row">
                          <label
                            for="selectCategoriaProcesoVal"
                            class="col-form-label col-sm-6"
                            >Categoria:</label
                          >
                          <select
                            id="selectCategoriaProcesoVal"
                            class="form-select col-sm-6"
                            aria-label="Default select example"
                            name="selectCategoriaProcesoVal"
                            onchange="eventoSelectCertificadoExp(this); validarCamposModalProcesoVal(this);"
                          >
                            <option value="">Seleccione categoria</option>
                            <option value="Mezcal artesanal">
                              Mezcal artesanal
                            </option>
                          </select>
                          <label
                            class="text-start text-danger col-sm-12 d-none"
                            id="labelErrorCategoria"
                            >Debe seleccionar una opción</label
                          >
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="row">
                          <label
                            for="selectClaseProcesoVal"
                            class="col-form-label col-sm-6"
                            >Clase:</label
                          >
                          <select
                            id="selectClaseProcesoVal"
                            class="form-select col-sm-6"
                            aria-label="Default select example"
                            name="selectClaseProcesoVal"
                            onchange="eventoSelectCertificadoExp(this); validarCamposModalProcesoVal(this);"
                          >
                            <option value="">Seleccione clase</option>
                            <option value="Joven">Joven</option>
                            <option value="Blanco">Blanco</option>
                            <option value="Madurado en vidrio">
                              Madurado en vidrio
                            </option>
                            <option value="Reposado">Reposado</option>
                            <option value="Añejo">Añejo</option>
                            <option value="Abocado con">Abocado con</option>
                            <option value="Destilado con">Destilado con</option>
                          </select>
                          <label
                            class="text-start text-danger col-sm-12 d-none"
                            id="labelErrorClase"
                            >Debe seleccionar una opción</label
                          >
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-sm-6">
                        <div class="row">
                          <label
                            class="col-form-label col-sm-6"
                            for="inputContAlcoholico"
                            >Cont. Alcohólico:</label
                          >
                          <input
                            class="form-control col-sm-6"
                            type="number"
                            aria-label="default input example"
                            min="35"
                            max="55"
                            id="inputContAlcoholico"
                            name="inputContAlcoholico"
                            onkeyup="validarCamposModalProcesoVal(this)"
                            onclick="validarCamposModalProcesoVal(this)"
                          />
                          <label
                            class="text-start text-danger col-sm-12 d-none"
                            id="labelErrorContAlc"
                            >Debe seleccionar una opción</label
                          >
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="row">
                          <label
                            class="col-form-label col-sm-7"
                            for="inputNumAnalisisLab"
                            >No. de análisis de laboratorio:</label
                          >
                          <input
                            class="form-control col-sm-5"
                            type="text"
                            aria-label="default input example"
                            id="inputNumAnalisisLab"
                            name="inputNumAnalisisLab"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-12">
                        <div class="row">
                          <label
                            class="col-form-label col-sm-6"
                            for="inputNumCertNomMezcalGranel"
                            >No. Certificado NOM de Mezcal a granel
                            vigente:</label
                          >
                          <input
                            class="form-control col-sm-6"
                            type="text"
                            aria-label="default input example"
                            id="inputNumCertNomMezcalGranel"
                            name="inputNumCertNomMezcalGranel"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row mb-5">
                      <div class="col-sm-12">
                        <div class="row">
                          <label
                            class="col-form-label col-sm-6"
                            for="inputAbocantesIngredientes"
                            >Abocantes y/o ingredientes:</label
                          >
                          <input
                            class="form-control col-sm-6"
                            type="text"
                            aria-label="default input example"
                            id="inputAbocantesIngredientes"
                            name="inputAbocantesIngredientes"
                          />
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="row text-center">
                    <h4>Presentaciones.</h4>
                    <label
                      class="text-start text-danger col-sm-12 d-none text-center"
                      id="labelErrorAgregarProd"
                      >Debe agregar un producto</label
                    >
                  </div>
                  <form id="formPresentacionProducto">
                    <div class="row mb-3">
                      <div class="col-sm-6">
                        <div class="row">
                          <label
                            for="selectPresentacionProducto"
                            class="col-form-label col-sm-6"
                            >Unidad:</label
                          >
                          <select
                            id="selectPresentacionProducto"
                            class="form-select col-sm-6"
                            aria-label="Default select example"
                            name="selectPresentacionProducto"
                            onchange="eventoSelectCertificadoExp(this); validarCamposPresentacion(this)"
                          >
                            <option value="">Seleccione unidad</option>
                            <option value="Mililitros">Mililitros</option>
                            <option value="Litros">Litros</option>
                            <option value="Centilitros">Centilitros</option>
                          </select>
                          <label
                            class="text-start text-danger col-sm-12 d-none"
                            id="labelErrorUnidad"
                            >Debe seleccionar una opción</label
                          >
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="row">
                          <label
                            for="selectContenidoNeto"
                            class="col-form-label col-sm-6"
                            >Cont. Net.:</label
                          >
                          <select
                            id="selectContenidoNeto"
                            class="form-select col-sm-6"
                            aria-label="Default select example"
                            name="selectContenidoNeto"
                            onchange="validarCamposPresentacion(this)"
                          >
                            <option value="">Seleccione cantidad</option>
                          </select>
                          <label
                            class="text-start text-danger col-sm-12 d-none"
                            id="labelErrorContNeto"
                            >Debe seleccionar una opción</label
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-6">
                        <div class="row">
                          <label
                            for="inputNumNumBotellas"
                            class="col-form-label col-sm-6"
                            >No. Botellas:</label
                          >
                          <input
                            id="inputNumNumBotellas"
                            class="form-control col-sm-6"
                            type="number"
                            min="1"
                            aria-label="default input example"
                            name="inputNumNumBotellas"
                            onkeyup="validarCamposPresentacion(this)"
                          />
                          <label
                            class="text-start text-danger col-sm-12 d-none"
                            id="labelErrorNoBotellas"
                            >Debe ingresar una opción</label
                          >
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="row">
                          <label
                            for="inputNumBotellasCaja"
                            class="col-form-label col-sm-6"
                            >Botellas por caja:</label
                          >
                          <input
                            id="inputNumBotellasCaja"
                            class="form-control col-sm-6"
                            type="number"
                            min="1"
                            aria-label="default input example"
                            name="inputNumBotellasCaja"
                            onkeyup="validarCamposPresentacion(this)"
                          />
                          <label
                            class="text-start text-danger col-sm-12 d-none"
                            id="labelErrorBotellasCaja"
                            >Debe ingresar una opción</label
                          >
                        </div>
                      </div>
                    </div>
                  </form>

                  <div class="row">
                    <!-- boton creado con js para pasar parametro 'nuevo' o 'editar' segun sea el caso -->
                    <div
                      class="d-flex justify-content-center"
                      id="btnAgregarPresentacion"
                    ></div>
                    <div class="d-flex justify-content-center mt-2">
                      <button
                        type="button"
                        class="btn btn-danger d-none"
                        id="btnCancelarEdicionPresentacion"
                        style="width: 500px"
                        onclick="cancelarEditarPresentacion()"
                      >
                        Cancelar
                      </button>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="table-responsive col-sm-12">
                      <table class="table" id="tablaProductos">
                        <thead>
                          <tr>
                            <th scope="col" style="white-space: nowrap">
                              Cont. Net. por botella
                            </th>
                            <th scope="col">Unidad</th>
                            <th scope="col" style="white-space: nowrap">
                              No. Botellas
                            </th>
                            <th scope="col" style="white-space: nowrap">
                              Botellas por caja
                            </th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody id="cuerpoProductos"></tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer d-flex justify-content-center" id="">
                  <div id="btnAceptarFooterModal"></div>
                  <div>
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-bs-dismiss="modal"
                    ><i class="bi bi-x-circle"></i>
                      Cancelar
                    </button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
        </div>
        <div
          class="tab-pane fade"
          id="contact2-tab-pane"
          role="tabpanel"
          aria-labelledby="contact2-tab"
          tabindex="0"
        >
          <div class="row mb-3 mt-3">
            <div class="p-1 bg-warning-subtle border rounded-3">
              <p class="small text-start">
                * En caso de que el lote cuente con mas de un FQ debe adjuntar
                ambos en un solo archivo combinado, si desea ver el manual puede
                dar clic en el siguiente enlace <a href="">Manual Unir PDF</a>
              </p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="p-1 bg-warning-subtle border rounded-3">
              <p class="small text-start">
                * El documento Factura o Proforma es necesario para generar sus
                certificados, si no cuenta con dicho documento al momento de
                enviar su solicitud posteriormente lo puede anexar en su panel
                de seguimiento de la solicitud.
              </p>
              <p class="small text-start">
                * El documento Muestra de Embalaje únicamente debe anexarse en
                caso de que requiera utilizar el logo de AMMA en sus cajas.
              </p>
              <p class="small text-start">
                * El documento Certificado Granel únicamente debe anexarse en
                caso de que su certificado granel provenga de otro organismo
                certificador.
              </p>
            </div>
          </div>
          <div class="row mb-3" id="contenedorLotesDoc">
            <!-- creacion de cards dinamicamente -->
          </div>
          <!-- inputs file general -->
          <div class="row mb-sm-3 mb-5 text-center">
            <div class="col-sm-3">
              <label for="" class="form-label"
                >Orden de Compra/Invitación:</label
              >
            </div>
            <div class="col-sm-3 mb-sm-0 mb-2">
              <input
                class="form-control d-none"
                type="file"
                accept=".pdf"
                id="inputFileOrdenComprageneral"
                onchange="validarInfoArchivo('OrdenCompra','general')"
              />
              <div class="dropdown">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Adjuntar archivo
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <a
                      class="dropdown-item"
                      onclick="seleccionarArchivo('OrdenComprageneral')"
                      >Desde mi equipo</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 mb-sm-0 mb-2">
              <input
                type="text"
                class="form-control"
                name="infoArchivoOrdenCompra"
                id="infoArchivoOrdenComprageneral"
                disabled
              />
            </div>
            <div class="col-sm-2">
              <button
                type="button"
                class="btn btn-primary"
                onclick="limpiarArchivoOrdenCompra('OrdenCompra','general')"
              >
                Limpiar
              </button>
            </div>
            <div>
              <label class="text-warning-emphasis" for="">Campo requerido</label>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-sm-3">
              <label for="" class="form-label">Factura o Proforma:</label>
            </div>
            <div class="col-sm-3 mb-sm-0 mb-2">
              <input
                class="form-control d-none"
                type="file"
                accept=".pdf"
                id="inputFileFacturaProformageneral"
                onchange="validarInfoArchivo('FacturaProforma','general')"
              />
              <div class="dropdown">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Adjuntar archivo
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <a
                      class="dropdown-item"
                      onclick="seleccionarArchivo('FacturaProformageneral')"
                      >Desde mi equipo</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 mb-sm-0 mb-2">
              <input
                type="text"
                class="form-control"
                name="infoArchivoFacturaProforma"
                id="infoArchivoFacturaProformageneral"
                disabled
              />
            </div>
            <div class="col-sm-2">
              <button
                type="button"
                class="btn btn-primary"
                onclick="limpiarArchivoOrdenCompra('FacturaProforma','general')"
              >
                Limpiar
              </button>
            </div>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="contact3-tab-pane"
          role="tabpanel"
          aria-labelledby="contact3-tab"
          tabindex="0"
        >
          <div class="row mb-3 mt-3">
            <div class="col-sm-12 bg-primary-subtle rounded-3">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="checkValidacionSolicitud"
                  style="height: 30px; width: 30px"
                />
                <label
                  class="form-check-label ms-3"
                  for="checkValidacionSolicitud"
                >
                  <strong>
                    Afirmo que la información proporcionada es verídica,
                    autorizando ala AMMA verificarla a su entera satisfacción,
                    así mismo me comprometo a cumplir con los Estatutos y
                    Reglamento interior que rige y norman la vida de la
                    Asociación de Maguey y Mezcal Artesanal, A.C. y cumplir con
                    las obligaciones de cliente.
                  </strong>
                </label>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <p>
              Así mismo declaro bajo protesta de decir verdad, que he leído y
              comprendido el contenido completo de los documentos DC-02 MANUAL
              DE CERTIFICACIÓN, y DC-01 ESQUEMA DE EVALUACIÓN DE LA CONFORMIDAD,
              vigentes, los artículos 53 al 69 de la Ley de la Infraestructura
              de la Calidad (LIC) y la NOM-070-SCFI-2016. Bebidas
              Alcohólicas-Mezcal Especificaciones, vigente.
            </p>
          </div>
          <div class="row mb-3">
            <p>
              <strong
                >LA EMPRESA A TRAVÉS DE SU REPRESENTANTE LEGAL Y/O AUTORIZADO SE
                COMPROMETE A CUMPLIR CON:</strong
              >
            </p>
            <ol class="ms-4">
              <li>
                La Norma Oficial Mexicana NOM-070-SCFI-2016 “Bebidas
                Alcohólicas-Mezcal Especificaciones”, en vigor.
              </li>
              <li>
                Los Criterios Autorizados por la Dirección General de Normas
                (DGN), de la norma NOM-070-SCFI-2016 “Bebidas Alcohólicas-Mezcal
                Especificaciones”, en vigor.
              </li>
              <li>
                Lo establecido en los siguientes documentos: DC-06 USO ADECUADO
                DEL SELLO DE CERTIFICACIÓN, MARCA E IMAGEN CORPORATIVA DE AMMA
                y, P-PC Procedimiento de Producto Certificado.
              </li>
              <li>
                Cubrir las tarifas correspondientes al servicio solicitado.
              </li>
              <li>
                Cubrir los gastos por concepto de viáticos de los inspectores
                asignados para el proceso.
              </li>
            </ol>
          </div>
          <div class="row mb-3">
            <div class="d-flex justify-content-center">
              <button type="button" class="btn btn-primary" onclick="enviarSolicitudCertificadoExport()">
                Enviar solicitud
              </button>
            </div>
          </div>
        </div>
      </div>
      <!--
      <div class="mt-5 d-flex justify-content-around">
        <div>
          <button type="button" class="btn btn-primary disabled" style="width: 100px" >
            Atrás
          </button>
        </div>
        <div>
          <button type="button" class="btn btn-primary" style="width: 100px" onclick="navegarTabs()">
            Siguiente
          </button>
        </div>
      </div>
      -->
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
            <h4>Historial de pedidos realizados</h4>
          </div>

          <div class="col-12 p-0">
            <div
              class="table-responsive"
              style="max-height: 300px; overflow-y: auto"
            >
              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">Folio</th>
                    <th scope="col">Solicitud</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Menú</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Folio</td>
                    <td>Fecha</td>
                    <td>Marca</td>
                    <td>Tipo</td>
                    <td>Estado</td>
                    <td>
                      <button
                        type="button"
                        class="btn mx-4"
                        data-bs-toggle="modal"
                        data-bs-target="#modalDetalleSolicitudSeguimientoCertExp"
                        onclick="mostrarModalSeguimientoExport()"
                      >
                        <i class="bi bi-eye-fill"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--MODALES-->
  <div
    class="modal fade"
    id="exampleModalAgregarImportador"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">
            Agregar Importador
          </h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <form action="" id="formAgregarImportadorCertificadoExport">
            <div class="row mb-3">
              <label class="col-form-label col-sm-6" for="inputAliasImportador"
                >Alias:</label
              >
              <input
                class="form-control col-sm-6"
                type="text"
                aria-label="default input example"
                id="inputAliasImportador"
                name="inputAliasImportador"
                onkeyup="validarImportadorCertificadoExport(this)"
              />
              <label
                class="text-danger col-sm-12 d-none"
                id="labelErrorAliasImportador"
                >Debe ingresar el alias</label
              >
            </div>
            <div class="row mb-3">
              <label class="col-form-label col-sm-6" for="inputNombreImportador"
                >Nombre Importador:</label
              >
              <input
                class="form-control col-sm-6"
                type="text"
                aria-label="default input example"
                id="inputNombreImportador"
                name="inputNombreImportador"
                onkeyup="validarImportadorCertificadoExport(this)"
              />
              <label
                class="text-danger col-sm-12 d-none"
                id="labelErrorNombreImportador"
                >Debe ingresar el nombre del importador</label
              >
            </div>
            <div class="row mb-3">
              <label
                class="col-form-label col-sm-6"
                for="inputDomicilioImportador"
                >Domicilio Importador:</label
              >
              <input
                class="form-control col-sm-6"
                type="text"
                aria-label="default input example"
                id="inputDomicilioImportador"
                name="inputDomicilioImportador"
                onkeyup="validarImportadorCertificadoExport(this)"
              />
              <label
                class="text-danger col-sm-12 d-none"
                id="labelErrorDomicilioImportador"
                >Debe ingresar el domicilio del importador</label
              >
            </div>
            <div class="row mb-3">
              <label
                class="col-form-label col-sm-6"
                for="inputPaisDestinoImportador"
                >Pais destino:</label
              >
              <input
                class="form-control col-sm-6"
                type="text"
                aria-label="default input example"
                id="inputPaisDestinoImportador"
                name="inputPaisDestinoImportador"
                onkeyup="validarImportadorCertificadoExport(this)"
              />
              <label
                class="text-danger col-sm-12 d-none"
                id="labelErrorPaisDestinoImportador"
                >Debe ingresar el pais destino</label
              >
            </div>
          </form>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <div>
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cancelar
            </button>
          </div>
          <div>
            <button
              type="button"
              class="btn btn-primary"
              onclick="agregarImportadorCertificadoExport()"
            >
              Agregar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--final modal "agregar importador"-->

  <!--Modal seguimiento-datalles de solicitud de certificado de exportacion-->
  <div
    class="modal fade"
    id="modalDetalleSolicitudSeguimientoCertExp"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">
            Detalle de la solicitud
          </h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <ul
            class="nav nav-tabs d-flex justify-content-evenly"
            id="myTab"
            role="tablist"
          >
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active"
                id="datosDetalleSolicitud-tab"
                data-bs-toggle="tab"
                data-bs-target="#datosDetalleSolicitud-tab-pane"
                type="button"
                role="tab"
                aria-controls="datosDetalleSolicitud-tab-pane"
                aria-selected="true"
              >
                Datos generales
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="productosDetalleSolicitud-tab"
                data-bs-toggle="tab"
                data-bs-target="#productosDetalleSolicitud-tab-pane"
                type="button"
                role="tab"
                aria-controls="productosDetalleSolicitud-tab-pane"
                aria-selected="false"
              >
                Productos
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="datosExportDetalleSolicitud-tab"
                data-bs-toggle="tab"
                data-bs-target="#datosExportDetalleSolicitud-tab-pane"
                type="button"
                role="tab"
                aria-controls="datosExportDetalleSolicitud-tab-pane"
                aria-selected="false"
              >
                Datos exportación
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="docsDetalleSolicitud-tab"
                data-bs-toggle="tab"
                data-bs-target="#docsDetalleSolicitud-tab-pane"
                type="button"
                role="tab"
                aria-controls="docsDetalleSolicitud-tab-pane"
                aria-selected="false"
              >
                Documentación
              </button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div
              class="tab-pane fade show active"
              id="datosDetalleSolicitud-tab-pane"
              role="tabpanel"
              aria-labelledby="1-tab"
              tabindex="0"
            >
              <div class="mt-3" id="campoDatosModalDetalleSolicitud"></div>
            </div>
            <div
              class="tab-pane fade"
              id="productosDetalleSolicitud-tab-pane"
              role="tabpanel"
              aria-labelledby="2-tab"
              tabindex="0"
            >
              <div class="mt-3" id="campoProductosModalDetalleSolicitud"></div>
            </div>
            <div
              class="tab-pane fade"
              id="datosExportDetalleSolicitud-tab-pane"
              role="tabpanel"
              aria-labelledby="3-tab"
              tabindex="0"
            >
              <div
                class="mt-3"
                id="campoDatosExportModalDetalleSolicitud"
              ></div>
            </div>
            <div
              class="tab-pane fade"
              id="docsDetalleSolicitud-tab-pane"
              role="tabpanel"
              aria-labelledby="4-tab"
              tabindex="0"
            >
              <div class="mt-3" id="campoDocsModalDetalleSolicitud"></div>
            </div>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <div>
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cerrar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--final Modal seguimiento-datalles de solicitud de certificado de exportacion-->
  <!-- modal para visualizar juego de etiquetas -->
  <div
    class="modal fade"
    id="modalCatalogoJuegoEtiquetasSeguimientoCertExp"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">
            Catalogo de Juego de etiquetas
          </h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3">
            <div class="col-12 col-sm-12 text-center">
              <button
                type="button"
                class="btn btn-primary"
                onclick="catalogoJuegoEtiquetas();"
                formtarget="_blank"
              >
                Agregar
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-12 p-0">
              <div class="table-responsive">
                <table class="table text-center">
                  <thead>
                    <tr>
                      <th scope="col">
                        <input type="checkbox" name="" id="" disabled />
                      </th>
                      <th scope="col" class="text-center">Pdf:</th>
                      <th scope="col">Alias:</th>
                      <th scope="col">Tipo:</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="checkbox" name="" id="" onclick="agregarArchivoCatalogo()"/></td>
                      <td>
                        <a
                          class="btn btn-light shadow-sm rounded"
                          id="idEtiqueta"
                        >
                          <i class="bi bi-file-earmark-pdf"></i>
                        </a>
                      </td>
                      <td>Oaxaca</td>
                      <td>Exportación</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <div>
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cerrar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin modal juego etiquetas -->
  <!-- modal para visualizar juego de etiquetas -->
  <div
    class="modal fade"
    id="modalCatalogoMuestrasEmbalajeSeguimientoCertExp"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">
            Catalogo de Muestras de embalaje 
          </h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3">
            <div class="col-12 col-sm-12 text-center">
              <button
                type="button"
                class="btn btn-primary"
                onclick="catalogoJuegoEtiquetas();"
                formtarget="_blank"
              >
                Agregar
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-12 p-0">
              <div class="table-responsive">
                <table class="table text-center">
                  <thead>
                    <tr>
                      <th scope="col">
                        <input type="checkbox" name="" id="" disabled />
                      </th>
                      <th scope="col" class="text-center">Pdf:</th>
                      <th scope="col">Alias:</th>
                      <th scope="col">Tipo:</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="checkbox" name="" id="" onclick="agregarArchivoCatalogo()"/></td>
                      <td>
                        <a
                          class="btn btn-light shadow-sm rounded"
                          id="idEtiqueta"
                        >
                          <i class="bi bi-file-earmark-pdf"></i>
                        </a>
                      </td>
                      <td>Oaxaca</td>
                      <td>Exportación</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <div>
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cerrar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin modal juego etiquetas -->
</div>
