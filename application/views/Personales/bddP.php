<div class="page-header">
    <h3 class="fw-bold mb-3">Base de Datos Personales</h3>
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
                <h4 class="card-title">PERSONAL</h4>
                <a class="btn btn-primary btn-round ms-auto" href="<?php echo site_url(); ?>/Personales/registroP">
                    <i class="fa fa-plus">&nbsp;&nbsp;</i>
                    Añadir Personal
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if($personales): ?>

                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRES</th>
                                <th>CÉDULA</th>
                                <th>EMAIL</th>
                                <th>TELÉFONO</th>
                                <th>CARGO</th>
                                <th>GÉNERO</th>
                                <th style="width: 10%">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($personales as $personal): ?>
                            <tr>
                                <td><?php echo $personal->id; ?></td>
                                <td><?php echo $personal->nombre_cli; ?></td>
                                <td><?php echo $personal->cedula_cli; ?></td>
                                <td><?php echo $personal->email_cli; ?></td>
                                <td><?php echo $personal->fono_cli; ?></td>
                                <td><?php echo $personal->cargo_cli; ?></td>
                                <td><?php echo $personal->genero_cli; ?></td>
                                <td>
                                    <a href="<?php echo site_url('Personales/eliminar'); ?>/<?php echo $personal->id; ?>" 
                                        onclick="return confirm('¿Estás seguro de eliminar este Personal?')" data-bs-toggle="tooltip" 
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
                        No existe información de Personal regitrados. POR FAVOR, Ingrese un Personal para poder visualizar la Tabla
                    </h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

