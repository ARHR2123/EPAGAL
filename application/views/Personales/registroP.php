<script>
    document.addEventListener('DOMContentLoaded', function() {
        var cargoSelect = document.getElementById('cargo');
        var conductorSelect = document.getElementById('conductor-select');

        cargoSelect.addEventListener('change', function() {
            if (this.value === 'Conductor') {
                conductorSelect.style.display = 'block';
            } else {
                conductorSelect.style.display = 'none';
            }
        });

        // Inicialmente ocultar el select de conductor
        conductorSelect.style.display = 'none';
    });


    $(document).ready(function() {
        $('#cedula').on('input', function() {
            var cedula = $(this).val();

            // Verificar si el campo está vacío
            if (cedula === '') {
                $('#mensaje').text('');
                return;
            }

            // Hacer la solicitud AJAX
            $.ajax({
                url: '<?php echo site_url('Personales/verificarCedula'); ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                    cedula: cedula_cli
                },
                success: function(data) {
                    if (data.existe) {
                        $('#mensaje').text('La cédula ya existe.').css('color', 'red');
                    } else {
                        $('#mensaje').text('La cédula es válida.').css('color', 'green');
                    }
                },
                error: function() {
                    $('#mensaje').text('Error al verificar la cédula.').css('color', 'red');
                }
            });
        });
    });
</script>


<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Ingreso de Personal</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="<?php echo site_url(); ?>/Inicios/login">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url(); ?>/Personales/registroP">Formulario</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url(); ?>/Personales/bddP">Base de Datos Personal</a>
                </li>
            </ul>
        </div>
        <form action="<?php echo site_url('Personales/guardarDatos'); ?>" id="frm_registrar_personal" method="post">
            <div class="row" style="margin-left:18%;">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Personal</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 col-lg-9" style="margin-left:12%;">
                                    <div class="form-group">
                                        <label for="nombre">Nombres:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese los nombres" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="apellido">Apellidos:</label>
                                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese los apellidos" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="cedula">Cédula:</label>
                                        <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ingrese la cédula" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Correo electrónico:</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese un correo electrónico" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="fono">Teléfono:</label>
                                        <input type="text" class="form-control" id="fono" name="fono" placeholder="Ingrese el teléfono" maxlength="15" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Género</label><br />
                                        <div class="d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="genero" id="genero1" value="Hombre" checked />
                                                <label class="form-check-label" for="genero1">
                                                    Hombre
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="genero" id="genero2" value="Mujer" />
                                                <label class="form-check-label" for="genero2">
                                                    Mujer
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cargo">Cargo</label>
                                        <select class="form-select form-control" id="cargo" name="cargo" required>
                                            <option selected disabled>Seleccione una opción</option>
                                            <option value="Gerente">Gerente</option>
                                            <option value="Conductor">Conductor</option>
                                            <option value="Recolector">Recolector</option>
                                            <option value="Administrador">Administrador</option>
                                        </select>
                                    </div>

                                    <!-- Nuevo select que se muestra cuando se selecciona "Conductor" -->

                                    <div class="form-group" id="conductor-select">
                                        <label for="vehiculo">Vehículo</label>
                                        <select class="form-select form-control" id="vehiculo" name="vehiculo">
                                            <option selected disabled>Seleccione un vehículo</option>
                                            <?php foreach ($vehiculos as $vehiculo) : ?>
                                                <option value="<?php echo $vehiculo->id_vehi; ?>">
                                                    <?php echo $vehiculo->id_vehi; ?> : <?php echo $vehiculo->tipo_vehi; ?> /
                                                    <?php echo $vehiculo->placa_vehi; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-action text-center">
                            <button class="btn btn-success" type="submit"><b>GUARDAR</b></button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-danger" type="button" onclick="window.location.href='<?php echo site_url(); ?>'"><b>CANCELAR</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('cedula').addEventListener('input', function() {
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