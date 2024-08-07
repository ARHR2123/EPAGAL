<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Base de Datos de los Contenedores</h3>
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
                    <a href="<?php echo site_url(); ?>/Contenedores/registroCo">Registro de Contenedores</a>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">CONTENEDORES</h4>
                        <a class="btn btn-primary btn-round ms-auto" href="<?php echo site_url(); ?>/Contenedores/registroCo">
                            <i class="fa fa-plus">&nbsp;&nbsp;</i>
                            Añadir Contenedor
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <?php if($contenedores): ?>
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">IDENTIFICADOR</th>
                                        <th class="text-center">RUTA</th>
                                        <th class="text-center">LONGITUD</th>
                                        <th class="text-center">LATITUD</th>
                                        <th class="text-center" style="width: 10%">ACCIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($contenedores as $contenedorTemporal): ?>
                                        <tr>
                                            <td class="text-center"><?php echo $contenedorTemporal->id_co; ?></td>
                                            <td class="text-center"><?php echo $contenedorTemporal->identificador_co; ?></td>
                                            <td class="text-center"><?php echo $contenedorTemporal->zona_ru; ?></td>
                                            <td class="text-center"><?php echo $contenedorTemporal->latitud_co; ?></td>
                                            <td class="text-center"><?php echo $contenedorTemporal->longitud_co; ?></td>

                                            <td>
                                                <div class="form-button-action">
                                                    <a href="<?php echo site_url('Contenedores/ubicacion'); ?>/<?php echo $contenedorTemporal->id_co; ?>" ><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY5JgyOFd9qxUjphddw5AMTX_M4iiTQJrIWA&s"
                                                    alt="" width="20px" title="VER DIRECCIÓN"></a>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="<?php echo site_url('Contenedores/eliminarDatos'); ?>/<?php echo $contenedorTemporal->id_co; ?>" 
                                                    onclick="return confirm('¿Estás seguro de eliminar este Contenedor?')" data-bs-toggle="tooltip" 
                                                    title="Eliminar" class="btn btn-link btn-danger" data-original-title="Remove">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                            <!-- Boton de Ver Reporte -->

                            <a href="<?php echo site_url('Contenedores/reporteGeoCo'); ?>"  class="btn btn-warning"><b>VER REPORTE GENERAL DE CONTENEDORES</b></a>

                        <?php else : ?>
                            <h3 style="color:red; text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                                No existe información de Contenedores regitrados. POR FAVOR, Ingrese un Contenedor para poder visualizar la Tabla
                            </h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>