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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	

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
                        <h3><b>TE DAMOS LA BIENVENIDA <br> A EPAGAL</b></h3>
                        <p>Por favor inicie sesión con sus credenciales</p>
                    </div>
                </div>


                <!--Formulario de Login y registro-->
				<div class="contenedor__login-register">
					<!--Login-->

					<form action="<?php echo site_url('Welcome/inicio'); ?>" class="formulario__login" id="frm-inicio" method="post">
						

						<center>
							<img
								src="<?php echo base_url("assets/img/Epagal.png"); ?>" 
								alt="navbar brand"
								class="navbar-brand"
								height="50"
							/>
						</center>
						<br>
						<h2>Iniciar Sesión</h2>

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
                        
                        <input type="text" class="form-control input-full" id="usuario" name="usuario" placeholder="Usuario" >
                        <input type="password" class="form-control input-full" id="contrasena" name="contrasena" placeholder="Contraseña" >
                        <br>
                        <button type="submit" class="btn btn-outline-primary">ENTRAR</button>
                        
					</form>
				</div>
            </div>

        </main>

        

        <script src="assets/js/script.js"></script>
</body>
</html>