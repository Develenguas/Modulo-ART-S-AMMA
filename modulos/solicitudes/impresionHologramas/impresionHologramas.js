const productosDeSolicitudDeHologramas = [];

// Funcion para cuando el usuario seleccione ell tipo de holograma a solicitar
function tipoImpresionHolograma() {
  // Mostrar el div "cuerpoSolicitud"
  document.getElementById("cuerpoSolicitud").style.display = "block";
  // Obtener el valor de la opción seleccionada "selectTipo"
  var selected = document.getElementById("selectTipo").value;
  // Comprobar si el valor seleccionado es "Mezcal"
  if (selected == "Mezcal") {
    // Si el valor seleccionado es "Mezcal", mostrar el elemento con el ID "cuerpoConMezcal"
    document.getElementById("cuerpoConMezcal").style.display = "block";
  } else {
    // Si el valor seleccionado no es "Mezcal", ocultar el elemento con el ID "cuerpoConMezcal"
    document.getElementById("cuerpoConMezcal").style.display = "none";
  }
  radioUrgenteImpresionHolograma();
}

/*
  Esta función elimina mensajes de campos vacios cuando se rellena el campo
  @param select - Id del elemento el que se relleno
*/
function eliminarMensajesErrorImpresionHolograma(select) {
  // Obtener el elemento con el ID "existenciaActual"
  var existenciaActual = document.getElementById("existenciaActual");
  // Verificar si el campo "marca" ha sido rellenado y si es así, ocultar el mensaje de error asociado
  if (select.id == 'marca' && select.value != '') {
    document.getElementById("errorMarca").style.display = "none";
  }
  // Verificar si el campo "estado" ha sido rellenado y si es así, ocultar el mensaje de error asociado
  if (select.id == 'estado' && select.value != '') {
    document.getElementById("errorEstado").style.display = "none";
  }
  // Verificar si el campo "categoria" ha sido rellenado y si es así, ocultar el mensaje de error asociado
  if (select.id == 'categoria' && select.value != '') {
    document.getElementById("errorCategoria").style.display = "none";
  }
  // Verificar si el campo "cantidadNumeros" ha sido rellenado y si es así, ocultar el mensaje de error asociado
  if (select.id == 'cantidadNumeros' && select.value != '') {
    document.getElementById("errorCantidad").style.display = "none";
  }
  // Verificar si el campo "cantidadNumeros" ha sido rellenado y si el valor es menor que la existencia actual
  if (select.id === 'cantidadNumeros' && parseInt(select.value) < parseInt(existenciaActual.innerText)) {
    // Mostrar un mensaje de error específico y enfocar el campo "cantidadNumeros" para que el usuario lo corrija
    document.getElementById("errorCantidad").textContent = "Por favor, escriba un valor mayor o igual a " + existenciaActual.innerText;
    document.getElementById("errorCantidad").style.display = "block";
    cantidadNumeros.focus();
  }

}
/*
  Esta función decide que precio tendra el holograma dependiendo su urgencia
  @param radio - Id del radio que se selecciono
*/
function radioUrgenteImpresionHolograma(){
  // se verifica que radio esta seleecionado
  if ($('#urgente').is(":checked")){
    if ($("#selectTipo").val() == "Mezcal") {
      document.getElementById("precio").textContent = '$1.32'; 
    } else {
      document.getElementById("precio").textContent = '$0.90'; 
    }
  }else{
    if ($("#selectTipo").val() == "Mezcal") {
      document.getElementById("precio").textContent = '$0.88';
    } else {
      document.getElementById("precio").textContent = '$0.60';
    }
  }
  // Se manda a llamar la funcion para calcular el importe total y se pasa como parametro la cantidad de hologramas a solicitar
  calcularImporteImpresionHolograma(parseInt(document.getElementById('cantidadNumeros').value));
}

// Función que muestra el valor numerico ingresado en letras
function mostrarNumerosEnLetrasImpresionHolograma() {
  // Obtener una referencia al elemento input
  const cantidadNumeros = document.getElementById('cantidadNumeros');
  // formatear el numero ingresado a numerico
  cantidadNumeros.value = cantidadNumeros.value.replace(/[^0-9]/g, "");
  // hacer un calculo del importe de la cantidad
  calcularImporteImpresionHolograma(parseInt(cantidadNumeros.value));
  // Obtener una referencia al elemento donde mostraremos el resultado
  const cantidadLetras = document.getElementById('cantidadLetras');
  var numero = cantidadNumeros.value;
  // se rellena el input de el numero en letras
  cantidadLetras.value = numeroEnLetras(numero).toUpperCase() ; 
}

/*
  Esta función calcula el importe de la solicitud en base a la cantidad de hologramas a imprimir.
  @param {number} cantidad - Cantidad de hologramas a imprimir.
*/
function calcularImporteImpresionHolograma(cantidad) {
  if (isNaN(cantidad)) {
    // Si la cantidad no es un número válido, se muestra el importe como $0.00
    document.getElementById('importe').textContent = '$' + '0.00'; 
  } else {
    var totalImporte = 0;
    if ($('#urgente').is(":checked")){
      if ($("#selectTipo").val() == "Mezcal") {
        totalImporte = cantidad * 1.32;
      } else {
        totalImporte = cantidad * 0.90;
      }
    }else{
      if ($("#selectTipo").val() == "Mezcal") {
        totalImporte = cantidad * 0.88;
      } else {
        totalImporte = cantidad * 0.60;
      }
    }
    // Se muestra el importe calculado con el formato "$X.XX"
    document.getElementById('importe').textContent = '$' + totalImporte.toFixed(2); 
  }
}

/*
  Esta función valida que todos los campos obligatorios estén correctos, 
  y en caso de ser correcto, agrega un nuevo producto al carrito.
*/
function validarCarritoImpresionHolograma() {
  // Obtener valores de los elementos del formulario
  var selected = document.getElementById("selectTipo").value;
  var marca = document.getElementById("marca");
  var errorMarca = document.getElementById("errorMarca");
  var estado = document.getElementById("estado");
  var errorEstado = document.getElementById("errorEstado");
  var categoria = document.getElementById("categoria");
  var errorCategoria = document.getElementById("errorCategoria");
  var cantidadNumeros = document.getElementById("cantidadNumeros");
  var errorCantidad = document.getElementById("errorCantidad");
  var existenciaActual = document.getElementById("existenciaActual");
  var urgente = document.getElementById('urgente');
  var importe = document.getElementById("importe");
  var observaciones = document.getElementById("observaciones");

  // Contador para validar los campos obligatorios
  var contadorValidacion = 0;

  // Validar el campo "cantidadNumeros"
  if (cantidadNumeros.value.trim() == "") {
    errorCantidad.style.display = "block";
    cantidadNumeros.focus();
  } else if (cantidadNumeros.id === 'cantidadNumeros' && parseInt(cantidadNumeros.value) < parseInt(existenciaActual.innerText)) {
    errorCantidad.textContent = "Por favor, escriba un valor mayor o igual a " + existenciaActual.innerText;
    errorCantidad.style.display = "block";
    cantidadNumeros.focus();
  } else {
    errorCantidad.style.display = "none";
    contadorValidacion++;
  }

  // Validar campos específicos para el tipo de producto "Mezcal"
  if (selected == "Mezcal") {
    if (categoria.value.trim() == "") {
      errorCategoria.style.display = "block";
      categoria.focus();
    } else {
      errorCategoria.style.display = "none";
      contadorValidacion++;
    }

    if (estado.value.trim() == "") {
      errorEstado.style.display = "block";
      estado.focus();
    } else {
      errorEstado.style.display = "none";
      contadorValidacion++;
    }
  }

  // Validar campo "marca"
  if (marca.value.trim() == "") {
    errorMarca.style.display = "block";
    marca.focus();
  } else {
    errorMarca.style.display = "none";
    contadorValidacion++;
  }

  // Determinar la prioridad del producto (Urgente o Normal)
  var prioridad = '';
  if (urgente.checked) {
    prioridad = 'Urgente';
  } else {
    prioridad = 'Normal';
  }

  // Agregar el producto al carrito si los campos son válidos
  if (selected == "Mezcal") {
    if (contadorValidacion == 4) {
      rellenarTablaImpresionHolograma(
        marca.value.trim().toUpperCase(),
        'MEZCAL',
        categoria.value.trim().toUpperCase(),
        parseInt(cantidadNumeros.value),
        prioridad.toUpperCase(),
        importe.textContent,
        observaciones.value.toUpperCase(),
        estado.value.trim().toUpperCase(),
      );
    }
  } else {
    if (contadorValidacion == 2) {
      rellenarTablaImpresionHolograma(
        marca.value.trim().toUpperCase(),
        'BEBIDAS CON MEZCAL',
        '-',
        parseInt(cantidadNumeros.value),
        prioridad.toUpperCase(),
        importe.textContent,
        observaciones.value.toUpperCase(),
        '-',
      );
    }
  }
}

/*
  Esta función agrega una nueva solicitud al carrito.
  @param {string} marca - La marca del producto a imprimir en holograma.
  @param {string} tipo - El tipo de producto (por ejemplo: "Mezcal" o "Bebidas con Mezcal").
  @param {string} estado - El estado del producto para el caso específico del tipo "Mezcal".
  @param {number} cantidad - La cantidad de hologramas a imprimir en la solicitud.
  @param {string} prioridad - La prioridad de la solicitud (por ejemplo: "Urgente" o "Normal").
  @param {number} importe - El importe total de la solicitud en formato de texto (por ejemplo: "$123.45").
  @param {string} observaciones - Cualquier observación o nota relevante para la solicitud, en formato de texto.
*/
function rellenarTablaImpresionHolograma(marca, tipo, categoria, cantidad, prioridad, importe, observaciones, estado) {
  // Agrega nuevo producto al arreglo
  const nuevoProducto = {
    marca: marca,
    tipo: tipo,
    estado: estado,
    cantidad: cantidad,
    prioridad: prioridad,
    importe: importe,
    observaciones: observaciones,
    categoria: categoria
  };
  productosDeSolicitudDeHologramas.push(nuevoProducto);

  const table = document.getElementById('tablaSolicitudHolograma').getElementsByTagName('tbody')[0];

  // Crear una nueva fila (<tr>)
  const nuevaFila = document.createElement('tr');

  // Datos a rellenar en las celdas
  const datosFila = [marca, tipo, categoria, estado, cantidad, prioridad, importe, observaciones];

  for (const data of datosFila) {
    // Crear una nueva celda (<td>)
    const nuevaCelda = document.createElement('td');
    nuevaCelda.textContent = data;

    // Aplicar estilo a la celda de prioridad si es 'Urgente'
    if (prioridad === 'Urgente' && datosFila.indexOf(data) === 4) {
      nuevaCelda.style.backgroundColor = '#eea236';
    }

    // Agregar la celda a la nuevaFila
    nuevaFila.appendChild(nuevaCelda);
  }

  // Crear la celda para el botón eliminar
  const celdaEliminar = document.createElement('td');

  // Crear el botón con el ícono
  const botonEliminar = document.createElement('button');
  botonEliminar.type = 'button';
  botonEliminar.classList.add('btn', 'btn-light'); // Agregar las clases 'btn' y 'btn-light'

  // Agregar un evento onclick al botónEliminar
  botonEliminar.onclick = function() {
    eliminarPedidoImpresionHolograma(nuevaFila);
  };
  // Crear el ícono
  const iconoEliminar = document.createElement('i');
  iconoEliminar.classList.add('bi', 'bi-trash3'); // Agregar la clase 'bi' para Bootstrap Icons y 'bi-trash3' para el ícono de basura

  // Agregar el ícono al botón
  botonEliminar.appendChild(iconoEliminar);

  // Agregar el botón a la celdaEliminar
  celdaEliminar.appendChild(botonEliminar);

  // Agregar la celdaEliminar a la nuevaFila
  nuevaFila.appendChild(celdaEliminar);

  // Agregar la nueva fila a la tabla
  table.appendChild(nuevaFila);
  formatearFormularioImpresionHolograma();
  // al tener una nueva solicitud agregada, se suma al valor total del importe
  document.getElementById("totalAPagar").textContent = "$" + sumarImportesImpresionHolograma(6);
}

/*
  Esta función suma todos los importes de las solicitudes
  @param columna - Valor numerico de la calumna a sumar
*/
function sumarImportesImpresionHolograma(columna) {
  // Obtenemos la tabla por su ID
  var tabla = document.getElementById("tablaSolicitudHolograma");

  // Obtenemos la tabla por su ID
  var tabla = document.getElementById("tablaSolicitudHolograma");

  // Obtenemos todas las filas de la tabla
  var filas = tabla.getElementsByTagName("tr");

  // Variable para almacenar la suma
  var suma = 0;

  // Iteramos por todas las filas y sumamos el valor de la columna deseada
  for (var i = 0; i < filas.length; i++) {
    // Obtenemos todas las celdas de la fila actual
    var celdas = filas[i].getElementsByTagName("td");

    // Verificamos si la fila tiene suficientes celdas para la columna deseada
    if (celdas.length > columna) {
      // Obtenemos el valor de la celda de la columna deseada y lo convertimos a número usando parseInt
      var valor = parseFloat((celdas[columna].innerText).replace('$', ''));
      // Verificamos si es un número válido antes de sumarlo
      if (!isNaN(valor)) {
        suma += valor;
      }
    }
  }
  return suma;
}

// Función para eliminar la fila que contiene el botón
function eliminarPedidoImpresionHolograma(fila) {
  
  // Asegúrate de que 'fila' sea un elemento válido y tenga un padre antes de intentar eliminarlo.
  if (fila && fila.parentNode) {
    Swal.fire({
      title: 'Atención',
      text: "¿Realmente deseas eliminar el pedido?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'No',
      confirmButtonText: 'Sí'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Eliminado',
          'Su pedido a sido eliminado',
          'success'
        )
        // Obtener el índice de la fila en la tabla
        const rowIndex = fila.rowIndex - 1; // Restar 1 para ajustar el índice del arreglo

        // Eliminar el elemento del arreglo
        productosDeSolicitudDeHologramas.splice(rowIndex, 1);
        // eliminar de la tabla visual
        fila.parentNode.removeChild(fila);
        document.getElementById("totalAPagar").textContent = "$" + sumarImportesImpresionHolograma(6);
        if (productosDeSolicitudDeHologramas.length<1){
          $("#listaHologramasSolicitar").hide();
          $("#procederConPago").hide();
        } 
      }
    })
    
  }
}
// Esta funcion formatea todo el formulario cada vez que se agrega una nueva solicitud al carrito
function formatearFormularioImpresionHolograma(){
  document.getElementById('formularioHolograma').reset();
  document.getElementById('listaHologramasSolicitar').style.display = "block";
  radioUrgenteImpresionHolograma();
}

// Esta funcion muestra el mensaje de privacidad despues de selecionar algun metodo de pago
function mostrarMensajesDePrivacidadImpresionHolograma(select) {  
  if(select.value != ''){
    document.getElementById('procederConPago').style.display = "block";
  }
}

function checarTipoDePagoSolicitudHolograma(){
  if(parseInt(document.getElementById('formatosDePago').value)>2){
    document.getElementById('pagoConComprobante').style.display = "block";
  } else{
    document.getElementById('pagoConComprobante').style.display = "none";
  }
  if(parseInt(document.getElementById('cambiarFormatosDePago').value)>2){
    document.getElementById('cambioPagoConComprobante').style.display = "block";
  } else{
    document.getElementById('cambioPagoConComprobante').style.display = "none";
  }
}

// Esta funcion muestra el boton de generar solicitud en caso de aceptar los terminos de privacidad
function mostrarBotonGenerarSolicitudImpresionHolograma(estado){
  if(estado.checked){
    document.getElementById('generarSolicitud').style.display = "block";
    document.getElementById('cancelarSolicitud').className = ('text-center col-5 col-sm-6');
  }else{
    document.getElementById('generarSolicitud').style.display = "none";
    document.getElementById('cancelarSolicitud').className = ('text-center col-12');
  }
  
}


function cancelarSolicitudHologramas(){
  Swal.fire({
    title: 'Atención',
    text: "¿Realmente deseas cancelar el pedido?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'No',
    confirmButtonText: 'Sí'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Eliminado',
        'Su listado de pedidos a sido eliminado',
        'success'
      )
      cargarContenidoMenus('modulos/solicitudes/impresionHologramas/impresionhologramas.php','impresionDeHologramas', 'IMPRESIÓN DE HOLOGRAMAS');
    }
  })
}

function generarSolicitudHologramas(){

  var SolicitudCompleta = true;
  if(parseInt(document.getElementById('formatosDePago').value)>2){
    const fileInput = document.getElementById('file_comp');
    const selectedFile = fileInput.files[0]; // Obtener el primer archivo seleccionado (si hay varios)
    if (!selectedFile) {
      document.getElementById("errorPagoConComprobante").style.display = "block";
      document.getElementById("file_comp").focus();
      SolicitudCompleta = false;
    }
  }
  if (SolicitudCompleta == true) {
    Swal.fire({
      title: 'Atención',
      text: "¿Realmente deseas solicitar la impresión de estos hologramas?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'No',
      confirmButtonText: 'Sí'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Exito',
          'Su solicitud se ha recibido exitosamente con folio: FH-1169',
          'success'
        )
        cargarContenidoMenus('modulos/solicitudes/impresionHologramas/impresionhologramas.php','impresionDeHologramas', 'IMPRESIÓN DE HOLOGRAMAS');
      }
    })
  } 
}

function cambiarTipoDepago(){

  var SolicitudCompleta = true;
  if(parseInt(document.getElementById('cambiarFormatosDePago').value)>2){
    const fileInput = document.getElementById('cambioPago_file_comp');
    const selectedFile = fileInput.files[0]; // Obtener el primer archivo seleccionado (si hay varios)
    if (!selectedFile) {
      document.getElementById("errorCambioPagoConComprobante").style.display = "block";
      document.getElementById("cambioPago_file_comp").focus();
      SolicitudCompleta = false;
    }
  }
  if (SolicitudCompleta == true) {
    $('#exampleModalcambioFormaDePago').modal('hide');
  }

}


/*
  Esta función convierte un número en su representación en letras en español.
  @param {number} numero - El número que se desea convertir en letras.
  @returns {string} - La representación en letras del número dado.
*/
function numeroEnLetras(numero) {
  // Arrays que contienen las palabras para las unidades, especiales, decenas y centenas en español.
  const unidades = ['', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve'];
  const especiales = ['', 'once', 'doce', 'trece', 'catorce', 'quince', 'dieciséis', 'diecisiete', 'dieciocho', 'diecinueve'];
  const decenas = ['', '', 'veinte', 'treinta', 'cuarenta', 'cincuenta', 'sesenta', 'setenta', 'ochenta', 'noventa'];
  const centenas = ['', 'ciento', 'doscientos', 'trescientos', 'cuatrocientos', 'quinientos', 'seiscientos', 'setecientos', 'ochocientos', 'novecientos'];
  const escalas = ['', 'mil', 'millón', 'mil millones', 'billón']; // Añadir más escalas según sea necesario

  // Caso especial para el número cero.
  if (numero === 0) return 'cero';

  // Función interna para convertir un número de tres dígitos en palabras.
  function convertirTresDigitos(num) {
    if (num === 0) return '';
    if (num < 10) return unidades[num];
    if (num === 10) return 'diez';
    if (num < 20) return especiales[num - 10];
    if (num < 100) {
      const decena = Math.floor(num / 10);
      const unidad = num % 10;
      return decenas[decena] + (unidad !== 0 ? ' y ' + unidades[unidad] : '');
    }
    if (num === 100) return 'cien';
    const centena = Math.floor(num / 100);
    const resto = num % 100;
    return centenas[centena] + (resto !== 0 ? ' ' + convertirTresDigitos(resto) : '');
  }

  // Variables para almacenar las palabras convertidas y el índice de la escala.
  let palabras = '';
  let indiceEscala = 0;

  // Ciclo para convertir el número de tres dígitos a la vez y agregarlo a la representación en letras.
  while (numero > 0) {
    const tresDigitos = numero % 1000;
    if (tresDigitos !== 0) {
      const escala = indiceEscala > 0 ? escalas[indiceEscala] : '';
      const prefijo = escala ? convertirTresDigitos(tresDigitos) + ' ' + escala + ' ' : convertirTresDigitos(tresDigitos);
      palabras = prefijo + palabras;
    }
    numero = Math.floor(numero / 1000);
    indiceEscala++;
  }
  
  return palabras.trim(); // Se retorna la representación en letras del número sin espacios en blanco al inicio o final.
}

