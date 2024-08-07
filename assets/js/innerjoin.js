$(document).ready(function () {
    $('#conte_rep').change(function () {
        var contenedorId = $(this).val();

        // Si no hay selección, vacía el campo de ruta
        if (contenedorId === '') {
            $('#ruta_rep').val('');
            return;
        }

        // Hacer la solicitud AJAX
        $.ajax({
            url: "<?php echo site_url('/Empleados/ obtenerRuta'); ?>",
            type: 'POST',
            dataType: 'json',
            data: { id_co: contenedorId },
            success: function (data) {
                if (data) {
                    // Rellenar el campo de ruta
                    $('#ruta_rep').val(data.zona_ru);
                } else {
                    $('#ruta_rep').val(''); // Si no se encuentra, vacía el campo
                }
            },
            error: function () {
                // Manejo de errores
                alert('Error al obtener la ruta.');
            }
        });
    });
});