<div id="configuracionesGenerales">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button
        class="nav-link active"
        id="home-tab"
        data-bs-toggle="tab"
        data-bs-target="#home-tab-pane"
        type="button"
        role="tab"
        aria-controls="home-tab-pane"
        aria-selected="true"
      >
        Contraseña
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button
        class="nav-link"
        id="profile-tab"
        data-bs-toggle="tab"
        data-bs-target="#profile-tab-pane"
        type="button"
        role="tab"
        aria-controls="profile-tab-pane"
        aria-selected="false"
      >
        Imagen de perfil
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
      <form action="" id="formCambioPassword">
        <div>
          <div class="mb-3 mt-3 input-group d-flex justify-content-center">
            <label
              for="contraActualConfigGenerales"
              class="col-sm-2 col-form-label"
              >Contraseña actual:</label
            >
            <input
              class="form-control col-sm-2"
              type="password"
              id="contraActualConfigGenerales"
              aria-label="default input example"
              onkeyup="validarCamposConfigGeneral(this)"
            />
            <span class="input-group-text" onclick="mostrarContraActual()"
              ><i class="bi bi-eye-fill" id="iconPasswordActual"></i
            ></span>
          </div>
          <div class="text-center">
            <label
              class="text-start text-danger d-none"
              id="labelErrorContraActual"
              >Debe agregar la contraseña actual</label
            >
          </div>
        </div>

        <div class="mb-3">
          <div
            class="p-1 bg-warning-subtle border rounded-3"
            style="line-height: 10%"
          >
            <p class="small text-start pt-2">La nueva contraseña debe tener:</p>
            <p class="small text-start">8 caracteres de longitud como minimo</p>
            <p class="small text-start">contener al menos 1 letra mayúscula</p>
            <p class="small text-start">1 letra minúscula</p>
            <p class="small text-start">1 número</p>
          </div>
        </div>
        <div class="row">
          <div class="input-group col-sm-6 d-flex justify-content-center">
            <label
              for="contraNuevaConfigGenerales"
              class="col-sm-4 col-form-label"
              >Nueva contraseña:</label
            >
            <input
              class="form-control col-sm-4"
              type="password"
              id="contraNuevaConfigGenerales"
              aria-label="default input example"
              onkeyup="validarCamposConfigGeneral(this)"
            />
            <span class="input-group-text" onclick="mostrarContraNueva()"
              ><i class="bi bi-eye-fill" id="iconPasswordNueva"></i
            ></span>
          </div>
          <div class="input-group col-sm-6 d-flex justify-content-center">
            <label
              for="repetirContraActualConfigGenerales"
              class="col-sm-5 col-form-label"
              >Repetir nueva contraseña:</label
            >
            <input
              class="form-control col-sm-4"
              type="password"
              id="repetirContraActualConfigGenerales"
              aria-label="default input example"
              onkeyup="validarCamposConfigGeneral(this)"
            />
            <span class="input-group-text" onclick="mostrarContraNueva2()"
              ><i class="bi bi-eye-fill" id="iconPasswordNueva2"></i
            ></span>
          </div>
          <div class="text-center">
            <!-- cambiar para usar solo una alerta, cambiando el contenido con js -->
            <label class="text-danger d-none" id="labelErrorContraNueva"
              >Debe agregar la contraseña nueva</label
            >
            <div class="row">
              <label class="text-danger d-none" id="labelErrorContraCoincidir"
                >Las contraseñas no coinciden</label
              >
            </div>
            <label class="text-danger d-none" id="labelErrorContraValida"
              >La contraseña no cumple los criterios minimos de seguridad</label
            >
          </div>
        </div>
      </form>
      <div class="row mt-5">
        <div class="d-flex justify-content-center">
          <button
            type="button"
            class="btn btn-primary"
            onclick="cambiarPassword()"
          >
            Cambiar contraseña
          </button>
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
      <div class="">
        <div class="mt-5">
          <input
            class="d-none"
            type="file"
            name=""
            id="inputFileCambioImagenConfig"
            onchange="validarImagenConfig(this)"
          />
          <input
            class="btn btn-primary d-grid gap-2 col-12 col-sm-4 mx-auto"
            type="button"
            value="Seleccionar imagen [.jpg .png]"
            id="botonSeleccionarImagenConfig"
            onclick="cambioImagenConfig()"
          />
        </div>
        <div class="mt-3 text-center">
          <img id="previewImage" class="img-thumbnail" />
        </div>

        <div class="mt-3 text-center">
          <button
            id="rotateCounterClockwiseButton"
            class="btn btn-secondary"
            onclick="rotarIzquierdo()"
            disabled
          >
            <i class="bi bi-arrow-counterclockwise"></i>
          </button>
          <button
            id="rotateClockwiseButton"
            class="btn btn-secondary me-3"
            onclick="rotarDerecho()"
            disabled
          >
            <i class="bi bi-arrow-clockwise"></i>
          </button>
        </div>
        <div class="mt-3 text-center">
          <button id="uploadButton" class="btn btn-primary mt-3" disabled>
            Subir Imagen
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
