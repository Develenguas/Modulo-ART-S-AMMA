let subMenus = document.querySelectorAll(".opcionMenus");
function seleccionarOpcionSubmenu(botonSeleccionado) {
  // Removemos la clase "selected" de todos los botones
  subMenus.forEach((boton) => {
    boton.classList.remove("subMenuNavbarSeleccionado");
  });
  botonSeleccionado.classList.add("subMenuNavbarSeleccionado");
}

let botones = document.querySelectorAll(".seccionitem");
function seleccionarOpcion(botonSeleccionado) {
  // Removemos la clase "selected" de todos los botones
  botones.forEach((boton) => {
    boton.classList.remove("selected");
  });
  botonSeleccionado.classList.add("selected");
}

$(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
});

const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

function abrirModal(id) {
  let modal = document.getElementById(id);
  let modalBootstrap = new bootstrap.Modal(modal);
  modalBootstrap.show();
}


function mostrarContenidoModal(ruta, titulo, contenido, footer, idTituloModal, idCuerpoModal, idFooter, callback) {
  $.ajax({
    url: ruta,
    success: function (datos) {
      let divContenido = $("<div>").html(datos).find("#" + contenido);
      let divFooter = $("<div>").html(datos).find("#" + footer);
      $("#" + idTituloModal).html(titulo.toUpperCase());
      $("#" + idCuerpoModal).html(divContenido);
      $("#" + idFooter).html(divFooter);
      // Llamar al callback si se proporciona
      if (callback) {
        callback();
      }
    }
  });
}
function esDiaDomingoSabado(id) {
  var selectedDate = $("#" + id).val();
  var dateObject = new Date(selectedDate + "T00:00:00Z"); // Convertir a objeto de fecha en UTC
  var dayOfWeek = dateObject.getUTCDay();
  if(dayOfWeek==0 ||dayOfWeek==6 ){
    $("#" + id).focus();
    Swal.fire({
      icon: 'warning',
      title: 'Advertencia',
      text: 'Los servicios para Oaxaca no están disponibles para el dia sabado o domingo, seleccione otra fecha!',
    })
    return false;
  }else{
    return true;
  }
}

function sumarDiasAFecha(fecha, dias) {
  var nuevaFecha = new Date(fecha);

  var dateObject = new Date(fecha); // Convertir a objeto de fecha en UTC
  var dayOfWeek = dateObject.getUTCDay()+dias;
  
  if(dayOfWeek==6){
    nuevaFecha.setDate(nuevaFecha.getDate() + (dias+2));
    return nuevaFecha.toISOString().slice(0, 10);
  }else if (dayOfWeek==7 ){
    nuevaFecha.setDate(nuevaFecha.getDate() + (dias+1));
    return nuevaFecha.toISOString().slice(0, 10);
  }else{
    nuevaFecha.setDate(nuevaFecha.getDate() + (dias));
    return nuevaFecha.toISOString().slice(0, 10);
  }
  
}

function cerrarSesion() {
  $.ajax({
    url: 'modulos/login/cerrarSesion.php',  // Ruta al archivo PHP
    type: 'POST',              // Método de la solicitud (POST o GET)
    success: function(response) {
      window.location = "";
    },
    error: function(xhr, status, error) {
      console.error(error);  // Manejo de errores
    }
  });
}

$(document).ready(function() {
  $('.nav-sidebar .nav-treeview').hide(); // Ocultar todos los submenús al principio
  
  $('.nav-sidebar .nav-item').on('click', function() {
    var submenu = $(this).find('.nav-treeview');
    
    if (submenu.is(':visible')) {
      submenu.slideUp();
      $(this).removeClass('active');
    } else {
      $('.nav-sidebar .nav-item').removeClass('active');
      $(this).addClass('active');
      
      // Verificar si el submenu no es parte del menú principal antes de ocultarlo
      if (!$(this).closest('.nav-treeview').length) {
        $('.nav-treeview').slideUp();
      }
      submenu.slideDown();
    }
    return false; // Evitar el comportamiento predeterminado del enlace
  });
});



