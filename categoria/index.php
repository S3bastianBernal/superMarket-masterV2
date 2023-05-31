<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
require_once("../config/config.php");

$data = new Categoria();
$all = $data->selectAll();

$imagenPath = "../img/";
//uso scandir para obtener la lista de archivos en la carpeta de imágenes y me  devuelve un array con el nombre de los archivos encontrados
$imagenes = scandir($imagenPath); 
// uso el array_filter() para filtrar la lista de archivos y eliminar los archivos ocultos (.) y (..)
$imagenes = array_filter($imagenes, function ($item) {
    return !in_array($item, ['.', '..']);
});

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Campers</title>
  <link rel="icon" type="images/png" href="/images/logo campus-ai.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/profesores.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,800;1,400&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="d-flex " style="width: 20%;">
    <div id="div2">
      <!-- menu -->
      <div class="">
        <ul class="navbar-nav  mb-2 mb-lg-0 d-flex justify-content-start ">
          <li class="nav-item  d-flex gap-3 " style="display:flex; align-items: center;">
            <i class="bi bi-person-square text-white"></i>
            <a class="nav-link active texcolor3" aria-current="page" href="index.php" style="cursor:pointer;">Listar Categoria</a>
          </li>
          <li class="nav-item  d-flex gap-3 " style="display:flex; align-items: center;">
            <i class="bi bi-journal-plus text-white"></i>
            <a class="nav-link texcolor3" type="submit" data-bs-toggle="modal"
            data-bs-target="#registrarCategoria" href="#" style="cursor:pointer;">Crear Categoria</a>
          </li>
          <li class="nav-item  d-flex gap-3 " style="display:flex; align-items: center;">
            <i class="bi bi-person-square text-white"></i>
            <a class="nav-link active texcolor3" aria-current="page" href="../productos/productos.php" style="cursor:pointer;">Listar Productos</a>
          </li>
          <li class="nav-item  d-flex gap-3 " style="display:flex; align-items: center;">
            <i class="bi bi-journal-plus text-white"></i>
            <a class="nav-link texcolor3" type="submit" data-bs-toggle="modal"
            data-bs-target="#registerCamper" href="#" style="cursor:pointer;">Crear Productos</a>
          </li>
          <li class="nav-item  d-flex gap-3 " style="display:flex; align-items: center;">
            <i class="bi bi-person-square text-white"></i>
            <a class="nav-link active texcolor3" aria-current="page" href=" ../cliente/clientes.php" style="cursor:pointer;">Listar Clientes</a>
          </li>
          <li class="nav-item  d-flex gap-3 " style="display:flex; align-items: center;">
            <i class="bi bi-journal-plus text-white"></i>
            <a class="nav-link texcolor3" type="submit" data-bs-toggle="modal"
            data-bs-target="#registerCamper" href="#" style="cursor:pointer;">Crear Clientes</a>
          </li>
          <li class="nav-item  d-flex gap-3 " style="display:flex; align-items: center;">
            <i class="bi bi-person-square text-white"></i>
            <a class="nav-link active texcolor3" aria-current="page" href="../empleados/empleados.php" style="cursor:pointer;">Listar Empleados</a>
          </li>
          <li class="nav-item  d-flex gap-3 " style="display:flex; align-items: center;">
            <i class="bi bi-journal-plus text-white"></i>
            <a class="nav-link texcolor3" type="submit" data-bs-toggle="modal"
            data-bs-target="#registerCamper" href="#" style="cursor:pointer;">Crear Empleados</a>
          </li>
          <li class="nav-item  d-flex gap-3 " style="display:flex; align-items: center;">
            <i class="bi bi-person-square text-white"></i>
            <a class="nav-link active texcolor3" aria-current="page" href="../facturas/facturas.php" style="cursor:pointer;">Listar Facturas</a>
          </li>
          <li class="nav-item  d-flex gap-3 " style="display:flex; align-items: center;">
            <i class="bi bi-journal-plus text-white"></i>
            <a class="nav-link texcolor3" type="submit" data-bs-toggle="modal"
            data-bs-target="#registerCamper" href="#" style="cursor:pointer;">Crear Facturas</a>
          </li>
          <li class="nav-item  d-flex gap-3 " style="display:flex; align-items: center;">
            <i class="bi bi-person-square text-white"></i>
            <a class="nav-link active texcolor3" aria-current="page" href="../proveedores/proveedores.php" style="cursor:pointer;">Listar Proveedores</a>
          </li>
          <li class="nav-item  d-flex gap-3 " style="display:flex; align-items: center;">
            <i class="bi bi-journal-plus text-white"></i>
            <a class="nav-link texcolor3" type="submit" data-bs-toggle="modal"
            data-bs-target="#registrarProveedor" href="#" style="cursor:pointer;">Crear Proveedor</a>
          </li>

          <li class="nav-item dropdown" style="cursor:pointer;">

          </li>
        </ul>
      </div>
    </div>
  </div> 
  <!-- //////////////////////////////////////Campers Dynamic Table-->
  <div  class="div2 alertaAlerta" style="background-color: #233249;">
    <div class="sub-menu d-flex justify-content-between menu-cuenta " >

      <div class="divcueta border-bottom ">
        <img src="../img/logo.png" alt="" srcset="" class="cuenta2">
        <div class="ps-2">
          <h5 class="texcolor3">SuperMarket</h5>
          <h6 class="texcosize">Bienvenido </h6>
        </div>
      </div>
      <div class="align-items-center d-flex gap-3 margin-rigth">
        <a href=""><i class="bi bi-envelope text-white" style="font-size: 1.5rem; cursor:pointer "></i></a>
        <a href=""><i class="bi bi-bell text-white " style="font-size: 1.5rem; cursor:pointer "></i></a>
        <a href=""><i class="bi bi-person-square text-white" style="font-size: 1.5rem; cursor:pointer "></i></a>
      </div>
    </div>
        <!-- DINAMYC TABLE -->
        <div id="div3" class="conta">
          <table class="table">
            <thead class="menu-busqueda">
                  <tr>
                      <th scope="col">ID</th>
                      <th scope="col">IMAGEN</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">DESCRIPCION</th>
                      <th scope="col">DETALLES</th>
                  </tr>
            </thead>
                  <tbody class="table-group-divider">
                  <?php
                    foreach($all as $key => $value){
                  ?>
                  <tr>
                    <td><?php echo $value['categoriaId']?></td>
                    <td><img src="<?php echo $imagenPath . $value['imagen']; ?>" width="70px" alt=""></td>
                    <td><?php echo $value['nombre']?></td>
                    <td><?php echo $value['descripcion']?></td>
                    <td>
                      <a class="btn btn-danger" href="borrarCategoria.php?id=<?=$value['categoriaId']?>&req=delete">Borrar</a>
                      <a class="btn btn-warning" href="editarCategoria.php?id=<?=$value['categoriaId']?>">Editar</a>
                    </td>
                  </tr>
                  <?php }?>
                  </tbody>
          </table>
        </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="registrarCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header color1">
        <h1 class="modal-title fs-5 headerr" id="exampleModalLabel">Registrar nueva categoria</h1>
      </div>
      <div class="modal-body">
        <form id="formulario" class="row g-3" action="../registrar.php"  method="POST">
          <div class="col-md-12">
            <label for="nombre" class="form-label headerr">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div> 
          <div class="col-md-12">
            <label for="descripcion" class="form-label headerr">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
          </div>
          <div class="mb-1 col-12">
               <!-- ////////foreach para recorrer el array de imágenes y generar las opciones del elemento select//////////-->
                <label for="imagen" class="form-label">Imagen</label>
                <select id="imagen" name="imagen" class="form-control">
                  <?php foreach ($imagenes as $imagen): ?>
                     <!-- ////////dentro de cada iteración (en este caso uso foreach) del bucle, se genera una opción del select con el valor y el nombre de la imagen,luego se verifica si la imagen seleccionada coincide con la imagen actual en el bucle ($val['imagen'] == $imagen) y se agrega el atributo 'selected? a la opción correspondiente//////////-->
                    <option value="<?php echo $imagen; ?>" <?php echo ($value['imagen'] == $imagen) ? 'selected' : ''; ?>><?php echo $imagen; ?></option> <!-- el selected se utiliza en este caso para marcar la opción del elemento select que corresponde a la imagen actual en el bucle -->
                  <?php endforeach; ?>
                </select>
              </div>        
      </div>
      <div class="modal-footer ">
        <input type="submit" class="btn btn-primary" value="guardar" name="guardar"/>
      </div>
    </div>
  </div>
</div>


 
    


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
</body>

</html>