<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Base de Datos Usuarios</h3>
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
                    <a href="<?php echo site_url(); ?>/RegistrarEmpleados/registrar">Registrar Empleado</a>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">EMPLEADOS</h4>
                        <a class="btn btn-primary btn-round ms-auto" href="<?php echo site_url(); ?>/RegistrarEmpleados/registrar">
                            <i class="fa fa-plus">&nbsp;&nbsp;</i>
                            Registrar un nuevo Empleado
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <?php if($registrarempleados): ?>
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">NOMBRE COMPLETO</th>
                                        <th class="text-center">EMAIL</th>
                                        <th class="text-center">USUARIO</th>
                                        <th class="text-center" style="width: 10%">ACCIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $index = 0; foreach($registrarempleados as $registrarempleadoTemporal): $showDeleteButton = $index > 1; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $registrarempleadoTemporal->id_log; ?></td>
                                            <td class="text-center"><?php echo $registrarempleadoTemporal->nombre_completo; ?></td>
                                            <td class="text-center"><?php echo $registrarempleadoTemporal->email; ?></td>
                                            <td class="text-center"><?php echo $registrarempleadoTemporal->usuario; ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <?php if ($showDeleteButton): ?>

                                                        <a href="<?php echo site_url('RegistrarEmpleados/eliminarDatos'); ?>/<?php echo $registrarempleadoTemporal->id_log; ?>" 
                                                        onclick="return confirm('¿Estás seguro de eliminar este Usuario?')" data-bs-toggle="tooltip" 
                                                        title="Eliminar" class="btn btn-link btn-danger" data-original-title="Remove">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $index++; // Incrementa el índice en cada iteración ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php else : ?>
                            <h3 style="color:red; text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                                No existe información de USUARIOS regitrados. POR FAVOR, Ingrese un Usuario para poder visualizar la Tabla
                            </h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>