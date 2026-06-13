let currentRotation = 0;


function mostrarContraActual(){
  let contraActualConfigGenerales = document.getElementById('contraActualConfigGenerales');
  if (contraActualConfigGenerales.type === 'password') {
    contraActualConfigGenerales.type = 'text';
    document.getElementById('iconPasswordActual').classList.remove('bi-eye-fill');
    document.getElementById('iconPasswordActual').classList.add('bi-eye-slash-fill');
  } else {
    contraActualConfigGenerales.type = 'password';
    document.getElementById('iconPasswordActual').classList.remove('bi-eye-slash-fill');
    document.getElementById('iconPasswordActual').classList.add('bi-eye-fill');
  } 
}

function mostrarContraNueva(){
  let contraNuevaConfigGenerales = document.getElementById('contraNuevaConfigGenerales');
  if (contraNuevaConfigGenerales.type === 'password') {
    contraNuevaConfigGenerales.type = 'text';
    document.getElementById('iconPasswordNueva').classList.remove('bi-eye-fill');
    document.getElementById('iconPasswordNueva').classList.add('bi-eye-slash-fill');
  } else {
    contraNuevaConfigGenerales.type = 'password';
    document.getElementById('iconPasswordNueva').classList.remove('bi-eye-slash-fill');
    document.getElementById('iconPasswordNueva').classList.add('bi-eye-fill');
  } 
}

function mostrarContraNueva2(){
  let repetirContraActualConfigGenerales = document.getElementById('repetirContraActualConfigGenerales');
  if (repetirContraActualConfigGenerales.type === 'password') {
    repetirContraActualConfigGenerales.type = 'text';
    document.getElementById('iconPasswordNueva2').classList.remove('bi-eye-fill');
    document.getElementById('iconPasswordNueva2').classList.add('bi-eye-slash-fill');
  } else {
    repetirContraActualConfigGenerales.type = 'password';
    document.getElementById('iconPasswordNueva2').classList.remove('bi-eye-slash-fill');
    document.getElementById('iconPasswordNueva2').classList.add('bi-eye-fill');
  }
}

function cambiarPassword() {
  let contraActualConfigGenerales = document.getElementById('contraActualConfigGenerales');
  let contraNuevaConfigGenerales = document.getElementById('contraNuevaConfigGenerales');
  let repetirContraActualConfigGenerales = document.getElementById('repetirContraActualConfigGenerales');
  let passwordNuevo;
  let passwordActual;
  
  if (contraActualConfigGenerales.value == '') {
    document.getElementById('labelErrorContraActual').classList.remove("d-none");
    contraActualConfigGenerales.focus(); 
  } else if (contraNuevaConfigGenerales.value == '') {
    passwordActual = contraActualConfigGenerales.value;
    document.getElementById('labelErrorContraActual').classList.add("d-none");
    document.getElementById('labelErrorContraNueva').classList.remove("d-none");
    contraNuevaConfigGenerales.focus();
  } else if (validarPassword(contraNuevaConfigGenerales.value) == false) {
    document.getElementById('labelErrorContraNueva').classList.add("d-none");
    document.getElementById('labelErrorContraValida').classList.remove("d-none");
    contraNuevaConfigGenerales.focus();
  } else if (contraNuevaConfigGenerales.value != repetirContraActualConfigGenerales.value) {
    document.getElementById('labelErrorContraValida').classList.add("d-none");
    document.getElementById('labelErrorContraCoincidir').classList.remove("d-none");
    repetirContraActualConfigGenerales.focus();
  } else {
    passwordNuevo = contraNuevaConfigGenerales.value;
    document.getElementById('labelErrorContraCoincidir').classList.add("d-none");
    document.getElementById('formCambioPassword').reset();
    //ajax
    Swal.fire(
      'Contraseña actualizada',
      '',
      'success'
    )
  }
}

function validarPassword(password) {
  const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
  return regex.test(password);
}

function validarCamposConfigGeneral(campo) {
  if (campo.id == 'contraActualConfigGenerales') {
    if (campo.value != '') {
      document.getElementById('labelErrorContraActual').classList.add('d-none');
    } else {
      document.getElementById('labelErrorContraActual').classList.remove('d-none');
    }
  }
  if (campo.id == 'contraNuevaConfigGenerales') {
    if (campo.value != '') {
      document.getElementById('labelErrorContraNueva').classList.add('d-none');
      if (validarPassword(campo.value) == false) {
        document.getElementById('labelErrorContraValida').classList.remove('d-none');
      } else {
        document.getElementById('labelErrorContraValida').classList.add('d-none');
      }
    } else {
      document.getElementById('labelErrorContraValida').classList.add('d-none');
      document.getElementById('labelErrorContraNueva').classList.remove('d-none');
    }
  }
  if (campo.id == 'repetirContraActualConfigGenerales') {
    if (campo.value != '' && document.getElementById('contraNuevaConfigGenerales').value == document.getElementById('repetirContraActualConfigGenerales').value) {
      document.getElementById('labelErrorContraCoincidir').classList.add('d-none');
    } else {
      document.getElementById('labelErrorContraCoincidir').classList.remove('d-none');
    }
  }

}

function cambioImagenConfig() {
  const inputFileCambioImagenConfig = document.getElementById("inputFileCambioImagenConfig");
  inputFileCambioImagenConfig.click();
}

function rotateImage(angle) {
  let previewImage = document.getElementById('previewImage');
  const canvas = document.createElement('canvas');
  const ctx = canvas.getContext('2d');
  const image = new Image();

  image.src = previewImage.src;

  image.onload = function() {
    canvas.width = image.height;
    canvas.height = image.width;
    ctx.translate(canvas.width / 2, canvas.height / 2);
    ctx.rotate(angle * (Math.PI / 180));
    ctx.drawImage(image, -image.width / 2, -image.height / 2);
    previewImage.src = canvas.toDataURL('image/jpeg', 0.8);
  };
}

function rotarDerecho() {
  currentRotation += 90;
  rotateImage(currentRotation);
}

function rotarIzquierdo() {
  currentRotation -= 90;
  rotateImage(currentRotation);
}

function validarImagenConfig(input) {
  let previewImage = document.getElementById('previewImage');
let uploadButton = document.getElementById('uploadButton');
let rotateClockwiseButton = document.getElementById('rotateClockwiseButton');
let rotateCounterClockwiseButton = document.getElementById('rotateCounterClockwiseButton');
  let btn = document.getElementById('botonSeleccionarImagenConfig');
  
  if (input.files.length > 0) {
    btn.value = input.files[0].name;
    const selectedFile = input.files[0];

    if (selectedFile) {
      const reader = new FileReader();

      reader.onload = function() {
        const image = new Image();
        image.src = reader.result;

        image.onload = function() {
          const canvas = document.createElement('canvas');
          const ctx = canvas.getContext('2d');

          const maxDim = 250;
          let width = image.width;
          let height = image.height;

          if (width > height) {
            if (width > maxDim) {
              height *= maxDim / width;
              width = maxDim;
            }
          } else {
            if (height > maxDim) {
              width *= maxDim / height;
              height = maxDim;
            }
          }

          canvas.width = width;
          canvas.height = height;
          ctx.drawImage(image, 0, 0, width, height);

          previewImage.src = canvas.toDataURL('image/jpeg', 0.8);
          uploadButton.removeAttribute('disabled');
        };
      };

      reader.readAsDataURL(selectedFile);
    }
    rotateClockwiseButton.removeAttribute('disabled');
    rotateCounterClockwiseButton.removeAttribute('disabled');
  }
}