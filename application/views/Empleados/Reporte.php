
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3"></h3>
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
                        <div class="card-title text-center">REPORTE</div>
                    </div>
                    <center>
						<img
							src="<?php echo base_url("assets/img/Epagal.png"); ?>" 
							alt="navbar brand"
							class="navbar-brand"
							height="50"
						/>
					</center>
                    <form action="" id="frm_reporte" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 col-lg-9">
                                    
                                    <div class="form-group form-inline">
                                        <label for="id_rep" class="col-md-3 col-form-label"><b>NÚMERO</b></label>
                                        <div class="col-md-9 p-0">
                                            <input type="number" value="<?php echo $recorrido->id_rep; ?>" style="font-weight: bold; color:red; width: 30%;" class="form-control" id="id_rep" name="id_rep" readonly />
                                        </div>
                                    </div>

                                    <div style="display: flex;">
                                        
                                        <div class="form-group form-inline">
                                            <label for="fecha_rep" class="col-md-3 col-form-label"><b>FECHA</b></label>
                                            <div class="col-md-9 p-0">
                                                <input type="date" value="<?php echo $recorrido->fecha_rep; ?>" style="font-weight: bold; color:red; width: 110%;" class="form-control" id="fecha_rep" name="fecha_rep" readonly />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group form-inline" style = "margin-rigth: 20%;">
                                            <label for="nombre_rep" class="col-md-3 col-form-label"><b>PERSONA</b></label>
                                            <div class="col-md-9 p-0">
                                                <input type="text" style="font-weight: bold; width: 240%; " value="<?php echo $recorrido->nombre_rep; ?>" class="form-control" id="nombre_rep" name="nombre_rep" placeholder="" readonly />
                                            </div>
                                        </div>
                                    </div>

                                    <div style="display: flex;">
                                        
                                        <div class="form-group form-inline">
                                            <label for="conte_rep" class="col-md-3 col-form-label"><b>CONTENEDOR</b></label>
                                            <div class="col-md-9 p-0">
                                                <input type="text" style="font-weight: bold;" value="<?php echo $recorrido->conte_rep; ?>" class="form-control input-full" id="conte_rep" name="conte_rep" placeholder="" readonly />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group form-inline" style="margin-left: 16%;">
                                            <label for="ruta_rep" class="col-md-3 col-form-label"><b>RUTA</b></label>
                                            <div class="col-md-9 p-0">
                                                <input type="text" value="<?php echo $recorrido->ruta_rep; ?>"  style="font-weight: bold; width: 400%;" class="form-control" id="ruta_rep" name="ruta_rep" placeholder="" readonly />
                                            </div>
                                        </div>

                                        <div class="form-group form-inline" style="margin-left: 30%;">
                                            <label for="camion_rep" class="col-md-3 col-form-label"><b>CAMIÓN</b></label>
                                            <div class="col-md-9 p-0">
                                                <input type="text" value="<?php echo $recorrido->camion_rep; ?>" style="font-weight: bold; width: 510%;" class="form-control" id="camion_rep" name="camion_rep" placeholder="" readonly />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-inline">
                                        <label for="descripcion_rep" class="col-md-3 col-form-label"><b>DESCRIPCIÓN</b></label>
                                        <div class="col-md-9 p-0">
                                            <textarea name="descripcion_rep" style="width: 185%;" class="form-control" placeholder="Deje su comentario" readonly><?php echo htmlspecialchars($recorrido->descripcion_rep); ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group form-inline">

                                        <label for="estado_rep" class="col-md-3 col-form-label"><b>ESTADO</b></label>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado_rep" id="flexRadioDefault1" <?php echo ($recorrido->estado_rep === 'on') ? 'checked' : ''; ?> disabled> 
                                            <label class="form-check-label" style="cursor: pointer;" for="flexRadioDefault1">
                                                VACÍO
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado_rep" id="flexRadioDefault2" <?php echo ($recorrido->estado_rep === 'MEDIO VACÍO') ? 'checked' : ''; ?> disabled>
                                            <label class="form-check-label" style="cursor: pointer;" for="flexRadioDefault2">
                                                MEDIO VACÍO
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado_rep" id="flexRadioDefault3" <?php echo ($recorrido->estado_rep === 'MEDIO LLENO') ? 'checked' : ''; ?> disabled>
                                            <label class="form-check-label" style="cursor: pointer;" for="flexRadioDefault3">
                                                MEDIO LLENO
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado_rep" id="flexRadioDefault4" <?php echo ($recorrido->estado_rep === 'LLENO') ? 'checked' : ''; ?> disabled>
                                            <label class="form-check-label" style="cursor: pointer;" for="flexRadioDefault4">
                                                LLENO
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Mapa -->

                                    <br>
                                    <hr style="width:135%;">
                                    <h1 style="margin-left: 45%; font-family: cambria;">UBICACIÓN DE LA RUTA REALIZADA</h1>
                                    <br>
                                    <div id="mapa-repG" style="border: 2px dashed black; height:300px; width:135%; margin-top:10px;  border-radius:20px;">
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-action text-center">
                            <a type="button" class="btn btn-warning" href="<?php echo site_url(); ?>/Empleados/reporteContenedor"><b>REGRESAR</b></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function initMap() {

        //Crear el mapa en el cruadrito que le establecimos en el html

        var coordenadaMapG = new google.maps.LatLng(<?php echo $recorrido->latitudcr_ru; ?>, <?php echo $recorrido->longitudcr_ru; ?>);
        var coordenadaMapG2 = new google.maps.LatLng(<?php echo $recorrido->latitudfr_ru; ?>, <?php echo $recorrido->longitudfr_ru; ?>);
        var coordenadaMapG3 = new google.maps.LatLng(<?php echo $recorrido->latitud_co; ?>, <?php echo $recorrido->longitud_co; ?>);


        var mapaG = new google.maps.Map(
            document.getElementById('mapa-repG'), {
                center: coordenadaMapG, coordenadaMapG2, coordenadaMapG3,
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );
        var marcador = new google.maps.Marker({
            position: coordenadaMapG2,
            map: mapaG,
            title: 'Ruta # <?php echo $recorrido->ruta_rep; ?>, FINALIZACIÓN DE LA RUTA',
            icon: '<?php echo base_url("assets/img/rut.png"); ?>'


        });
        var marcador2 = new google.maps.Marker({
            position: coordenadaMapG,
            map: mapaG,
            title: 'Ruta # <?php echo $recorrido->ruta_rep; ?>, COMIENZO DE LA RUTA',
            icon: '<?php echo base_url("assets/img/rut.png"); ?>'


        });
        var marcador3 = new google.maps.Marker({
            position: coordenadaMapG3,
            map: mapaG,
            title: 'Contenedor # <?php echo $recorrido->conte_rep; ?>, SE ENCUENTRA AQUÍ',
            icon: '<?php echo base_url("assets/img/contenedor.png"); ?>'


        });

    }
</script>