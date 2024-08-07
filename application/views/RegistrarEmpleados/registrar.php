<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - EPAGAL</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo base_url("assets/css/estilos.css"); ?>">

	<link
      rel="icon"
      href="<?php echo base_url("assets/img/re.png"); ?> "
      type="image/x-icon"
    />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <script>
            function validarEmail() {

                var nombre_completo = document.getElementById('nombre_completo').value.trim();
                var email = document.getElementById('email').value;

                if (nombre_completo === '' || email === '') {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Error!',
                        text: 'Todos los campos deben estar completos.'
                    });
                    return;
                }

                // Verificar formato de correo electrónico
                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Error!',
                        text: 'El correo electrónico no es válido.'
                    });
                    return;
                }

                // Verificar si el correo electrónico ya está registrado
                fetch('<?php echo site_url('Verificacion/check_email'); ?>', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'email=' + encodeURIComponent(email)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.exists) {
                        Swal.fire({
                            icon: 'warning',
                            title: '¡Atención!',
                            text: 'El correo electrónico ya está registrado. Ingrese uno distinto'
                        });
                        document.getElementById('habilitar').style.display = 'none';
                        Swal.fire({
                            icon: 'warning',
                            title: '¡Atención!',
                            text: 'El correo electrónico ya está registrado. Ingrese un correo distinto'
                        });
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: 'El correo electrónico está disponible.'
                        });

                        document.getElementById('habilitar').style.display = 'block';
                        Swal.fire({
                            icon: 'success',
                            title: '¡Éxito!',
                            text: 'Campos validados. Puede seguir con el Registro.'
                        });
                        
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Ocurrió un error al verificar el correo electrónico.'
                    });
                });                
                
            }

    </script>
</head>
<body>

        <main>
            <br><br><br><br>

            <div class="contenedor__todo">
				<div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion" class="btn btn-outline-light">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <center><h3><b>BIENVENIDOS AL REGISTRO <br> DE EMPLEADOS DE EPAGAL</b></h3>
                        <p>Regístrese</p>
                        <a id="btn__registrarse" class="btn btn-outline-light" href="<?php echo site_url(); ?>/Inicios/login">REGRESAR</a></center>
                    </div>
                </div>


                <!--Formulario de Login y registro-->
				<div class="contenedor__login-register">
                    
					<!--Registre-->

					<form action="<?php echo site_url('RegistrarEmpleados/guardarDatos'); ?>" class="formulario__login" id="registerForm" method="post">
						

						<center>
							<img
								src="<?php echo base_url("assets/img/Epagal.png"); ?>" 
								alt="navbar brand"
								class="navbar-brand"
								height="50"
							/>
						</center>
						<br>
						<h2>Regístrarse</h2>
						<script>
                            document.addEventListener('DOMContentLoaded', function() {
                                // Leer el mensaje de error desde PHP
                                var errorMessage = "<?php echo isset($error) ? $error : ''; ?>";
                                if (errorMessage) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: '¡Error!',
                                        text: errorMessage
                                    });
                                }
                            });
                        </script>
						<input type="text" class="form-control input-full" id="nombre_completo" name="nombre_completo" placeholder="Nombre completo" required>
						<input type="email" class="form-control input-full" id="email" name="email" placeholder="Correo Electronico" required>
                        <button type="button" class="btn btn-outline-warning mt-2" onclick="validarEmail()">VALIDAR EMAIL</button>
                        <div id="habilitar" style="display: none;">
                            <input type="text" class="form-control input-full" id="usuario" name="usuario" placeholder="Usuario" required>
                            <input type="password" class="form-control input-full" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                            <button type="submit" class="btn btn-outline-primary">REGISTRAR</button>
                        </div>

					</form>

                    

					
				</div>
            </div>

        </main>

        <script src="<?php echo base_url("assets/js/script.js"); ?>"></script>
</body>
</html>