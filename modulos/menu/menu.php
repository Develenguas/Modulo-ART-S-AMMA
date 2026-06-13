<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="dist/img/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Plataforma de certificación | SIGCE</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- <link
      rel="stylesheet"
      href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
    /> -->
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
  <!--  -->
  <link rel="stylesheet" href="dist/css/style.css" />
  <!-- SweetAlert2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">
  <!-- Select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/favicon.png" alt="AdminLTELogo" height="80" width="80" />
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light sticky-top">
      <ul class="navbar-nav">
        <li class="nav-item d-lg-none">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button" id="botonHamburguesa"><i
              class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown dropstart">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"
                onclick="cargarContenidoMenus('modulos/configuracionesGenerales/configuracionesGenerales.php','configuracionesGenerales', 'CONFIGURACIONES GENERALES', 'inicio');">Configuraciones</a>
            </li>
            <li><a class="dropdown-item" href="#" onclick="cerrarSesion();">Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="dist/img/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: 1" />
        <span class="brand-text font-weight-light" style="color: rgb(255, 255, 255)">SIGCE</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block" style="color: rgb(255, 255, 255)">Nombre de usuario</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="" class="nav-link seccionitem"
                onclick="cargarContenidoMenus('modulos/inicio/inicio.php','inicio', 'PLATAFORMA DE CERTIFICACIÓN');">
                <i class="nav-icon bi bi-house"></i>
                <p class="">
                  Inicio
                </p>
              </a>
            </li>


            <li class="nav-item">
              <a href="#" class="nav-link seccionitem" onclick="seleccionarOpcion(this);">
                <i class="bi bi-card-text"></i>
                <p>
                  Indice
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onclick="cargarContenidoMenus('modulos/In_Di_Ce/ARTs/arts.php','agaves', 'CONCENTRADO DE ARTS');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">ART´s</p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item">
              <a href="#" class="nav-link seccionitem" onclick="seleccionarOpcion(this);">
                <i class="nav-icon bi bi-card-checklist"></i>
                <p class="">
                  Solicitudes
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onClick="cargarContenidoMenus('modulos/solicitudes/certificadorExportacion/certificadoDeExportacion.php','prueba', 'SOLICITUD DE EMISIÓN DEL CERTIFICADO NOM PARA EXPORTACIÓN');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Certificado de exportación</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onClick="cargarContenidoMenus('modulos/solicitudes/impresionHologramas/impresionhologramas.php','impresionDeHologramas', 'IMPRESIÓN DE HOLOGRAMAS');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Impresión de Hologramas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onClick="cargarContenidoMenus('modulos/solicitudes/traslados/traslados.php','traslados', 'TRASLADO DE PRODUCTO');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Traslados</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onClick="cargarContenidoMenus('modulos/solicitudes/ajusteMezclaMuestreo/ajusteMezclaMuestreo.php','ajusteMezclaMuestreo', 'NOTIFICACIÓN DE AJUSTE DE GRADO, MEZCLA Y MUESTREO');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Ajuste, Mezcla y Muestreo</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onClick="cargarContenidoMenus('modulos/solicitudes/varios/varios.php','vistaModuloVarios', 'NOTIFICACIÓN DE SERVICIOS (VARIOS)');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Varios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onClick="cargarContenidoMenus('modulos/solicitudes/maduracion/maduracion.php','maduracion', 'INGRESO Y/O LIBERACIÓN DE PRODUCTO A MADURACIÓN');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Maduración</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onClick="cargarContenidoMenus('modulos/solicitudes/certificadoNacional/certificadoNacional.php','certificadoNacional', 'NOTIFICACIÓN DE ENTREGA DE HOLOGRAMAS, INSPECCIÓN DEL ENVASADO');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Certificado Nacional</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Cambio en las Actividades</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link seccionitem" onclick="seleccionarOpcion(this)">
                <i class="nav-icon bi bi-boxes"></i>
                <p>
                  Inventario
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onClick="cargarContenidoMenus('modulos/inventarios/hologramas/hologramas.php','vistaModuloInventariosHologramas', 'INVENTARIO DE HOLOGRAMAS');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Hologramas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onClick="cargarContenidoMenus('modulos/inventarios/granelEnvasado/granelEnvasado.php','vistaModuloGranelEnvasado', 'INVENTARIOS A GRANEL Y ENVASADO');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">A granel y envasado</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onclick="cargarContenidoMenus('modulos/inventarios/maguey/maguey.php','vistaModuloInventariosMaguey', 'INVENTARIOS DE MAGUEY');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Maguey</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link seccionitem" onclick="seleccionarOpcion(this)">
                <i class="nav-icon bi bi-journal-text"></i>
                <p>
                  Catálogos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onClick="cargarContenidoMenus('modulos/catalogos/importadores/importadores.php','vistaModuloImportadores', 'CATALOGO DE IMPORTADORES');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Importadores</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onClick="cargarContenidoMenus('modulos/catalogos/juegosEtiqueta/juegosEtiqueta.php','vistaModuloJuegosEtiqueta', 'CATALOGO JUEGO DE ETIQUETAS');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Juegos de Etiqueta</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onClick="cargarContenidoMenus('modulos/catalogos/muestraEmbalaje/muestraEmbalaje.php','vistaModuloMuestraEmbalaje', 'CATALOGO MUESTRAS EMBALAJE');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Muestras de Embalaje</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link seccionitem" onclick="seleccionarOpcion(this)">
                <i class="nav-icon bi bi-file-earmark"></i>
                <p>
                  Formatos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar"
                    onClick="cargarContenidoMenus('modulos/formatos/formatos.php','vistaFormatos', 'FORMATOS');">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Formatos</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link seccionitem" onclick="seleccionarOpcion(this)">
                <i class="nav-icon bi bi-cart3"></i>
                <p>
                  Mercado de Mezcal
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Todos los lotes en venta</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Mis lotes publicados</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link seccionitem" onclick="seleccionarOpcion(this)">
                <i class="nav-icon bi bi-cart3"></i>
                <p>
                  Mercado de Maguey
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Todos los magueyes en venta</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Mis magueyes publicados</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link seccionitem" onclick="seleccionarOpcion(this)">
                <i class="nav-icon bi bi-envelope"></i>
                <p>
                  Notificaciones
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="subMenuNavbar">
                    <p class="opcionMenus" onclick="seleccionarOpcionSubmenu(this);">Historial</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12 colotitulomod text-center p-3 text-white">
              <h1 class="m-0" id="tituloDeModulo">Dashboard</h1>
            </div>
          </div>
          <div class="border rounded-3" id="contenido">
            <h5>Contenido de los modulos</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer text-center colorFooter">
      Dudas o sugerencias ponemos a su disposición el siguiente correo electrónico: tecnologias@amma.org.mx
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>

  <!-- jQuery -->
  <!-- <script src="plugins/jquery/jquery.min.js"></script> -->
  <!-- jQuery UI 1.11.4 -->
  <!-- <script src="plugins/jquery-ui/jquery-ui.min.js"></script> -->
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <!-- Bootstrap 4 -->
  <!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <!-- ChartJS -->
  <!-- <script src="plugins/chart.js/Chart.min.js"></script> -->
  <!-- Sparkline -->
  <!-- <script src="plugins/sparklines/sparkline.js"></script> -->
  <!-- JQVMap -->
  <!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script> -->
  <!-- <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
  <!-- jQuery Knob Chart -->
  <!-- <script src="plugins/jquery-knob/jquery.knob.min.js"></script> -->
  <!-- daterangepicker -->
  <!-- <script src="plugins/moment/moment.min.js"></script> -->
  <!-- <script src="plugins/daterangepicker/daterangepicker.js"></script> -->
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
  <!-- Summernote -->
  <!-- <script src="plugins/summernote/summernote-bs4.min.js"></script> -->
  <!-- overlayScrollbars -->
  <!-- <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
  <!-- AdminLTE App -->

  <!--  -->
  <!-- SweetAlert2 JS -->

  <script src="dist/js/jquery-3.6.0.min.js" type="text/javascript"></script>

  <script src="dist/js/operacionesMenu.js"></script>
  <script src="dist/js/index.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
  <script src="dist/js/adminlte.js"></script>

  <script src="modulos/solicitudes/certificadorExportacion/certificadoDeExportacion.js"></script>
  <script src="modulos/solicitudes/impresionHologramas/impresionHologramas.js"></script>
  <script src="modulos/solicitudes/ajusteMezclaMuestreo/ajusteMezclaMuestreo.js"></script>
  <script src="modulos/solicitudes/varios/varios.js"></script>

  <script src="modulos/catalogos/importadores/importadores.js"></script>
  <script src="modulos/catalogos/juegosEtiqueta/juegosEtiqueta.js"></script>
  <script src="modulos/catalogos/muestraEmbalaje/muestraEmbalaje.js"></script>

  <script src="modulos/inventarios/granelEnvasado/granelEnvasado.js"></script>
  <script src="modulos/inventarios/hologramas/hologramas.js"></script>
  <script src="modulos/inventarios/maguey/maguey.js"></script>
  <script>
    (g => {
      var h, a, k, p = "The Google Maps JavaScript API",
        c = "google",
        l = "importLibrary",
        q = "__ib__",
        m = document,
        b = window;
      b = b[c] || (b[c] = {});
      var d = b.maps || (b.maps = {}),
        r = new Set,
        e = new URLSearchParams,
        u = () => h || (h = new Promise(async (f, n) => {
          await (a = m.createElement("script"));
          e.set("libraries", [...r] + "");
          for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
          e.set("callback", c + ".maps." + q);
          a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
          d[q] = f;
          a.onerror = () => h = n(Error(p + " could not load."));
          a.nonce = m.querySelector("script[nonce]")?.nonce || "";
          m.head.append(a)
        }));
      d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
    })({
      key: "AIzaSyDbQSw37I4OJurWrBRDS9kbo74n1USuYg4",
      // Add other bootstrap parameters as needed, using camel case.
      // Use the 'v' parameter to indicate the version to load (alpha, beta, weekly, etc.)
    });
  </script>

  <script src="modulos/configuracionesGenerales/configuracionesGenerales.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="dist/js/pages/dashboard.js"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>   -->
</body>

</html>