<?php
require_once("../config/config.php");

$record = new Categoria();

if (isset($_GET['id']) && isset($_GET['req'])) {
    if ($_GET['req']=="delete") {
        $record -> setCategoriaId($_GET['id']);
        $record -> delete();
        echo "<script>alert('Datos borrados exitosamente');document.location='index.php'</script>";
    }
}
?>