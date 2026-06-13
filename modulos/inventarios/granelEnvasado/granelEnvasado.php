<div id="vistaModuloGranelEnvasado">
  <div class="row mb-3 text-center">
    <div class="col-sm-12">
      <h1 class="m-0">C9998 - PRUEBAS AMMA SA DE CV</h1>
    </div>
  </div>
  <div class="border-top p-3">
    <div
      class="p-0 bg-succes-subtle bg-success-subtle border border-primary-subtle rounded-3 mb-3"
    >
      <p class="font-weight-bold">INVENTARIO:</p>
    </div>
    <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-2 col-form-label"
        >Tipo de instalación:</label
      >
      <div class="col-sm-4">
        <select
          class="form-select"
          aria-label="Default select example"
          id="tipoIntalacionInventariosGranelEnvasado"
          onchange="seleccionarOpcionInventariosGranelEnvasados(this); "
        >
          <option selected disabled value="">Seleccionar</option>
          <option value="PRUEBAS">PRUEBAS</option>
          <option value="PRUEBAS2">PRUEBAS2</option>
        </select>
      </div>
      <label for="inputPassword" class="col-sm-2 col-form-label"
        >El producto se encuentra:</label
      >
      <div class="col-sm-4">
        <select
          class="form-select"
          aria-label="Default select example"
          id="productoSeEncuentraInventariosGranelEnvasado"
          onchange="seleccionarOpcionInventariosGranelEnvasados(this); "
          disabled
        >
          <option selected disabled value="">Seleccionar</option>
          <option value="PRUEBAS">PRUEBAS</option>
          <option value="PRUEBAS2">PRUEBAS2</option>
        </select>
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
          id="instalacionInventariosGranelEnvasado"
          onchange="seleccionarOpcionInventariosGranelEnvasados(this); "
          disabled
        >
          <option selected disabled value="">Seleccionar</option>
          <option value="PRUEBAS">PRUEBAS</option>
          <option value="PRUEBAS2">PRUEBAS2</option>
        </select>
    </div>
    <div class="row mt-3">
      <p
        class="small text-start p-0 bg-warning-subtle border rounded-3 mb-3 p-2"
      >
        * Le recordamos que si los lotes son movidos físicamente y registrados
        en bitácora, para que los movimientos se vean reflejados en su
        Plataforma de Certificación, es necesario que el inspector visite su
        instalación y actualice los registros.
      </p>
    </div>
    <div class="border rounded-2 mb-2 bg-light p-2 mb-3">
      <div class="row">
        <label for="inputPassword" class="col-sm-12 col-form-label"
          >INFORMACIÓN DE LA INSTALACIÓN:</label
        >
      </div>
      <div class="mb-3 row">
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Domicilio:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="" disabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Responsable:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="" disabled>
          </div>
        </div>
      </div>
    </div>
    <div class="" id="tablaInventarioExistenciaGranelEnvasado" style="display: none;">
      <div class="row p-2 border rounded-top bg-light p-3">
        <div class="col-12 mt-sm-2 text-center">
          <h4>Existencia actual por marca</h4>
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
                  <th scope="col">N° lote:</th>
                  <th scope="col">Fecha ingreso:</th>
                  <th scope="col">Tiempo maduración:</th>
                  <th scope="col">Contenido alcohólico:</th>
                  <th scope="col">Volumen del lote:</th>
                  <th scope="col">Contenedor(es):</th>
                  <th scope="col">Especie(s):</th>
                  <th scope="col">Folio:</th>
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
                  <td>Datos Datos</td>
                  <td>Datos Datos</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <p
        class="small text-start p-0 bg-warning-subtle border rounded-3 mb-3 p-2"
      >
        * De acuerdo a la naturaleza de las solicitudes, puede ser necesario que
        el lote cuente con análisis fisicoquímico y este se encuentre en
        cumplimiento con la NOM-070, para cualquier duda o aclaración
        comunicarse con la Unidad de Inspección.
      </p>
    </div>
  </div>
</div>
