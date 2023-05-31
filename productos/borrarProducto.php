<?php
require_once("../config/config.php");

$record = new Producto();

if (isset($_GET['id']) && isset($_GET['req'])) {
    if ($_GET['req']=="delete") {
        $record -> setProductoId($_GET['id']);
        $record -> delete();
        echo "<script>alert('Datos borrados exitosamente');document.location='productos.php'</script>";
    }
}
?>