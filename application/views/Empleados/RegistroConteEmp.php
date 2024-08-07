
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Ingreso del Recorrido Realizado </h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="<?php echo site_url(); ?>/Empleados/inicio">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url(); ?>/Empleados/registroConteEmp">Formulario</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url(); ?>/Empleados/reporteContenedor">Base de datos Recorrido</a>
                </li>
            </ul>
        </div>
        <div class="row" style="margin-left:18%;">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title text-center">RECOLECCIÓN</div>
                    </div>
                    <form action="<?php echo site_url('Empleados/guardarDatos'); ?>" id="frm_registrar_contenedor" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 col-lg-9">

                                    <div class="form-group form-inline">
                                        <label for="fecha_rep" class="col-md-3 col-form-label"><b>FECHA</b></label>
                                        <div class="col-md-9 p-0">
                                            <input type="date" style="font-weight: bold; color:red;" class="form-control input-full" id="fecha_rep" name="fecha_rep" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group form-inline">
                                        <label for="cedula_rep" class="col-md-3 col-form-label"><b>CÉDULA</b></label>
                                        <div class="col-md-9 p-0">
                                            <input type="number" class="form-control input-full" id="cedula_rep" name="cedula_rep" title="Ingrese un número de hasta 10 dígitos"  required />
                                        </div>
                                    </div>

                                    <div class="form-group form-inline">
                                        <label for="nombre_rep" class="col-md-3 col-form-label"><b>PERSONA</b></label>
                                        <div class="col-md-9 p-0">
                                            <input type="text" style="font-weight: bold;" value="<?php echo htmlspecialchars($usuario['nombre_completo']); ?>" class="form-control input-full" id="nombre_rep" name="nombre_rep" placeholder="" readonly />
                                        </div>
                                    </div>


                                    <!-- Select para contenedores -->
                                    <div class="form-group form-inline">
                                        <label for="conte_rep" class="col-md-3 col-form-label"><b>CONTENEDOR</b></label>
                                        <select id="conte_rep" name="conte_rep" class="form-select" aria-label="Default select example">
                                            <option value="" selected>-- SELECCIONE --</option>
                                            <?php foreach($contenedores as $contenedorTemporal): ?>
                                                <option value="<?php echo $contenedorTemporal->id_co; ?>">
                                                    <?php echo $contenedorTemporal->identificador_co; ?> 
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group form-inline">
                                        <label for="ruta_rep" class="col-md-3 col-form-label"><b>RUTA</b></label>
                                        <div class="col-md-9 p-0">
                                            <input type="text" style="font-weight: bold;" class="form-control input-full" id="ruta_rep" name="ruta_rep" placeholder="" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group form-inline">
                                        <label for="camion_rep" class="col-md-3 col-form-label"><b>CAMIÓN</b></label>
                                        <div class="col-md-9 p-0">
                                            <input type="text" style="font-weight: bold;" class="form-control input-full" id="camion_rep" name="camion_rep" placeholder="" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group form-inline">
                                        <label for="descripcion_rep" class="col-md-3 col-form-label"><b>DESCRIPCIÓN</b></label>
                                        <div class="col-md-9 p-0">
                                            <textarea name="descripcion_rep" id="descripcion_rep" class="form-control" placeholder="Deje su comentario"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group form-inline">

                                        <label for="estado_rep" class="col-md-3 col-form-label"><b>ESTADO</b></label>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado_rep" id="flexRadioDefault1" required>
                                            <label class="form-check-label" style="cursor: pointer;" for="flexRadioDefault1">
                                                VACÍO (0 %)
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado_rep" id="flexRadioDefault2" required>
                                            <label class="form-check-label" style="cursor: pointer;" for="flexRadioDefault2">
                                                MEDIO VACÍO (1% - 30 %)
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado_rep" id="flexRadioDefault3" required>
                                            <label class="form-check-label" style="cursor: pointer;" for="flexRadioDefault3">
                                                MEDIO LLENO (50% - 70%)
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado_rep" id="flexRadioDefault4" required>
                                            <label class="form-check-label" style="cursor: pointer;" for="flexRadioDefault4">
                                                LLENO (80% - 100%)
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Campos ocultos de la direccion -->

                                    <div class="form-group form-inline">
                                        <div class="col-md-9 p-0">
                                            <input type="hidden" style="font-weight: bold;" class="form-control input-full" id="latitudcr_ru" name="latitudcr_ru" placeholder="" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group form-inline">
                                        <div class="col-md-9 p-0">
                                            <input type="hidden" style="font-weight: bold;" class="form-control input-full" id="longitudcr_ru" name="longitudcr_ru" placeholder="" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group form-inline">
                                        <div class="col-md-9 p-0">
                                            <input type="hidden" style="font-weight: bold;" class="form-control input-full" id="latitudfr_ru" name="latitudfr_ru" placeholder="" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group form-inline">
                                        <div class="col-md-9 p-0">
                                            <input type="hidden" style="font-weight: bold;" class="form-control input-full" id="longitudfr_ru" name="longitudfr_ru" placeholder="" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group form-inline">
                                        <div class="col-md-9 p-0">
                                            <input type="hidden" style="font-weight: bold;" class="form-control input-full" id="latitud_co" name="latitud_co" placeholder="" readonly />
                                        </div>
                                    </div>

                                    <div class="form-group form-inline">
                                        <div class="col-md-9 p-0">
                                            <input type="hidden" style="font-weight: bold;" class="form-control input-full" id="longitud_co" name="longitud_co" placeholder="" readonly />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-action text-center">
                            <button type="submit" class="btn btn-success"><b>GUARDAR</b></button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-danger" type="button" href="<?php echo site_url(); ?>/Empleados/inicio"><b>SALIR</b></button>
                        </div>
                    </form>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            document.getElementById('cedula_rep').addEventListener('input', function() {
                                var input = this.value;
                                // Eliminar caracteres que no sean dígitos
                                input = input.replace(/\D/g, '');
                                // Limitar a 10 dígitos
                                if (input.length > 10) {
                                    input = input.slice(0, 10);
                                }
                                this.value = input;
                            });
                        });
                    </script>

                    <!-- jQuery -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                    <script>

                        // Fecha automática
                        $(document).ready(function() {
                            var today = new Date();
                            var year = today.getFullYear();
                            var month = ('0' + (today.getMonth() + 1)).slice(-2); 
                            var day = ('0' + today.getDate()).slice(-2);
                            // Formatear la fecha en YYYY-MM-DD
                            var formattedDate = year + '-' + month + '-' + day;
                            $('#fecha_rep').val(formattedDate);
                        });

                        // Llenar campos automáticos con el select

                        $(document).ready(function() {
                            $('#conte_rep').change(function() {
                                var contenedorId = $(this).val();
                                
                                // Si no hay selección, vacía el campo de ruta
                                if (contenedorId === '') {
                                    $('#ruta_rep').val('');
                                    return;
                                }
                                
                                // Hacer la solicitud AJAX
                                $.ajax({
                                    url: '<?php echo site_url('Empleados/obtenerRuta'); ?>',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: { id_co: contenedorId },
                                    success: function(data) {
                                        if (data) {
                                            // Rellenar el campo de ruta
                                            $('#ruta_rep').val(data.zona_ru);
                                        } else {
                                            $('#ruta_rep').val(''); // Si no se encuentra, vacía el campo
                                        }
                                    },
                                    error: function() {
                                        // Manejo de errores
                                        alert('Error al obtener la ruta.');
                                    }
                                });
                            });
                        });

                        $(document).ready(function() {
                            $('#cedula_rep').on('input', function() {
                                var personalId = $(this).val();
                                
                                // Si el campo está vacío, vacía el campo de ruta
                                if (personalId === '') {
                                    $('#camion_rep').val('');
                                    alert ("Complete los 10 dígitos de su cédula");
                                    return;
                                }
                                
                                // Hacer la solicitud AJAX
                                $.ajax({
                                    url: '<?php echo site_url('Empleados/obtenerCamion'); ?>',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: { cedula_cli: personalId },
                                    success: function(data) {
                                        if (data) {
                                            // Rellenar el campo de ruta
                                            $('#camion_rep').val(data.Camion);
                                        } else {
                                            $('#camion_rep').val(''); // Si no se encuentra, vacía el campo
                                        }
                                    },
                                    error: function() {
                                        // Manejo de errores
                                        alert('Error al obtener la ruta.');
                                    }
                                });
                            });
                        });

                        /* Rutas */

                        $(document).ready(function() {
                            $('#conte_rep').change(function() {
                                var contenedorId = $(this).val();
                                
                                // Si no hay selección, vacía el campo de ruta
                                if (contenedorId === '') {
                                    $('#latitudcr_ru').val('');
                                    return;
                                }
                                
                                // Hacer la solicitud AJAX
                                $.ajax({
                                    url: '<?php echo site_url('Empleados/obtenerRutaLat'); ?>',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: { id_co: contenedorId },
                                    success: function(data) {
                                        if (data) {
                                            // Rellenar el campo de ruta
                                            $('#latitudcr_ru').val(data.latitudcr_ru);
                                        } else {
                                            $('#latitudcr_ru').val(''); // Si no se encuentra, vacía el campo
                                        }
                                    },
                                    error: function() {
                                        // Manejo de errores
                                        alert('Error al obtener la ruta.');
                                    }
                                });
                            });
                        });

                        $(document).ready(function() {
                            $('#conte_rep').change(function() {
                                var contenedorId = $(this).val();
                                
                                // Si no hay selección, vacía el campo de ruta
                                if (contenedorId === '') {
                                    $('#longitudcr_ru').val('');
                                    return;
                                }
                                
                                // Hacer la solicitud AJAX
                                $.ajax({
                                    url: '<?php echo site_url('Empleados/obtenerRutaLon'); ?>',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: { id_co: contenedorId },
                                    success: function(data) {
                                        if (data) {
                                            // Rellenar el campo de ruta
                                            $('#longitudcr_ru').val(data.longitudcr_ru);
                                        } else {
                                            $('#longitudcr_ru').val(''); // Si no se encuentra, vacía el campo
                                        }
                                    },
                                    error: function() {
                                        // Manejo de errores
                                        alert('Error al obtener la ruta.');
                                    }
                                });
                            });
                        });

                        $(document).ready(function() {
                            $('#conte_rep').change(function() {
                                var contenedorId = $(this).val();
                                
                                // Si no hay selección, vacía el campo de ruta
                                if (contenedorId === '') {
                                    $('#latitudfr_ru').val('');
                                    return;
                                }
                                
                                // Hacer la solicitud AJAX
                                $.ajax({
                                    url: '<?php echo site_url('Empleados/obtenerRutaLat2'); ?>',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: { id_co: contenedorId },
                                    success: function(data) {
                                        if (data) {
                                            // Rellenar el campo de ruta
                                            $('#latitudfr_ru').val(data.latitudfr_ru);
                                        } else {
                                            $('#latitudfr_ru').val(''); // Si no se encuentra, vacía el campo
                                        }
                                    },
                                    error: function() {
                                        // Manejo de errores
                                        alert('Error al obtener la ruta.');
                                    }
                                });
                            });
                        });

                        $(document).ready(function() {
                            $('#conte_rep').change(function() {
                                var contenedorId = $(this).val();
                                
                                // Si no hay selección, vacía el campo de ruta
                                if (contenedorId === '') {
                                    $('#longitudfr_ru').val('');
                                    return;
                                }
                                
                                // Hacer la solicitud AJAX
                                $.ajax({
                                    url: '<?php echo site_url('Empleados/obtenerRutaLon2'); ?>',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: { id_co: contenedorId },
                                    success: function(data) {
                                        if (data) {
                                            // Rellenar el campo de ruta
                                            $('#longitudfr_ru').val(data.longitudfr_ru);
                                        } else {
                                            $('#longitudfr_ru').val(''); // Si no se encuentra, vacía el campo
                                        }
                                    },
                                    error: function() {
                                        // Manejo de errores
                                        alert('Error al obtener la ruta.');
                                    }
                                });
                            });
                        });

                        $(document).ready(function() {
                            $('#conte_rep').change(function() {
                                var contenedorId = $(this).val();
                                
                                // Si no hay selección, vacía el campo de ruta
                                if (contenedorId === '') {
                                    $('#latitud_co').val('');
                                    return;
                                }
                                
                                // Hacer la solicitud AJAX
                                $.ajax({
                                    url: '<?php echo site_url('Empleados/obtenerRutaLatCo'); ?>',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: { id_co: contenedorId },
                                    success: function(data) {
                                        if (data) {
                                            // Rellenar el campo de ruta
                                            $('#latitud_co').val(data.latitud_co);
                                        } else {
                                            $('#latitud_co').val(''); // Si no se encuentra, vacía el campo
                                        }
                                    },
                                    error: function() {
                                        // Manejo de errores
                                        alert('Error al obtener la ruta.');
                                    }
                                });
                            });
                        });

                        $(document).ready(function() {
                            $('#conte_rep').change(function() {
                                var contenedorId = $(this).val();
                                
                                // Si no hay selección, vacía el campo de ruta
                                if (contenedorId === '') {
                                    $('#longitud_co').val('');
                                    return;
                                }
                                
                                // Hacer la solicitud AJAX
                                $.ajax({
                                    url: '<?php echo site_url('Empleados/obtenerRutaLonCo'); ?>',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: { id_co: contenedorId },
                                    success: function(data) {
                                        if (data) {
                                            // Rellenar el campo de ruta
                                            $('#longitud_co').val(data.longitud_co);
                                        } else {
                                            $('#longitud_co').val(''); // Si no se encuentra, vacía el campo
                                        }
                                    },
                                    error: function() {
                                        // Manejo de errores
                                        alert('Error al obtener la ruta.');
                                    }
                                });
                            });
                        });



                        
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>