<?php
    ini_set("display_errors", 1);

    ini_set("display_startup_errors", 1);

    error_reporting(E_ALL);

    session_start();
    
    if($_POST['Logearse']){
        require_once("LoginUser.php");
        $credenciales = new LoginUser();
        $credenciales->setEmail($_POST['email']);
        $credenciales->setPassword($_POST['password']);

        $login = $credenciales->login();

        if($login){
            header('Location:../categoria/index.php');
        } else {
            echo "<script> alert('Password o Email Invalidos!'); document.location='loginRegister.php' </script>";
        }
    }
?>