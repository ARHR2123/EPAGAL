<div class="page-header">
    <h3 class="fw-bold mb-3">Base de Datos de Camiones</h3>
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
            <a href="<?php echo site_url(); ?>/Dashboard/dashboard">Dashboard</a>
        </li>
    </ul>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">VEHÍCULOS</h4>
                <a class="btn btn-primary btn-round ms-auto" href="<?php echo site_url(); ?>/Vehiculos/registroC">
                    <i class="fa fa-plus">&nbsp;&nbsp;</i>
                    Añadir Vehículo
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if($vehiculos): ?>
                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TIPO DE VEHÍCULO</th>
                                <th>COLOR DEL VEHÍCULO</th>
                                <th>PLACA DEL VEHÍCULO</th>
                                <th>RUTA</th>
                                <th style="width: 10%">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($vehiculos as $vehiculo): ?>
                            <tr>
                                <td><?php echo $vehiculo->id_vehi; ?></td>
                                <td><?php echo $vehiculo->tipo_vehi; ?></td>
                                <td><?php echo $vehiculo->color_vehi; ?></td>
                                <td><?php echo $vehiculo->placa_vehi; ?></td>
                                <td><?php echo $vehiculo->id_fk_vehi; ?></td>
                                <td>
                                    <a href="<?php echo site_url('Vehiculos/eliminarDatos'); ?>/<?php echo $vehiculo->id_vehi; ?>" 
                                        onclick="return confirm('¿Estás seguro de eliminar este Vehículo?')" data-bs-toggle="tooltip" 
                                        title="Eliminar" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <h3 style="color:red; text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                        No existe información de Camiones regitrados. POR FAVOR, Ingrese un Camión para poder visualizar la Tabla
                    </h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

