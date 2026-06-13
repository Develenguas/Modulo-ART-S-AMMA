<div id="impresionDeHologramas">
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
      <form class="container-fluid text-sm-start" id="seleccionTipo">
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label"
            >Tipo</label
          >
          <div class="col-sm-4">
            <select
              class="form-select"
              aria-label="Default select example"
              onchange="tipoImpresionHolograma()"
              id="selectTipo"
            >
              <option selected disabled>Seleccionar</option>
              <option value="Mezcal">Mezcal</option>
              <option value="Bebidas con Mezcal">Bebidas con Mezcal</option>
            </select>
          </div>
        </div>
      </form>
      <div
        class="container-fluid text-sm-start"
        id="cuerpoSolicitud"
        style="display: none"
      >
        <form id="formularioHolograma">
          <div>
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label"
                >Marca</label
              >
              <div class="col-sm-4">
                <select
                  class="form-select"
                  aria-label="Default select example"
                  id="marca"
                  onclick="eliminarMensajesErrorImpresionHolograma(this); "
                >
                  <option selected disabled value="">Seleccionar</option>
                  <option value="OAXACA">OAXACA</option>
                </select>
                <label
                  class="text-start text-danger"
                  id="errorMarca"
                  style="display: none"
                  >Debes seleccionar una opción</label
                >
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label"
                >Existencia actual:</label
              >
              <label
                for="inputPassword"
                class="col-sm-2 col-form-label"
                id="existenciaActual"
                >500</label
              >
              <div
                for="inputPassword"
                class="col-sm-2 col-form-label text-danger"
              >
                [QUINIENTOS]
              </div>
            </div>
            <div id="cuerpoConMezcal">
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"
                  >Estado</label
                >
                <div class="col-sm-4">
                  <select
                    class="form-select"
                    aria-label="Default select example"
                    id="estado"
                    onclick="eliminarMensajesErrorImpresionHolograma(this); "
                  >
                    <option selected disabled value="">Seleccionar</option>
                    <option value="OAXACA">OAXACA</option>
                    <option value="GUERRERO">GUERRERO</option>
                    <option value="DURANGO">DURANGO</option>
                    <option value="GUANAJUATO">GUANAJUATO</option>
                    <option value="MICHOACAN">MICHOACAN</option>
                    <option value="SAN LUIS POTOSI">SAN LUIS POTOSI</option>
                    <option value="ZACATECAS">ZACATECAS</option>
                    <option value="TAMAULIPAS">TAMAULIPAS</option>
                    <option value="PUEBLA">PUEBLA</option>
                  </select>
                  <label
                    class="text-start text-danger"
                    id="errorEstado"
                    style="display: none"
                    >Debes seleccionar una opción</label
                  >
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"
                  >Categoria</label
                >
                <div class="col-sm-4">
                  <select
                    class="form-select"
                    aria-label="Default select example"
                    id="categoria"
                    onclick="eliminarMensajesErrorImpresionHolograma(this); "
                  >
                    <option selected disabled value="">Seleccionar</option>
                    <option value="M. ARTESANAL">M. Artesanal</option>
                    <option value="MEZCAL">Mezcal</option>
                    <option value="M. ANCESTRAL">M. Ancestral</option>
                  </select>
                  <label
                    class="text-start text-danger"
                    id="errorCategoria"
                    style="display: none"
                    >Debes seleccionar una opción</label
                  >
                </div>
              </div>
              <p
                class="small text-start p-0 bg-warning-subtle border rounded-3 mb-3 p-2"
              >
                Por favor revise muy bien la información correspondiente al
                Estado Productor y la Categoria de Mezcal producido, ya que una
                vez impresos los hologramas no se realizan correcciones.
              </p>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Cantidad:</label>
              <div class="col-sm-4">
                <input
                  class="form-control"
                  type="text"
                  aria-label="default input example"
                  id="cantidadNumeros"
                  onkeyup="mostrarNumerosEnLetrasImpresionHolograma(); eliminarMensajesErrorImpresionHolograma(this);"
                />
                <label
                  class="text-start text-danger"
                  id="errorCantidad"
                  style="display: none"
                  >Debes agregar una cantidad</label
                >
              </div>
              <label class="col-sm-2 col-form-label">Importe:</label>
              <label class="col-sm-2 col-form-label text-success" id="importe"
                >$0.00</label
              >
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">En letra:</label>
              <div class="col-sm-10">
                <input
                  class="form-control"
                  type="text"
                  aria-label="default input example"
                  disabled
                  id="cantidadLetras"
                />
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Urgente:</label>
              <div class="form-check col-sm-2">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="urgente"
                  value="urgente"
                  onClick="radioUrgenteImpresionHolograma();"
                />
                <label class="form-check-label" for="urgente"> Sí </label>
              </div>
              <div class="form-check col-sm-2">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="noUrgente"
                  checked
                  value="noUrgente"
                  onClick="radioUrgenteImpresionHolograma();"
                />
                <label class="form-check-label" for="noUrgente"> No </label>
              </div>
              <label class="col-sm-2 col-form-label">Precio:</label>
              <label class="col-sm-2 col-form-label text-success" id="precio"
                >$0.88</label
              >
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Observaciones:</label>
              <div class="col-sm-10">
                <textarea
                  class="form-control"
                  placeholder="Si es necesario agregue observaciones"
                  id="observaciones"
                ></textarea>
              </div>
            </div>
            <div class="text-center">
              <button
                type="button"
                class="btn btn-primary"
                onClick="validarCarritoImpresionHolograma(); "
              >
                <i class="bi bi-cart-plus"></i> Agregar al carrito de pedido
              </button>
            </div>
          </div>
        </form>
        <div id="listaHologramasSolicitar" style="display: none">
          <div class="text-center mt-4">
            <h4>Lista de hologramas a solicitar</h4>
          </div>
          <div class="table-responsive">
            <table class="table" id="tablaSolicitudHolograma">
              <thead>
                <tr>
                  <th scope="col">Marca</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Prioridad</th>
                  <th scope="col">Importe</th>
                  <th scope="col">Observaciones</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <!-- cuerpo de la tabla  -->
              </tbody>
            </table>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Total a pagar:</label>
            <label class="col-sm-2 col-form-label text-success" id="totalAPagar"
              >$0.00</label
            >
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label"
              >Formato de pago</label
            >
            <div class="col-sm-4">
              <select
                class="form-select"
                aria-label="Default select example"
                id="formatosDePago"
                onclick="mostrarMensajesDePrivacidadImpresionHolograma(this);
                checarTipoDePagoSolicitudHolograma();"
              >
                <option selected="selected" value="" disabled>
                  SELECCIONAR
                </option>
                <option value="1">EFECTIVO (EN OFICINA AMMA)</option>
                <option value="2">CHEQUE (EN OFICINA AMMA)</option>
                <option value="3">TRANSFERENCIA BANCARIA</option>
                <option value="4">DEPOSITO DE EFECTIVO (EN BANCO)</option>
                <option value="5">DEPOSITO DE CHEQUE (EN BANCO)</option>
              </select>
              <label
                class="text-start text-danger"
                id="errorFormatosDePago"
                style="display: none"
                >Debes seleccionar una opción</label
              >
            </div>
          </div>
          <div class="row" id="pagoConComprobante" style="display: none">
            <label for="formFile" class="form-label col-sm-2"
              >Comprobante:</label
            >
            <input
              id="file_comp"
              class="form-control col-sm-6 mt-2"
              type="file"
              id="formFile"
              accept=".pdf, .png, .jpg"
              title="Adjuntar comprobante [.pdf .jpg .png]"
              data-filename-placement="inside"
            />
            <label
              class="text-start text-danger"
              id="errorPagoConComprobante"
              style="display: none"
              >Debes seleccionar un archivo
            </label>
          </div>
        </div>
        <div id="procederConPago" style="display: none">
          <div class="row mt-2">
            <div
              class="col-md-9 d-flex justify-content-start align-items-center"
            >
              Antes de continuar debe leer y aceptar las politicas establecidas
              por AMMA aplicables a la impresión de Hologramas
            </div>
            <div
              class="col-md-2 d-flex justify-content-start align-items-center"
            >
              <button type="button" class="btn">
                <i class="bi bi-file-earmark-pdf" style="font-size: 50px"></i>
              </button>
            </div>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value=""
            id="flexCheckDefault"
            onClick="mostrarBotonGenerarSolicitudImpresionHolograma(this);"" />
            <label class="form-check-label" for="flexCheckDefault">
              He leído y acepto las politicas establecidas por AMMA aplicables a
              la impresión de hologramas
            </label>
          </div>
          <div class="mb-3 row">
            <div
              class="text-center col-5 col-sm-6"
              style="display: none"
              id="generarSolicitud"
            >
              <button
                type="button"
                class="btn btn-success me-3"
                onClick="generarSolicitudHologramas();"
              >
                <i class="bi bi-box-arrow-up"></i> Generar Solicitud
              </button>
            </div>
            <div class="text-center col-12" id="cancelarSolicitud">
              <button
                type="button"
                class="btn btn-danger ms-3"
                onClick="cancelarSolicitudHologramas(); "
              >
                <i class="bi bi-x-circle"></i> Cancelar Solicitud
              </button>
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
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Folio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Prioridad</th>
                    <th scope="col">Importe</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Forma de pago</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Folio</td>
                    <td>Fecha</td>
                    <td>Marca</td>
                    <td>Tipo</td>
                    <td>Estado</td>
                    <td>Cantidad</td>
                    <td>Prioridad</td>
                    <td>Importe</td>
                    <td>Estatus</td>
                    <td>
                      <button
                        type="button"
                        class="btn btn-success mx-4"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModalcambioFormaDePago"
                      >
                        <i class="bi bi-credit-card"></i>
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
  <!-- Modal -->
  <div
    class="modal fade"
    id="exampleModalcambioFormaDePago"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1
            class="modal-title fs-5 font-weight-bold"
            id="exampleModalcambioFormaDePago"
          >
            Forma de pago
          </h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="mb-3 row">
            <label for="inputPassword" class="col-12 col-form-label"
              >Formato de pago:</label
            >
            <div class="col-12">
              <select
                class="form-select"
                aria-label="Default select example"
                id="cambiarFormatosDePago"
                onclick="checarTipoDePagoSolicitudHolograma();"
              >
                <option selected="selected" value="" disabled>
                  SELECCIONAR
                </option>
                <option value="1">EFECTIVO (EN OFICINA AMMA)</option>
                <option value="2">CHEQUE (EN OFICINA AMMA)</option>
                <option value="3">TRANSFERENCIA BANCARIA</option>
                <option value="4">DEPOSITO DE EFECTIVO (EN BANCO)</option>
                <option value="5">DEPOSITO DE CHEQUE (EN BANCO)</option>
              </select>
            </div>
          </div>
          <div class="row" id="cambioPagoConComprobante" style="display: none">
            <label for="formFile" class="form-label col">Comprobante:</label>
            <input
              id="cambioPago_file_comp"
              class="form-control col"
              type="file"
              id="formFile"
              accept=".pdf, .png, .jpg"
              title="Adjuntar comprobante [.pdf .jpg .png]"
              data-filename-placement="inside"
            />
            <label
              class="text-start text-danger"
              id="errorCambioPagoConComprobante"
              style="display: none"
              >Debes seleccionar un archivo
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-primary"
            onclick="cambiarTipoDepago();"
          >
            Cambiar forma de pago
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
