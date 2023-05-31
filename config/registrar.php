<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
if (isset($_POST['guardar'])) {
    require_once("config.php");

    $categoria = new Categoria();

    $categoria-> setNombre($_POST['nombre']);
    $categoria-> setDescripcion($_POST['descripcion']);
    $categoria->setImagen($_POST["imagen"]);

    $categoria-> insertData();

    echo "<script>alert('Los datos fueron guardados satisfactoriamente');document.location='../categoria/index.php'</script>";
}
if (isset($_POST['guardarProducto'])) {
    require_once("config.php");

    $producto = new Producto();

    $producto-> setcategoriaId($_POST['categoriaId']);
    $producto-> setNombre($_POST['nombre']);
    $producto-> setStock($_POST['stock']);
    $producto-> setUnidadesPedidas($_POST['unidadesPedidas']);
    $producto-> setProveedorId($_POST['proveedorId']);
    $producto-> setDescontinuado($_POST['descontinuado']);
    $producto-> setPrecioUnitario($_POST['precioUnitario']);

    $producto-> insertData();

    echo "<script>alert('Los datos fueron guardados satisfactoriamente');document.location='../categoria/index.php'</script>";
}
if (isset($_POST['guardarClientes'])) {
    require_once("config.php");

    $cliente = new Cliente();

    $cliente-> setCelular($_POST['celular']);
    $cliente-> setCompañia($_POST['compañia']);

    $cliente-> insertData();

    echo "<script>alert('Los datos fueron guardados satisfactoriamente');document.location='../categoria/index.php'</script>";
}
if (isset($_POST['guardarEmpleados'])) {
    require_once("config.php");

    $cliente = new Empleado();

    $cliente-> setNombre($_POST['nombre']);
    $cliente-> setCelular($_POST['celular']);
    $cliente-> setDireccion($_POST['direccion']);

    $cliente-> insertData();

    echo "<script>alert('Los datos fueron guardados satisfactoriamente');document.location='../categoria/index.php'</script>";
}
if (isset($_POST['guardarFacturas'])) {
    require_once("config.php");

    $factura = new Factura();

    $factura-> setEmpleadoId($_POST['empleadoId']);
    $factura-> setClienteId($_POST['clienteId']);
    $factura-> setFecha($_POST['fecha']);

    $factura-> insertData();

    echo "<script>alert('Los datos fueron guardados satisfactoriamente');document.location='../categoria/index.php'</script>";
}
if (isset($_POST['guardarProveedor'])) {
    require_once("config.php");

    $factura = new Proveedor();

    $factura-> setNombre($_POST['nombre']);
    $factura-> setTelefono($_POST['telefono']);
    $factura-> setCiudad($_POST['ciudad']);

    $factura-> insertData();

    echo "<script>alert('Los datos fueron guardados satisfactoriamente');document.location='../categoria/index.php'</script>";
}
?>