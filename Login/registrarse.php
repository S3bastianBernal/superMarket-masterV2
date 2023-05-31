<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

if (isset($_POST["registrarse"])) {
    require_once("RegistroUser.php");

    $register = new RegistroUser();

    $register -> setEmpleadoId(1);
    $register -> setEmail($_POST["email"]);
    $register -> setUsername($_POST["username"]);
    $register -> setPassword($_POST["password"]);

    if($register->checkUser($_POST['email'])){
        echo "<script> alert('Usuario existente!'); document.location='loginRegister.php' </script>";
    } else{
        $register->insertData();
        echo "<script> alert('User creado Satisfactoriamente Satisfactoriamente'); document.location='loginRegister.php' </script>";
    }
  
}

?>