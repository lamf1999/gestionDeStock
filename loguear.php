<?php
session_start();
require 'conexion.php.php';
$user = $_POST['usuario'];
$clave = $_POST['clave'];


$query = "SELECT COUNT(*) as contar FROM usuarios where usuario = '$user' and clave = '$clave' ";
$bdconect = mysqli_query($conexionDB,$query);
$parametros = mysqli_fetch_array($bdconect);
if($parametros['contar']>0){
   $_SESSION['username'] = $user;
  header("location: fondomenu.php");
}else {

    echo "<h1>datos incorrectos</h1> <br> ";
    echo "<a href='loginnuevo.html'>Volver</a>"; 
}


?>