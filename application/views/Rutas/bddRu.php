<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Base de Datos de las Rutas</h3>
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
                    <a href="<?php echo site_url(); ?>/Rutas/registroRu">Registro de Rutas</a>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">RUTAS</h4>
                        <a class="btn btn-primary btn-round ms-auto" href="<?php echo site_url(); ?>/Rutas/registroRu">
                            <i class="fa fa-plus">&nbsp;&nbsp;</i>
                            Añadir Ruta
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <?php if($rutas): ?>
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">ZONA</th>
                                        <th class="text-center">LATITUD COMIENZO</th>
                                        <th class="text-center">LONGITUD COMIENZO</th>
                                        <th class="text-center">LATITUD FINALIZACIÓN</th>
                                        <th class="text-center">LONGITUD FINALIZACIÓN</th>
                                        <th class="text-center" style="width: 10%">ACCIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($rutas as $rutaTemporal): ?>
                                        <tr>
                                            <td class="text-center"><?php echo $rutaTemporal->id_ru; ?></td>
                                            <td class="text-center"><?php echo $rutaTemporal->zona_ru; ?></td>
                                            <td class="text-center"><?php echo $rutaTemporal->latitudcr_ru; ?></td>
                                            <td class="text-center"><?php echo $rutaTemporal->longitudcr_ru; ?></td>
                                            <td class="text-center"><?php echo $rutaTemporal->latitudfr_ru; ?></td>
                                            <td class="text-center"><?php echo $rutaTemporal->longitudfr_ru; ?></td>

                                            <td>
                                                <div class="form-button-action">
                                                    <a href="<?php echo site_url('Rutas/ubicacion'); ?>/<?php echo $rutaTemporal->id_ru; ?>" ><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY5JgyOFd9qxUjphddw5AMTX_M4iiTQJrIWA&s"
                                                    alt="" width="20px" title="VER DIRECCIÓN"></a>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="<?php echo site_url('Rutas/eliminarDatos'); ?>/<?php echo $rutaTemporal->id_ru; ?>" 
                                                    onclick="return confirm('¿Estás seguro de eliminar esta Ruta?')" data-bs-toggle="tooltip" 
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

                            <a href="<?php echo site_url('Rutas/reporteGeoRu'); ?>"  class="btn btn-warning"><b>VER REPORTE GENERAL DE RUTAS</b></a>

                        <?php else : ?>
                            <h3 style="color:red; text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                                No existe información de RUTAS regitradas. POR FAVOR, Ingrese una Ruta para poder visualizar la Tabla
                            </h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>