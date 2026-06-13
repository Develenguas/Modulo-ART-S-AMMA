
function mostrarContraActual(){
  let contra = document.getElementById('contra');
  if (contra.type === 'password') {
    contra.type = 'text';
    
    document.getElementById('ojitocontra').innerHTML= "";
    document.getElementById('ojitocontra').innerHTML= "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye-slash-fill' viewBox='0 0 16 16'><path d='m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z'/><path d='M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z'/></svg>";
  } else {
    contra.type = 'password';
    document.getElementById('ojitocontra').innerHTML= "";
    document.getElementById('ojitocontra').innerHTML= "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye-fill' viewBox='0 0 16 16'><path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z'/><path d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z'/></svg>";
  } 
}

function validarFormato(input) {
  // Expresión regular para el formato CXXXX (C seguido de 4 números)
  var regex = /^C\d{4}$/;
  return regex.test(input.toUpperCase());
}

function validarUsuario(){
  return true;
}

function validarContrasenia(){
  return true;
}

function validarCorreo(usuario){
  return usuario+'correo@hotmail.com';
}

function enviarCorreo(){
  
}

function recuperarContrasenia(){
  var correo = validarCorreo("ricky");
  if(correo!=null){
    Swal.fire({
      title: 'Recuperación',
      html: "<br> <img align='middle' src='modulos/login/images/email.png' alt='' height='90' width='110'> <br><br> <strong> Correo electrónico de recuperación</strong> AMMA te enviará un correo electrónico con un código de verificación de un solo uso a tu correo registrado: <strong>"+correo+"</strong>",
      confirmButtonText: "Enviar",
      showCancelButton: true,
      cancelButtonText: 'Cancelar',
      showCloseButton: true,
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: 'Recuperación',
          html: "<br> <img align='middle' src='modulos/login/images/email.png' alt='' height='90' width='110'> <br><br> <strong> Ingresa el código de verificación </strong> AMMA te envió un código de verificación al correo electrónico <strong>"+correo+"</strong>",
          confirmButtonText: "Siguiente",
          input: 'text',
          inputAttributes: {
            autocapitalize: 'off'
          },
          showLoaderOnConfirm: true,
          
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
              title: `${result.value}`,
            })
          }
        })
      }
    })
  }else{
    Swal.fire({
      title: 'Recuperación',
      html: "<br> <img align='middle' src='modulos/login/images/email.png' alt='' height='90' width='110'> <br><br> <strong> Correo electrónico de recuperación</strong> AMMA no tiene registrado tu correo electrónico. No se puede enviar el código de recuperación. Te invitamos a que nos contactes al siguiente correo: <strong>tecnologias@amma.org.mx</strong>",
      confirmButtonText: "Aceptar",
    });
  }
}

function validarInicioSesion(){
  var elemento = document.getElementById("mensajeDeInscripcion");
  document.getElementById('errorSinContra').style.display = "none"; // Ocultar otro error si está visible
  document.getElementById('errorFormatoUsuario').style.display = "none"; // Ocultar error de formato si está visible
  document.getElementById('errorSinUsuario').style.display = "none"; // Ocultar otro error si está visible
  document.getElementById('errorUsuario').style.display = "none";
  elemento.innerHTML = "<a href='https://portal.amma.org.mx/inscripcion/'' class='col-10 mx-auto mb-3 text-center text-white'>¿Deseas tener tu cuenta? Regístrate aquí </a>";
  if (document.getElementById('usuario').value.trim() == '') {
    document.getElementById('errorSinUsuario').style.display = "block";
    document.getElementById('usuario').focus();
  }else if (document.getElementById('contra').value.trim() == '') {
    document.getElementById('errorSinContra').style.display = "block";
    document.getElementById('contra').focus();
  } else {
    if (validarFormato(document.getElementById('usuario').value)) {
      if(validarUsuario()){
        if(validarContrasenia()){
          crearSesion(document.getElementById('usuario').value.trim());
        }else{
          document.getElementById('errorUsuario').style.display = "block";
          elemento.innerHTML = "<a href='#'' class='col-10 mx-auto mb-3 text-center text-white' onclick='recuperarContrasenia();'>¿Olvidaste tu contraseña? </a>";
        }
      }else{
        document.getElementById('errorUsuario').style.display = "block";
      }
    } else {
      document.getElementById('errorFormatoUsuario').style.display = "block";
    }
    
  } 
}

function crearSesion(usuario) {
  
  $.ajax({
    url: 'modulos/login/crearSesion.php',  // Ruta
    type: 'POST',  // Tipo de solicitud (POST o GET)
    data: "submit=" + usuario,
    success: function() {
      window.location = "";
    },
    error: function(xhr, status, error) {
      alert('Error al crear la sesión');
    }
  });
}