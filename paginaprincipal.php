<?php
session_start();
$sesion = $_SESSION['username'];
if(!isset($sesion)){
    header("location: login.php");

}else{

    echo "<h1> BIENVENIDO $sesion </h1><br>";

    echo "<a href='salir.php'>Salir</a>"; 
}

?>