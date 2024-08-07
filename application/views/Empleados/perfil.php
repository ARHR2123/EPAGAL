
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">PERFIL</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="<?php echo site_url(); ?>/Empleados/inicio">
                        <i class="icon-home"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="row" style="margin-left:18%;">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Datos Personales</div>
                    </div>
                    <form action="<?php echo site_url('Perfiles/modifyDatos'); ?>" id="frm_perfil" method="post">
                        <!-- Campo oculto para el ID -->
                        <input type="hidden" name="id_log" value="<?php echo isset($registrarempleados['id_log']) ? htmlspecialchars($registrarempleados['id_log']) : ''; ?>" />
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 col-lg-9">

                                    <!-- NOMBRES Y APELLIDOS -->
                                    <div class="form-group form-inline">
                                        <label for="" class="col-md-3 col-form-label"><b>NOMBRES Y APELLIDOS</b></label>
                                        <div class="col-md-9 p-0">
                                            <input type="text" class="form-control input-full"
                                                id="nombre_completo" name="nombre_completo"
                                                value="<?php echo isset($registrarempleados['nombre_completo']) ? htmlspecialchars($registrarempleados['nombre_completo']) : ''; ?>"
                                                placeholder="nombre_completo" readonly />
                                        </div>
                                    </div>

                                    <!-- CORREO ELECTRÓNICO -->
                                    <div class="form-group form-inline">
                                        <label for="" class="col-md-3 col-form-label"><b>CORREO ELECTRÓNICO</b></label>
                                        <div class="col-md-9 p-0">
                                            <input type="email" class="form-control input-full"
                                                id="email" name="email"
                                                value="<?php echo isset($registrarempleados['email']) ? htmlspecialchars($registrarempleados['email']) : ''; ?>"
                                                placeholder="email" />
                                        </div>
                                    </div>

                                    <!-- USUARIO -->
                                    <div class="form-group form-inline">
                                        <label for="" class="col-md-3 col-form-label"><b>USUARIO</b></label>
                                        <div class="col-md-9 p-0">
                                            <input type="text" class="form-control input-full"
                                                id="usuario" name="usuario"
                                                value="<?php echo isset($registrarempleados['usuario']) ? htmlspecialchars($registrarempleados['usuario']) : ''; ?>"
                                                placeholder="usuario" readonly />
                                        </div>
                                    </div>

                                    <!-- CONTRASEÑA -->
                                    <div class="form-group form-inline">
                                        <label for="" class="col-md-3 col-form-label"><b>CONTRASEÑA</b></label>
                                        <div class="col-md-11 p-0">
                                            <input type="password" class="form-control input-full"
                                                id="contrasena" name="contrasena"
                                                placeholder="Nueva contraseña (dejar en blanco si no deseas cambiarla)" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-action text-center">
                            <button type="submit" style=" border-radius: 20px;" class="btn btn-success"><b>GUARDAR</b></button>
                        </div>
                    </form>
                </div>
            </div>      
        </div>
    </div>
</div>
