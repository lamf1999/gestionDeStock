<?php
$user="root";
$password="";
$servidor="localhost";
$baseDatos="papel";

$conexionDB = mysqli_connect($servidor,$user,$password,$baseDatos);


if($conexionDB==false){
    echo "No se pudo conectar la base de datos"; 
}
?>