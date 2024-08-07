<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Registro Geográfico del Contenedor # <?php echo $contenedor->id_co; ?></h3>
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
                    <a href="<?php echo site_url(); ?>/Contenedores/bddCo">Base de datos Contenedores</a>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div  style="margin-left: 4%;" class="card-title">Mapa del Contenedor Seleccionado</div>
                </div>
                <table class="table table-dark table-striped-columns" style="width: 90%; text-align:center; margin-left: 5%;">
                    <tr>
                        <thead>
                            <th>IDENTIFICADOR: </th>
                            <th>RUTA: </th>
                            <th>LONGITUD: </th>
                            <th>LATITUD: </th>
                        </thead>
                    </tr>
                    <tr>
                        <tbody>
                            <td><?php echo $contenedor->identificador_co; ?></td>

                            <td><?php echo $contenedor->zona_ru; ?></td>

                            <td><?php echo $contenedor->latitud_co; ?></td>

                            <td><?php echo $contenedor->longitud_co; ?></td>

                        </tbody>

                    </tr>
                </table>

                <!-- Ingresar El mapa -->
                <br>
                <hr>
                <br>
                <div id="mapa-contG" style="border: 2px dashed black; height:450px; width:90%; margin-top:10px; margin-left: 5%; border-radius:20px;"></div>
                <br>
                <hr>
                <br>
            </div>
        </div>
    </div>
</div>

<script>
    function initMap() {

        //Crear el mapa en el cruadrito que le establecimos en el html

        var coordenadaMapG = new google.maps.LatLng(<?php echo $contenedor->latitud_co; ?>, <?php echo $contenedor->longitud_co; ?>);

        var mapaG = new google.maps.Map(
            document.getElementById('mapa-contG'), {
                center: coordenadaMapG,
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );

        var marcador2 = new google.maps.Marker({
            position: coordenadaMapG,
            map: mapaG,
            title: 'Contenedor # <?php echo $contenedor->id_co; ?>, SU POSICIÓN ACTUAL',
            icon: '<?php echo base_url("assets/img/contenedor.png"); ?>'


        });

    }
</script>