<div id="maduracion">
  <script src="modulos/solicitudes/maduracion/maduracion.js"></script>
  <!-- Modal pequeño-->
  <div class="modal fade" id="modalPequeñoMaduracion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
      <div class="modal-content">
        <div class="modal-header ">
          <h1 class="modal-title fs-5 d-flex justify-content-center" id="tituloModalpequeñoMaduracion"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close""></button>
        </div>
        <div class=" modal-body" id="cuerpoModalPequeñoMaduracion">
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-primary" id="aceptarAgregarLoteMaduracion" onclick="agregarLoteIngresoMaduracion();" hidden><i class="bi bi-plus-circle"></i>Agregar lote</button>
          <button type="button" class="btn btn-primary" id="aceptarRegistrarLoteMaduracion" hidden onclick="registrarLoteIngresoMaduracion();"><i class="bi bi-plus-circle"></i>Agregar lote</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="cerrarRegistrarLoteMaduracion" hidden><i class="bi bi-x-circle"></i>Cerrar</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="cerrarAgregarLoteMaduracion" data-bs-toggle="modal" data-bs-target="#myModal" hidden><i class="bi bi-x-circle"></i>Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal pequeño servicio de liberación - maduración -->
  <div class="modal fade" id="modalLiberacionMaduracion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
      <div class="modal-content">
        <div class="modal-header ">
          <h1 class="modal-title fs-5 d-flex justify-content-center" id="tituloLiberacionMaduracion"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close""></button>
        </div>
        <div class=" modal-body" id="cuerpoLiberacionMaduracion">
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-primary" id="aceptarAgregarLoteMaduracion" onclick="registrarLoteLiberacionMaduracion();"><i class="bi bi-plus-circle"></i>Agregar lote</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i>Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal para mostrar la información de cada solicitud realizada  -->
  <div class="modal fade" id="modalSeguimientoInformacionMaduracion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header ">
          <h1 class="modal-title fs-5 d-flex justify-content-center" id="tituloSeguimientoInformacionMaduracion">Detalles de la solicitud</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close""></button>
        </div>
        <div class=" modal-body" id="cuerpoSeguimientoInformacionMaduracion">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#generalMaduracion" type="button" role="tab" aria-controls="generalMaduracion" aria-selected="true">Datos general</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#ingresarMaduracion" type="button" role="tab" aria-controls="ingresarMaduracion" aria-selected="false">Lotes a ingresar</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#liberacionMaduracion" type="button" role="tab" aria-controls="liberacionMaduracion" aria-selected="false">Lotes a liberar</button>
              </li>
            </ul>
            <hr class="border border-Secondary border-1 opacity-75">
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="generalMaduracion" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="row">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <label class="col-sm-3 fw-normal"> <i class="bi bi-caret-right-fill"></i>Número de solicitud:</label>
                        <label class="col-sm-9 justify-content-start fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-3 fw-normal"> <i class="bi bi-caret-right-fill"></i>Solicitante:</label>
                        <label class="col-sm-9 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-3 fw-normal"> <i class="bi bi-caret-right-fill"></i>Tipo de servicio:</label>
                        <label class="col-sm-9 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-3 fw-normal"> <i class="bi bi-caret-right-fill"></i>Fecha de solicitud:</label>
                        <label class="col-sm-9 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-3 fw-normal"> <i class="bi bi-caret-right-fill"></i>Fecha propuesta:</label>
                        <label class="col-sm-9 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-3 fw-normal"> <i class="bi bi-caret-right-fill"></i>Instalación:</label>
                        <label class="col-sm-9 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-3 fw-normal"> <i class="bi bi-caret-right-fill"></i>Domicilio:</label>
                        <label class="col-sm-9 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-3 fw-normal"> <i class="bi bi-caret-right-fill"></i>Información adicional:</label>
                        <label class="col-sm-9 fw-normal">dato</label>
                      </div>
                      <hr class="border border-Secondary border-1 opacity-75 mt-2 mb-2">
                      <div class="row">
                        <label class="col-sm-4 fw-normal"> <i class="bi bi-caret-right-fill"></i>Estado actual de la solicitud:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="ingresarMaduracion" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="row">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <h5 class="card-title col-sm-4"><strong>INFORMACIÓN DEL LOTE:</strong></h5><br>
                        <label class="col-sm-8 justify-content-start fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4 "> <i class="bi bi-caret-right-fill"></i>Nombre del lote segmentado:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4 "> <i class="bi bi-caret-right-fill"></i>Especie:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Categoría:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Clase:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Grado alcohólico:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Litro disponible:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Litros a ingresar:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Fecha de ingreso:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Número de recipientes:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Material:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Capacidad:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Análisis presentados:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="liberacionMaduracion" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                <div class="row">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <h5 class="card-title col-sm-4"><strong>INFORMACIÓN DEL LOTE:</strong></h5><br>
                        <label class="col-sm-8 justify-content-start fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4 "> <i class="bi bi-caret-right-fill"></i>Folio:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Grado alcohólico:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Litro disponible:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Litros a liberar:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Fecha de ingreso:</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                      <div class="row">
                        <label class="col-sm-4"> <i class="bi bi-caret-right-fill"></i>Tiempo de maduración(Aprox):</label>
                        <label class="col-sm-8 fw-normal">dato</label>
                      </div>
                    </div>
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

  <!-- Contenido para el modal Información de traslado -->
  <div style="display: none;">
    <div id="contenidoInformacionTraslado">
      <div class="row mt-2 ml-sm-3 mr-sm-3">
        <div class="card col-sm-12">
          <div class="card-body">
            <h5 class="card-title"><strong><i class="bi bi-card-text"></i> INFORMACIÓN GENERAL</strong></h5><br>
            <div class="row mt-3">
              <label class="col-sm-4 ml-sm-5">Folio de ingreso:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Número de solicitud:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Modalidad de traslado:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Tipo de traslado:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Tipo de servicio:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Responsable de traslado:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Responsable de pago:</label>
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
              <label class="col-sm-4 ml-sm-5">Transporte:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Actividades posteriores:</label>
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
            <h5 class="card-title"><strong><i class="bi bi-door-open"></i> SALIDA DEL PRODUCTO</strong></h5><br>
            <div class="row mt-3">
              <label class="col-sm-4 ml-sm-5">Nombre o razón social:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Instalación:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Responsable:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Domicilio:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Referencias:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-2 ml-sm-3 mr-sm-3">
        <div class="card col-sm-12">
          <div class="card-body">
            <h5 class="card-title"><strong><i class="bi bi-geo-alt"></i> DESTINO DEL PRODUCTO</strong></h5><br>
            <div class="row mt-3">
              <label class="col-sm-4 ml-sm-5">Nombre o razón social:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Instalación:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Responsable:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Domicilio:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
            <div class="row">
              <label class="col-sm-4 ml-sm-5">Referencias:</label>
              <label class="col-sm-7 justify-content-start fw-normal">dato dato</label>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><strong><i class="bi bi-archive"></i> LOTES A TRASLADAR:</strong></h5><br>
            <div class="row mt-2">
              <div class="table-responsive table-sm ">
                <table class="table table-bordered align-middler text-center">
                  <caption>
                  </caption>
                  <thead class="table table-bordered ">
                    <tr>
                      <th scope="col">Lote granel</th>
                      <th scope="col">Clase</th>
                      <th scope="col">Categoría</th>
                      <th scope="col">Análisis</th>
                      <th scope="col">Certificado</th>
                      <th scope="col">Litros solicitados</th>
                      <th scope="col">Especie(s)</th>
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
            <h5 class="card-title"><strong><i class="bi bi-person-check"></i> INSPECTORES ASIGNADOS</strong></h5><br>
            <div class="row mt-3">
              <label class="col-sm-5 ml-sm-5">Inspector en instalación de salida:</label>
              <label class="col-sm-6 justify-content-start fw-normal">Pendiente de asignar</label>
            </div>
            <div class="row">
              <label class="col-sm-5 ml-sm-5">Inspector en instalación de destino:</label>
              <label class="col-sm-6 justify-content-start fw-normal">Pendiente de asignar</label>
            </div>
            <div class="row">
              <label class="col-sm-5 ml-sm-5">Fecha programada:</label>
              <label class="col-sm-6 justify-content-start fw-normal">dato dato</label>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- contenido para el modal de Proceso de validación -->
  <div style="display: none;">
    <div id="contenidoProcesoValidacionMaduracion">

      <div class="row">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><strong>INFORMACIÓN DEL LOTE A GRANEL</strong></h5><br>
            <div class="row">
              <label class="mt-3 col-sm-5 fw-normal"> <i class="bi bi-caret-right-fill"></i> No. de lote:</label>
              <label class="mt-3 col-sm-7 justify-content-start fw-normal">EPAMM14</label>
            </div>
            <div class="row">
              <label class="mt-3 col-sm-5 fw-normal"> <i class="bi bi-caret-right-fill"></i> Especie(s):</label>
              <label class="mt-3 col-sm-7 fw-normal">MAGUEY ESPADÍN</label>
            </div>
            <div class="row">
              <label class="mt-3 col-sm-5 fw-normal"> <i class="bi bi-caret-right-fill"></i> Categoría:</label>
              <label class="mt-3 col-sm-7 fw-normal">Mezcal Artesanal</label>
            </div>
            <div class="row">
              <label class="mt-3 col-sm-5 fw-normal"> <i class="bi bi-caret-right-fill"></i> Clase:</label>
              <label class="mt-3 col-sm-7 fw-normal">Blanco o Joven</label>
            </div>
            <div class="row">
              <label class="mt-3 col-sm-5 fw-normal"> <i class="bi bi-caret-right-fill"></i> Litros existentes:</label>
              <label class="mt-3 col-sm-7 fw-normal">90 Litros a 48.9% Alc. Vol</label>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><strong>INFORMACIÓN DEL INGRESO A MADURACIÓN</strong></h5><br>
            <form id="formularioProcesoValidacionMaduracion">
              <div class="row mt-3">
                <label for="inputPassword" class="col-sm-4 col-12 col-form-label">Litros a trasladar:</label>
                <input class="form-control form-control-sm  col-sm-3 col-12" type="number" value="6" min="6" id="litrosProcesoValidacion" onkeyup="agregarLitrosMinimos(this);" onchange="cambiarNombreLote();" />
                <label for="inputPassword" class="col-sm-5 col-6 col-form-label text-blue">(90 L.) Disponibles</label>
              </div>
              <div id="agregarInformacionIngresoMaduracion">
                <div class="row">
                  <label for="inputPassword" class="col-sm-5 col-12 col-form-label">N° contenedores:</label>
                  <input class="form-control form-control-sm col-sm-7 col-12" type="number" id="contenedoresProcesoValidacionMaduracion" min="1" onchange="quitarMensajeValidacion(this)" onkeyup="agregarLitrosMinimos(this);" />
                  <label class="text-start text-danger" style="display: none;">Ingrese el número de contenedores</label>
                </div>
                <div class="row">
                  <label for="inputPassword" class="col-sm-5 col-12 col-form-label">Capacidad:</label>
                  <input class="form-control form-control-sm col-sm-7 col-12" type="number" id="capacidadProcesoValidacionMaduracion" min="1" onchange="quitarMensajeValidacion(this)" onkeyup="agregarLitrosMinimos(this);" />
                  <label class="text-start text-danger" style="display: none;">Ingrese la capacidad de los contenedores</label>
                </div>
                <div class="row">
                  <label for="inputPassword" class="col-sm-5 col-12 col-form-label">Material:</label>
                  <div class="col-sm-7 col-12">
                    <select class="form-select " aria-label="Default select example" id="materialProcesoValidacionMaduracion" onchange="quitarMensajeValidacion(this); mostrarTipoMaderaMaduracion(this);">
                      <option value="0" selected disabled>Seleccione una opción</option>
                      <option value="1">Vidrio</option>
                      <option value="2">Madera</option>
                    </select>
                    <label class="text-start text-danger" style="display: none;">Seleccione una opción</label>
                  </div>
                </div>
                <div style="display: none;" id="divTipoMaderaProcesoValidacionMaduracion">
                  <div class="row mt-2">
                    <label for="inputPassword" class="col-sm-5 col-12 col-form-label">Tipo de madera:</label>
                    <div class="col-sm-7">
                      <select class="form-select " aria-label="Default select example" id="tipoMaderaProcesoValidacionMaduracion" onchange="quitarMensajeValidacion(this); mostrarEspecificacionMaderaMaduracion(this);">
                        <option value="0" selected disabled>Seleccione una opción</option>
                        <option value="1">Roble blanco americano</option>
                        <option value="2">Roble frances</option>
                        <option value="3">Roble blanco americano y roble frances</option>
                        <option value="4">Pino</option>
                        <option value="5">Encino</option>
                        <option value="6">Ahuehuete</option>
                        <option value="7">Otro</option>
                      </select>
                      <label class="text-start text-danger" style="display: none;">Seleccione una opción</label>
                    </div>
                  </div>
                </div>
                <div style="display: none;" id="divMaderaProcesoValidacionMaduracion">
                  <div class="row mt-2">
                    <label for="inputPassword" class="col-sm-5 col-12 col-form-label">Especifique el tipo de madera:</label>
                    <div class="col-sm-7 col-12">
                      <textarea class="form-control " id="maderaProcesoValidacionMaduracion" rows="3" onkeyup="quitarMensajeValidacion(this)"></textarea>
                      <label class="text-start text-danger" style="display: none;">Rellene este campo</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row" style="display: none;" id="cambiarNombreLote">
                <div class="p-0 bg-succes-subtle bg-danger-subtle border border-primary-subtle rounded-3 mt-2 mb-2 row">
                  *Sugerencia: Para evitar posibles confunciones que se pudieran suscitar en el futuro le sugerimos renombrar este lote que se ingresara a maduración, puede asignarle un nombre distinto o un identificador adicional por ejemplo "EPAMM14-1" o "EPAMM14-A".
                </div>
                <div class="row">
                  <label for="inputPassword" class="col-sm-5 col-12 col-form-label">Nombre:</label>
                  <input class="form-control form-control-sm  w-75 col-sm-7 col-12" type="text" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contenido del modal ¿NO APARECE TU LOTE? Ingreso maduración-->
  <div id="noApareceLoteIngresoMaduracion" style="display: none;">
    <div>
      <div class="row mb-4">
        <div class="col-12">
          Si el lote que desea agregar aun no ha sido reportado al inspector puede hacer uso de la opción <span class="text-primary">Registrar lote</span>, esta opción solo puede ser utilizada para lotes que no hayan sido reportados y requieran realizar la actividad de forma inmediata.
        </div>
      </div>
      <div class="row mb-4 justify-content-center">
        <div class="col-md-8 ">
          <button class="btn btn-primary" type="button" onclick="mostrarModalRegistrarLoteMaduracion('contenidoResgistrarLoteMaduracion')">Registrar lote</button>
        </div>
      </div>
      <div class="row m-3">
        <div class="col-12">
          Por el contrario si su lote fue reportado al inspector con anterioridad y este no se muestra en el sistema en la opción <span class="text-primary">Buscar lote</span> ponemos a su disposición el correo electrónico de la <strong>UNIDAD DE INSPECCIÓN DE AMMA con un horario de atención de 9:00 a 16:00 hrs</strong> .
        </div>
      </div>
      <div class="row m-3">
        <div class="col-12 justify-content-center">
          <span class="text-success">inspeccion@amma.org.mx</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Contenido del modal ¿NO APARECE TU LOTE? liberacón maduración-->
  <div id="noApareceLoteLiberacionMaduracion" style="display: none;">
    <div>
      <div class="row mb-4">
        <div class="col-12">
          Si el lote que desea agregar aun no ha sido reportado al inspector puede hacer uso de la opción <span class="text-primary">Registrar lote</span>, esta opción solo puede ser utilizada para lotes que no hayan sido reportados y requieran realizar la actividad de forma inmediata.
        </div>
      </div>
      <div class="row mb-4 justify-content-center">
        <div class="col-md-8 ">
          <button class="btn btn-primary" type="button" onclick="mostrarModalRegistrarLoteLiberacionMaduracion('contenidoResgistrarLoteLiberacionMaduracion')">Registrar lote</button>
        </div>
      </div>
      <div class="row m-3">
        <div class="col-12">
          Por el contrario si su lote fue reportado al inspector con anterioridad y este no se muestra en el sistema en la opción <span class="text-primary">Buscar lote</span> ponemos a su disposición el correo electrónico de la <strong>UNIDAD DE INSPECCIÓN DE AMMA con un horario de atención de 9:00 a 16:00 hrs</strong> .
        </div>
      </div>
      <div class="row m-3">
        <div class="col-12 justify-content-center">
          <span class="text-success">inspeccion@amma.org.mx</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal lotes registrados servicio de ingreso-->
  <div class="modal fade" id="lotesRegistradosMaduracion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <div class="modal-header ">
          <h1 class="modal-title fs-5 d-flex justify-content-center">Lista de lotes registrado en sistemas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mt-3 mb-3 row justify-content-center">
            <label for="inputPassword" class="col-sm-2 col-12 col-form-label d-md-flex justify-content-end">Buscar lote:</label>
            <div class="col-sm-7 mb-3 col-12">
              <form class="form-inline">
                <input class="form-control form-control-sm mr-3 w-75 mb-3" type="text" id="buscar" />
                <i class="fas fa-search" aria-hidden="true"></i>
              </form>
            </div>
            <!-- <div class="col-sm-3 col-12  d-md-flex justify-content-end">
              <a class="btn btn-link" type="button" onclick="registrarLote()">
                ¿No aparece tu lote?
              </a>
            </div> -->
          </div>
          <div class="table-responsive  table-sm scrollable-content">
            <table class="table align-middler text-center ">
              <caption>
              </caption>
              <thead class="table-light ">
                <tr>
                  <th scope="col">Información</th>
                  <th scope="col">N° Lote</th>
                  <th scope="col">Categoría</th>
                  <th scope="col">Clase</th>
                  <th scope="col">Contenido alcohólico</th>
                  <th scope="col">Volumen</th>
                  <th scope="col">Especie(s)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" data-bs-toggle="modal" data-bs-target="#modalPequeñoMaduracion" onchange="mostrarModalProcesoValidacion();"></td>
                  <td>Jacobsaaaaaaaaaaaaaaaaa</td>
                  <td>Thornton</td>
                  <td>@faasddddddddt</td>
                  <td>2sadddddddddd</td>
                  <td>Jacobsdsds</td>
                  <td>Thorntonsddd</td>
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

  <!-- Modal lotes registrados servicio de liberación-->
  <div class="modal fade" id="lotesRegistradosLiberacionMaduracion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <div class="modal-header ">
          <h1 class="modal-title fs-5 d-flex justify-content-center">Lista de lotes registrado en sistemas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mt-3 mb-3 row justify-content-center">
            <label for="inputPassword" class="col-sm-2 col-12 col-form-label d-md-flex justify-content-end">Buscar lote:</label>
            <div class="col-sm-7 mb-3 col-12">
              <form class="form-inline">
                <input class="form-control form-control-sm mr-3 w-75 mb-3" type="text" id="buscar" />
                <i class="fas fa-search" aria-hidden="true"></i>
              </form>
            </div>
            <!-- <div class="col-sm-3 col-12  d-md-flex justify-content-end">
              <a class="btn btn-link" type="button" onclick="registrarLote()">
                ¿No aparece tu lote?
              </a>
            </div> -->
          </div>
          <div class="table-responsive  table-sm scrollable-content">
            <table class="table align-middler text-center ">
              <caption>
              </caption>
              <thead class="table-light ">
                <tr>
                  <th scope="col">Información</th>
                  <th scope="col">Folio</th>
                  <th scope="col">Fecha ingreso</th>
                  <th scope="col">Contenedor(es)</th>
                  <th scope="col">Contenido alcohólico</th>
                  <th scope="col">Volumen</th>
                  <th scope="col">Especie(s)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <!-- <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" data-bs-toggle="modal" data-bs-target="#modalPequeñoMaduracion" onchange="mostrarModalProcesoValidacion();"></td> -->
                  <td></td>
                  <td>Jacobsaaaaaaaaaaaaaaaaa</td>
                  <td>Thornton</td>
                  <td>@faasddddddddt</td>
                  <td>2sadddddddddd</td>
                  <td>Jacobsdsds</td>
                  <td>Thorntonsddd</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- formulario para registrar lote -->
  <div style="display: none;">
    <div id="contenidoResgistrarLoteMaduracion">
      <form id="formularioRegistrarLoteMaduracion">

        <div class="row">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><strong>INFORMACIÓN DEL LOTE A GRANEL</strong></h5><br>
              <div class="row">
                <label class="mt-2 col-sm-5">Lote:</label>
                <div class="mt-2 col-sm-7">
                  <input class="form-control  form-control-sm" type="text" id="loteRegistrarLoteMaduracion" onkeyup="quitarMensajeValidacion(this)" />
                  <label class="text-danger" style="display: none;">Ingrese el lote</label>
                </div>
              </div>
              <div class="row">
                <label class="mt-2 col-sm-5">Especie(s):</label>
                <div class="mt-2 col-sm-7">
                  <select class="form-select " aria-label="Default select example" id="especieRegistrarLoteMaduracion" onchange="quitarMensajeValidacion(this)">
                    <option value="0" selected disabled>Seleccione una opción</option>
                    <option value="1">MAGUEY BELATÓ</option>
                  </select>
                  <label class="text-start text-danger" style="display: none;">Debes seleccionar una opción</label>
                </div>
              </div>
              <div class="row">
                <label class="mt-2 col-sm-5">Categoría:</label>
                <div class="mt-2 col-sm-7">
                  <select class="form-select " aria-label="Default select example" id="categoriaRegistrarLoteMaduracion" onchange="quitarMensajeValidacion(this)">
                    <option value="0" selected disabled>Seleccione una opción</option>
                    <option value="1">Mezcal</option>
                    <option value="2">Mezcal artesanal</option>
                    <option value="3">Mezcal ancestral</option>
                  </select>
                  <label class="text-start text-danger" style="display: none;">Debes seleccionar una opción</label>
                </div>
              </div>
              <div class="row">
                <label class="mt-2 col-sm-5 ">Clase:</label>
                <div class="mt-2 col-sm-7">
                  <select class="form-select " aria-label="Default select example" id="claseRegistrarLoteMaduracion" onchange="quitarMensajeValidacion(this)">
                    <option value="0" selected disabled>Seleccione una opción</option>
                    <option value="1">Blanco o joven </option>
                    <option value="2">Reposado</option>
                    <option value="3">Añejo</option>
                    <option value="2">Abocado con</option>
                    <option value="3">Destilado con</option>
                  </select>
                  <label class="text-start text-danger" style="display: none;">Debes seleccionar una opción</label>
                </div>
              </div>
              <div class="row">
                <label for="inputPassword" class="col-form-label mt-2 col-sm-5">Análisis fisicoquímico: <span class="text-danger">(Opcional)</span></label>
                <div class="mt-2 col-sm-7">
                  <input class="form-control form-control-sm" type="text" id="analisisRegistrarLoteMaduracion" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><strong>INFORMACIÓN DEL INGRESO A MADURACIÓN</strong></h5><br>
              <form id="formularioProcesoValidacion">
                <div class="row mt-3">
                  <label for="inputPassword" class="col-sm-5 col-12 col-form-label">Litros a ingresar:</label>
                  <input class="form-control form-control-sm  w-75 col-sm-7 col-12" type="number" value="6" min="6" id="litrosRegistrarLoteMaduracion" onkeyup="agregarLitrosMinimosMaduracion(this);" />
                  <!-- <label for="inputPassword" class="col-sm-5 col-6 col-form-label text-blue">(90 L.) Disponibles</label> -->
                </div>
                <div class="row ">
                  <label for="inputPassword" class="col-sm-5 col-12 mt-2 col-form-label">Grado alcohólico:</label>
                  <input class="form-control form-control-sm  w-75 col-sm-7 col-12 mt-2" type="number" min="1" id="gradoAlcoholicoRegistrarLoteMaduracion" onkeyup="agregarLitrosMinimosMaduracion(this);" onchange="quitarMensajeValidacion(this)" />
                  <label class="text-start text-danger" style="display: none;">Ingrese un grado alcohólico válido</label>
                </div>
                <div id="registrarInformacionIngresoMaduracion"></div>
              </form>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- formulario para registrar lote para servicio de liberación -->
  <div style="display: none;">
    <div id="contenidoResgistrarLoteLiberacionMaduracion">
      <form id="formularioRegistrarLoteLiberacionMaduracion">

        <div class="row">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><strong>INFORMACIÓN DEL LOTE A GRANEL</strong></h5><br>
              <div class="row mt-3">
                <label class="col-sm-5">Lote:</label>
                <div class=" col-sm-7">
                  <input class="form-control form-control-sm " type="text" id="loteRegistrarLoteLiberacionMaduracion" aria-label="default input example" onkeyup="quitarMensajeValidacion(this)" />
                  <label class="text-danger" style="display: none;">Ingrese el lote</label>
                </div>
              </div>
              <div class="row">
                <label class="mt-2 col-sm-5">Especie(s):</label>
                <div class="mt-2 col-sm-7">
                  <select class="form-select " aria-label="Default select example" id="especieRegistrarLoteLiberacionMaduracion" onchange="quitarMensajeValidacion(this)">
                    <option value="0" selected disabled>Seleccione una opción</option>
                    <option value="1">MAGUEY BELATÓ</option>
                  </select>
                  <label class="text-start text-danger" style="display: none;">Debes seleccionar una opción</label>
                </div>
              </div>
              <div class="row">
                <label class="mt-2 col-sm-5">Folio:</label>
                <div class="mt-2 col-sm-7">
                  <input class="form-control form-control-sm" type="text" aria-label="default input example" id="folioRegistrarLoteLiberacionMaduracion" onkeyup="quitarMensajeValidacion(this)" />
                  <label class="text-danger" style="display: none;">Ingrese el número de folio</label>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-5 mt-2">Volumen disponible:</label>
                <div class="mt-2 col-sm-7">
                  <input class="form-control form-control-sm " type="number" min="1" id="volumenRegistrarLoteLiberacionMaduracion" onkeyup="agregarLitrosMinimosMaduracion(this);" onchange="quitarMensajeValidacion(this)" />
                  <label class="text-start text-danger" style="display: none;">Ingrese el volumen disponible</label>
                </div>
              </div>
              <div class="row ">
                <label class="col-sm-5 mt-2">Grado alcohólico:</label>
                <div class="mt-2 col-sm-7">
                  <input class="form-control form-control-sm" type="number" min="1" id="gradoRegistrarLoteLiberacionMaduracion" onkeyup="agregarLitrosMinimosMaduracion(this);" onchange="quitarMensajeValidacion(this)" />
                  <label class="text-start text-danger" style="display: none;">Ingrese un grado alcohólico válido</label>
                </div>
              </div>
              <div class="row">
                <label class="col-form-label mt-2 col-sm-5">Fecha de ingreso a maduración:</label>
                <div class="mt-2 col-sm-7">
                  <input class="form-control " type="date" id="fechaRegistrarLoteLiberacionMaduracion" onchange="quitarMensajeValidacion(this)" />
                  <label class="text-danger" style="display: none;">Ingrese una fecha</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><strong>INFORMACIÓN DE LA LIBERACIÓN</strong></h5><br>
              <div class="row mt-3">
                <label for="inputPassword" class="col-sm-5 col-12 col-form-label">Litros a ingresar:</label>
                <div class="mt-2 col-sm-7">
                  <input class="form-control form-control-sm" type="number" min="1" id="litrosRegistrarLoteLiberacionMaduracion" onkeyup="agregarLitrosMinimosMaduracion(this);" onchange="quitarMensajeValidacion(this)" onchange="esDiaDomingoSabado(this.id)" />
                  <label class="text-danger" style="display: none;">Ingrese los litros</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
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
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Seguimiento</button>
    </li>
  </ul>
  <hr class="border border-Secondary border-1 opacity-75">
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

      <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4">
        <p class="font-weight-bold">INFORMACIÓN DE SOLICITUD</p>
      </div>

      <div class="row mb-4 text center">
        <div class="col-0 col-sm-1"></div>
        <label for="" class="form-label col-sm-2 col-12">Tipo de servicio:</label>
        <div class="col-sm-3 col-12 text-center">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="servicioNormalMaduracion" value="option1" checked onchange="fechaPropuestaMaduracion();">
            <label class="form-check-label" for="servicioNormalMaduracion">Normal</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="servicioExclusivoMaduracion" value="option2" onchange="fechaPropuestaMaduracion();">
            <label class="form-check-label" for="servicioExclusivoMaduracion">Exclusivo</label>
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
          <input class="form-control " type="date" id="fechaPropuestaMaduracion" />
          <label class="text-danger" style="display: none;">Ingrese una fecha</label>
        </div>
      </div>

      <div class=" row">
        <div class="col-0 col-sm-1"></div>
        <div class="d-none d-sm-block col-sm-10 p-0 bg-warning-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4">
          <p class="small text-start">
            *Para servicios exclusivos, es necesarió realizar el pago para la asignación de verificador. <br>
            *Si selecciona SERVICIO EXCLUSIVO, en la solicitud ya no se podrá cambiar el tipo de servicio y se le cobrara la visita como Exclusiva.
          </p>
        </div>
        <div class="col-0 col-sm-1"></div>
      </div>

      <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4 ">
        <p class="font-weight-bold">INSTALACIÓN DONDE SE ENCUENTRA FÍSICAMENTE EL PRODUCTO</p>
      </div>

      <div class="row mb-3">
        <div class="col-sm-1 col-0"></div>
        <label class="col-sm-2 col-form-label">Tipo de instalación:</label>
        <div class="col-sm-8">
          <select class="form-select" aria-label="Default select example" id="tipoInstalacionMaduracion" onchange="elegirTipoInstalacionMaduracion(this);">
            <option value="0" selected disabled>Seleccione una opción</option>
            <option value="1">GRANEL DE FABRICA</option>
            <option value="2">GRANEL DE ENVASADO</option>
            <option value="3">BODEGA DE GRANELES</option>
          </select>
          <label class="text-start text-danger" style="display: none;">Debes seleccionar una opción</label>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-1 col-0"></div>
        <label class="col-sm-2 col-form-label">Instalación:</label>
        <div class="col-sm-8">
          <select class="form-select" aria-label="Default select example" id="instalacionMaduracion" onchange="elegirInstalacionMaduracion(this);" disabled>
            <option value="0" selected disabled>Seleccione una opción</option>
            <option value="1">1</option>
          </select>
          <label class="text-start text-danger" style="display: none;">Debes seleccionar una opción</label>
        </div>
      </div>

      <div class="row ">
        <div class="col-sm-1 col-0"></div>
        <label class="col-10 col-form-label">Información de la instalación:</label>
      </div>

      <div class="row ">
        <div class="row ml-1">
          <div class="col-sm-1 col-0"></div>
          <label for="inputPassword" class="col-sm-2 col-form-label ">Razón Social:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="informacionInstalacionMaduracion" disabled>
          </div>
        </div>
        <div class="row mt-1 ml-1">
          <div class="col-sm-1 col-0 "></div>
          <label for="inputPassword" class="col-sm-2 col-form-label">Domicilio:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="informacionInstalacionMaduracion" disabled>
          </div>
        </div>
        <div class="row mt-1 ml-1 mb-2">
          <div class="col-sm-1 col-0"></div>
          <label for="inputPassword" class="col-sm-2 col-form-label mt-1">Instalación:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="informacionInstalacionMaduracion" disabled>
            <input type="text" class="form-control mt-1" name="informacionInstalacionMaduracion" disabled>
          </div>
        </div>
      </div>

      <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4 ">
        <p class="font-weight-bold">LA EMPRESA A TRAVÉS DE SU REPRESENTANTE LEGAL Y AUTORIZADO SOLICITA EL SERVICIO DE:</p>
      </div>

      <div class="mb-3 border border-5 rounded-4 bg-light p-2">
        <div class="row">
          <p class="font-weight-bold col-sm-5 col-12 mt-2">INGRESO DE PRODUCTO A MADURACIÓN</p>
          <div class="col-sm-3 col-0"></div>
          <div class=" col-sm-2 col-6 text-center">
            <button class="btn btn-primary mt-2 mb-2" type="button" onclick="buscarLoteMaduracion('lotesRegistradosMaduracion');"><i class="bi bi-search"></i> Buscar lote</button>
          </div>
          <div class=" col-sm-2 col-6" id="botonRegistrarLote">
            <button class="btn btn-primary mt-2 mb-2" type="button" onclick="buscarLoteMaduracion('noApareceLoteIngresoMaduracion');"><i class="bi bi-pencil-square"></i> Registrar lote</button>
          </div>
        </div>
      </div>

      <div class="row" id="lotesAgregadosIngresoMaduracion"></div>

      <div class="mb-3 border border-5 rounded-4 bg-light p-2">
        <div class="row">
          <p class="font-weight-bold col-sm-5 col-12 mt-2">LIBERACIÓN DE PRODUCTO EN MADURACIÓN</p>
          <div class="col-sm-3 col-0"></div>
          <div class=" col-sm-2 col-6 text-center">
            <button class="btn btn-primary mt-2 mb-2" type="button" onclick="buscarLoteMaduracion('lotesRegistradosLiberacionMaduracion');"><i class="bi bi-search"></i> Buscar lote</button>
          </div>
          <div class=" col-sm-2 col-6" id="botonRegistrarLote">
            <button class="btn btn-primary mt-2 mb-2" type="button" onclick="buscarLoteMaduracion('noApareceLoteLiberacionMaduracion');"><i class="bi bi-pencil-square"></i> Registrar lote</button>
          </div>
        </div>
      </div>

      <div class="row" id="lotesAgregadosLiberacionMaduracion"></div>

      <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4 ">
        <p class="font-weight-bold">INFORMACIÓN ADICIONAL</p>
      </div>

      <div class="row mb-3">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <textarea class="form-control " id="informacionAdicionalMaduracion" rows="3" onkeyup="quitarMensajeValidacion(this)"></textarea>
          <label class="text-danger" style="display: none;">Ingrese el tipo de transporte</label>
        </div>
      </div>

      <div class="row mt-5 d-flex justify-content-center">
        <button class="btn btn-primary col-sm-2 col-10" type="button" onclick="generarSolicitudMaduracion();"><i class="bi bi-journal-plus"></i> Generar solicitud</button>
      </div>

    </div>

    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
      <div class="mt-3 mb-1 row ">
        <label for="inputPassword" class="col-sm-3 col-12 col-form-label d-md-flex justify-content-end">Buscar:</label>
        <div class="col-sm-7 mb-1 col-12">
          <form class="form-inline">
            <input class="form-control form-control-sm mr-3 w-75 mb-3" type="text" id="buscar" />
            <i class="fas fa-search" aria-hidden="true"></i>
          </form>
        </div>
      </div>
      <div class="table-responsive table-sm ">
        <table class="table align-middler text-center">
          <thead>
            <tr>
              <th scope="col">Folio</th>
              <th scope="col">Fecha</th>
              <th scope="col">Tipo</th>
              <th scope="col">Estado</th>
              <th scope="col">Más información</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>dato dato</td>
              <td>dato dato</td>
              <td>dato dato</td>
              <td>dato dato</td>
              <td><button type="button" class="btn"><i class="bi bi-card-text" onclick="mostrarModalInformacionSeguimientoMaduracion();"></i></button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>