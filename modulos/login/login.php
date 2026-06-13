<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="dist/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Plataforma de certificación | SIGCE</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
    <script src="modulos/login/login.js"></script>
  </head>
  <style>
    /* Establece la imagen de fondo del body */
    body {
      background-image: url("modulos/login/images/6.jpg");
      background-size: cover; /* Ajusta la imagen al tamaño del body */
      background-repeat: no-repeat; /* Evita que se repita la imagen */
    }
    /* Agrega estilos al formulario */
    .form-transparent {
      background-color: rgba(0, 0, 0, 0.8) !important; /* 50% de opacidad (blanco) */
      box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.3);
      max-width: 440px;
    }
  </style>
  <body>
  <div class="container justify-content-center align-items-center p-2" style="display: flex; height: 100vh; ">
    <form class=" p-4 rounded-4 form-transparent" >
      <div class="row text-center " style="color: #092147">
        <h3 class="col-12 mx-auto text-white">INICIO DE SESIÓN</h3>
      </div>
      <div class="row">
        <div class="mt-5 mb-5 row justify-content-center">
          <img
            class="col-10"
            src="modulos/login/images/logo_dashboard.png"
            alt="Logo amma"
          />
        </div>
      </div>
      <div class="row">
        <div class="col-11 text-white mx-auto mb-4">
          <div class="input-group mb-2">
            <span class="input-group-text">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
              </svg>
            </span>
            <div class="form-floating">
              <input type="text" class="form-control" id="usuario" placeholder="Username">
              <label for="usuario" style="color: #929292;">Usuario</label>
            </div>
          </div>   
          <label id="errorSinUsuario" class="text-center fw-bold text-danger col-12" style="display: none;">Ingrese un usuario</label>
        </div>
        
      </div>
      <div class="row">
        <div class="col-11 text-white mx-auto mb-2">
          <div class="input-group mb-2">
            <span class="input-group-text">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
              </svg>
            </span>
            <div class="form-floating">
              <input type="password" class="form-control" id="contra" placeholder="Contraseña">
              <label for="contra" style="color: #929292;">Contraseña</label>
            </div>
            <span class="input-group-text" onclick="mostrarContraActual()" id="ojitocontra">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg>
            </span>  
          </div> 
          <label id="errorSinContra" class="text-center fw-bold text-danger col-12" style="display: none;">Ingrese una contraseña</label>
        </div>  
      </div>
      <div class="row ">
        <div class="text-center fw-bold col-12 mb-3">
          <label id="errorFormatoUsuario" class="text-danger col-12" style="display: none;">Nombre de usuario inválido (el nombre de usuario es su Numero de control compuesto de la letra C y 4 numeros, Ejemplo: C9999)</label>
        </div> 
        <div class="text-center fw-bold col-12 mb-3">
          <label id="errorUsuario" class="text-danger col-12" style="display: none;">Nombre de usuario y/o contraseña incorrecta.</label>
        </div>
      </div>
      
      <div class="row ">
          <button class="col-10 mx-auto mb-3 text-center btn btn-primary rounded-4" type="button" onclick="validarInicioSesion();">Ingresar</button>
      </div>

      <div class="row " id="mensajeDeInscripcion">
        <a href="https://portal.amma.org.mx/inscripcion/" class="col-10 mx-auto mb-3 text-center text-white">¿Deseas tener tu cuenta? Regístrate aquí </a>
      </div>
    </form>
  </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
    <script src="dist/js/jquery-3.6.0.min.js" type="text/javascript"></script>
  </body>
</html>