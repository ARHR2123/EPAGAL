<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Ingreso de Vehiculos</h3>
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
                    <a href="<?php echo site_url(); ?>/Vehiculos/registroC">Formulario</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url(); ?>/Vehiculos/bddC">Base de datos de Vehiculos</a>
                </li>
            </ul>
        </div>
        <form action="<?php echo site_url('Vehiculos/guardarDatos'); ?>" id="frm_registrar_vehiculo" method="post">
            <div class="row" style="margin-left:18%;">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Vehiculos</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 col-lg-9" style="margin-left:12%;">
                                    <div class="form-group">
                                        <label for="tipo_vehi">Vehiculo</label>
                                        <select class="form-select form-control" id="tipo_vehi" name="tipo_vehi">
                                            <option selected disabled>Seleccione un vehiculo</option>
                                            <option>Camion Recolector (Automatizado)</option>
                                            <option>Camion Recolector (Manual)</option>
                                            <option>Camion de limpieza</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Color</label>
                                        <div class="row gutters-xs">
                                            <div class="col-auto">
                                                <label class="colorinput">
                                                    <input name="color_vehi" type="radio" value="dark" class="colorinput-input" />
                                                    <span class="colorinput-color bg-black"></span>
                                                </label>
                                            </div>
                                            <div class="col-auto">
                                                <label class="colorinput">
                                                    <input name="color_vehi" type="radio" value="primary" class="colorinput-input" />
                                                    <span class="colorinput-color bg-primary"></span>
                                                </label>
                                            </div>
                                            <div class="col-auto">
                                                <label class="colorinput">
                                                    <input name="color_vehi" type="radio" value="white" class="colorinput-input" />
                                                    <span class="colorinput-color bg-white"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="placa_vehi">Placa:</label>
                                        <input type="text" class="form-control" id="placa_vehi" name="placa_vehi" placeholder="Ingrese la placa del vehiculo" maxlength="10" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="ruta_vehi">Ruta</label>
                                        <select class="form-select form-control" id="ruta_vehi" name="id_fk_vehi">
                                            <option selected disabled>Seleccione la ruta destinada</option>
                                            <?php foreach($rutas as $rutaTemporal): ?>
                                                <option value="<?php echo $rutaTemporal->id_ru; ?>">
                                                    <?php echo $rutaTemporal->id_ru; ?> : <?php echo $rutaTemporal->zona_ru; ?> -
                                                    Origen: (  
                                                        <?php echo $rutaTemporal->latitudcr_ru; ?> | <?php echo $rutaTemporal->longitudcr_ru; ?>)
                                                    Final: (  
                                                        <?php echo $rutaTemporal->latitudfr_ru; ?> | <?php echo $rutaTemporal->longitudfr_ru; ?>)
                                                </option>
                                            <?php endforeach; ?> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success" type="submit"><b>GUARDAR</b></button>
                            <button class="btn btn-danger" type="button" onclick="window.location.href='<?php echo base_url('Vehiculos/bddVehi'); ?>'"><b>CANCELAR</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
