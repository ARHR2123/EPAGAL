<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Registro Geográfico de la Ruta # <?php echo $ruta->id_ru; ?> </h3>
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
                    <a href="<?php echo site_url(); ?>/Rutas/bddRu">Base de datos Rutas</a>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div  style="margin-left: 4%;" class="card-title">Mapa de la Ruta Seleccionada</div>
                </div>
                <table class="table table-dark table-striped-columns" style="width: 90%; text-align:center; margin-left: 5%;">
                    <tr>
                        <thead>
                            <th>ZONA: </th>
                            <th>LATITUD COMIENZO: </th>
                            <th>LONGITUD COMIENZO: </th>
                            <th>LATITUD FINALIZACIÓN: </th>
                            <th>LONGITUD FINALIZACIÓN: </th>
                        </thead>
                    </tr>
                    <tr>
                        <tbody>
                            <td><?php echo $ruta->zona_ru; ?></td>

                            <td><?php echo $ruta->latitudcr_ru; ?></td>

                            <td><?php echo $ruta->longitudcr_ru; ?></td>

                            <td><?php echo $ruta->latitudfr_ru; ?></td>

                            <td><?php echo $ruta->longitudfr_ru; ?></td>

                        </tbody>

                    </tr>
                </table>

                <!-- Ingresar El mapa -->
                <br>
                <hr>
                <br>
                <div id="mapa-ruG" style="border: 2px dashed black; height:450px; width:90%; margin-top:10px; margin-left: 5%; border-radius:20px;"></div>
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

        var coordenadaMapG = new google.maps.LatLng(<?php echo $ruta->latitudcr_ru; ?>, <?php echo $ruta->longitudcr_ru; ?>);
        var coordenadaMapG2 = new google.maps.LatLng(<?php echo $ruta->latitudfr_ru; ?>, <?php echo $ruta->longitudfr_ru; ?>);

        var mapaG = new google.maps.Map(
            document.getElementById('mapa-ruG'), {
                center: coordenadaMapG, coordenadaMapG2,
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );
        var marcador = new google.maps.Marker({
            position: coordenadaMapG2,
            map: mapaG,
            title: 'Ruta # <?php echo $ruta->id_ru; ?>, FINALIZACIÓN DE LA RUTA',
            icon: '<?php echo base_url("assets/img/llegada.png"); ?>'


        });
        var marcador2 = new google.maps.Marker({
            position: coordenadaMapG,
            map: mapaG,
            title: 'Ruta # <?php echo $ruta->id_ru; ?>, COMIENZO DE LA RUTA',
            icon: '<?php echo base_url("assets/img/car.png"); ?>'


        });

    }
</script>