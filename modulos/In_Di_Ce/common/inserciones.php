<?php
/**
 * inserciones.php - Versión corregida para evitar HTML en respuesta JSON
 */

// IMPORTANTE: No debe haber NADA antes de este tag PHP
error_reporting(E_ALL);
ini_set('display_errors', 0); // Desactivar mostrar errores en pantalla
ini_set('log_errors', 1);     // Activar log de errores

// Limpiar cualquier output buffer previo
if (ob_get_level()) {
    ob_clean();
}

// Iniciar output buffering para capturar cualquier salida accidental
ob_start();

require_once 'conexion.php';

// Configurar headers ANTES de cualquier output
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Manejar OPTIONS request
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    ob_end_clean();
    exit(0);
}

// Función para respuesta JSON segura
function jsonResponse($data)
{
    // Limpiar cualquier output previo
    if (ob_get_level()) {
        ob_clean();
    }

    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit;
}

// Función para logging
function logError($message, $data = null)
{
    $logMessage = date('Y-m-d H:i:s') . " - ERROR: " . $message;
    if ($data !== null) {
        $logMessage .= " - Data: " . json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    error_log($logMessage . "\n", 3, "arts_errors.log");
}

function logInfo($message, $data = null)
{
    $logMessage = date('Y-m-d H:i:s') . " - INFO: " . $message;
    if ($data !== null) {
        $logMessage .= " - Data: " . json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    error_log($logMessage . "\n", 3, "arts_debug.log");
}

// Función para guardar un ART completo con nuevos campos
function guardarArtCompleto($datosFormulario)
{
    global $conn;

    try {
        logInfo("Iniciando guardado de ART", $datosFormulario);

        // Validar conexión
        if (!$conn) {
            throw new Exception("Error de conexión a la base de datos");
        }

        // Validar campos requeridos
        $camposRequeridos = array(
            'numeroControl' => 'Número de Control',
            'muestreadoPor' => 'Muestreado por',
            'fechaMuestreo' => 'Fecha de Muestreo',
            'fechaEmision' => 'Fecha de Emisión',
            'numTapada' => 'Número de Tapada',
            'analista' => 'Analista'
        );

        foreach ($camposRequeridos as $campo => $nombre) {
            if (!isset($datosFormulario[$campo]) || trim($datosFormulario[$campo]) === '') {
                throw new Exception("El campo '$nombre' es requerido");
            }
        }

        // Validar especies
        if (!isset($datosFormulario['especiesSeleccionadas']) || empty($datosFormulario['especiesSeleccionadas'])) {
            throw new Exception("Debe seleccionar al menos una especie");
        }

        $especiesSeleccionadas = $datosFormulario['especiesSeleccionadas'];
        if (!is_array($especiesSeleccionadas)) {
            throw new Exception("Las especies seleccionadas deben ser un array");
        }

        // Validar cada especie con nuevos campos
        foreach ($especiesSeleccionadas as $index => $especie) {
            if (!isset($especie['id']) || empty($especie['id'])) {
                throw new Exception("Especie en posición " . ($index + 1) . " no tiene ID válido");
            }

            $nombreEspecie = isset($especie['nombre']) ? $especie['nombre'] : 'Desconocida';

            // Validar campos obligatorios por especie
            if (!isset($especie['numPinas']) || !is_numeric($especie['numPinas']) || $especie['numPinas'] <= 0) {
                throw new Exception("Número de piñas de la especie '$nombreEspecie' no es válido");
            }

            if (!isset($especie['kg']) || !is_numeric($especie['kg']) || $especie['kg'] <= 0) {
                throw new Exception("Kilogramos de la especie '$nombreEspecie' no es válido");
            }

            if (!isset($especie['ensayo1']) || !is_numeric($especie['ensayo1'])) {
                throw new Exception("Ensayo 1 de la especie '$nombreEspecie' no es válido");
            }

            if (!isset($especie['ensayo2']) || !is_numeric($especie['ensayo2'])) {
                throw new Exception("Ensayo 2 de la especie '$nombreEspecie' no es válido");
            }
        }

        // Iniciar transacción
        if (!mysqli_autocommit($conn, FALSE)) {
            throw new Exception("Error iniciando transacción: " . mysqli_error($conn));
        }

        logInfo("Transacción iniciada");

        // Inserción directa (versión simplificada para evitar problemas)
        $resultado = insertarDirecto($datosFormulario);

        // Confirmar transacción
        if (!mysqli_commit($conn)) {
            throw new Exception("Error confirmando transacción: " . mysqli_error($conn));
        }

        mysqli_autocommit($conn, TRUE);
        logInfo("Transacción completada exitosamente");

        return $resultado;

    } catch (Exception $e) {
        if ($conn) {
            mysqli_rollback($conn);
            mysqli_autocommit($conn, TRUE);
        }

        logError("Error en guardarArtCompleto", array(
            'message' => $e->getMessage(),
            'line' => $e->getLine(),
            'file' => $e->getFile()
        ));

        return array(
            'success' => false,
            'message' => 'Error al guardar ART: ' . $e->getMessage(),
            'data' => null
        );
    }
}

function insertarDirecto($datosFormulario)
{
    global $conn;

    try {
        // Generar números consecutivos
        $year = date('Y');
        $result = mysqli_query($conn, "SELECT COALESCE(MAX(num_consecutivo), 0) + 1 as siguiente FROM arts_agave WHERE anio = $year");

        if (!$result) {
            throw new Exception("Error obteniendo consecutivo: " . mysqli_error($conn));
        }

        $row = mysqli_fetch_assoc($result);
        $numConsecutivo = $row['siguiente'];
        $numEscrito = "ART" . str_pad($numConsecutivo, 4, '0', STR_PAD_LEFT);

        // Insertar ART principal
        $sql = "INSERT INTO arts_agave (
            numero_control, num_escrito, num_consecutivo, muestreado_por,
            fecha_muestreo, fecha_emision, num_tapada, analista, 
            observaciones, anio, usuario_registro, status
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1)";

        $stmt = mysqli_prepare($conn, $sql);
        if (!$stmt) {
            throw new Exception("Error preparando inserción: " . mysqli_error($conn));
        }

        $usuario = isset($datosFormulario['usuario']) ? $datosFormulario['usuario'] : 'Sistema';
        $observaciones = isset($datosFormulario['observaciones']) ? $datosFormulario['observaciones'] : '';

        mysqli_stmt_bind_param(
            $stmt,
            "ssissssssis",
            $datosFormulario['numeroControl'],
            $numEscrito,
            $numConsecutivo,
            $datosFormulario['muestreadoPor'],
            $datosFormulario['fechaMuestreo'],
            $datosFormulario['fechaEmision'],
            $datosFormulario['numTapada'],
            $datosFormulario['analista'],
            $observaciones,
            $year,
            $usuario
        );

        if (!mysqli_stmt_execute($stmt)) {
            throw new Exception("Error ejecutando inserción: " . mysqli_stmt_error($stmt));
        }

        $artId = mysqli_insert_id($conn);
        mysqli_stmt_close($stmt);

        if (!$artId) {
            throw new Exception("No se pudo obtener el ID del ART insertado");
        }

        // Insertar especies
        insertarEspecies($artId, $datosFormulario['especiesSeleccionadas']);

        return array(
            'success' => true,
            'message' => 'ART guardado exitosamente',
            'data' => array(
                'artId' => $artId,
                'numEscrito' => $numEscrito,
                'numConsecutivo' => $numConsecutivo,
                'especiesGuardadas' => count($datosFormulario['especiesSeleccionadas'])
            )
        );

    } catch (Exception $e) {
        throw $e; // Re-lanzar para manejo en función padre
    }
}

// Función para insertar especies con nuevos campos
function insertarEspecies($artId, $especiesSeleccionadas)
{
    global $conn;

    try {
        // Preparar consulta con nuevos campos
        $sql = "INSERT INTO arts_agave_especies (art_id, especie_id, num_pinas, kg, ensayo_1, ensayo_2, orden) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmtEspecie = mysqli_prepare($conn, $sql);

        if (!$stmtEspecie) {
            throw new Exception("Error preparando consulta de especies: " . mysqli_error($conn));
        }

        foreach ($especiesSeleccionadas as $index => $especie) {
            $numPinas = intval($especie['numPinas']);
            $kg = floatval($especie['kg']);
            $ensayo1 = floatval($especie['ensayo1']);
            $ensayo2 = floatval($especie['ensayo2']);
            $orden = $index + 1;
            $especieId = intval($especie['id']);

            mysqli_stmt_bind_param(
                $stmtEspecie,
                "iiidddi",
                $artId,
                $especieId,
                $numPinas,
                $kg,
                $ensayo1,
                $ensayo2,
                $orden
            );

            if (!mysqli_stmt_execute($stmtEspecie)) {
                $nombreEspecie = isset($especie['nombre']) ? $especie['nombre'] : 'Desconocida';
                throw new Exception("Error insertando especie '$nombreEspecie': " . mysqli_stmt_error($stmtEspecie));
            }
        }

        mysqli_stmt_close($stmtEspecie);

    } catch (Exception $e) {
        throw $e; // Re-lanzar para manejo en función padre
    }
}

// Manejar peticiones
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        logInfo("Petición POST recibida", array(
            'action' => isset($_POST['action']) ? $_POST['action'] : 'No definida',
            'content_type' => isset($_SERVER['CONTENT_TYPE']) ? $_SERVER['CONTENT_TYPE'] : 'No definido',
            'data_keys' => array_keys($_POST)
        ));

        $action = isset($_POST['action']) ? $_POST['action'] : null;

        switch ($action) {
            case 'guardarArt':
                // Decodificar JSON de especies
                $especiesJson = isset($_POST['especiesSeleccionadas']) ? $_POST['especiesSeleccionadas'] : '[]';
                $especiesSeleccionadas = json_decode($especiesJson, true);

                if (json_last_error() !== JSON_ERROR_NONE) {
                    jsonResponse(array(
                        'success' => false,
                        'message' => 'Error en formato JSON de especies: ' . json_last_error_msg(),
                        'data' => null
                    ));
                }

                $datosFormulario = array(
                    'numeroControl' => trim(isset($_POST['numeroControl']) ? $_POST['numeroControl'] : ''),
                    'muestreadoPor' => trim(isset($_POST['muestreadoPor']) ? $_POST['muestreadoPor'] : ''),
                    'fechaMuestreo' => trim(isset($_POST['fechaMuestreo']) ? $_POST['fechaMuestreo'] : ''),
                    'fechaEmision' => trim(isset($_POST['fechaEmision']) ? $_POST['fechaEmision'] : ''),
                    'numTapada' => trim(isset($_POST['numTapada']) ? $_POST['numTapada'] : ''),
                    'analista' => trim(isset($_POST['analista']) ? $_POST['analista'] : ''),
                    'observaciones' => trim(isset($_POST['observaciones']) ? $_POST['observaciones'] : ''),
                    'usuario' => trim(isset($_POST['usuario']) ? $_POST['usuario'] : 'Sistema'),
                    'especiesSeleccionadas' => $especiesSeleccionadas
                );

                $resultado = guardarArtCompleto($datosFormulario);
                jsonResponse($resultado);
                break;

            default:
                jsonResponse(array(
                    'success' => false,
                    'message' => 'Acción no válida: ' . ($action !== null ? $action : 'null'),
                    'data' => null
                ));
                break;
        }

    } catch (Exception $e) {
        logError("Error general en petición POST", array(
            'message' => $e->getMessage(),
            'line' => $e->getLine(),
            'file' => $e->getFile()
        ));

        jsonResponse(array(
            'success' => false,
            'message' => 'Error del servidor: ' . $e->getMessage(),
            'data' => null
        ));
    }

} else {
    jsonResponse(array(
        'success' => false,
        'message' => 'Método no permitido: ' . $_SERVER['REQUEST_METHOD'],
        'data' => null
    ));
}
?>