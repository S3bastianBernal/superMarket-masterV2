<?php
require_once("../config/config.php");

$record = new Cliente();

if (isset($_GET['id']) && isset($_GET['req'])) {
    if ($_GET['req']=="delete") {
        $record -> setClienteId($_GET['id']);
        $record -> delete();
        echo "<script>alert('Datos borrados exitosamente');document.location='clientes.php'</script>";
    }
}
?>