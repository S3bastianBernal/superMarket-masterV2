<?php
require_once("../config/config.php");

$record = new Empleado();

if (isset($_GET['id']) && isset($_GET['req'])) {
    if ($_GET['req']=="delete") {
        $record -> setEmpleadoId($_GET['id']);
        $record -> delete();
        echo "<script>alert('Datos borrados exitosamente');document.location='empleados.php'</script>";
    }
}
?>