<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Agave</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"rel="stylesheet">
</head>

<body class="bg-light">
    <div id="agaves">
        <div class="container p-4">
            <form id="formAgave">

                <!-- Sección 1: Identificación del Documento -->
                <div class="mb-4">
                    <h4 class="text-primary mb-3">1. Identificación del Documento</h4>

                    <div class="row">
                        <div class="col-12 position-relative">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="numeroControl" required autocomplete="off">
                                <label for="numeroControl">Número de Control</label>
                            </div>
                            <!-- Contenedor para sugerencias -->
                            <div id="lista-sugerencias" class="list-group position-absolute w-100"
                                style="z-index: 1000;"></div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="razonSocial" required>
                                <label for="razonSocial">Razón Social</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="numeroEscrito" disabled>
                                <label for="numeroEscrito">Número de Escrito</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="numeroConsecutivo" disabled>
                                <label for="numeroConsecutivo">Número Consecutivo</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sección 2: Información de Ubicación y Muestreo -->
                <div class="mb-4">
                    <h4 class="text-primary mb-3">2. Información de Ubicación y Muestreo</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">

                                <input type="text" id="domicilio" class="form-control" readonly>

                                <label for="domicilioInstalacion">Domicilio de la Instalación</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="muestreadoPor" required>
                                            <option selected disabled value="">Seleccione su muestreo</option>
                                            <option value="personal">Cliente</option>
                                        </select>
                                        <label for="muestreadoPor">Muestreado por</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección 3: Fechas del Proceso -->
                <div class="mb-4">
                    <h4 class="text-primary mb-3">3. Fechas del Proceso</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="fechaMuestreo" required>
                                <label for="fechaMuestreo">Fecha de Muestreo</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="fechaEmision" required>
                                <label for="fechaEmision">Fecha de Emisión</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección 4: Detalles del Producto -->
                <div class="mb-4">
                    <h4 class="text-primary mb-3">4. Detalles del Producto</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="numTapada" required>
                                <label for="numTapada">Num de Tapada</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="numPinas" required>
                                <label for="numPinas">N° Piñas</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="number" step="0.01" class="form-control" id="kg" required>
                                <label for="kg">KG</label>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="number" step="0.01" class="form-control" id="ensayo1">
                                    <label for="ensayo1">Ensayo 1</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="number" step="0.01" class="form-control" id="ensayo2">
                                    <label for="ensayo2">Ensayo 2</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="promedio" readonly>
                                    <label for="promedio">Promedio %</label>
                                </div>
                            </div>
                        </div>
                    <!-- Especie de Agave en fila separada -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="especieAgave">
                                    <option selected disabled value="">Selecciona una especie</option>
                                </select>
                                <label for="especieAgave">Especie de Agave</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary w-100" id="agregarEspecie"
                                style="height: 58px;">
                                <i class="bi bi-plus-circle"></i> Agregar Especie
                            </button>
                        </div>
                    </div>

                   <!-- Tabla de agaves seleccionados -->
<div class="row mt-3">
    <div class="col-12">
        <div class="card tabla-agaves-card">
            <div class="card-header tabla-agaves-header">
                <h5 class="card-title mb-0">
                    <i class="bi bi-list-ul"></i> Especies de Agave Seleccionadas
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="tablaAgaves">
                        <thead class="tabla-agaves-thead">
                            <tr>
                                <th scope="col" class="tabla-agaves-th">Especie de Agave</th>
                                <th scope="col" class="tabla-agaves-th">Núm. Tapada</th>
                                <th scope="col" class="tabla-agaves-th">Núm. Piñas</th>
                                <th scope="col" class="tabla-agaves-th">Peso (KG)</th>
                                <th scope="col" class="tabla-agaves-th">Ensayo 1</th>
                                <th scope="col" class="tabla-agaves-th">Ensayo 2</th>
                                <th scope="col" class="tabla-agaves-th">Promedio</th>
                                <th scope="col" class="tabla-agaves-th">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="cuerpoTablaAgaves">
                            <!-- Las filas se agregarán dinámicamente -->
                        </tbody>
                        <tfoot id="footerPromedioGeneral" style="display: none;">
                            <tr>
                                <td><strong>PROMEDIO GENERAL PONDERADO</strong></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td><strong><span id="displayPromedioGeneral">0.00%</span></strong></td>
                                <td>-</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div id="mensajeVacio" class="text-center text-muted py-3">
                    <i class="bi bi-info-circle"></i> No hay especies seleccionadas
                </div>
            </div>
        </div>
    </div>
</div>

                    <!-- Sección 5: Validación y Observaciones -->
                    <div class="mb-4">
                        <h4 class="text-primary mb-3">5. Validación y Observaciones</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="analista" required>
                                    <label for="analista">Analista</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="observaciones" style="height: 100px;"></textarea>
                                    <label for="observaciones">Observaciones</label>
                                </div>
                            </div>
                        </div>
                    </div>

               <!-- Botones de acción -->
<div class="d-flex justify-content-end mt-3">
    <button type="button" class="btn btn-primary" onclick="alert('Formulario guardado correctamente')">
        Guardar formulario
    </button>
</div>



            </form>
        </div>
    </div>
    <script src="/modulos/In_Di_Ce/ARTs/arts.js"></script>
</body>

</html>