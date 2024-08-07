<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3"></h3>
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
                    <a href="<?php echo site_url(); ?>/Empleados/registroConteEmp">Ingreso de Contenedor</a>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">RECORRIDOS</h4>
                        <a class="btn btn-primary btn-round ms-auto" href="<?php echo site_url(); ?>/Empleados/RegistroConteEmp">
                            <i class="fa fa-plus">&nbsp;&nbsp;</i>
                            INGRESO DE CONTENEDOR
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <?php if($recorridos): ?>
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">FECHA</th>
                                        <th class="text-center">ENCARGADO</th>
                                        <th class="text-center">CONTENEDOR</th>
                                        <th class="text-center">RUTA</th>
                                        <th class="text-center">CAMIÓN</th>
                                        <th class="text-center">DESCRIPCIÓN</th>
                                        <th class="text-center">ESTADO</th>
                                        <th class="text-center" style="width: 10%">ACCIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($recorridos as $recorridoTemporal): ?>
                                        <tr>
                                            <td class="text-center"><?php echo $recorridoTemporal->id_rep; ?></td>
                                            <td class="text-center"><?php echo $recorridoTemporal->fecha_rep; ?></td>
                                            <td class="text-center"><?php echo $recorridoTemporal->nombre_rep; ?></td>
                                            <td class="text-center"><?php echo $recorridoTemporal->conte_rep; ?></td>
                                            <td class="text-center"><?php echo $recorridoTemporal->ruta_rep; ?></td>
                                            <td class="text-center"><?php echo $recorridoTemporal->camion_rep; ?></td>
                                            <td class="text-center"><?php echo $recorridoTemporal->descripcion_rep; ?></td>
                                            <td class="text-center"><?php echo $recorridoTemporal->estado_rep; ?></td>

                                            <td>
                                                <div class="form-button-action">
                                                    <center>
                                                        <a href="<?php echo site_url('Reportes/Reporte'); ?>/<?php echo $recorridoTemporal->id_rep; ?>" >
                                                        <i class="fas fa-file-alt" title="Reporte"></i></a>
                                                    </center>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        <?php else : ?>
                            <h3 style="color:red; text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                                No existe ningÚn Registro del RECORRIDO regitrado. POR FAVOR, Ingrese una Recorrido para poder visualizar la Tabla
                            </h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>