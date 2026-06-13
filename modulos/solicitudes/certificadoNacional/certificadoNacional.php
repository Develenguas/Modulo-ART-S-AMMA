<div id="certificadoNacional">
  <script src="modulos/solicitudes/certificadoNacional/certificadoNacional.js"></script>
  <!-- Modal para el proceso de validación -->
  <div class="modal fade" id="modalProcesoValidacionCN" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
      <div class="modal-content">
        <div class="modal-header ">
          <h1 class="modal-title fs-5 d-flex justify-content-center">Proceso de validación</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close""></button>
        </div>
        <div class=" modal-body">
            <div class="row">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <label class="card-title col-sm-5">DETALLE DEL LOTE:</label>
                    <label class="col-sm-7 justify-content-start">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>No. de lote a granel:</label>
                    <label class="col-sm-8 justify-content-start fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Especie:</label>
                    <label class="col-sm-8 fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Categoría:</label>
                    <label class="col-sm-8 fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Clase:</label>
                    <label class="col-sm-8 fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Contenido alcohólico:</label>
                    <label class="col-sm-8 fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Cantidad de Botellas:</label>
                    <label class="col-sm-8 fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Análisis:</label>
                    <label class="col-sm-8 fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Marca:</label>
                    <label class="col-sm-8 fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>No. de lote de envasado:</label>
                    <label class="col-sm-8 fw-normal">dato dato</label>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-primary" onclick="mostrarMensajesConfirmacionCN();"><i class="bi bi-plus-circle"></i>Confirmar</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalLotesREgistradosCN"><i class="bi bi-x-circle"></i>Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal para confirmación de solicitud -->
  <div class="modal fade" id="modalConfirmarSolicitudCN" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header ">
          <h1 class="modal-title fs-5 d-flex justify-content-center">Información de la solicitud</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close""></button>
        </div>
        <div class=" modal-body">
            <div class="row mt-2 ml-sm-3 mr-sm-3">
              <div class="card col-sm-12">
                <div class="card-body">
                  <h5 class="card-title"><strong><i class="bi bi-buildings"></i>INSTALACIÓN</strong></h5><br>
                  <div class="row mt-3">
                    <label class="col-sm-3 ml-sm-5">Número de control:</label>
                    <label class="col-sm-6 justify-content-start fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3  ml-sm-5">Instalación:</label>
                    <label class="col-sm-6 justify-content-start fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-4 ml-sm-5">Dirección donde se encuentral el producto:</label>
                    <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 ml-sm-5">Teléfono:</label>
                    <label class="col-sm-6 justify-content-start fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 ml-sm-5">Correo:</label>
                    <label class="col-sm-6 justify-content-start fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 ml-sm-5">Fecha de solicitud:</label>
                    <label class="col-sm-6 justify-content-start fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 ml-sm-5">Requiere hologramas:</label>
                    <label class="col-sm-6 justify-content-start fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 ml-sm-5">Tipo de servicio:</label>
                    <label class="col-sm-6 justify-content-start fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 ml-sm-5">Fecha propuesta:</label>
                    <label class="col-sm-6 justify-content-start fw-normal">dato dato</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-2 ml-sm-3 mr-sm-3">
              <div class="card col-sm-12">
                <div class="card-body">
                  <h5 class="card-title"><strong><i class="bi bi-basket"></i>LOTE</strong></h5><br>
                  <div class="row mt-3">
                    <label class="col-sm-3 ml-sm-5"> <i class="bi bi-caret-right-fill"></i>No. de lote:</label>
                    <label class="col-sm-6 justify-content-start fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 ml-sm-5"> <i class="bi bi-caret-right-fill"></i>Categoría:</label>
                    <label class="col-sm-6 fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 ml-sm-5"> <i class="bi bi-caret-right-fill"></i>Clase:</label>
                    <label class="col-sm-6 fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 ml-sm-5"> <i class="bi bi-caret-right-fill"></i>Grado alcohólico:</label>
                    <label class="col-sm-6 fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 ml-sm-5"> <i class="bi bi-caret-right-fill"></i>Análisis:</label>
                    <label class="col-sm-6 fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 ml-sm-5"> <i class="bi bi-caret-right-fill"></i>Marca:</label>
                    <label class="col-sm-6 fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 ml-sm-5"> <i class="bi bi-caret-right-fill"></i>No. de lote a granel:</label>
                    <label class="col-sm-6 justify-content-start fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 ml-sm-5"> <i class="bi bi-caret-right-fill"></i>No. de lote de envasado:</label>
                    <label class="col-sm-6 fw-normal">dato dato</label>
                  </div>
                  <h6 class="text-center mb-3 row"><strong>Presentaciones</strong></h6>
                  <div class="row">
                    <label class="col-sm-4 ml-sm-5"> <i class="bi bi-caret-right-fill"></i>Cantenido neto x Botellas:</label>
                    <label class="col-sm-5 fw-normal">dato dato</label>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 ml-sm-5"> <i class="bi bi-caret-right-fill"></i>No. botellas:</label>
                    <label class="col-sm-6 fw-normal">dato dato</label>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-primary" onclick="confirmarSolicitud();"><i class="bi bi-plus-circle"></i>Confirmar</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i>Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal para mostrar la información de la solicitud -->
  <div class="modal fade" id="modalInformacionSolicitudCN" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header ">
          <h1 class="modal-title fs-5 d-flex justify-content-center">Solicitud</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close""></button>
        </div>
        <div class=" modal-body" ">
          <div class=" row mt-2 ml-sm-3 mr-sm-3">
            <div class="card col-sm-12">
              <div class="card-body">
                <h5 class="card-title"><strong><i class="bi bi-card-text"></i>INFORMACIÓN</strong></h5><br>
                <div class="row mt-3">
                  <label class="col-sm-4 ml-sm-5">Folio:</label>
                  <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
                </div>
                <div class="row">
                  <label class="col-sm-4 ml-sm-5">Número de solicitud:</label>
                  <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
                </div>
                <div class="row">
                  <label class="col-sm-4 ml-sm-5">Fecha de solicitud:</label>
                  <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
                </div>
                <div class="row">
                  <label class="col-sm-4 ml-sm-5">Fecha propuesta:</label>
                  <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
                </div>
                <div class="row">
                  <label class="col-sm-4 ml-sm-5">Tipo de servicio:</label>
                  <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
                </div>
                <div class="row">
                  <label class="col-sm-4 ml-sm-5">Requiere holograma:</label>
                  <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
                </div>
                <div class="row">
                  <label class="col-sm-4 ml-sm-5">Maquilado:</label>
                  <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
                </div>
                <div class="row">
                  <label class="col-sm-4 ml-sm-5">Información adicional:</label>
                  <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
                </div>
                <div class="row">
                  <label class="col-sm-4 ml-sm-5">Observaciones de AMMA:</label>
                  <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
                </div>
              </div>
            </div>
        </div>

        <div class="row mt-2  justify-content-center">
          <div class="card col-sm-5">
            <div class="card-body">
              <h5 class="card-title"><strong><i class="bi bi-file-break"></i> STATUS</strong></h5><br>
              <div class="row justify-content-center p-2s">
                <span class="border border-warning rounded-4 col-sm-8 text-center fs-4">EN REVISIÓN</span>
              </div>
              <div class="row justify-content-center mt-3">
                <button type="button" class="btn btn-danger col-sm-8" id="cancelarTraslado" hidden>Cancelar traslado</button>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-2 ml-sm-3 mr-sm-3">
          <div class="card col-sm-12">
            <div class="card-body">
              <h5 class="card-title"><strong><i class="bi bi-buildings"></i>INSTALACIÓN DONDE SE ENCUENTRA EL PRODUCTO</strong></h5><br>
              <div class="row mt-3">
                <label class="col-sm-2 ml-sm-5">Responsable:</label>
                <label class="col-sm-9 justify-content-start fw-normal">dato dato</label>
              </div>
              <div class="row">
                <label class="col-sm-2 ml-sm-5">Teléfono:</label>
                <label class="col-sm-9 justify-content-start fw-normal">dato dato</label>
              </div>
              <div class="row">
                <label class="col-sm-2 ml-sm-5">Correo:</label>
                <label class="col-sm-9 justify-content-start fw-normal">dato dato</label>
              </div>
              <div class="row">
                <label class="col-sm-2 ml-sm-5">Dirección:</label>
                <label class="col-sm-9 justify-content-start fw-normal">dato dato</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-2">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><strong><i class="bi bi-archive"></i>LOTES</strong></h5><br>
              <div class="row mt-2">
                <div class="table-responsive table-sm ">
                  <table class="table table-bordered align-middler text-center">
                    <thead class="table table-bordered ">
                      <tr>
                        <th scope="col">Lote</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Clase</th>
                        <th scope="col">Ingrediente/ Abocante</th>
                        <th scope="col">Contenido Alcohólico</th>
                        <th scope="col">N° Análisis</th>
                        <th scope="col">N° Certificado</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Lote Envasado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>dato</td>
                        <td>dato</td>
                        <td>dato</td>
                        <td>@dato</td>
                        <td>dato</td>
                        <td>dato</td>
                        <td>@dato</td>
                        <td>@dato</td>
                        <td>@dato</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <h6 class="text-center row"><strong>Presentaciones</strong></h6>
                <div class="table-responsive table-sm ">
                  <table class="table table-bordered align-middler text-center">
                    <thead class="table table-bordered ">
                      <tr>
                        <th scope="col">Contenido neto x botella</th>
                        <th scope="col">N° botellas</th>
                        <th scope="col">Botellas x caja</th>
                        <th scope="col">Cajas</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>dato</td>
                        <td>dato</td>
                        <td>dato</td>
                        <td>@dato</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-2 ml-sm-3 mr-sm-3">
          <div class="card col-sm-12">
            <div class="card-body">
              <h5 class="card-title"><strong><i class="bi bi-person-check"></i>INSPECTORES ASIGNADOS</strong></h5><br>
              <div class="row mt-3">
                <label class="col-sm-2 ml-sm-5">Inspector:</label>
                <label class="col-sm-9 justify-content-start fw-normal">dato dato</label>
              </div>
              <div class="row">
                <label class="col-sm-3 ml-sm-5">Fecha programada:</label>
                <label class="col-sm-8 justify-content-start fw-normal">dato dato</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i>Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal para ver los lotes registrados en el sistema-->
<div class="modal fade" id="modalLotesREgistradosCN" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header ">
        <h1 class="modal-title fs-5 d-flex justify-content-center">Lista de lotes</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="d-none d-sm-block col-sm-12 p-1 bg-warning-subtle border rounded-3 mb-3">
          <p class="small text-start">
            NOTA : Si en el sistema no encuentra el fisicoquímico de un lote en específico, deberá enviar el archivo al email de inspeccion@amma.org.mx o comunicarse a la unidad.
          </p>
        </div>
        <div class="mt-3 mb-3 row justify-content-center">
          <label for="inputPassword" class="col-sm-2 col-12 col-form-label d-md-flex justify-content-end">Buscar lote:</label>
          <div class="col-sm-7 mb-3 col-12">
            <form class="form-inline">
              <input class="form-control form-control-sm mr-3 w-75 mb-3" type="text" id="buscaLotesRegistradosCN" />
              <i class="fas fa-search" aria-hidden="true"></i>
            </form>
          </div>
        </div>
        <div class="table-responsive table-sm scrollable-content"">
            <table class=" table align-middler text-center ">
              <thead class=" table-light ">
                <tr>
                  <th scope=" col">Información</th>
          <th scope="col">N° Lote</th>
          <th scope="col">N° Lote a granel</th>
          <th scope="col">Presentación</th>
          <th scope="col">Categoría</th>
          <th scope="col">Clase</th>
          <th scope="col">Contenido alcohólico</th>
          <th scope="col">Botellas</th>
          <th scope="col">Especie</th>
          <th scope="col">Marca</th>
          <th scope="col">No. de análisis de laboratorio <br> (en cumplimiento con la NOM-070)2</th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td><input class="form-check-input" type="checkbox" data-bs-toggle="modal" data-bs-target="#modalProcesoValidacionCN" onclick="mostrarInformacionLoteCN();"></td>
              <td>datodatodato</td>
              <td>datodatodato</td>
              <td>datodatodato</td>
              <td>datodatodato</td>
              <td>datodatodato</td>
              <td>datodatodato</td>
              <td>datodatodato</td>
              <td>datodatodato</td>
              <td>datodatodato</td>
              <td>datodatodato</td>
            </tr>
          </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i>Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<div class="row mb-2">
  <div class="col-sm-12 text-center">
    <h1 class="m-0">C9999-EMPRESA MEZCALERA S.A. DE C.V.</h1>
  </div>
</div>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Solicitud</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Solicitudes Recibidas</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Solicitudes Enviadas</button>
  </li>
</ul>
<hr class="border border-Secondary border-1 opacity-75">
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

    <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4">
      <p class="font-weight-bold">INFORMACIÓN DE SOLICITUD</p>
    </div>

    <div class="row mb-3 mt-3">
      <div class="col-0 col-md-1"></div>
      <div class="col-md-5 col-12 text-sm-center">
        <div class="form-check form-check-inline ">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="marcaPropiaCN" checked onchange="seleccionarMarcaPropiaCN()">
          <label class="form-check-label" for="marcaPropiaCN">ENVASAR MARCAS PROPIAS</label>
        </div>
      </div>
      <div class="col-md-5 col-12">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="marcaMaquilaCN" onchange="seleccionarMarcaMaquilaCN();">
          <label class="form-check-label" for="marcaMaquilaCN">ENVASAR MARCAS DE MAQUILA</label>
        </div>
      </div>
      <div class="col-0 col-md-1 "></div>
    </div>

    <div style="display: none;" id="divConvenioMaquilaCN">
      <div class="mb-3 row">
        <div class="col-0 col-md-1 "></div>
        <label for="inputPassword" class="col-sm-2 col-form-label">Convenio de maquila:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" onkeyup="quitarMensajeValidacionCN(this)" id="convenioMaquilaCN">
          <label class="text-danger" style="display: none;">Ingrese el número de control</label>
        </div>
        <div class="col-sm-5">
          <label class="text-danger">Si el número de control no se muestra:
            *Verifique sus convenios con AMMA.</label>
        </div>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-sm-1 col-0"></div>
      <label class="col-sm-2 col-form-label">Tipo de instalación:</label>
      <div class="col-sm-8">
        <select class="form-select" aria-label="Default select example" id="tipoInstalacionCN" onchange="seleccionarTipoInstalacionCN(this);">
          <option value="0" selected disabled>Seleccione una opción</option>
          <option value="1">A granel de fábrica</option>
          <option value="2">A granel de envasado</option>
          <option value="3">Envasadora (Producto no terminado)</option>
          <option value="4">Envasadora (Producto terminado)</option>
          <option value="5">Bodega (Producto terminado)</option>
        </select>
        <label class="text-start text-danger" style="display: none;">Debes seleccionar una opción</label>
      </div>
    </div>

    <div class="row mb-3">
      <!-- <div class="col-sm-1 col-0"></div> -->
      <label class="col-sm-3 col-form-label">Instalación donde se encuentra el producto:</label>
      <div class="col-sm-9">
        <select class="form-select" aria-label="Default select example" id="instalacionProductoCN" onchange="seleccionarInstalacionEncuentraProducto(this)" disabled>
          <option value="0" selected disabled>Seleccione una opción</option>
          <option value="1">1</option>
        </select>
        <label class="text-start text-danger" style="display: none;">Debes seleccionar una opción</label>
      </div>
    </div>

    <div style="display: none;" id="divInstalacionEnvasarProductoCN">
      <div class="row mb-3">
        <!-- <div class="col-sm-1 col-0"></div> -->
        <label class="col-sm-3 col-form-label">Instalación donde se envasará el producto:</label>
        <div class="col-sm-9">
          <select class="form-select" aria-label="Default select example" id="instalacionEnvasarProductoCN" onchange="seleccionarInstalacionEnvasarProducto(this)">
            <option value="0" selected disabled>Seleccione una opción</option>
            <option value="1">1</option>
          </select>
          <label class="text-start text-danger" style="display: none;">Debes seleccionar una opción</label>
        </div>
      </div>
    </div>

    <div style="display: none;" id="divGranelFabricaCN">
      <div class=" row mb-3">
        <!-- <div class="col-0 col-sm-1"></div> -->
        <div class="d-none d-sm-block col-sm-12 p-1 bg-warning-subtle border rounded-3 mb-3">
          <p class="small text-start">
            Usted ha seleccionado un producto que aún se encuentra registrado en sistema en su FABRICA por lo tanto es muy importante aclarar que su solicitud solo será aprobada si usted cuenta con una ENVASADORA registrada en el mismo domicilio donde se encuentra el producto, en caso contrario deberá realizar el traslado correspondiente hacia la instalación donde envasará el producto.
          </p>
        </div>
        <!-- <div class="col-0 col-sm-1"></div> -->
      </div>
    </div>

    <div class="row mb-3">
      <!-- <div class="col-sm-1 col-0"></div> -->
      <div class="border rounded-4 bg-light p-2 col-sm-12">
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Empresa/Persona Física:</label>
          <label class="col-sm-10 fw-normal">datos datos datos</label>
          <label for="inputPassword" class="col-sm-2 col-form-label">Representante legal:</label>
          <label class="col-sm-10 fw-normal">datos datos datos</label>
          <label for="inputPassword" class="col-sm-2 col-form-label">Número de Control:</label>
          <label class="col-sm-10 fw-normal">datos datos datos</label>
          <label for="inputPassword" class="col-sm-2 col-form-label">Correo electronico:</label>
          <label class="col-sm-10 fw-normal">datos datos datos</label>
          <label for="inputPassword" class="col-sm-2 col-form-label">Teléfono:</label>
          <label class="col-sm-10 fw-normal">datos datos datos</label>
          <label for="inputPassword" class="col-sm-6 col-form-label">Responsable de la instalación donde se encuentra el producto:</label>
          <label class="col-sm-6 fw-normal">datos datos datos</label>
          <label for="inputPassword" class="col-sm-6 col-form-label">Dirección de la instalación donde se encuentra el producto:</label>
          <label class="col-sm-6 fw-normal">datos datos datos</label>
        </div>
      </div>
    </div>

    <div class="mb-3 row">
      <div class="col-0 col-md-1 "></div>
      <label for="inputPassword" class="col-sm-2 col-form-label">Fecha de solicitud:</label>
      <div class="col-sm-3">
        <input class="form-control " type="date" id="fechaSolicitudCN" disabled />
      </div>
    </div>

    <!-- <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4">
        <p class="font-weight-bold"> LA EMPRESA A TRAVÉS DE SU REPRESENTANTE LEGAL Y AUTORIZADO SOLICITA EL SERVICIO DE:</p>
      </div> -->
    <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4">
      <p class="font-weight-bold">SERVICIO SOLICITADO:</p>
    </div>

    <div class="row mb-4">
      <div class="col-0 col-sm-1"></div>
      <label for="" class="form-label col-sm-3 col-12">Requiere HOLOGRAMAS:</label>
      <div class="col-sm-2 col-12 text-sm-left text-center">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="hologramasCN" id="siHologramaCN" onchange="solicitarHologramasCN();" checked>
          <label class="form-check-label" for="siHologramaCN">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="hologramasCN" id="noHologramaCN" onchange="solicitarHologramasCN();">
          <label class="form-check-label" for="noHologramaCN">No</label>
        </div>
      </div>
      <div class="d-block d-sm-none p-0 bg-warning-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4">
        <p class="small text-start">
          SI SOLICITA HOLOGRAMAS: <br>
          * Debe contar con hologramas suficientes para esta solicitud o un pedido de hologramas en proceso. <br>
          * La fecha de programación de la actividad de inspección se realizará posterior a que su empresa reciba los hologramas de certificación, independientemente de la fecha propuesta. <br>
          * En la fecha programada debe de contar con el producto envasado terminado. <br><br>
          Nota: Los hologramas se entregarán después de 24 horas de aceptación de la solicitud, previa constatación del cumplimiento del producto con el apartado 4.3 de la NOM-070, en vigor.
        </p>
      </div>
    </div>

    <div style="display: none;" id="divSolicitarHologramaCN">
      <div class="row mb-3">
        <div class="col-0 col-sm-1"></div>
        <label class="col-sm-3">Motivo para solicitar hologramas:</label>
        <div class="col-sm-7">
          <textarea class="form-control " id="solicitarHologramaCN" rows="2" onkeyup=""></textarea>
          <label class="text-danger" style="display: none;" id="mensajeSolicitarHologramaCN">Ingrese el motivo para solicitar hologramas</label>
        </div>
        <div class="col-0 col-sm-1"></div>
      </div>
    </div>


    <div class=" row">
      <div class="col-0 col-sm-1"></div>
      <div class="d-none d-sm-block col-sm-10 p-1 bg-warning-subtle border rounded-3 mb-3">
        <p class="small text-start">
          SI SOLICITA HOLOGRAMAS: <br>
          * Debe contar con hologramas suficientes para esta solicitud o un pedido de hologramas en proceso. <br>
          * La fecha de programación de la actividad de inspección se realizará posterior a que su empresa reciba los hologramas de certificación, independientemente de la fecha propuesta. <br>
          * En la fecha programada debe de contar con el producto envasado terminado. <br><br>
          Nota: Los hologramas se entregarán después de 24 horas de aceptación de la solicitud, previa constatación del cumplimiento del producto con el apartado 4.3 de la NOM-070, en vigor.
        </p>
      </div>
      <div class="col-0 col-sm-1"></div>
    </div>

    <div class="row mb-4 text center">
      <div class="col-0 col-sm-1"></div>
      <label for="" class="form-label col-sm-2 col-12">Tipo de servicio:</label>
      <div class="col-sm-3 col-12 text-center">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="serviciosCN" id="servicioNormalCN" onchange="fechaPropuestaCN();" checked>
          <label class="form-check-label" for="servicioNormalCN">Normal</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="serviciosCN" id="servicioExclusivoCN" onchange="fechaPropuestaCN();">
          <label class="form-check-label" for="servicioExclusivoCN">Exclusivo</label>
        </div>
      </div>
      <div class="d-block d-sm-none p-0 bg-warning-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4">
        <p>
          *Para servicios exclusivos, es necesario realizar el pago para la asignación de verificador. <br>
          *Si selecciona SERVICIO EXCLUSIVO, en la solicitud ya no se podrá cambiar el tipo de servicio y se le cobrará la visita como Exclusiva.
        </p>
      </div>
      <div class="col-sm-2 col-12">
        <label for="dateUltFechaInsp">Fecha propuesta:</label>
      </div>
      <div class="col-sm-3 col-12">
        <input class="form-control " type="date" id="fechaPropuestaCN" />
        <label class="text-danger" style="display: none;">Ingrese una fecha</label>
      </div>
    </div>

    <div class=" row">
      <div class="col-0 col-sm-1"></div>
      <div class="d-none d-sm-block col-sm-10 p-1 bg-warning-subtle border rounded-3 mb-3">
        <p class="small text-start">
          *Para servicios exclusivos, es necesarió realizar el pago para la asignación de verificador. <br>
          *Si selecciona SERVICIO EXCLUSIVO, en la solicitud ya no se podrá cambiar el tipo de servicio y se le cobrara la visita como Exclusiva.
        </p>
      </div>
      <div class="col-0 col-sm-1"></div>
    </div>

    <div class="mb-3 border border-5 rounded-4 bg-light p-2">
      <div class="row">
        <p class="font-weight-bold col-sm-6 col-12 mt-2">
          CARACTERÍSTICAS DEL PRODUCTO
        </p>
        <div class=" col-sm-6 col-12 text-sm-right text-center" id="">
          <button class="btn btn-primary mt-2 mb-2" type="button" onclick="agregarLoteCN();"><i class="bi bi-plus-circle"></i>Agregar lote</button>
        </div>
      </div>
    </div>

    <div class="row" id="lotesAgregadosCN"></div>

    <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4 ">
      <p class="font-weight-bold">INFORMACIÓN ADICIONAL SOBRE LA ACTIVIDAD</p>
    </div>

    <div class="row mb-3">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <textarea class="form-control " id="" rows="3" onkeyup=""></textarea>
        <label class="text-danger" style="display: none;">Ingrese el tipo de transporte</label>
      </div>
    </div>

    <div class="row mt-5 d-flex justify-content-center">
      <button class="btn btn-primary col-sm-2 col-10" type="button" onclick="generarSolicitudCN();"><i class="bi bi-journal-plus"></i> Generar solicitud</button>
    </div>

  </div>

  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
    <div class="row mb-1">
      <div class="col-sm-6 ">
        <button type="button" class="btn btn-lg" data-bs-toggle="tooltip" data-bs-title="Actualizar datos de la tabla"><i class="bi bi-arrow-clockwise"></i>Actualizar</button>
      </div>
    </div>
    <div class="table-responsive table-sm ">
      <table class="table align-middler text-center" id="trasladosRecibidas">
        <thead>
          <tr>
            <th scope="col">Folio</th>
            <th scope="col">Solicitud</th>
            <th scope="col">Fecha</th>
            <th scope="col">Tipo de envasado</th>
            <th scope="col">Número de control</th>
            <th scope="col">Maquilado</th>
            <th scope="col">Estatus</th>
            <th scope="col">Más información</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>dato dato</td>
            <td>dato dato</td>
            <td>dato dato</td>
            <td>dato dato</td>
            <td>dato dato</td>
            <td>dato dato</td>
            <td>dato dato</td>
            <td><button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalInformacionSolicitudCN"><i class="bi bi-card-text"></i></button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
    <div class="row mb-1">
      <div class="col-sm-6 ">
        <button type="button" class="btn btn-lg" data-bs-toggle="tooltip" data-bs-title="Actualizar datos de la tabla"><i class="bi bi-arrow-clockwise"></i>Actualizar</button>
      </div>
    </div>
    <div class="table-responsive  table-sm ">
      <table class="table align-middler text-center" id="trasladosRealizadas">
        <caption>
        </caption>
        <thead class="table-light ">
          <tr>
            <th scope="col">Folio</th>
            <th scope="col">Solicitud</th>
            <th scope="col">Fecha</th>
            <th scope="col">Tipo de envasado</th>
            <th scope="col">Número de control</th>
            <th scope="col">Maquilado</th>
            <th scope="col">Estatus</th>
            <th scope="col">Más información</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>dato dato</td>
            <td>dato dato</td>
            <td>dato dato</td>
            <td>dato dato</td>
            <td>dato dato</td>
            <td>dato dato</td>
            <td>dato dato</td>
            <td><button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalInformacionSolicitudCN"><i class="bi bi-card-text"></i></button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>