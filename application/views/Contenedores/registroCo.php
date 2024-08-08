    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Ingreso de Contenedores</h3>
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
                        <a href="<?php echo site_url(); ?>/Contenedores/registroCo">Formulario</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>/Contenedores/bddCo">Base de Datos Contenedores</a>
                    </li>
                </ul>
            </div>
            <div class="row" style="margin-left:18%;">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">CONTENEDORES</div>
                        </div>
                        <form action="<?php echo site_url('Contenedores/guardarDatos'); ?>" id="frm_registrar_contenedor" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5 col-lg-9">

                                        <div class="form-group form-inline">
                                            <label for="" class="col-md-3 col-form-label">
                                                <b>IDENTIFICADOR</b></label>
                                            <div class="col-md-9 p-0">
                                                <input type="text" class="form-control input-full" id="identificador_co" name="identificador_co" placeholder="Ej: Cont001 " required />
                                            </div>
                                        </div>

                                        <div class="form-group form-inline">

                                            <label for="" class="col-md-3 col-form-label">
                                                <b>RUTA</b></label>
                                            <select id="zona_ru" name="zona_ru" class="form-select" aria-label="Default select example">
                                                <option selected>-- SELECCIONE --</option>
                                                <?php foreach ($rutas as $rutaTemporal) : ?>
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

                                        <div class="form-group form-inline">
                                            <label for="" class="col-md-3 col-form-label"><b>POSICIÓN</b></label>
                                            <div class="col-md-9 p-0">
                                                <input type="number" name="latitud_co" class="form-control input-full" id="latitud_co" readonly placeholder="LATITUD" required />
                                                <br>

                                                <!-- Abrir Mapa -->
                                                <button type="button" style="margin-left: 110%;" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <b>SELECCIONE EL MAPA</b>
                                                </button>
                                                <br>
                                                <br>
                                                <input type="number" name="longitud_co" class="form-control input-full" id="longitud_co" readonly placeholder="LONGITUD" required />
                                            </div>


                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family:'Courier New', Courier, monospace;"><b>Seleccione la Ubicación</b></h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <!-- Contenedor del Mapa -->

                                                        <div id="mapa-contenedor" style="border: 2px dashed black; height:550px; width:100%; margin-top:10px; border-radius:20px;">

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><b>GUARDAR</b></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action text-center">
                                <button type="submit" class="btn btn-success"><b>GUARDAR</b></button>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-danger" type="reset"><b>CANCELAR</b></button>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <br>
                                <br>
                                <a class="btn btn-warning" href="<?php echo site_url(); ?>/Contenedores/bddCo"><b>BASE DE DATOS</b></a>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <script>
        function initMap() {

            //Crear el mapa en el cruadrito que le establecimos en el html

            var coordenadaCentral = new google.maps.LatLng(-0.9362057237599363, -78.60850934769222);
            var mapa1 = new google.maps.Map(
                document.getElementById('mapa-contenedor'), {
                    center: coordenadaCentral,
                    zoom: 16,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
            );
            var marcador = new google.maps.Marker({
                position: coordenadaCentral,
                map: mapa1,
                title: 'POSICIÓN DEL CONTENEDOR',
                draggable: true,
                icon: '<?php echo base_url("assets/img/conte.png"); ?>'


            });

            // Para identificar la latitud y longitud, dependiendo el arrastre del marcador

            google.maps.event.addListener(
                marcador,
                'dragend',
                function(event) {
                    var latitud = this.getPosition().lat();
                    var longitud = this.getPosition().lng();

                    document.getElementById('latitud_co').value = latitud;
                    document.getElementById('longitud_co').value = longitud;
                }
            );

        }
    </script>