<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">RUTAS</h3>
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

        <div class="card-body">
            <div class="table-responsive">
                <?php if ($rutas) : ?>
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
                            <?php foreach ($rutas as $rutaTemporal) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $rutaTemporal->id_ru; ?></td>
                                    <td class="text-center"><?php echo $rutaTemporal->zona_ru; ?></td>
                                    <td class="text-center"><?php echo $rutaTemporal->latitudcr_ru; ?></td>
                                    <td class="text-center"><?php echo $rutaTemporal->longitudcr_ru; ?></td>
                                    <td class="text-center"><?php echo $rutaTemporal->latitudfr_ru; ?></td>
                                    <td class="text-center"><?php echo $rutaTemporal->longitudfr_ru; ?></td>

                                    <td>
                                        <div class="form-button-action">
                                            <a href="<?php echo site_url('Rutas/ubicacion'); ?>/<?php echo $rutaTemporal->id_ru; ?>"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY5JgyOFd9qxUjphddw5AMTX_M4iiTQJrIWA&s" alt="" width="20px" title="VER DIRECCIÓN"></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <h3 style="color:red; text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                        No existe información de RUTAS regitradas. Por ende no podemos generar el reporte General de Rutas.
                    </h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<br>

<div id="mapa-general-rutas" style="border: 2px dashed black; height:550px; width:98%; margin-top:10px; margin-left:1%; border-radius:20px;">

</div>
<br>
<hr>
<br>

<script>
    function initMap() {

        //Crear el mapa en el cruadrito que le establecimos en el html

        var coordenadaCentral = new google.maps.LatLng(-0.9362057237599363, -78.60850934769222);
        var mapaG = new google.maps.Map(
            document.getElementById('mapa-general-rutas'), {
                center: coordenadaCentral,
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );

        // Listado de todos los registros

        <?php foreach ($rutas as $ruta) : ?>
            var coordenadaMapG = new google.maps.LatLng(<?php echo $ruta->latitudcr_ru; ?>, <?php echo $ruta->longitudcr_ru; ?>);
            var coordenadaMapG2 = new google.maps.LatLng(<?php echo $ruta->latitudfr_ru; ?>, <?php echo $ruta->longitudfr_ru; ?>);

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
            
        <?php endforeach; ?>

    }
</script>