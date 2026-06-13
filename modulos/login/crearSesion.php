
<?php
session_start();  // Iniciar la sesión

if (isset($_POST['submit'])) {
    $usuario = $_POST['submit'];
    
    $_SESSION['usuario'] = $usuario;
} else {
    echo 'No se recibió el valor del usuario';
}
?>