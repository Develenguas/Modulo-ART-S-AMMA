// arts.js - Versión actualizada con campos por especie y promedio ponderado
console.log("📗 URL actual:", window.location.href);

// Variables globales
let especiesSeleccionadas = [];
let isSubmitting = false;
let modoEdicion = false;
let artIdActual = null;

function inicializarFecha() {
  const fechaMuestreo = document.getElementById("fechaMuestreo");
  if (fechaMuestreo) {
    const hoy = new Date();
    const year = hoy.getFullYear();
    const month = String(hoy.getMonth() + 1).padStart(2, "0");
    const day = String(hoy.getDate()).padStart(2, "0");
    fechaMuestreo.value = `${year}-${month}-${day}`;
  } else {
    setTimeout(inicializarFecha, 100);
  }
}

async function cargarEspecies() {
  try {
    const selectEspecie = document.getElementById("especieAgave");
    if (!selectEspecie) return;

    selectEspecie.innerHTML = '<option value="">Cargando especies...</option>';
    selectEspecie.disabled = true;

    const response = await fetch(
      "/modulos/In_Di_Ce/common/consultas.php?action=obtenerEspecies",
      {
        method: "GET",
        headers: {
          Accept: "application/json",
          "Content-Type": "application/json",
        },
      }
    );

    if (!response.ok) {
      throw new Error(
        `HTTP error! status: ${response.status} - ${response.statusText}`
      );
    }

    const contentType = response.headers.get("content-type");
    if (!contentType || !contentType.includes("application/json")) {
      throw new Error("La respuesta no es JSON válido");
    }

    const data = await response.json();
    console.log("Datos de especies recibidos:", data);

    selectEspecie.disabled = false;

    if (data.success && data.especies && Array.isArray(data.especies)) {
      selectEspecie.innerHTML =
        '<option value="">Selecciona una especie</option>';

      data.especies.forEach((especie) => {
        const option = document.createElement("option");
        option.value = especie.id;
        option.textContent = especie.nombre;
        option.dataset.nombreCorto = especie.nombreCorto || especie.nombre;
        selectEspecie.appendChild(option);
      });
    } else {
      throw new Error(data.message || "No se pudieron cargar las especies");
    }
  } catch (error) {
    console.error("Error al cargar especies:", error);
    const selectEspecie = document.getElementById("especieAgave");
    if (selectEspecie) {
      selectEspecie.innerHTML =
        '<option value="">Error al cargar especies</option>';
      selectEspecie.disabled = false;
    }

    Swal.fire({
      title: "Error",
      text: `No se pudieron cargar las especies: ${error.message}`,
      icon: "error",
      confirmButtonText: "Aceptar",
    });
  }
}

// Función para obtener los valores de los campos principales
function obtenerDatosPrincipales() {
  const numTapada = document.getElementById("numTapada")?.value || "";
  const numPinas = document.getElementById("numPinas")?.value || "";
  const kg = document.getElementById("kg")?.value || "";
  const ensayo1 = document.getElementById("ensayo1")?.value || "";
  const ensayo2 = document.getElementById("ensayo2")?.value || "";
  
  // Calcular promedio si ambos ensayos tienen valor
  let promedio = "";
  if (ensayo1 && ensayo2) {
    const promedioCalc = (parseFloat(ensayo1) + parseFloat(ensayo2)) / 2;
    promedio = promedioCalc.toFixed(2);
    
    // Actualizar el campo promedio en el formulario principal
    const promedioField = document.getElementById("promedio");
    if (promedioField) {
      promedioField.value = promedio + "%";
    }
  }
  
  return {
    numTapada,
    numPinas: numPinas ? parseInt(numPinas) : null,
    kg: kg ? parseFloat(kg) : null,
    ensayo1: ensayo1 ? parseFloat(ensayo1) : null,
    ensayo2: ensayo2 ? parseFloat(ensayo2) : null,
    promedio: promedio ? parseFloat(promedio) : null
  };
}

// Calcular promedio para una especie específica en la tabla
function calcularPromedioEspecie(especieIndex) {
  const ensayo1Input = document.getElementById(`ensayo1_${especieIndex}`);
  const ensayo2Input = document.getElementById(`ensayo2_${especieIndex}`);
  const promedioInput = document.getElementById(`promedio_${especieIndex}`);

  if (ensayo1Input && ensayo2Input && promedioInput) {
    const ensayo1 = parseFloat(ensayo1Input.value) || 0;
    const ensayo2 = parseFloat(ensayo2Input.value) || 0;

    let promedio = 0;
    let promedioTexto = "";

    if (ensayo1Input.value && ensayo2Input.value) {
      promedio = (ensayo1 + ensayo2) / 2;
      promedioTexto = promedio.toFixed(2) + "%";
    }

    promedioInput.value = promedioTexto;

    // Actualizar en el array de especies seleccionadas
    if (especiesSeleccionadas[especieIndex]) {
      especiesSeleccionadas[especieIndex].ensayo1 = ensayo1Input.value ? ensayo1 : null;
      especiesSeleccionadas[especieIndex].ensayo2 = ensayo2Input.value ? ensayo2 : null;
      especiesSeleccionadas[especieIndex].promedio = ensayo1Input.value && ensayo2Input.value ? promedio : null;
    }

    // Recalcular promedio general ponderado
    calcularPromedioGeneralPonderado();
  }
}

// Calcular promedio en los campos principales cuando cambien los ensayos
function calcularPromedioFormulario() {
  const ensayo1 = document.getElementById("ensayo1")?.value;
  const ensayo2 = document.getElementById("ensayo2")?.value;
  const promedioField = document.getElementById("promedio");
  
  if (promedioField && ensayo1 && ensayo2) {
    const promedio = (parseFloat(ensayo1) + parseFloat(ensayo2)) / 2;
    promedioField.value = promedio.toFixed(2) + "%";
  } else if (promedioField) {
    promedioField.value = "";
  }
}

// Nueva función para calcular promedio general ponderado
function calcularPromedioGeneralPonderado() {
  let sumaPesoPromedio = 0;
  let sumaPesos = 0;

  especiesSeleccionadas.forEach((especie, index) => {
    const kgInput = document.getElementById(`kg_${index}`);
    const kg = kgInput ? parseFloat(kgInput.value) || 0 : (especie.kg || 0);

    if (especie.promedio && kg > 0) {
      sumaPesoPromedio += kg * especie.promedio;
      sumaPesos += kg;
    }
  });

  const promedioGeneralInput = document.getElementById("promedioGeneral");
  let promedioGeneral = null;

  if (sumaPesos > 0) {
    promedioGeneral = sumaPesoPromedio / sumaPesos;
    if (promedioGeneralInput) {
      promedioGeneralInput.value = promedioGeneral.toFixed(2) + "%";
    }
  } else {
    if (promedioGeneralInput) {
      promedioGeneralInput.value = "";
    }
  }
  // Mostrar/ocultar footer y actualizar promedio en la tabla
const footerElement = document.getElementById("footerPromedioGeneral");
const displayElement = document.getElementById("displayPromedioGeneral");

if (footerElement && displayElement) {
  if (especiesSeleccionadas.length > 0) {
    footerElement.style.display = "table-footer-group";
    if (promedioGeneral !== null) {
      displayElement.textContent = promedioGeneral.toFixed(2) + "%";
    } else {
      displayElement.textContent = "0.00%";
    }
  } else {
    footerElement.style.display = "none";
  }
}
  return promedioGeneral;
}

// Actualizar kg y número de piñas de una especie
function actualizarDatosEspecie(especieIndex) {
  const kgInput = document.getElementById(`kg_${especieIndex}`);
  const pinasInput = document.getElementById(`pinas_${especieIndex}`);
  const numTapadaInput = document.getElementById(`numTapada_${especieIndex}`);

  if (especiesSeleccionadas[especieIndex]) {
    if (kgInput) {
      especiesSeleccionadas[especieIndex].kg = parseFloat(kgInput.value) || null;
    }
    if (pinasInput) {
      especiesSeleccionadas[especieIndex].numPinas = parseInt(pinasInput.value) || null;
    }
    if (numTapadaInput) {
      especiesSeleccionadas[especieIndex].numTapada = numTapadaInput.value || null;
    }
  }

  // Recalcular promedio general ponderado cuando cambien los pesos
  calcularPromedioGeneralPonderado();
}

function inicializarEventListeners() {
  const btnAgregar = document.getElementById("agregarEspecie");
  if (btnAgregar) {
    btnAgregar.addEventListener("click", function () {
      const selectEspecie = document.getElementById("especieAgave");
      const especieId = selectEspecie.value;
      const especieTexto = selectEspecie.options[selectEspecie.selectedIndex].textContent;

      if (!especieId) {
        Swal.fire({
          title: "Selecciona una especie",
          text: "Para continuar seleccione una especie de agave",
          confirmButtonText: "Aceptar",
          showCloseButton: true,
          allowOutsideClick: false,
          allowEscapeKey: false,
        });
        return;
      }

      if (especiesSeleccionadas.find((e) => e.id === especieId)) {
        Swal.fire({
          title: "¡Importante!",
          text: "Esta especie ya ha sido agregada",
          confirmButtonText: "Aceptar",
          showCloseButton: true,
          allowOutsideClick: false,
          allowEscapeKey: false,
        });
        return;
      }

      // Obtener los datos de los campos principales
      const datosPrincipales = obtenerDatosPrincipales();

      especiesSeleccionadas.push({
        id: especieId,
        nombre: especieTexto,
        nombreCorto: selectEspecie.options[selectEspecie.selectedIndex].dataset.nombreCorto || especieTexto,
        numTapada: datosPrincipales.numTapada,
        numPinas: datosPrincipales.numPinas,
        kg: datosPrincipales.kg,
        ensayo1: datosPrincipales.ensayo1,
        ensayo2: datosPrincipales.ensayo2,
        promedio: datosPrincipales.promedio,
      });

      actualizarTabla();
      selectEspecie.value = "";
      
      // Limpiar campos principales después de agregar
      limpiarCamposPrincipales();
    });
  }

  // Event listeners para calcular promedio en tiempo real en campos principales
  const ensayo1Field = document.getElementById("ensayo1");
  const ensayo2Field = document.getElementById("ensayo2");
  
  if (ensayo1Field) {
    ensayo1Field.addEventListener("input", calcularPromedioFormulario);
  }
  if (ensayo2Field) {
    ensayo2Field.addEventListener("input", calcularPromedioFormulario);
  }

  // Event listener para el formulario
  const formAgave = document.getElementById("formAgave");
  if (formAgave) {
    formAgave.addEventListener("submit", guardarFormulario);
  }

  // Event listener para limpiar formulario
  const btnLimpiar = document.getElementById("btnLimpiar");
  if (btnLimpiar) {
    btnLimpiar.addEventListener("click", function () {
      Swal.fire({
        title: "¿Limpiar formulario?",
        text: "Se perderán todos los datos ingresados",
        icon: "question",
        showCancelButton: true,
        confirmButtonText: "Sí, limpiar",
        cancelButtonText: "Cancelar",
      }).then((result) => {
        if (result.isConfirmed) {
          limpiarFormulario();
        }
      });
    });
  }
}

// Función para limpiar campos principales
function limpiarCamposPrincipales() {
  const campos = [
    "numTapada",
    "numPinas", 
    "kg",
    "ensayo1",
    "ensayo2",
    "promedio"
  ];
  
  campos.forEach(campoId => {
    const campo = document.getElementById(campoId);
    if (campo) {
      campo.value = "";
    }
  });
}

// Función actualizada para mostrar tabla con todos los campos por especie
function actualizarTabla() {
  const cuerpoTabla = document.getElementById("cuerpoTablaAgaves");
  const mensajeVacio = document.getElementById("mensajeVacio");

  if (!cuerpoTabla || !mensajeVacio) return;

  cuerpoTabla.innerHTML = "";

  if (especiesSeleccionadas.length === 0) {
    mensajeVacio.style.display = "block";
    return;
  }

  mensajeVacio.style.display = "none";

  especiesSeleccionadas.forEach((especie, index) => {
    const fila = document.createElement("tr");
    fila.className = "especies-row";
    fila.innerHTML = `
      <td>
        <strong>${especie.nombre}</strong><br>
        <small class="text-muted">${especie.nombreCorto}</small>
      </td>
      <td>
        <input type="text" class="form-control form-control-sm" 
               id="numTapada_${index}" placeholder="Num Tapada" 
               value="${especie.numTapada || ""}"
               onchange="actualizarDatosEspecie(${index})">
      </td>
      <td>
        <input type="number" class="form-control form-control-sm" 
               id="pinas_${index}" placeholder="N° Piñas" 
               value="${especie.numPinas || ""}" min="0"
               onchange="actualizarDatosEspecie(${index})">
      </td>
      <td>
        <input type="number" step="0.01" class="form-control form-control-sm" 
               id="kg_${index}" placeholder="KG" 
               value="${especie.kg || ""}" min="0"
               onchange="actualizarDatosEspecie(${index})">
      </td>
      <td>
        <input type="number" step="0.01" class="form-control form-control-sm" 
               id="ensayo1_${index}" placeholder="Ensayo 1" 
               value="${especie.ensayo1 || ""}" min="0" max="100"
               oninput="calcularPromedioEspecie(${index})">
      </td>
      <td>
        <input type="number" step="0.01" class="form-control form-control-sm" 
               id="ensayo2_${index}" placeholder="Ensayo 2" 
               value="${especie.ensayo2 || ""}" min="0" max="100"
               oninput="calcularPromedioEspecie(${index})">
      </td>
      <td>
        <input type="text" class="form-control form-control-sm promedio-input" 
               id="promedio_${index}" placeholder="Promedio" readonly
               value="${especie.promedio ? especie.promedio.toFixed(2) + '%' : ''}">
      </td>
      <td>
        <button type="button" class="btn btn-danger btn-sm" onclick="eliminarEspecie(${index})">
          <i class="bi bi-trash"></i>
        </button>
      </td>
    `;
    cuerpoTabla.appendChild(fila);
  });

  // Recalcular promedio general después de actualizar tabla
  calcularPromedioGeneralPonderado();
}

function eliminarEspecie(index) {
  Swal.fire({
    title: "¿Eliminar especie?",
    text: "¿Estás seguro de que quieres eliminar esta especie?",
    icon: "question",
    showCancelButton: true,
    confirmButtonText: "Sí, eliminar",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      especiesSeleccionadas.splice(index, 1);
      actualizarTabla();
    }
  });
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
  inicializarEventListeners();
  cargarEspecies();
});
// Función actualizada para guardar formulario con nuevos campos
async function guardarFormulario(event) {
  event.preventDefault();

  if (isSubmitting) {
    console.log("Ya se está enviando el formulario, ignorando...");
    return;
  }

  try {
    isSubmitting = true;

    // Validar que hay especies seleccionadas
    if (especiesSeleccionadas.length === 0) {
      Swal.fire({
        title: "Error",
        text: "Debe agregar al menos una especie de agave",
        icon: "error",
        confirmButtonText: "Aceptar",
      });
      return;
    }

    // Validar que todas las especies tienen todos los campos requeridos
    let especiesIncompletas = [];
    especiesSeleccionadas.forEach((especie, index) => {
      if (
        !especie.numPinas ||
        especie.numPinas <= 0 ||
        !especie.kg ||
        especie.kg <= 0 ||
        !especie.ensayo1 ||
        !especie.ensayo2 ||
        isNaN(especie.ensayo1) ||
        isNaN(especie.ensayo2)
      ) {
        especiesIncompletas.push(especie.nombre);
      }
    });

    if (especiesIncompletas.length > 0) {
      Swal.fire({
        title: "Datos incompletos",
        text: `Las siguientes especies necesitan todos los campos completos: ${especiesIncompletas.join(
          ", "
        )}`,
        icon: "warning",
        confirmButtonText: "Aceptar",
      });
      return;
    }

    // Validar campos requeridos del formulario (sin numPinas y kg generales)
    const camposRequeridos = [
      { id: "numeroControl", nombre: "Número de Control" },
      { id: "muestreadoPor", nombre: "Muestreado por" },
      { id: "fechaMuestreo", nombre: "Fecha de Muestreo" },
      { id: "fechaEmision", nombre: "Fecha de Emisión" },
      { id: "numTapada", nombre: "Número de Tapada" },
      { id: "analista", nombre: "Analista" },
    ];

    for (let campo of camposRequeridos) {
      const elemento = document.getElementById(campo.id);
      if (!elemento || !elemento.value.trim()) {
        Swal.fire({
          title: "Campo requerido",
          text: `El campo "${campo.nombre}" es obligatorio`,
          icon: "warning",
          confirmButtonText: "Aceptar",
        });
        elemento?.focus();
        return;
      }
    }

    // Mostrar loading
    Swal.fire({
      title: "Guardando...",
      text: "Por favor espere mientras se guarda el ART",
      allowOutsideClick: false,
      allowEscapeKey: false,
      showConfirmButton: false,
      willOpen: () => {
        Swal.showLoading();
      },
    });

    // Preparar FormData
    const formData = new FormData();
    if (modoEdicion && artIdActual) {
      formData.append("action", "actualizarArt");
      formData.append("artId", artIdActual);
    } else {
      formData.append("action", "guardarArt");
    }

    formData.append(
      "numeroControl",
      document.getElementById("numeroControl").value.trim()
    );
    formData.append(
      "muestreadoPor",
      document.getElementById("muestreadoPor").value
    );
    formData.append(
      "fechaMuestreo",
      document.getElementById("fechaMuestreo").value
    );
    formData.append(
      "fechaEmision",
      document.getElementById("fechaEmision").value
    );
    formData.append(
      "numTapada",
      document.getElementById("numTapada").value.trim()
    );
    formData.append(
      "analista",
      document.getElementById("analista").value.trim()
    );
    formData.append(
      "observaciones",
      document.getElementById("observaciones").value.trim()
    );

    // Calcular y enviar promedio general
    const promedioGeneral = calcularPromedioGeneralPonderado();
    if (promedioGeneral !== null && !isNaN(promedioGeneral)) {
      formData.append("promedioGeneral", promedioGeneral.toFixed(2));
    }

    formData.append(
      "especiesSeleccionadas",
      JSON.stringify(especiesSeleccionadas)
    );

    console.log("Datos a enviar:", {
      action: modoEdicion ? "actualizarArt" : "guardarArt",
      numeroControl: document.getElementById("numeroControl").value,
      especiesCount: especiesSeleccionadas.length,
      especiesData: especiesSeleccionadas,
    });

    const response = await fetch("/modulos/In_Di_Ce/common/inserciones.php", {
      method: "POST",
      body: formData,
    });

    console.log("Respuesta recibida:", {
      status: response.status,
      statusText: response.statusText,
      ok: response.ok,
    });

    if (!response.ok) {
      throw new Error(
        `Error HTTP: ${response.status} - ${response.statusText}`
      );
    }

    const contentType = response.headers.get("content-type");
    if (!contentType || !contentType.includes("application/json")) {
      const textResponse = await response.text();
      console.error("Respuesta no-JSON recibida:", textResponse);
      throw new Error(
        "La respuesta del servidor no es JSON válido. Posible error de PHP."
      );
    }

    const result = await response.json();
    console.log("Resultado JSON:", result);

    if (result.success) {
      const mensaje = modoEdicion
        ? `ART actualizado correctamente.`
        : `ART guardado correctamente. Número consecutivo: ${result.data.numConsecutivo}`;

      Swal.fire({
        title: "¡Éxito!",
        text: mensaje,
        icon: "success",
        confirmButtonText: "Aceptar",
      }).then(() => {
        if (!modoEdicion) {
          // Preguntar si desea crear un nuevo ART solo si es creación
          Swal.fire({
            title: "¿Desea crear un nuevo ART?",
            text: "El formulario se limpiará para crear un nuevo registro",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "Sí, nuevo ART",
            cancelButtonText: "No, mantener datos",
          }).then((result) => {
            if (result.isConfirmed) {
              limpiarFormulario();
            }
          });
        }
      });
    } else {
      Swal.fire({
        title: "Error",
        text: result.message || "Error desconocido al guardar el ART",
        icon: "error",
        confirmButtonText: "Aceptar",
      });
    }
  } catch (error) {
    console.error("Error completo:", error);
    Swal.fire({
      title: "Error de conexión",
      text: `Error al guardar el ART: ${error.message}`,
      icon: "error",
      confirmButtonText: "Aceptar",
    });
  } finally {
    isSubmitting = false;
  }
}

function limpiarFormulario() {
  console.log("Ejecutando limpieza manual del formulario...");

  const form = document.getElementById("formAgave");
  if (form) {
    form.reset();
  }

  // Limpiar especies seleccionadas
  especiesSeleccionadas = [];
  actualizarTabla();

  // Reinicializar fecha
  inicializarFecha();

  // Limpiar campos específicos
  const campos = [
    "razonSocial",
    "domicilio",
    "numeroEscrito",
    "numeroConsecutivo",
    "promedioGeneral",
  ];
  campos.forEach((campo) => {
    const elemento = document.getElementById(campo);
    if (elemento) elemento.value = "";
  });

  // Resetear modo edición
  resetearModoNuevo();

  // Enfocar el primer campo
  const numeroControl = document.getElementById("numeroControl");
  if (numeroControl) {
    numeroControl.focus();
  }

  console.log("Formulario limpiado correctamente");
}

// Funciones para obtener datos del cliente (sin cambios)
async function obtenerDatosCliente(numeroControl, campo) {
  if (!numeroControl.trim()) {
    const elemento = document.getElementById(campo);
    if (elemento) elemento.value = "";
    return;
  }

  try {
    const endpoint =
      campo === "razonSocial" ? "obtenerRazonSocial" : "obtenerDomicilio";
    const response = await fetch(
      `/modulos/In_Di_Ce/common/consultas.php?action=${endpoint}&numeroControl=${encodeURIComponent(
        numeroControl
      )}`,
      {
        method: "GET",
        headers: {
          Accept: "application/json",
          "Content-Type": "application/json",
        },
      }
    );

    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    const data = await response.json();
    const element = document.getElementById(campo);

    if (element) {
      if (data.success) {
        element.value = data[campo] || "";
      } else {
        element.value = "";
        console.log("Cliente no encontrado:", data.message);
      }
    }
  } catch (error) {
    console.error(`Error al obtener ${campo}:`, error);
    const element = document.getElementById(campo);
    if (element) element.value = "";
  }
}

function inicializarEventosCliente() {
  const numeroControl = document.getElementById("numeroControl");
  const razonSocial = document.getElementById("razonSocial");
  const domicilio = document.getElementById("domicilio");

  if (!numeroControl || !razonSocial) {
    console.error("Elementos de cliente no encontrados");
    return false;
  }

  let ultimoNumeroControl = "";

  numeroControl.addEventListener("input", function () {
    const valorActual = this.value.trim();

    if (ultimoNumeroControl && valorActual !== ultimoNumeroControl) {
      limpiarFormularioCompleto();
    }

    if (!valorActual) {
      limpiarDatosBasicos();
    }
  });

  numeroControl.addEventListener("blur", async function () {
    const valor = this.value.trim();

    if (valor) {
      if (valor !== ultimoNumeroControl) {
        ultimoNumeroControl = valor;

        const artExistente = await verificarArtExistente(valor);

        if (artExistente) {
          await cargarDatosExistentes(artExistente);
        } else {
          await Promise.all([
            obtenerDatosCliente(valor, "razonSocial"),
            obtenerDatosCliente(valor, "domicilio"),
          ]);

          resetearModoNuevo();
        }
      }
    } else {
      ultimoNumeroControl = "";
    }
  });

  return true;
}

function limpiarFormularioCompleto() {
  console.log("Limpiando formulario por cambio de número de control...");

  const camposALimpiar = [
    "razonSocial",
    "domicilio",
    "numeroEscrito",
    "numeroConsecutivo",
    "promedioGeneral",
    "muestreadoPor",
    "fechaMuestreo",
    "fechaEmision",
    "numTapada",
    "analista",
    "observaciones",
  ];

  camposALimpiar.forEach((campo) => {
    const elemento = document.getElementById(campo);
    if (elemento) {
      elemento.value = "";
    }
  });

  especiesSeleccionadas = [];
  actualizarTabla();

  const muestreadoPor = document.getElementById("muestreadoPor");
  const especieAgave = document.getElementById("especieAgave");
  if (muestreadoPor) muestreadoPor.value = "";
  if (especieAgave) especieAgave.value = "";

  resetearModoNuevo();
  inicializarFecha();
}

function limpiarDatosBasicos() {
  const campos = [
    "razonSocial",
    "domicilio",
    "numeroEscrito",
    "numeroConsecutivo",
    "promedioGeneral",
  ];
  campos.forEach((campo) => {
    const elemento = document.getElementById(campo);
    if (elemento) elemento.value = "";
  });

  resetearModoNuevo();
}

function resetearModoNuevo() {
  modoEdicion = false;
  artIdActual = null;

  const btnSubmit = document.querySelector('button[type="submit"]');
  if (btnSubmit) {
    btnSubmit.innerHTML = '<i class="bi bi-save"></i> Guardar Formulario';
    btnSubmit.className = "btn btn-success btn-lg me-2";
  }
}

// Funciones de autocompletado (sin cambios significativos)
function inicializarAutocompleteNumeroControl() {
  const input = document.getElementById("numeroControl");
  if (!input) {
    console.error("Input numeroControl no encontrado");
    return;
  }

  let sugerenciasDiv = document.getElementById("lista-sugerencias");

  if (!sugerenciasDiv) {
    sugerenciasDiv = document.createElement("div");
    sugerenciasDiv.id = "lista-sugerencias";
    sugerenciasDiv.className = "list-group position-absolute w-100";
    sugerenciasDiv.style.zIndex = "1000";
    sugerenciasDiv.style.maxHeight = "200px";
    sugerenciasDiv.style.overflowY = "auto";
    sugerenciasDiv.style.display = "none";
    input.parentNode.appendChild(sugerenciasDiv);
  }

  input.addEventListener("input", async function () {
    const texto = this.value.trim();

    if (texto.length < 2) {
      sugerenciasDiv.innerHTML = "";
      sugerenciasDiv.style.display = "none";
      return;
    }

    try {
      const response = await fetch(
        `/modulos/In_Di_Ce/common/consultas.php?action=buscarNumeroControl&q=${encodeURIComponent(
          texto
        )}`,
        {
          method: "GET",
          headers: {
            Accept: "application/json",
            "Content-Type": "application/json",
          },
        }
      );

      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }

      const data = await response.json();
      sugerenciasDiv.innerHTML = "";

      if (data && data.length > 0) {
        data.forEach((num) => {
          const opcion = document.createElement("a");
          opcion.className = "list-group-item list-group-item-action";
          opcion.textContent = num;
          opcion.href = "#";
          opcion.style.cursor = "pointer";

          opcion.addEventListener("click", (e) => {
            e.preventDefault();
            input.value = num;
            sugerenciasDiv.innerHTML = "";
            sugerenciasDiv.style.display = "none";
            input.dispatchEvent(new Event("blur"));
          });

          sugerenciasDiv.appendChild(opcion);
        });
        sugerenciasDiv.style.display = "block";
      } else {
        sugerenciasDiv.style.display = "none";
      }
    } catch (error) {
      console.error("Error al obtener sugerencias:", error);
      sugerenciasDiv.innerHTML = "";
      sugerenciasDiv.style.display = "none";
    }
  });

  document.addEventListener("click", (e) => {
    if (!sugerenciasDiv.contains(e.target) && e.target !== input) {
      sugerenciasDiv.innerHTML = "";
      sugerenciasDiv.style.display = "none";
    }
  });

  input.addEventListener("blur", function () {
    setTimeout(() => {
      sugerenciasDiv.style.display = "none";
    }, 200);
  });
}

function inicializarAutocompletadoTodos() {
  const camposAutocompletado = [
    { id: "numTapada", endpoint: "obtenerTapadas" },
    { id: "analista", endpoint: "obtenerAnalistas" },
    { id: "observaciones", endpoint: "obtenerObservaciones" },
  ];

  camposAutocompletado.forEach((campo) => {
    inicializarAutocompletadoCampo(campo.id, campo.endpoint);
  });
}

function inicializarAutocompletadoCampo(campoId, endpoint) {
  const input = document.getElementById(campoId);
  if (!input) return;

  let sugerenciasDiv = document.getElementById(`sugerencias-${campoId}`);

  if (!sugerenciasDiv) {
    sugerenciasDiv = document.createElement("div");
    sugerenciasDiv.id = `sugerencias-${campoId}`;
    sugerenciasDiv.className = "list-group position-absolute w-100";
    sugerenciasDiv.style.zIndex = "1000";
    sugerenciasDiv.style.maxHeight = "150px";
    sugerenciasDiv.style.overflowY = "auto";
    sugerenciasDiv.style.display = "none";
    input.parentNode.style.position = "relative";
    input.parentNode.appendChild(sugerenciasDiv);
  }

  input.addEventListener("input", async function () {
    const texto = this.value.trim();

    if (texto.length < 2) {
      sugerenciasDiv.innerHTML = "";
      sugerenciasDiv.style.display = "none";
      return;
    }

    try {
      const response = await fetch(
        `/modulos/In_Di_Ce/common/consultas.php?action=${endpoint}&q=${encodeURIComponent(
          texto
        )}`,
        {
          method: "GET",
          headers: {
            Accept: "application/json",
            "Content-Type": "application/json",
          },
        }
      );

      if (!response.ok) return;

      const data = await response.json();
      sugerenciasDiv.innerHTML = "";

      if (data && data.length > 0) {
        data.forEach((valor) => {
          const opcion = document.createElement("a");
          opcion.className = "list-group-item list-group-item-action";
          opcion.textContent = valor;
          opcion.href = "#";
          opcion.style.cursor = "pointer";

          opcion.addEventListener("click", (e) => {
            e.preventDefault();
            input.value = valor;
            sugerenciasDiv.innerHTML = "";
            sugerenciasDiv.style.display = "none";
          });

          sugerenciasDiv.appendChild(opcion);
        });
        sugerenciasDiv.style.display = "block";
      } else {
        sugerenciasDiv.style.display = "none";
      }
    } catch (error) {
      console.error(`Error en autocompletado ${campoId}:`, error);
    }
  });

  input.addEventListener("blur", function () {
    setTimeout(() => {
      sugerenciasDiv.style.display = "none";
    }, 200);
  });

  document.addEventListener("click", (e) => {
    if (!sugerenciasDiv.contains(e.target) && e.target !== input) {
      sugerenciasDiv.style.display = "none";
    }
  });
}

async function verificarArtExistente(numeroControl) {
  try {
    const response = await fetch(
      `/modulos/In_Di_Ce/common/consultas.php?action=verificarArt&numeroControl=${encodeURIComponent(
        numeroControl
      )}`,
      {
        method: "GET",
        headers: {
          Accept: "application/json",
          "Content-Type": "application/json",
        },
      }
    );

    if (!response.ok) return null;

    const data = await response.json();
    return data.success ? data.art : null;
  } catch (error) {
    console.error("Error verificando ART:", error);
    return null;
  }
}

async function cargarDatosExistentes(artData) {
  modoEdicion = true;
  artIdActual = artData.id;

  // Cargar datos básicos
  document.getElementById("razonSocial").value = artData.razon_social || "";
  document.getElementById("domicilio").value = artData.domicilio || "";
  document.getElementById("numeroEscrito").value = artData.num_escrito || "";
  document.getElementById("numeroConsecutivo").value =
    artData.num_consecutivo || "";
  document.getElementById("muestreadoPor").value = artData.muestreado_por || "";
  document.getElementById("fechaMuestreo").value = artData.fecha_muestreo || "";
  document.getElementById("fechaEmision").value = artData.fecha_emision || "";
  document.getElementById("numTapada").value = artData.num_tapada || "";
  document.getElementById("analista").value = artData.analista || "";
  document.getElementById("observaciones").value = artData.observaciones || "";

  // Cargar promedio general si existe
  if (artData.promedio_general && !isNaN(artData.promedio_general)) {
    document.getElementById("promedioGeneral").value =
      Number(artData.promedio_general).toFixed(2) + "%";
  }

  // Cargar especies con todos los campos
  if (artData.especies && Array.isArray(artData.especies)) {
    especiesSeleccionadas = artData.especies.map((especie) => ({
      id: especie.especie_id,
      nombre: especie.nombre_especie,
      nombreCorto: especie.nombre_corto,
      numPinas: parseInt(especie.num_pinas) || null,
      kg: parseFloat(especie.kg) || null,
      ensayo1: parseFloat(especie.ensayo_1) || null,
      ensayo2: parseFloat(especie.ensayo_2) || null,
      promedio: parseFloat(especie.promedio) || null,
    }));
    actualizarTabla();
  }

  // Cambiar texto del botón
  const btnSubmit = document.querySelector('button[type="submit"]');
  if (btnSubmit) {
    btnSubmit.innerHTML = '<i class="bi bi-pencil"></i> Actualizar Formulario';
    btnSubmit.className = "btn btn-warning btn-lg me-2";
  }

  Swal.fire({
    title: "ART Existente",
    text: `Se encontró un ART existente (${artData.num_consecutivo}). Los datos se han cargado para edición.`,
    icon: "info",
    confirmButtonText: "Aceptar",
  });
}

function inicializar() {
  console.log("Inicializando aplicación...");

  if (!document.getElementById("numeroControl")) {
    console.error("Elemento numeroControl no encontrado");
    setTimeout(inicializar, 100);
    return;
  }

  inicializarAutocompleteNumeroControl();
  inicializarAutocompletadoTodos();
  inicializarFecha();
  actualizarTabla();
  cargarEspecies();
  inicializarEventListeners();
  inicializarEventosCliente();

  console.log("Aplicación inicializada correctamente");
}

// Inicialización con verificación del DOM
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", inicializar);
} else {
  inicializar();
}
