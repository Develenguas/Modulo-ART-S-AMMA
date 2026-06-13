<?php
require_once 'conexion.php';

// Obtener razón social por número de cliente
function obtenerRazonSocial($numeroControl)
{
    global $conn;

    $stmt = mysqli_prepare($conn, "SELECT nombre FROM clientes WHERE no_cliente = ?");
    mysqli_stmt_bind_param($stmt, "s", $numeroControl);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        mysqli_stmt_close($stmt);
        return $row['nombre'];
    }

    mysqli_stmt_close($stmt);
    return null;
}

// Obtener domicilio completo por número de cliente
function obtenerDomicilio($numeroControl)
{
    global $conn;

    $sql = "
SELECT 
    CONCAT_WS(' ',
        i.calle,
        'No.',
        i.noexterior,
        IF(i.nointerior != '', CONCAT('Int.', i.nointerior), ''),
        ', Col.',
        i.colonia,
        ',',
        m.nombre,
        ',',
        e.nombre,
        'C.P.',
        i.cp
    ) AS domicilio_completo
FROM clientes c
JOIN clientes_instalaciones ci ON c.no_cliente = ci.cliente
JOIN instalaciones i ON ci.instalacion = i.id
JOIN municipios m ON i.municipio = m.id
JOIN estados e ON m.estado = e.clave
WHERE c.no_cliente = ?
LIMIT 1";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $numeroControl);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        mysqli_stmt_close($stmt);
        return $row['domicilio_completo'];
    }

    mysqli_stmt_close($stmt);
    return null;
}

// Obtener todas las especies de agave
function obtenerEspeciesAgave()
{
    global $conn;

    $sql = "SELECT id_especie, genespecie, CONCAT('(', nombreCorto, ')') AS nombreCorto
            FROM especie 
            ORDER BY genespecie";

    $result = mysqli_query($conn, $sql);
    $especies = [];

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $especies[] = [
                'id' => $row['id_especie'],
                'nombre' => trim($row['genespecie']),
                'nombreCorto' => $row['nombreCorto']
            ];
        }
    }

    return $especies;
}

// Funciones de autocompletado
function obtenerTapadas($query)
{
    global $conn;

    $stmt = mysqli_prepare($conn, "SELECT DISTINCT num_tapada FROM arts_agave WHERE num_tapada LIKE CONCAT(?, '%') ORDER BY num_tapada ASC LIMIT 5");
    mysqli_stmt_bind_param($stmt, "s", $query);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $tapadas = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $tapadas[] = $row['num_tapada'];
        }
    }

    mysqli_stmt_close($stmt);
    return $tapadas;
}

function obtenerAnalistas($query)
{
    global $conn;

    $stmt = mysqli_prepare($conn, "SELECT DISTINCT analista FROM arts_agave WHERE analista LIKE CONCAT(?, '%') ORDER BY analista ASC LIMIT 5");
    mysqli_stmt_bind_param($stmt, "s", $query);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $analistas = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $analistas[] = $row['analista'];
        }
    }

    mysqli_stmt_close($stmt);
    return $analistas;
}

function obtenerObservaciones($query)
{
    global $conn;

    $stmt = mysqli_prepare($conn, "SELECT DISTINCT observaciones FROM arts_agave WHERE observaciones LIKE CONCAT(?, '%') AND observaciones != '' ORDER BY observaciones ASC LIMIT 5");
    mysqli_stmt_bind_param($stmt, "s", $query);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $observaciones = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $observaciones[] = $row['observaciones'];
        }
    }

    mysqli_stmt_close($stmt);
    return $observaciones;
}

// Función actualizada para verificar ART existente con nuevos campos
function verificarArtExistente($numeroControl)
{
    global $conn;

    // Consulta principal actualizada sin kg y num_pinas generales
    $sql = "SELECT a.*, c.nombre as razon_social,
            CONCAT_WS(' ',
                i.calle,
                'No.',
                i.noexterior,
                IF(i.nointerior != '', CONCAT('Int.', i.nointerior), ''),
                ', Col.',
                i.colonia,
                ',',
                m.nombre,
                ',',
                e.nombre,
                'C.P.',
                i.cp
            ) AS domicilio
            FROM arts_agave a
            LEFT JOIN clientes c ON a.numero_control = c.no_cliente
            LEFT JOIN clientes_instalaciones ci ON c.no_cliente = ci.cliente
            LEFT JOIN instalaciones i ON ci.instalacion = i.id
            LEFT JOIN municipios m ON i.municipio = m.id
            LEFT JOIN estados e ON m.estado = e.clave
            WHERE a.numero_control = ? 
            AND a.status = 1
            ORDER BY a.id DESC 
            LIMIT 1";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $numeroControl);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $art = mysqli_fetch_assoc($result);

        // Obtener especies del ART con nuevos campos
        $sqlEspecies = "SELECT ae.*, e.genespecie as nombre_especie, 
                               CONCAT('(', e.nombreCorto, ')') as nombre_corto
                        FROM arts_agave_especies ae
                        JOIN especie e ON ae.especie_id = e.id_especie
                        WHERE ae.art_id = ?
                        ORDER BY ae.orden ASC";

        $stmtEspecies = mysqli_prepare($conn, $sqlEspecies);
        mysqli_stmt_bind_param($stmtEspecies, "i", $art['id']);
        mysqli_stmt_execute($stmtEspecies);
        $resultEspecies = mysqli_stmt_get_result($stmtEspecies);

        $especies = [];
        if ($resultEspecies && mysqli_num_rows($resultEspecies) > 0) {
            while ($rowEspecie = mysqli_fetch_assoc($resultEspecies)) {
                $especies[] = array(
                    'especie_id' => $rowEspecie['especie_id'],
                    'nombre_especie' => $rowEspecie['nombre_especie'],
                    'nombre_corto' => $rowEspecie['nombre_corto'],
                    'num_pinas' => $rowEspecie['num_pinas'],
                    'kg' => $rowEspecie['kg'],
                    'ensayo_1' => $rowEspecie['ensayo_1'],
                    'ensayo_2' => $rowEspecie['ensayo_2'],
                    'promedio' => $rowEspecie['promedio'],
                    'orden' => $rowEspecie['orden']
                );
            }
        }

        $art['especies'] = $especies;
        mysqli_stmt_close($stmtEspecies);
        mysqli_stmt_close($stmt);

        return $art;
    }

    mysqli_stmt_close($stmt);
    return null;
}

// Petición AJAX: Obtener razón social
if (isset($_GET['action']) && $_GET['action'] == 'obtenerRazonSocial') {
    header('Content-Type: application/json');

    if (isset($_GET['numeroControl'])) {
        $razonSocial = obtenerRazonSocial($_GET['numeroControl']);
        if ($razonSocial) {
            echo json_encode([
                'success' => true,
                'razonSocial' => $razonSocial
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Cliente no encontrado'
            ]);
        }
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Número de control no proporcionado'
        ]);
    }
}

// Petición AJAX: Obtener domicilio
if (isset($_GET['action']) && $_GET['action'] == 'obtenerDomicilio') {
    header('Content-Type: application/json');

    if (isset($_GET['numeroControl'])) {
        $domicilio = obtenerDomicilio($_GET['numeroControl']);
        if ($domicilio) {
            echo json_encode([
                'success' => true,
                'domicilio' => $domicilio
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Domicilio no encontrado'
            ]);
        }
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Número de control no proporcionado'
        ]);
    }
}

// Petición AJAX: Obtener especies de agave
if (isset($_GET['action']) && $_GET['action'] == 'obtenerEspecies') {
    header('Content-Type: application/json');

    $especies = obtenerEspeciesAgave();

    echo json_encode([
        'success' => true,
        'especies' => $especies
    ]);
}

// Petición AJAX: Buscar números de control que coincidan
if (isset($_GET['action']) && $_GET['action'] == 'buscarNumeroControl') {
    header('Content-Type: application/json');

    if (!isset($_GET['q']) || trim($_GET['q']) === '') {
        echo json_encode([]);
        exit;
    }

    $stmt = mysqli_prepare($conn, "SELECT no_cliente FROM clientes WHERE no_cliente LIKE CONCAT(?, '%') ORDER BY no_cliente ASC LIMIT 5");
    mysqli_stmt_bind_param($stmt, "s", $_GET['q']);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $sugerencias = [];

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $sugerencias[] = $row['no_cliente'];
        }
    }

    mysqli_stmt_close($stmt);
    echo json_encode($sugerencias);
    exit;
}

// Petición AJAX: Obtener tapadas
if (isset($_GET['action']) && $_GET['action'] == 'obtenerTapadas') {
    header('Content-Type: application/json');

    if (!isset($_GET['q']) || trim($_GET['q']) === '') {
        echo json_encode([]);
        exit;
    }

    $tapadas = obtenerTapadas($_GET['q']);
    echo json_encode($tapadas);
    exit;
}

// Petición AJAX: Obtener analistas
if (isset($_GET['action']) && $_GET['action'] == 'obtenerAnalistas') {
    header('Content-Type: application/json');

    if (!isset($_GET['q']) || trim($_GET['q']) === '') {
        echo json_encode([]);
        exit;
    }

    $analistas = obtenerAnalistas($_GET['q']);
    echo json_encode($analistas);
    exit;
}

// Petición AJAX: Obtener observaciones
if (isset($_GET['action']) && $_GET['action'] == 'obtenerObservaciones') {
    header('Content-Type: application/json');

    if (!isset($_GET['q']) || trim($_GET['q']) === '') {
        echo json_encode([]);
        exit;
    }

    $observaciones = obtenerObservaciones($_GET['q']);
    echo json_encode($observaciones);
    exit;
}

// Petición AJAX: Verificar ART existente
if (isset($_GET['action']) && $_GET['action'] == 'verificarArt') {
    header('Content-Type: application/json');

    if (!isset($_GET['numeroControl'])) {
        echo json_encode([
            'success' => false,
            'message' => 'Número de control no proporcionado'
        ]);
        exit;
    }

    $art = verificarArtExistente($_GET['numeroControl']);

    if ($art) {
        echo json_encode([
            'success' => true,
            'art' => $art
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'ART no encontrado'
        ]);
    }
    exit;
}
?>