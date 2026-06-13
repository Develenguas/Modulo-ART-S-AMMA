<div id="traslados">
  <script src="modulos/solicitudes/traslados/traslados.js"></script>

  <!-- Contenido del modal para ¿No aparece tu instalación? -->
  <div id="noInstalacion" style="display: none;">
    <p class="texto">Si no aparece tu instalación te pedimos nos envíes un mensaje al correo electrónico de <strong>inspeccion@amma.org.mx</strong> indicandonos tu número de control, la instalación que no se muestra y un número telefónico de contacto.</p>
  </div>

  <!-- Modal pequeño-->
  <div class="modal fade" id="modalMediano" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
      <div class="modal-content">
        <div class="modal-header ">
          <h1 class="modal-title fs-5 d-flex justify-content-center" id="tituloModal"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close""></button>
        </div>
        <div class=" modal-body" id="cuerpoModal">
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-primary" id="aceptarAgregarLote" onclick="verificarFormularioProcesoValidacion();" hidden><i class="bi bi-plus-circle"></i>Agregar lote</button>
          <button type="button" class="btn btn-primary" id="aceptarRegistrarLote" hidden onclick="verificarFormularioRegistrarLote();"><i class="bi bi-plus-circle"></i>Agregar lote</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="cerrarRegistrarLote" hidden><i class="bi bi-x-circle"></i>Cerrar</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="cerrarAgregarLote" data-bs-toggle="modal" data-bs-target="#myModal" hidden><i class="bi bi-x-circle"></i>Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal mediano -->
  <div class="modal fade" id="modalGrande" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header ">
          <h1 class="modal-title fs-5 d-flex justify-content-center" id="tituloModalGrande"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close""></button>
        </div>
        <div class=" modal-body" id="cuerpoModalGrande">
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-primary" id="confirmarSolicitud" onclick="confirmarSolicitud();"><i class="bi bi-plus-circle"></i>Confirmar</button>
          <button type="button" class="btn btn-danger" id="cancelarSolicitud" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i>Cancelar</button>
          <button type="button" class="btn btn-danger" id="cerrar" data-bs-dismiss="modal" hidden><i class="bi bi-x-circle"></i>Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Contenido para el modal Confirmar la información -->
  <div style="display: none;">
    <div id="contenidoConfirmarInformacion">
      <div class="bg-warning-subtle bg-success-subtle border border-primary-subtle rounded-3 ">
        Nota: Para traslados documentales (TSD) deberá esperar que la solicitud se encuentre autorizada antes de realizar el movimiento del producto, de no ser así el traslado se cobrara como si se tratara de un traslado por supervisión en sitio (TSS).
      </div>
      <div class="row mt-3">
        <div class="col-sm-2 col-0"></div>
        <label class="col-sm-3 col-12">TIPO DE TRASLADO:</label>
        <label class="col-sm-6 col-12">dato dato dato</label>
      </div>

      <div class="row">
        <div class="col-sm-2 col-0"></div>
        <label class="col-sm-3 col-12">MODALIDAD DEL TRASLADO:</label>
        <label class="col-sm-6 col-12">dato dato dato</label>
      </div>

      <div class="row mt-2">
        <div class="card">
          <div class="card-body">
            <div class="row text-center">
              <div class="col-sm-5 col-12">
                <label class="text-center col-12"> <i class="bi bi-geo-alt"></i> (C9999)</label>
                <label class="col-12">dato dato dato</label>
                <hr class="border border-primary border-1 opacity-75 col-12">
                <label class="col-12 text-center text-primary">INSTALACIÓN DE SALIDA</label>
              </div>
              <div class="col-sm-2 text-center mt-3 mb-3">
                <i class="bi bi-arrow-right-circle-fill fs-3"></i>
              </div>
              <div class="col-sm-5 col-12">
                <label class="text-center col-12"> <i class="bi bi-geo-alt"></i> (C9999)</label>
                <label class="col-12">dato dato dato</label>
                <hr class="border border-primary border-1 opacity-75 col-12">
                <label class="col-12 text-center text-primary">INSTALACIÓN DE DESTINO</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><strong><i class="bi bi-archive"></i> Lotes seleccionados para traslado:</strong></h5><br>
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
    <div id="contenidoProcesoValidacion">
      <div class="p-0 bg-warning-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4">
        <p>
          <strong>Nota infromativa</strong> <br>
          Los litros mostrados como disponibles pueden diferir de los litros reales que se encuentran físicamente en la instalación, esto es debido a que pueden existir operaciones pendientes por concluir.
        </p>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><strong><i class="bi bi-archive"></i> INFORMACIÓN DEL LOTE A GRANEL</strong></h5><br>
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
            <div class="row">
              <label class="mt-3 col-sm-5 fw-normal"> <i class="bi bi-caret-right-fill"></i> Analisis Fisicoquímicos:</label>
              <label class="mt-3 col-sm-7 fw-normal">SIN ANÁLISIS FISICOQUÌMICOS</label>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><strong><i class="bi bi-clipboard-check"></i> CERTIFICADO NOM VIGENTE</strong></h5><br>
            <div class="row">
              <p class="text-danger">*Para traslados a una instalación propiedad de otra empresa y traslados externos hacia empresas no registradas en AMMA es obligatorio contar con el Número de certificado NOM vigente</p>
            </div>
            <div class="row">
              <label for="inputPassword" class="col-sm-3 col-12 col-form-label ">Número:</label>
              <input class="form-control form-control-sm  w-75 col-sm-9 col-12" type="text" />
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><strong><i class="bi bi-clipboard2-pulse"></i> DATOS DEL TRASLADO</strong></h5><br>
            <div class="row">
              <p class="text-danger">*Verifica la cantidad de litros a trasladar, ten en cuenta si aun falta realizar algún muestreo o alguna otra operación al lote.</p>
            </div>
            <form id="formularioProcesoValidacion">
              <div class="row">
                <label for="inputPassword" class="col-sm-4 col-12 col-form-label">Litros a trasladar:</label>
                <input class="form-control form-control-sm  w-75 col-sm-3 col-12" type="number" value="6" min="6" id="litrosProcesoValidacion" onkeyup="agregarLitrosMinimos(this);" />
                <label for="inputPassword" class="col-sm-5 col-6 col-form-label text-blue">(90 L.) Disponibles</label>
              </div>
              <div class="row">
                <label for="inputPassword" class="col-sm-5 col-12 col-form-label">N° contenedores:</label>
                <input class="form-control form-control-sm  w-75 col-sm-7 col-12" type="number" id="contenedoresProcesoValidacion" min="1" onchange="quitarMensajeValidacion(this)" onkeyup="agregarLitrosMinimos(this);" />
                <label class="text-start text-danger" style="display: none;">Ingresa el número de contenedores en los que se transportara el producto</label>
              </div>
              <div class="row">
                <label for="inputPassword" class="col-sm-5 col-12 col-form-label">Capacidad:</label>
                <input class="form-control form-control-sm  w-75 col-sm-7 col-12" type="number" id="capacidadProcesoValidacion" min="1" onchange="quitarMensajeValidacion(this)" onkeyup="agregarLitrosMinimos(this);" />
                <label class="text-start text-danger" style="display: none;">Ingresa la capacidad de los contenedores</label>
              </div>
              <div class="row">
                <label for="inputPassword" class="col-sm-5 col-12 col-form-label">Material:</label>
                <select class="form-select col-sm-7 col-12" aria-label="Default select example" id="materialProcesoValidacion" onchange="quitarMensajeValidacion(this)">
                  <option value="0" selected disabled>Seleccione una opción</option>
                  <option value="1">Vidrio</option>
                  <option value="2">Madera</option>
                </select>
                <label class="text-start text-danger" style="display: none;">Ingresa el material de los contenedores</label>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contenido del modal para Registrar lote -->
  <div id="resgistrarLote" style="display: none;">
    <div>
      <div class="row mb-4">
        <div class="col-12">
          Si el lote que desea agregar aun no ha sido reportado al inspector puede hacer uso de la opción <span class="text-primary">Registrar lote</span>, esta opción solo puede ser utilizada para lotes que no hayan sido reportados y requieran realizar la actividad de forma inmediata.
        </div>
      </div>
      <div class="row mb-4 justify-content-center">
        <div class="col-md-8 ">
          <button class="btn btn-primary" type="button" onclick="agregarLote('modalMediano');">Registrar lote</button>
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

  <!-- Modal-->
  <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
            <div class="col-sm-3 col-12  d-md-flex justify-content-end">
              <a class="btn btn-link" type="button" onclick="registrarLote()">
                ¿No aparece tu lote?
              </a>
            </div>
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
                  <th scope="col">No. de análisis de laboratorio (en cumplimiento con la NOM-070)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" data-bs-toggle="modal" data-bs-target="#modalMediano" onchange="procesoValidacion();"></td>
                  <td>Jacobsaaaaaaaaaaaaaaaaa</td>
                  <td>Thornton</td>
                  <td>@faasddddddddt</td>
                  <td>2sadddddddddd</td>
                  <td>Jacobsdsds</td>
                  <td>Thorntonsddd</td>
                  <td>@fatsddddddddsssssssssssssssssssss</td>
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

  <!-- formulario para registrar lote -->
  <div style="display: none;">
    <div id="contenidoResgistrarLote">
      <form id="formularioRegistrarLote">
        <div class="row">
          <div class="col-sm-4 col-12">
            <label for="inputPassword" class=" col-form-label">Nombre del lote:</label>
          </div>
          <div class="col-sm-8 col-12">
            <input class="form-control form-control-sm" type="text" id="nombreLoteRegistrarLote" onkeyup="quitarMensajeValidacion(this)" />
            <label class="text-danger" style="display: none;">Debes rellenar este campo</label>
          </div>
          <div class="col-sm-4 col-12 ">
            <label for="inputPassword" class=" col-form-label">Especie(s):</label>
          </div>
          <div class="col-sm-8 col-12 mt-sm-2">
            <select class="form-select " aria-label="Default select example" id="especieRegistrarLote" onchange="quitarMensajeValidacion(this)">
              <option value="0" selected disabled>Seleccione una opción</option>
              <option value="1">MAGUEY BELATÓ</option>
              <option value="2">MAGUEY DE RAYO</option>
              <option value="3">MAGUEY ZACAMETL</option>
            </select>
            <label class="text-start text-danger" style="display: none;">Debes seleccionar una opción</label>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-12">
            <label for="inputPassword" class=" col-form-label">Categoría:</label>
          </div>
          <div class="col-sm-8 col-12 mt-sm-2">
            <select class="form-select " id="categoriaRegistrarLote" onchange="quitarMensajeValidacion(this)">
              <option value="0" selected disabled>Seleccione una opción</option>
              <option value="1">Mezcal</option>
              <option value="2">Mezcal artesanal</option>
              <option value="3">Mezcal ancestral</option>
            </select>
            <label class="text-start text-danger" style="display: none;">Debes seleccionar una opción</label>
          </div>
          <div class="col-sm-4 col-12 ">
            <label for="inputPassword" class="col-form-label d-md-flex">Clase:</label>
          </div>
          <div class="col-sm-8 col-12 mt-sm-2">
            <select class="form-select " aria-label="Default select example" id="claseRegistrarLote" onchange="elegirClaseRegistrarLoteTraslados(this);quitarMensajeValidacion(this)">
              <option value="0" selected disabled>Seleccione una opción</option>
              <option value="1">Blanco o joven </option>
              <option value="2">Reposado</option>
              <option value="3">Añejo</option>
              <option value="4">Abocado con</option>
              <option value="5">Destilado con</option>
            </select>
            <label class="text-start text-danger" style="display: none;">Debes seleccionar una opción</label>
          </div>
        </div>
        <div id="divIngredientesRegistrarLoteTraslados" style="display: none;">
          <div class="row mt-3">
            <div class="col-sm-4 col-12">
              <label for="inputPassword" class=" col-form-label">Ingredientes:</label>
            </div>
            <div class="col-sm-8 col-12">
              <input class="form-control form-control-sm " type="text" id="ingredientesRegistrarLoteTraslados" onkeyup="quitarMensajeValidacion(this)" />
              <label class="text-start text-danger" style="display: none;">Ingrese el ingrediente</label>
            </div>
          </div>
        </div>
        <div class=" mt-3 row">
          <div class="col-sm-5 col-12">
            <label for="inputPassword" class=" col-form-label">Número de análisis fisicoquímico:</label>
          </div>
          <div class="col-sm-7 col-12">
            <input class="form-control form-control-sm " type="text" id="numeroAnalisisRegistrarLote" onkeyup="quitarMensajeValidacion(this)" />
            <label class="text-start text-danger" style="display: none;">Debes rellenar este campo</label>
          </div>
          <div class="col-sm-5 col-12">
            <label for="inputPassword" class="col-form-label">Análisis fisicoquímico: <span class="text-danger">(Opcional)</span></label>
          </div>
          <div class="col-sm-7 col-12">
            <input class="form-control" type="file" id="formFile">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5 col-12">
            <label for="inputPassword" class=" col-form-label">Número de certificado NOM vigente:</label>
          </div>
          <div class="col-sm-7 col-12">
            <input class="form-control form-control-sm" type="text" id="numeroCertificadoRegistrarLote" onkeyup="quitarMensajeValidacion(this)" />
            <label class="text-start text-danger" style="display: none;">Debes rellenar este campo</label>
          </div>
          <div class="col-sm-5 col-12">
            <label for="inputPassword" class="col-form-label">Informe de inspección de producto: <p class="text-danger">(Opcional)</p></label>
          </div>
          <div class="col-sm-7 col-12">
            <input class="form-control" type="file" id="formFile">
          </div>
        </div>
        <div class=" row">
          <div class="col-sm-5 col-12">
            <label for="inputPassword" class="col-form-label">Volumen a trasladar:</label>
          </div>
          <div class="col-sm-7 col-12">
            <input class="form-control form-control-sm" type="number" value="6" min="6" id="volumenRegistrarLote" onchange="quitarMensajeValidacion(this)" onkeyup="quitarMensajeValidacion(this)" />
            <label class="text-start text-danger" style="display: none;">El volumen a trasladar tiene que ser mayor a 6</ñ>
          </div>
          <div class="col-sm-5 col-12">
            <label for="inputPassword" class="col-form-label text-center">Grado alcohólico:</label>
          </div>
          <div class="col-sm-7 col-12">
            <input class="form-control form-control-sm" type="number" min="0" id="gradoRegistrarLote" onchange="quitarMensajeValidacion(this)" onkeyup="quitarMensajeValidacion(this)" />
            <label class="text-start text-danger" style="display: none;">Debes rellenar este campo</label>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5 col-12">
            <label for="inputPassword" class="col-form-label">N° de contenedores:</label>
          </div>
          <div class="col-sm-7 col-12">
            <input class="form-control form-control-sm" type="number" min="0" id="contenedoresRegistrarLote" onchange="quitarMensajeValidacion(this)" onkeyup="quitarMensajeValidacion(this)" />
            <label class="text-start text-danger" style="display: none;">Debes rellenar este campo</label>
          </div>
          <div class="col-sm-5 col-12">
            <label for="inputPassword" class="col-form-label d-md-flex">Capacidad:</label>
          </div>
          <div class="col-sm-7 col-12">
            <input class="form-control form-control-sm" type="text" id="capacidadRegistrarLote" onkeyup="quitarMensajeValidacion(this)" />
            <label class="text-start text-danger" style="display: none;">Debes rellenar este campo</label>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5 col-12">
            <label for="inputPassword" class="col-form-label d-md-flex">Material:</label>
          </div>
          <div class="col-sm-7 col-12">
            <select class="form-select" aria-label="Default select example" id="materialRegistrarLote" onchange="quitarMensajeValidacion(this)">
              <option value="0" selected disabled>Seleccione una opción</option>
              <option value="1">Vidrio</option>
              <option value="2">Madera</option>
            </select>
            <label class="text-start text-danger" style="display: none;">Debes seleccionar un archivo</label>
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
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Traslados Recibidos</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Traslados Enviados</button>
    </li>
  </ul>
  <hr class="border border-Secondary border-1 opacity-75">
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

      <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4">
        <p class="font-weight-bold"> TIPO DE TRASLADO A REALIZAR</p>
        <p>*Selecciona el tipo de traslado a realizar, ten en cuenta que los traslados documentales no tienen costo, para mayor información da clic sobre el icono <img src="dist/img/pregunta.png" alt="No está disponible"> de cada opción.
        </p>
      </div>

      <div class="row mb-3 mt-3">
        <div class="col-0 col-md-1"></div>
        <div class="col-md-5 col-12">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="TSS" onclick="eventoRadio(this)">
            <label class="form-check-label" for="inlineRadio1">TRASLADO POR SUPERVISIÓN EN SITIO (TSS) </label>
            <span class="d-inline-block" tabindex="0">
              <button class="btn btn-outline-light" type="button" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?"><img src="dist/img/pregunta.png" alt="No está disponible"></button>
            </span>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radioTSD" value="TSD" checked onclick="eventoRadio(this)">
            <label class="form-check-label" for="radioTSD">TRASLADO POR SUPERVISIÓN DOCUMENTAL (TSD) </label> <span class="d-inline-block" tabindex="0">
              <button class="btn btn-outline-light" type="button" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?"><img src="dist/img/pregunta.png" alt="No está disponible"></button>
            </span>
          </div>
        </div>
        <div class="col-0 col-md-1 "></div>
      </div>
      <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4">
        <p class="font-weight-bold">INFORMACIÓN DEL SOLICITANTE</p>
        <p>
          *Para Traslados por supervisión documental no aplica el tipo de servicio "Exclusivo."<br>
          *Para cambiar la fecha propuesta solo de un clic sobre el campo donde aparece la fecha.
        </p>
      </div>

      <div class="row mb-4 text center">
        <div class="col-0 col-sm-1"></div>
        <label for="" class="form-label col-sm-2 col-12">Tipo de servicio:</label>
        <div class="col-sm-3 col-12 text-center">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipoServicio" id="servicioNormalTraslados" value="normal" disabled checked onchange="fechaPropuestaTraslados();">
            <label class="form-check-label" for="servicioNormalTraslados">Normal</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipoServicio" id="servicioExclusivoTraslados" value="exclusivo" disabled onchange="fechaPropuestaTraslados();">
            <label class="form-check-label" for="servicioExclusivoTraslados">Exclusivo</label>
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
          <input class="form-control " type="date" id="fechaPropuestaTraslado" />
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

      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-3 text-sm-center col-form-label">Responsable de traslado:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="tipoServicio" id="responsableTraslado" onkeyup="quitarMensajeValidacion(this)" disabled>
          <label class="text-danger" style="display: none;">Ingrese un responsable de traslado</label>
        </div>
        <label for="inputPassword" class="col-sm-2 col-form-label" name="responsablePago" style="display: none;">Responsable de pago:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="responsablePago" name="responsablePago" style="display: none;" onkeyup="quitarMensajeValidacion(this)" disabled>
          <label class="text-danger" style="display: none;">Ingrese un responsable de pago</label>
        </div>
      </div>

      <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4">
        <p class="font-weight-bold"> LA EMPRESA A TRAVÉS DE SU REPRESENTANTE LEGAL Y AUTORIZADO SOLICITA EL SERVICIO DE:</p>
      </div>

      <div class="row mb-3">
        <div class="col-sm-4 text-center col-12">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="opcionesRadioServicios" id="radioServicioNormal" value="misma" onclick="solicitarServicio(this);" checked />
            <label class="form-check-label" for="radioServicioNormal">TRASLADO DE PRODUCTO <br>
              a otra instalación <b>de la misma</b> empresa</label>
          </div>
        </div>
        <div class="col-sm-4 text-center col-12">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="opcionesRadioServicios" id="radioServicioExclusivo" value="otra" onclick="solicitarServicio(this);" />
            <label class="form-check-label" for="radioServicioExclusivo">TRASLADO DE PRODUCTO <br>
              a una instalación propiedad <b>de otra</b> empresa</label>
          </div>
        </div>
        <div class="col-sm-4 text-center col-12">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="opcionesRadioServicios" id="radioTrasladoExterno" value="noRegistrada" onclick="solicitarServicio(this);" />
            <label class="form-check-label" for="radioTrasladoExterno">TRASLADO EXTERNO <br>
              hacia empresa no registrada en AMMA</label>
          </div>
        </div>
      </div>

      <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4 ">
        <p class="font-weight-bold"> SALIDA DEL PRODUCTO (INSTALACIÓN DONDE SE ENCUENTRA FÍSICAMENTE EL PRODUCTO)</p>
      </div>

      <div class="row mb-3">
        <div class="col-sm-1 col-0"></div>
        <label class="col-sm-2 col-form-label">Tipo de instalación:</label>
        <div class="col-sm-4">
          <select class="form-select" aria-label="Default select example" name="validacionBuscarLoteSalida" id="selectTipoInstalacionSalida" onchange="eventoSelect(this);">
            <option value="0" selected disabled>Seleccione una opción</option>
            <option value="1">GRANEL DE FABRICA</option>
            <option value="2">GRANEL DE ENVASADO</option>
            <option value="3">BODEGA DE GRANELES</option>
            <option value="4">ENVASADORA (PRODUCTO TERMINADO)</option>
          </select>
          <label class="text-start text-danger" name="errorBuscarLote" id="errorselectTipoInstalacionSalida" style="display: none;">Debes seleccionar una opción</label>
        </div>

        <div class="col-sm-4">
          <a class="btn btn-link" type="button" onclick="mostrarModalNoInstalacion()">
            ¿No aparece tu instalación?
          </a>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-1 col-0"></div>
        <label class="col-sm-2 col-form-label">Instalación:</label>
        <div class="col-sm-8">
          <select class="form-select" aria-label="Default select example" name="validacionBuscarLoteSalida" id="selectInstalacionSalida" disabled onchange="eventoSPinstalacion(this.id);">
            <option value="0" selected disabled>Seleccione una opción</option>
            <option value="1">1</option>
          </select>
          <label class="text-start text-danger" name="errorBuscarLote" id="errorselectInstalacionSalida" style="display: none;">Debes seleccionar una opción</label>
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
            <input type="text" class="form-control" name="SPinformacionInstalacion" id="SPRazonSocial" disabled>
          </div>
        </div>
        <div class="row mt-1 ml-1">
          <div class="col-sm-1 col-0 "></div>
          <label for="inputPassword" class="col-sm-2 col-form-label">Domicilio:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="SPinformacionInstalacion" id="SPDomicilio" disabled>
          </div>
        </div>
        <div class="row mt-1 ml-1 mb-2">
          <div class="col-sm-1 col-0"></div>
          <label for="inputPassword" class="col-sm-2 col-form-label mt-1">Instalación:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="SPinformacionInstalacion" id="SPInstalacion1" disabled>
            <input type="text" class="form-control mt-1" name="SPinformacionInstalacion" id="SPInstalacion2" disabled>
          </div>
        </div>
      </div>

      <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4 ">
        <p class="font-weight-bold">DESTINO DEL PRODUCTO (INSTALACIÓN A DONDE LLEGARÁ EL PRODUCTO)</p>
      </div>

      <form id="formularioDestinoProducto">
        <div id="destinoProducto">
          <div class="row mb-3">
            <div class="col-sm-1 col-0"></div>
            <label class="col-sm-2 col-form-label">Número de control:</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="numeroControl" disabled>
            </div>
            <label class="col-sm-2 col-form-label">Tipo de instalación:</label>
            <div class="col-sm-4">
              <select class="form-select" aria-label="Default select example" name="validacionBuscarLote" id="selectTipoInstalacionDestino" disabled onchange="eventoDPtipoInstalacion(this);">
                <option value="0" selected disabled>Seleccione una opción</option>
                <option value="1">GRANEL DE FABRICA</option>
                <option value="2">GRANEL DE ENVASADO</option>
                <option value="3">BODEGA DE GRANELES</option>
                <option value="4">BODEGA DE PRODUCTO TERMINADO</option>
              </select>
              <label class="text-start text-danger" name="errorBuscarLote" id="errorselectTipoInstalacionDestino" style="display: none;">Debes seleccionar una opción</label>
            </div>
            <div class="col-sm-1 col-0"></div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-1 col-0"></div>
            <label class="col-sm-2 col-form-label">Instalación:</label>
            <div class="col-sm-8">
              <select class="form-select" aria-label="Default select example" name="validacionBuscarLote" disabled id="selectInstalacionDestino" onchange="eventoDPinstalacion(this.id);">
                <option value="0" selected disabled>Seleccione una opción</option>
                <option value="1">1</option>
              </select>
              <label class="text-start text-danger" name="errorBuscarLote" id="errorselectInstalacionDestino" style="display: none;">Debes seleccionar una opción</label>
            </div>
          </div>

          <div class="row ">
            <div class="col-sm-1 col-0"></div>
            <label class="col-10 col-form-label">Información de la instalación:</label>
          </div>

          <div class="container-sm row ">
            <div class="row ">
              <div class="col-sm-1 col-0"></div>
              <label for="inputPassword" class="col-sm-2 col-form-label">Razón Social:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="DPinformacionInstalacion" id="inputPassword" disabled>
              </div>
            </div>
            <div class="row mt-1">
              <div class="col-sm-1 col-0 "></div>
              <label for="inputPassword" class="col-sm-2 col-form-label">Domicilio:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="DPinformacionInstalacion" id="inputPassword" disabled>
              </div>
            </div>
            <div class="row mt-1 mb-2">
              <div class="col-sm-1 col-0"></div>
              <label for="inputPassword" class="col-sm-2 col-form-label mt-1">Instalación:</label>
              <div class="col-sm-7 ">
                <input type="text" class="form-control" name="DPinformacionInstalacion" id="inputPassword" disabled>
                <input type="text" class="form-control mt-1" name="DPinformacionInstalacion" id="inputPassword" disabled>
              </div>
            </div>
          </div>
        </div>
      </form>

      <div id="trasladoExterno" style="display: none;">
        <div class="row mb-3">
          <div class="col-sm-1 col-0"></div>
          <label class="col-sm-3 col-form-label">Nombre o razón social de la empresa:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="nombreEmpresa" onkeyup="quitarMensajeValidacion(this)">
            <label class="text-danger" style="display: none;">Debes rellenar este campo</label>
          </div>
          <div class="col-sm-1 col-0"></div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-1 col-0"></div>
          <label class="col-sm-3 col-form-label">Domicilio de la instalción:</label>
          <div class="col-sm-7">
            <textarea class="form-control" id="domicilioInstalacion" rows="3" onkeyup="quitarMensajeValidacion(this)"></textarea>
            <label class="text-danger" style="display: none;">Debes rellenar este campo</label>
          </div>
          <div class="col-sm-1 col-0"></div>
        </div>
      </div>

      <div class="mb-3 border border-5 rounded-4 bg-light p-2">
        <div class="row">
          <p class="font-weight-bold col-sm-5 col-12 mt-2">
            CARACTERÍSTICAS DEL PRODUCTO
          </p>
          <div class="col-sm-3 col-0"></div>
          <div class=" col-sm-2 col-6 text-center">
            <button class="btn btn-primary mt-2 mb-2" type="button" onclick="agregarLote('myModal');"><i class="bi bi-search"></i> Buscar lote</button>
          </div>
          <div class=" col-sm-2 col-6" id="botonRegistrarLote">
            <button class="btn btn-primary mt-2 mb-2" type="button" onclick="registrarLote()"><i class="bi bi-pencil-square"></i> Registrar lote</button>
          </div>
        </div>
      </div>

      <div class="row" id="lotesAgregados"></div>

      <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4 ">
        <p class="font-weight-bold">TIPO DE TRANSPORTE</p>
      </div>

      <div class="row mb-3">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <textarea class="form-control " id="tipoTransporte" rows="3" onkeyup="quitarMensajeValidacion(this)"></textarea>
          <label class="text-danger" style="display: none;">Ingrese el tipo de transporte</label>
        </div>
      </div>

      <div class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-4 ">
        <p class="font-weight-bold"> ACTIVIDADES POSTERIORES A LA RECEPCIÓN DEL PRODUCTO/OBSERVACIONES</p>
      </div>

      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <textarea class="form-control " id="actividadesPosteriores" rows="3" onkeyup="quitarMensajeValidacion(this)"></textarea>
          <label class="text-danger" style="display: none;">Ingrese las actividades posteriores a la recepción del producto</label>
        </div>
      </div>

      <div class="row mt-5 d-flex justify-content-center">
        <button class="btn btn-primary col-sm-2 col-10" type="button" onclick="verificarTrasladosProductos();"><i class="bi bi-journal-plus"></i> Generar solicitud</button>
      </div>

    </div>

    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
      <div class="row mb-3">
        <div class="col-sm-12 text-center">
          <h5 class="m-0 font-weight-bold">SOLICITUDES DE TRASLADO RECIBIDAS</h5>
        </div>
      </div>
      <div class="row mb-3">
        <div class="p-1 bg-warning-subtle border rounded-3 text-center">
          <p class="small">NOTA: UNA VEZ AUTORIZADA LA SOLICITUD DE TRASLADO SE TIENE 30 DÍAS PARA ACEPTAR O RECHAZAR LA RECEPCIÓN DEL TRASLADO DE LO CONTRARIO LA SOLICITUD SERA CANCELADA.</p>
        </div>
      </div>
      <div class="row mb-1">
        <div class="col-sm-6 ">
          <button type="button" class="btn btn-lg" data-bs-toggle="tooltip" data-bs-title="Actualizar datos de la tabla"><i class="bi bi-arrow-clockwise"></i></button>
        </div>
      </div>
      <div class="table-responsive table-sm ">
        <table class="table align-middler text-center" id="trasladosRecibidas">
          <thead>
            <tr>
              <th scope="col ">Folio de ingreso</th>
              <th scope="col">Solicitud</th>
              <th scope="col">Envía</th>
              <th scope="col">Recibe</th>
              <th scope="col">Tipo de solicitud</th>
              <th scope="col">Tipo de servicio</th>
              <th scope="col">Fecha de registro</th>
              <th scope="col">Estatus</th>
              <th scope="col">Plan de evaluación</th>
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
              <td>dato dato</td>
              <td>dato dato</td>
              <td><button type="button" class="btn" onclick="mostrarInformacionTrasladosRecibidos();"><i class="bi bi-card-text"></i></button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
      <div class="col-sm-12 text-center">
        <h5 class="m-0 font-weight-bold">SOLICITUDES DE TRASLADO REALIZADAS</h5>
      </div>
      <div class="row mb-1">
        <div class="col-sm-6 ">
          <button type="button" class="btn btn-lg" data-bs-toggle="tooltip" data-bs-title="Actualizar datos de la tabla"><i class="bi bi-arrow-clockwise"></i></button>
        </div>
      </div>
      <div class="table-responsive  table-sm ">
        <table class="table align-middler text-center" id="trasladosRealizadas">
          <caption>
          </caption>
          <thead class="table-light ">
            <tr>
              <th scope="col">Folio de ingreso</th>
              <th scope="col">Solicitud</th>
              <th scope="col">Envía</th>
              <th scope="col">Recibe</th>
              <th scope="col">Tipo de solicitud</th>
              <th scope="col">Tipo de servicio</th>
              <th scope="col">Fecha de registro</th>
              <th scope="col">Estatus</th>
              <th scope="col">Plan de evaluación</th>
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
              <td>dato dato</td>
              <td>dato dato</td>
              <td><button type="button" class="btn" onclick="mostrarInformacionTrasladosEnviados();"><i class="bi bi-card-text"></i></button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>