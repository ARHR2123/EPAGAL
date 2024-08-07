<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">CONTENEDORES</h3>
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

        <div class="card-body">
            <div class="table-responsive">
                <?php if ($contenedores) : ?>
                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">IDENTIFICADOR</th>
                                <th class="text-center">RUTA</th>
                                <th class="text-center">LONGITUD</th>
                                <th class="text-center">LATITUD</th>
                                <th class="text-center" style="width: 10%">ACCIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($contenedores as $contenedorTemporal) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $contenedorTemporal->id_co; ?></td>
                                    <td class="text-center"><?php echo $contenedorTemporal->identificador_co; ?></td>
                                    <td class="text-center"><?php echo $contenedorTemporal->zona_ru; ?></td>
                                    <td class="text-center"><?php echo $contenedorTemporal->latitud_co; ?></td>
                                    <td class="text-center"><?php echo $contenedorTemporal->longitud_co; ?></td>

                                    <td>
                                        <div class="form-button-action">
                                            <a href="<?php echo site_url('Contenedores/ubicacion'); ?>/<?php echo $contenedorTemporal->id_co; ?>"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY5JgyOFd9qxUjphddw5AMTX_M4iiTQJrIWA&s" alt="" width="20px" title="VER DIRECCIÓN"></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <h3 style="color:red; text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                        No existe información de CONTENEDORES regitradas. Por ende no podemos generar el reporte General de Contenedores.
                    </h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<br>

<div id="mapa-general-contenedores" style="border: 2px dashed black; height:550px; width:98%; margin-top:10px; margin-left:1%; border-radius:20px;">

</div>
<br>
<hr>
<br>

<script>
    function initMap() {

        //Crear el mapa en el cruadrito que le establecimos en el html

        var coordenadaCentral = new google.maps.LatLng(-0.9362057237599363, -78.60850934769222);
        var mapaG = new google.maps.Map(
            document.getElementById('mapa-general-contenedores'), {
                center: coordenadaCentral,
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );

        // Listado de todos los registros

        <?php foreach ($contenedores as $contenedor) : ?>
            var coordenadaMapG = new google.maps.LatLng(<?php echo $contenedor->latitud_co; ?>, <?php echo $contenedor->longitud_co; ?>);

            var marcador = new google.maps.Marker({
                position: coordenadaMapG,
                map: mapaG,
                title: 'Contenedor # <?php echo $contenedor->id_co; ?>, SU POSICIÓN ACTUAL',
                icon: '<?php echo base_url("assets/img/rut.png"); ?>'
            });

        <?php endforeach; ?>

    }
</script>