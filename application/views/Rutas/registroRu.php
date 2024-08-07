
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Ingreso de Rutas</h3>
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
                    <a href="<?php echo site_url(); ?>/Rutas/registroRu">Formulario</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url(); ?>/Rutas/bddRu">Base de Datos Rutas</a>
                </li>
            </ul>
        </div>
        <div class="row" style="margin-left:18%;">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">RUTAS</div>
                    </div>
                    <form action="<?php echo site_url('Rutas/guardarDatos'); ?>" id="frm_registrar_ruta" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 col-lg-9">
                                    <div class="form-group">
                                        <label for=""><b>ZONA</b></label>
                                        <select class="form-select" name="zona_ru" id="zona_ru">
                                            <option selected>-- SELECCIONE --</option>
                                            <option value="Rural">Rural</option>
                                            <option value="Urbana">Urbana</option>
                                            <option value="...">...</option>
                                            <option value="..">...</option>
                                        </select>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label for="" class="col-md-3 col-form-label"><b>COMIENZO DE LA RUTA</b></label>
                                        <div class="col-md-9 p-0">
                                            <input type="number" name="latitudcr_ru" class="form-control input-full" id="latitudcr_ru" readonly placeholder="LATITUD" />
                                            <br>
                                            <input type="number" name="longitudcr_ru" class="form-control input-full" id="longitudcr_ru" readonly placeholder="LONGITUD" />
                                        </div>

                                        <!-- Abrir Mapa -->
                                        <button type="button" style="margin-left: 85%;" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <b>SELECCIONE EL MAPA</b>
                                        </button>

                                        <label for="" class="col-md-3 col-form-label"><b>FINALIZACIÓN DE LA RUTA</b></label>
                                        <div style="display:flex">
                                            <div class="col-md-9 p-0">
                                                <input type="number" name="latitudfr_ru" class="form-control input-full" id="latitudfr_ru" readonly placeholder="LATITUD" />
                                                <br>
                                                <input type="number" name="longitudfr_ru" class="form-control input-full" id="longitudfr_ru" readonly placeholder="LONGITUD" />
                                            </div>
                                            
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

                                                    <div id="mapa-ruta" style="border: 2px dashed black; height:550px; width:100%; margin-top:10px; border-radius:20px;">

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
                            <button type="submit"  class="btn btn-success"><b>GUARDAR</b></button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-danger" type="reset" ><b>CANCELAR</b></button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <br>
                            <br>
                            <a class="btn btn-warning"  href="<?php echo site_url(); ?>/Rutas/bddRu"><b>BASE DE DATOS</b></a>
                        </div>
                    </form>
                </div>
            </div>      
        </div>
    </div>
</div>

<br><br>

<script>

    function initMap(){

        //Crear el mapa en el cruadrito que le establecimos en el html

        var coordenadaCentral=new google.maps.LatLng(-0.9362057237599363, -78.60850934769222);
        var mapa1=new google.maps.Map(
            document.getElementById('mapa-ruta'),
            {
                center:coordenadaCentral,
                zoom:16,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            }
        );
        var marcador=new google.maps.Marker({
            position:coordenadaCentral,
            map:mapa1,
            title:'FINALIZACIÓN DE LA RUTA',
            draggable:true,
            icon: '<?php echo base_url("assets/img/rut.png"); ?>'


        });
        var marcador2=new google.maps.Marker({
            position:coordenadaCentral,
            map:mapa1,
            title:'COMIENZO DE LA RUTA',
            draggable:true,
            icon: '<?php echo base_url("assets/img/rut.png"); ?>'


        });

        // Para identificar la latitud y longitud, dependiendo el arrastre del marcador

        google.maps.event.addListener(
            marcador2,
            'dragend',
            function(event){
                var latitud=this.getPosition().lat();
                var longitud=this.getPosition().lng();

                document.getElementById('latitudcr_ru').value=latitud;
                document.getElementById('longitudcr_ru').value=longitud;
            }
        );
        google.maps.event.addListener(
            marcador,
            'dragend',
            function(event){
                var latitud=this.getPosition().lat();
                var longitud=this.getPosition().lng();

                document.getElementById('latitudfr_ru').value=latitud;
                document.getElementById('longitudfr_ru').value=longitud;
            }
        );

    }

</script>