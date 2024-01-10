// en principal definir 
define('RUTA', '');


<script>
    const ruta = '<?php echo RUTA; ?>';
// ruta para que se eejecute el mendsaje de acuerdo al color correspondiente a la accion 
// verde cunado la accion se ha realizado correctamente y rojo cunado la accion no ha encontrado respuesta positiva
    function message(tipo, mensaje) {
        Snackbar.show({
            text: mensaje,
            pos: 'top-right',
            backgroundColor: tipo == 'success' ? '#079F00' : '#FF0303',
            actionText: 'Cerrar'
        });
    }
</script>
<?php
if (!empty($_GET['pagina'])) {
    $script = $_GET['pagina'] . '.js';
    if (file_exists('assets/js/' . $script)) {
        echo '<script src="'. RUTA . 'assets/js/' . $script .'"></script>';
    }
}else{
    echo '<script src="'. RUTA . 'assets/js/index.js"></script>';
} ?>