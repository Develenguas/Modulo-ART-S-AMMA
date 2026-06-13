<div id="vistaModuloVarios">
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
          <label class="col-sm-3 col-form-label">Envasadoras de Maquila:</label>
          <div class="form-check col-sm-2">
            <input
              class="form-check-input"
              type="radio"
              name="Varios"
              id="siEnvasadorasMaquila"
              value="normal"
              onClick="envasadorasMaquilasVarios();"
            />
            <label class="form-check-label" for="siEnvasadorasMaquila">
              Si
            </label>
          </div>
          <div class="form-check col-sm-2">
            <input
              class="form-check-input"
              type="radio"
              name="Varios"
              id="noEnvasadorasMaquila"
              value="exclusivo"
              checked
              onClick="envasadorasMaquilasVarios();"
            />
            <label class="form-check-label" for="noEnvasadorasMaquila">
              No
            </label>
          </div>
        </div>
        <div class="mb-3 row" id="cuerpoConvenioMaquila" style="display: none">
          <label for="inputPassword" class="col-sm-2 col-form-label"
            >Convenio de Maquila con:</label
          >
          <div class="col-sm-6">
            <select
              class="form-select"
              aria-label="Default select example"
              id="convenioMaquilaCon"
              onchange="eliminarMensajesErrorVarios(this);"
            >
              <option selected disabled value="">Seleccionar</option>
              <option value="PRUEBAS">PRUEBAS</option>
              <option value="PRUEBAS2">PRUEBAS2</option>
            </select>
            <label
              class="text-start text-danger"
              id="errorConvenioMaquilaCon"
              style="display: none"
              >Debes seleccionar una opción</label
            >
          </div>
          <p class="small p-0 bg-warning-subtle border rounded-3 mb-3 col-sm-4">
            NOTA: Si el nombre o razón social no se muestra:<br />
            *Verifique sus convenios con AMMA.
          </p>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label"
            >Tipo de instalación:</label
          >
          <div class="col-sm-4">
            <select
              class="form-select"
              aria-label="Default select example"
              id="tipoIntalacionVarios"
              onchange="seleccionarOpcionVarios(this); eliminarMensajesErrorVarios(this);"
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
              id="productoSeEncuentraVarios"
              onchange="seleccionarOpcionVarios(this); eliminarMensajesErrorVarios(this);"
              disabled
            >
              <option selected disabled value="">Seleccionar</option>
              <option value="PRUEBAS">PRUEBAS</option>
              <option value="PRUEBAS2">PRUEBAS2</option>
            </select>
            <label
              class="text-start text-danger"
              id="errorProductoSeEncuentraVarios"
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
              id="instalacionVarios"
              onchange="seleccionarOpcionVarios(this);  eliminarMensajesErrorVarios(this);"
              disabled
            >
              <option selected disabled value="">Seleccionar</option>
              <option value="PRUEBAS">PRUEBAS</option>
              <option value="PRUEBAS2">PRUEBAS2</option>
            </select>
            <label
              class="text-start text-danger"
              id="errorInstalacionVarios"
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
              id="normalVarios"
              value="normal"
              onClick="fechaPropuestaVarios();"
            />
            <label class="form-check-label" for="normalVarios"> Normal </label>
          </div>
          <div class="form-check col-sm-2">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              id="exclusivoVarios"
              value="exclusivo"
              onClick="fechaPropuestaVarios();"
            />
            <label class="form-check-label" for="exclusivoVarios">
              Exclusivo
            </label>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="fechaVarios" class="col-sm-2">Fecha Solicitud:</label>
          <input
            class="form-control col-sm-4"
            type="date"
            id="fechaVarios"
            disabled
          />
          <label for="fechaPropuestaVarios" class="col-sm-2"
            >Fecha Propuesta:</label
          >
          <input
            id="fechaPropuestaVarios"
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
      <div class="border-top p-3 mt-4">
        <div
          class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-3"
        >
          <p class="font-weight-bold">
            LA EMPRESA A TRAVÉS DE SU REPRESENTANTE LEGAL Y AUTORIZADO SOLICITA
            EL SERVICIO DE:
          </p>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-12 col-form-label"
            >Describa el servicio solicitado a detalle, indicando cantidades,
            descripción del producto y cualquier tipo de información que
            considere conveniente :</label
          >
          <div class="form-floating">
            <textarea
              class="form-control"
              placeholder="Leave a comment here"
              id="descripcionVarios"
              style="height: 300px; resize: none"
              oninput="eliminarMensajesErrorVarios(this);"
            ></textarea>
          </div>
          <label
            class="text-center text-danger col-sm-12"
            id="errorDescripcionVarios"
            style="display: none"
            >Debes escribir una descripción</label
          >
          <div class="row mb-3 mt-3 text-center">
            <div class="col-sm-6">
              <label for="" class="form-label">Documentos:</label>
            </div>
            <div class="col-sm-6">
              <input
                type="file"
                accept=".jpg, .png, .pdf"
                id="archivosDocumentosVarios"
                style="display: none"
                onchange="seleccionarArchivosVarios()"
                multiple
              />
              <button
                class="btn btn-secondary"
                onclick="abrirVentanaArchivosVarios()"
              >
                Seleccionar Archivos
              </button>
            </div>
          </div>
          <div id="cuerpoDondeSeMuestranLosArchivos" class="mb-3"></div>

          <p
            class="small p-0 bg-warning-subtle border rounded-3 mb-3 p-2 text-start"
          >
            * Únicamente se permite subir archivos con extensión jpg, png, y
            pdf.<br />
            * Únicamente se permite adjuntar un máximo de 10 archivos por
            solicitud. <br />
            * El peso máximo permitido por archivo es de 10 MB.
          </p>
        </div>

        <div class="mb-3 row mt-3 justify-content-center">
          <div class="text-center col-sm-6" id="generarSolicitud">
            <button
              type="button"
              class="btn btn-success me-md-3"
              onClick="generarSolicitudVarios();"
            >
              <i class="bi bi-box-arrow-up"></i> Generar Solicitud
            </button>
          </div>
          <div class="text-center col-6" id="cancelarSolicitud">
            <button
              type="button"
              class="btn btn-danger ms-md-3 mt-2 mt-md-0"
              onClick="cancelarSolicitudVarios(); "
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
</div>
